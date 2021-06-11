<?php

use app\models\Entity\Person;

/**
 * Class M210504201703AddStatus
 */
class M210611100400AddNewPerson extends \yii\db\Migration
{

    /**
     * @return bool|void
     * @throws \yii\base\Exception
     */
    public function safeUp()
    {
        $this->insert($this->tableName, ['surname' => 'Макушинские', 'name' => 'Владимир и Светлана', 'invitation_id' => '2', 'key' => md5('Макушинские Владимир и Светлана')]);
        $this->insert($this->tableName, ['surname' => 'Цуркан', 'name' => 'Вася', 'invitation_id' => '3', 'key' => md5('Цуркан Вася')]);
//       ---------------------------------------------------------------------------------------------------

        $this->insert($this->tableName, ['surname' => 'Ковальчук', 'name' => 'Артур и Настя', 'invitation_id' => '2', 'key' => md5('Ковальчук Артур и Настя')]);
        $this->insert($this->tableName, ['surname' => 'Зух', 'name' => 'Татьяна и Вячаслав', 'invitation_id' => '2', 'key' => md5('Зух Татьяна и Вячаслав')]);
        $this->insert($this->tableName, ['surname' => 'Самойловы', 'name' => 'Яша и Алена', 'invitation_id' => '2', 'key' => md5('Самойловы Яша и Алена')]);
        $this->insert($this->tableName, ['surname' => 'Драбашевские', 'name' => 'Галина и Владимир', 'invitation_id' => '2', 'key' => md5('Драбашевские Галина и Владимир')]);

        $this->insert($this->tableName, ['surname' => 'Аулов', 'name' => 'Павел', 'invitation_id' => '3', 'key' => md5('Аулов Павел')]);
        $this->insert($this->tableName, ['surname' => 'Мальчук', 'name' => 'Владислав', 'invitation_id' => '3', 'key' => md5('Мальчук Владислав')]);
        $this->insert($this->tableName, ['surname' => 'Гребенюк', 'name' => 'Дмитрий', 'invitation_id' => '3', 'key' => md5('Гребенюк Дмитрий')]);
        $this->insert($this->tableName, ['surname' => 'Саввин', 'name' => 'Геннадий', 'invitation_id' => '3', 'key' => md5('Саввин Геннадий')]);
        $this->insert($this->tableName, ['surname' => 'Пацановский', 'name' => 'Артур', 'invitation_id' => '3', 'key' => md5('Пацановский Артур')]);

        $this->insert($this->tableName, ['surname' => 'Дьякова', 'name' => 'Татьяна', 'invitation_id' => '4', 'key' => md5('Дьякова Татьяна')]);
        $this->insert($this->tableName, ['surname' => 'Цуркан', 'name' => 'Клавдия', 'invitation_id' => '4', 'key' => md5('Дьякова Татьяна')]);

        $this->addColumn('person', 'count', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('person', 'count');
    }
}
