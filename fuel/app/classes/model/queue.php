<?php

use Orm\Model;

/**
 * Queue model
 * @author Przemysław Płyś <przemyslaw.plys@gmail.com>
 * @version 0.1
 * ---
 * @property int $id Id of queue
 * @property int $animation_id  Id of animation
 * ---
 * @property \Model_Animation $animation Has one animation
 * 
 * 
 */
class Model_Queue extends Model {

    const PRIORITY_HIGH = true;
    const PRIORITY_LOW = false;

    protected static $_table_name = 'Queue';
    protected static $_properties = array(
        'id',
        'animation_id' => array(
            'type' => 'int',
        ),
        'priority' => array(
            'type' => 'bool',
            'default' => self::PRIORITY_LOW,
        )
    );
    protected static $_primary_key = array(
        'id',
    );
    protected static $_conditions = array(
        'order_by' => array(
            'priority' => 'DESC',
            'id' => 'ASC',
        ),
    );
    protected static $_observers = array(
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
            'cascade_delete' => false,
        )
    );

}
