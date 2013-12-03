<?php

namespace Fuel\Migrations;

class Create_table_queue {

    function up() {
        \DBUtil::create_table('Queue', array(
            'id' => array(
                'type' => 'int',
                'constraint' => 11,
                'auto_increment' => true,
            ),
            'animation_id' => array(
                'type' => 'int',
                'constraint' => 11,
            ),
            'priority' => array(
                'type' => 'bool',
                'default' =>0,
            ),
                ), array('id'));
    }

    function down() {
        \DBUtil::drop_table('Queue');
    }

}
