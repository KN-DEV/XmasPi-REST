<?php

/**
 * REST controller
 * @author Przemysław Płyś <przemyslaw.plys@gmail.com>
 * @version 0.1
 * @todo Add home view
 * @todo Rewrite code :)
 */
class Controller_Animation extends \Fuel\Core\Controller_Rest {

    public function before() {
        parent::before();
        $this->format = 'json';
    }

    /**
     * Adds to database new animation
     * @return json
     */
    public function action_add() {

        if (\Input::method() == 'POST') {
            try {
                \DB::start_transaction();
                $new_animation = new \Model_Animation();
                $new_animation->author = \Input::param('author');

                foreach (\Input::param('frames', array()) as $diodes_states) {
                    $new_frame = new \Model_Animation_Frame();
                    $new_frame->diodes_states = $diodes_states;
                    $new_animation->frames[] = $new_frame;
                }

                $new_animation->queue = new \Model_Queue();
                $new_animation->save();

                # how many minutes have to wait
                $offset = 60 * \Model_Queue::query()->where('animation_id', '<=', $new_animation->id)->count();
                $this->response(
                        array(
                            'timestamp' => (
                            \Date::forge(strtotime($new_animation->created_at) + $offset)->format("%m/%d/%Y %H:%M"))
                        )
                );
                \DB::commit_transaction();
            } catch (\Exception $e) {
                \DB::rollback_transaction();
                $this->response(array('error' => 2));
            }
        } else {
            return \Response::forge(\View::forge('add'));
        }
    }

    /**
     * R
     * @return json
     */
    public function get_random() {

        $animation = \Model_Animation::query()
                ->where('id', rand(0, Model_Animation::count()))
                ->get_one();

        if ($animation) {
            $this->response(
                    array(
                        'animation' => $animation,
                        'frames' => $animation->frames
                    )
            );
        } else {
            $this->response(
                    array(
                        'error' => 1
                    )
            );
        }
    }

    /**
     * 
     * @return type
     */
    public function get_from_queue() {

        $queue = Model_Queue::query()
                ->related('animation')
                ->related('animation.frames')
                ->get_one();


        if ($queue) {
            $this->response(
                    array($queue->animation)
            );
            $queue->delete();
        } else {
            $this->response(
                    array(
                        'error' => 1
                    )
            );
        }
    }

}
