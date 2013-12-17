<?php

namespace Fuel\Migrations;

class Create_table_log {

    function up() {
        \DBUtil::create_table('Log', array(
            'id' => array(
                'type' => 'int',
                'constraint' => 11,
                'auto_increment' => true,
            ),
            'animation_id' => array(
                'type' => 'int',
                'constraint' => 11,
            ),
            'created_at' => array(
                'type' => 'timestamp',
                'default' => \DB::expr('CURRENT_TIMESTAMP'),
            ),
                ), array('id'));
    }

    function down() {
        \DBUtil::drop_table('Log');
    }

}
