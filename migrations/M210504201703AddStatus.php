<?php

use app\models\Entity\Person;

/**
 * Class M210504201703AddStatus
 */
class M210504201703AddStatus extends \yii\db\Migration
{

    /**
     * @return bool|void
     * @throws \yii\base\Exception
     */
    public function safeUp()
    {
        $this->addColumn('person','status',$this->boolean());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('person','status');
    }
}
