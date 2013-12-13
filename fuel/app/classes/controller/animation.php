<?php

/**
 * REST controller
 * @author Przemysław Płyś <przemyslaw.plys@gmail.com>
 * @version 0.1
 * @todo Add home view
 * @todo Rewrite code :)
 */
class Controller_Animation extends \Controller_Rest {

    public function before() {
        parent::before();
        $this->format = 'json';
    }

    /**
     * Adds to database new animation
     * @return json
     */
    public function get_add() {

//   if (Input::is_ajax() || \Input::method() == 'POST') {
//   try {
//      \DB::start_transaction();
//            $new_animation = new \Model_Animation();
//            $new_animation->author = \Input::param('author');
//
//            foreach (\Input::param('frames', array()) as $diodes_states) {
//
//
//
//                $new_frame = new \Model_Animation_Frame();
//                $new_frame->diodes_states = $diodes_states;
//                $new_animation->frames[] = $new_frame;
//            }
//            $new_animation->queue = new \Model_Queue();
//            $new_animation->save();
# how many minutes have to wait
//            $offset = 60 * \Model_Queue::query()->where('animation_id', '<=', $new_animation->id)->count();
//      return $this->response(array(\Input::json()));
//                $this->response(
//                        array(
//                            'timestamp' => (
//                            \Date::forge(strtotime($new_animation->created_at) + $offset)->format("%m/%d/%Y %H:%M"))
//                        )
//                );
//                \DB::commit_transaction();
//            } catch (\Exception $e) {
//                \DB::rollback_transaction();
//                $this->response(array('error' => 2));
//            }
//            
//    } else {
        return \Response::forge(\View::forge('add'));
//  }
    }

    public function post_add() {
        $this->format = 'json';

        try {
            $animation = new Model_Animation();
            foreach (\Format::forge(\Input::param('framesArray'), 'json')->to_array() as $key => $value) {
                $frame = new Model_Animation_Frame();

                foreach ($value as $k => $v) {
                    $frame->change_diode_state($k, $v);
                }

                $animation->frames[] = $frame;
            }

            $animation->queue = new \Model_Queue();
            $animation->save(null, true);


            $this->response(array(
                'param' => \Input::param(),
                'queue' => \Model_Queue::query()->where('animation_id', '<=', $animation->id)->count(),
                'animation' => $animation,
                'orginal' => \Input::param('framesArray'),
            ));
        } catch (\Exception $e) {
            $this->response(array(
                'param' => \Input::param(),
                'orginal' => \Input::param('framesArray'),
            ));
        }
    }

    /**
     * Returns animation
     * @return json
     */
    public function get_get() {

        $queue = Model_Queue::query()
                ->order_by('priority', 'DESC')
                ->order_by('id', 'ASC')
                ->related('animation')
                ->order_by('animation.id', 'ASC')
                ->related('animation.frames')
                ->order_by('animation.frames.id', 'ASC')
                ->get_one();

        if ($queue) {
            $animation = $queue->animation;
            $queue->delete();
        } else {
            $animation = \Model_Animation::query()
            ->where('id', (int) rand(1, Model_Animation::count()))
            ->related('frames')
            ->order_by('frames_id', 'ASC')
            ->get_one();
        }

        if ($animation) {

            $fps = array('fps' => $animation->frames_per_second);

            $frames = array();
            foreach ($animation->frames as $frame) {

                $diodes_state = array();
                for ($i = 0; $i <= 39; $i++) {
                    $diodes_state[] = (int) $frame->diodes_state[$i];
                }
                /**
                 * @todo change field
                 */
                $frames[] = $diodes_state;
            }
            $this->response($frames
            );
        } else {
            $this->response(
                    array(
                        'error' => 1
                    )
            );
        }
    }

    public function post_test() {
        $this->format = 'json';

        $this->response(array(\Input::param()));
    }

}
