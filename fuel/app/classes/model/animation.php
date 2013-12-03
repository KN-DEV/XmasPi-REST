<?php

use Orm\Model;

/**
 * Animation model
 * @author Przemysław Płyś <przemyslaw.plys@gmail.com>
 * @version 0.1
 * ---
 * @property int $id  Id of animation
 * @property string $author Animation author
 * @property mysql_timestamp $created_at Timestamp of created row in database
 * @property int $views How many times animation has been shown
 * ---
 * @property \Model_Queue $queue Belongs to queue
 * @property \Model_Animation_Frame[] $frames Has many frames
 * 
 * 
 */
class Model_Animation extends Model {

    protected static $_table_name = 'Animation';
    protected static $_properties = array(
        'id',
        'author' => array(
            'type' => 'varchar',
        ),
        'created_at' => array(
            'type' => 'time_mysql'
        ),
        'views' => array(
            'type' => 'int',
            'default' => 0,
        )
    );
    protected static $_primary_key = array(
        'id',
    );
    protected static $_conditions = array(
        'order_by' => array(
            'id' => 'DESC',
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
    protected static $_has_one = array(
        'queue' => array(
            'key_from' => 'id',
            'model_to' => '\Model_Queue',
            'key_to' => 'animation_id',
            'cascade_save' => true,
            'cascade_delete' => true,
        )
    );
    protected static $_has_many = array(
        'frames' => array(
            'key_from' => 'id',
            'model_to' => '\Model_Animation_Frame',
            'key_to' => 'animation_id',
            'cascade_save' => true,
            'cascade_delete' => true,
        )
    );

}
