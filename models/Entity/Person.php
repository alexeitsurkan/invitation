<?php namespace app\models\Entity;

use yii\db\ActiveRecord;

/**
 * Class Person
 * @package app\models\Entity
 * @property $id
 * @property $surname
 * @property $name
 * @property $invitation_id
 * @property $key
 * @property-read Invitation $invitation
 */
class Person extends ActiveRecord
{

    const STATUS_NULL = null;
    const STATUS_YES = 1;
    const STATUS_NO = 0;

    public function getInvitation()
    {
        return $this->hasOne(Invitation::class, ['id' => 'invitation_id']);
    }
}