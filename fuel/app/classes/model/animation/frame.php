<?php

use Orm\Model;

/**
 * Animation frame
 * @author Przemysław Płyś <przemyslaw.plys@gmail.com>
 * @version 0.1
 * ---
 * @property int $id Id of animation frame
 * @property int $animation_id Id of animation
 * @property string[40] $diodes_states Array of 40 diodes states
 * @property int $iterations How many times should frame be repeted
 * ---
 * @property \Model_Animation $animation Belongs to animation
 */
class Model_Animation_Frame extends Model {

    const DIODE_STATE_HIGH = true;
    const DIODE_STATE_LOW = false;

    protected static $_table_name = 'Animation_Frame';
    protected static $_properties = array(
        'id',
        'animation_id' => array(
            'type' => 'int',
        ),
        'diodes_states' => array(
            'type' => 'string',
            'default' => '1111111111111111111111111111111111111111',
        ),
        'iterations' => array(
            'type' => 'int',
            'default' => 1,
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
    protected static $_belongs_to = array(
        'animation' => array(
            'key_from' => 'animation_id',
            'model_to' => '\Model_Animation',
            'key_to' => 'id',
            'cascade_save' => true,
            'cascade_delete' => false,
        )
    );

    /**
     * 
     * @param int $diode_id
     * @param bool $state
     */
    public function change_diode_state($diode_id, $state) {
        $this->diodes_states[$diode_id] = $state;
    }

}
