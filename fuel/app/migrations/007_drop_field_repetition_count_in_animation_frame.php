<?php

namespace Fuel\Migrations;

class Drop_field_repetition_count_in_animation_frame {

    function up() {
        \DBUtil::drop_fields('Animation_Frame', 'repetition_count');
    }

    function down() {
        
    }

}
