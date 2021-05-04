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

    public function getInvitation()
    {
        return $this->hasOne(Invitation::class, ['id' => 'invitation_id']);
    }
}