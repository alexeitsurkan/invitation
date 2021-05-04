<?php

use app\models\Entity\Person;

/**
 * Class M210504201702CreateKey
 */
class M210504201702CreateKey extends \yii\db\Migration
{

    /**
     * @return bool|void
     * @throws \yii\base\Exception
     */
    public function safeUp()
    {
        $persons = Person::find()->all();
        foreach ($persons as $person){
            $password = $person['name'].$person['surname'];
            $person->key = md5($password);
            $person->save();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

    }
}
