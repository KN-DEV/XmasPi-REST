<?php

namespace Fuel\Migrations;

class Add_frames_per_second_to_animation {

    public function up() {
        \DBUtil::add_fields('Animation', array(
            'frames_per_second' => array(
                'constraint' => 2,
                'type' => 'int',
                'default' => 24,
            ),
        ));
    }

    public function down() {
        \DBUtil::drop_fields('Animation', array(
            'frames_per_second'
        ));
    }

}
