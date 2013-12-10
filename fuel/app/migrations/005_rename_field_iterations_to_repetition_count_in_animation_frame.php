<?php

namespace Fuel\Migrations;

class Rename_field_iterations_to_repetition_count_in_animation_frame {

    public function up() {
        \DBUtil::modify_fields('Animation_Frame', array(
            'iterations' => array(
                'name' => 'repetition_count',
                'type' => 'int',
                'constraint' => 11,
                'default' => 1,
            )
        ));
    }

    public function down() {
        \DBUtil::modify_fields('Animation_Frame', array(
            'repetition_count' => array(
                'name' => 'iterations',
                'type' => 'int',
                'constraint' => 11,
                'default' => 1,
            )
        ));
    }

}
