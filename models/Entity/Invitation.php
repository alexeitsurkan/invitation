<?php namespace app\models\Entity;

use yii\db\ActiveRecord;

/**
 * Class Invitation
 * @package app\models\Entity
 * @property $id
 * @property $name
 * @property $text
 */
class Invitation extends ActiveRecord
{
    public function getInvitation()
    {
        return $this->hasMany(Person::class, ['invitation_id' => 'id']);
    }
}