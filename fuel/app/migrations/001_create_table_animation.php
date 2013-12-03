<?php

namespace Fuel\Migrations;

class Create_table_animation {

    function up() {
        \DBUtil::create_table('Animation', array(
            'id' => array(
                'type' => 'int',
                'constraint' => 11,
                'auto_increment' => true,
            ),
            'author' => array(
                'type' => 'varchar',
                'constraint' => 255,
                'null' => true,
            ),
            'created_at' => array(
                'type' => 'timestamp',
                'default' => \DB::expr('CURRENT_TIMESTAMP'),
            ),
            'views' => array(
                'type' => 'int',
                'constraint' => 11,
                'default' => 0,
            )
                ), array('id'));
    }

    function down() {
        \DBUtil::drop_table('Animation');
    }

}
