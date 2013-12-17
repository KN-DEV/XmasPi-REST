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

    public function post_add() {
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
                'queue' => \Model_Queue::query()
                        ->where('animation_id', '<=', $animation->id)
                        ->count(),
            ));
        } catch (\Exception $e) {
            $this->response(array(
                'queue' => null,
            ));
        }
    }

    /**
     * Returns animation
     * @return json
     */
    public function get_get($animation_id = null) {

        if (is_null($animation_id)) {
            $queue = Model_Queue::query()
                    ->order_by('priority', 'DESC')
                    ->order_by('id', 'ASC')
                    ->related('animation')
                    ->order_by('animation.id', 'ASC')
                    ->get_one();
            if ($queue) {
                $animation_id = $queue->animation;
                $queue->delete();
            }
        }

        $animation = \Model_Animation::query()
                ->where('id', !is_null($animation_id) ? (int) $animation_id : (int) rand(1, Model_Animation::count()))
                ->related('frames')
                ->order_by('frames.id', 'ASC')
                ->get_one();


        if ($animation) {
            $frames = array();
            foreach ($animation->frames as $frame) {

                $diodes_state = array();
                for ($i = 0; $i <= 39; $i++) {
                    $diodes_state[] = (int) $frame->diodes_state[$i];
                }
                $frames[] = $diodes_state;
            }


            $animation->logs[] = new \Model_Log();
            $animation->save();
            $this->response($frames);
        } else {
            $this->response(
                    array(
                        'error' => 1
                    )
            );
        }
    }

}
