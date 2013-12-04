<?php

namespace Fuel\Migrations;

class Create_table_animation_frame {

    function up() {
        \DBUtil::create_table('Animation_Frame', array(
            'id' => array(
                'type' => 'int',
                'constraint' => 11,
                'auto_increment' => true,
            ),
            'animation_id' => array(
                'type' => 'int',
                'constraint' => 11,
            ),
            'diodes_state' => array(
                'type' => 'char',
                'constraint' => 40,
                'default' => '1111111111111111111111111111111111111111',
            ),
            'iterations' => array(
                'type' => 'int',
                'constraint' => 11,
                'default' => 1,
            )
                ), array('id'));
    }

    function down() {
        \DBUtil::drop_table('Animation_Frame');
    }

}
