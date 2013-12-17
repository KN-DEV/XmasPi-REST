<?php

use Orm\Model;

/**
 * Animation frame
 * @author Przemysław Płyś <przemyslaw.plys@gmail.com>
 * @version 0.1
 * ---
 * @property int $id Id of animation frame
 * @property int $animation_id Id of animation
 * @property string[40] $diodes_state Array of 40 diodes states
 * @property int $repetition_count How many times should frame be repeted
 * ---
 * @property \Model_Animation $animation Belongs to animation
 */
class Model_Animation_Frame extends Model {

    const DIODE_STATE_HIGH = true;
    const DIODE_STATE_LOW = false;

    protected static $_table_name = 'Animation_Frame';
    protected static $_properties = array(
        'id' => array(
            'data_type' => 'int',
        ),
        'animation_id' => array(
            'data_type' => 'int',
            'null' => false,
        ),
        'diodes_state' => array(
            'data_type' => 'varchar',
            'default' => '1111111111111111111111111111111111111111',
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
    protected static $_belongs_to = array(
        'animation' => array(
            'key_from' => 'animation_id',
            'model_to' => '\Model_Animation',
            'key_to' => 'id',
            'cascade_save' => true,
            'cascade_delete' => false,
        )
    );
    protected static $_observers = array(
        'Orm\\Observer_Typing' => array(
            'events' => array(
                'before_save',
                'after_save',
                'after_load',
            )
    ));

    /**
     * 
     * @param int $diode_id
     * @param bool $state
     */
    public function change_diode_state($diode_id, $state) {
        $this->diodes_state[$diode_id] = $state;
    }

}
