<?php

namespace Fuel\Migrations;

class Drop_field_views_in_animation {

    function up() {
        \DBUtil::drop_fields('Animation', 'author');
    }

    function down() {
        
    }

}