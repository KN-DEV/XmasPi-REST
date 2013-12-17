<?php

use Orm\Model;

/**
 * Animation model
 * @author Przemysław Płyś <przemyslaw.plys@gmail.com>
 * @version 0.1 * 
 */
class Model_Log extends Model {

    protected static $_table_name = 'Log';
    protected static $_properties = array(
        'id' => array(
            'data_type' => 'int',
        ),
        'animation_id' => array(
            'data_type' => 'int',
        ),
        'created_at' => array(
            'data_type' => 'time_mysql',
        ),
    );
    protected static $_primary_key = array(
        'id',
    );
    protected static $_conditions = array(
        'order_by' => array(
            'id' => 'ASC',
        ),
    );
    protected static $_observers = array(
        'Orm\\Observer_CreatedAt' => array(
            'events' => array(
                'before_insert'
            ),
            'mysql_timestamp' => true,
            'property' => 'created_at',
            'overwrite' => true,
        ),
        'Orm\\Observer_Typing' => array(
            'events' => array(
                'before_save',
                'after_save',
                'after_load',
            ),
        ),
    );
    protected static $_belongs_to = array(
        'animation' => array(
            'key_from' => 'animation_id',
            'model_to' => '\Model_Animation',
            'key_to' => 'id',
            'cascade_save' => true,
            'cascade_delete' => true,
        )
    );

}
