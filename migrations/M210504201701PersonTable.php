<?php

/**
 * Class M210504201701PersonTable
 */
class M210504201701PersonTable extends \yii\db\Migration
{
    public $tableName = '{{%person}}';

    public $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'surname' => $this->string()->notNull(),
            'name' => $this->string()->notNull(),
            'invitation_id' => $this->integer(),
            'key' => $this->string(),
        ], $this->tableOptions);

        $this->addForeignKey(
            'fk-person-invitation_id',
            'person',
            'invitation_id',
            'invitation',
            'id',
            'SET NULL',
            'SET NULL'
        );

        $this->insert($this->tableName,['surname' => 'Цуркан','name' => 'мама и папа', 'invitation_id' => '2']);
        $this->insert($this->tableName,['surname' => 'Цуркан','name' => 'Юлия и Иван', 'invitation_id' => '2']);
        $this->insert($this->tableName,['surname' => 'Цуркан','name' => 'Валентина', 'invitation_id' => '5']);

        $this->insert($this->tableName,['surname' => 'Тяпкины','name' => 'мама и папа', 'invitation_id' => '2']);
        $this->insert($this->tableName,['surname' => 'Тяпкин','name' => 'Александр', 'invitation_id' => '3']);

        $this->insert($this->tableName,['surname' => 'Станишевские','name' => 'Ольга и Сергей', 'invitation_id' => '2']);
        $this->insert($this->tableName,['surname' => 'Станишевский','name' => 'Екатерина', 'invitation_id' => '4']);
        $this->insert($this->tableName,['surname' => 'Станишевский','name' => 'Станислав', 'invitation_id' => '3']);

        $this->insert($this->tableName,['surname' => 'Глинки','name' => 'Мила и Михаил', 'invitation_id' => '2']);
        $this->insert($this->tableName,['surname' => 'Глинки','name' => 'Алла и Вадим', 'invitation_id' => '7']);
        $this->insert($this->tableName,['surname' => 'Воляр','name' => 'Анна, Олег и Артем', 'invitation_id' => '2']);

        $this->insert($this->tableName,['surname' => 'Кабылянские','name' => 'Михаил и Светлана', 'invitation_id' => '2']);
        $this->insert($this->tableName,['surname' => 'Кабылянские','name' => 'Александр и Татьяна', 'invitation_id' => '2']);

        $this->insert($this->tableName,['surname' => 'Плешко','name' => 'Елена', 'invitation_id' => '4']);
        $this->insert($this->tableName,['surname' => 'Руснак','name' => 'Анна', 'invitation_id' => '4']);
        $this->insert($this->tableName,['surname' => 'Ткач','name' => 'Аннастасия', 'invitation_id' => '4']);

        $this->insert($this->tableName,['surname' => 'Плюснины','name' => 'Артем, Айгюль и Мирослава', 'invitation_id' => '2']);
        $this->insert($this->tableName,['surname' => 'Елфимовы','name' => 'Геннадий и Антонина', 'invitation_id' => '7']);
        $this->insert($this->tableName,['surname' => 'Богоявленские','name' => 'Евгений и Аннастасия', 'invitation_id' => '8']);
        $this->insert($this->tableName,['surname' => 'Дудник','name' => 'Александр', 'invitation_id' => '3']);
        $this->insert($this->tableName,['surname' => 'Бусыгина','name' => 'Ярослава', 'invitation_id' => '4']);
        $this->insert($this->tableName,['surname' => 'Аненков','name' => 'Андрей', 'invitation_id' => '3']);
        $this->insert($this->tableName,['surname' => 'Грушеватая','name' => 'Ирина и Денис', 'invitation_id' => '2']);

        $this->insert($this->tableName,['surname' => 'Козловские','name' => 'Эмма и Борис', 'invitation_id' => '2']);
        $this->insert($this->tableName,['surname' => 'Гавриленко','name' => 'Галина', 'invitation_id' => '5']);
        $this->insert($this->tableName,['surname' => 'Войт','name' => 'Алена и Виталий', 'invitation_id' => '2']);
        $this->insert($this->tableName,['surname' => 'Чапские','name' => 'Владимир и Стефания', 'invitation_id' => '2']);
        $this->insert($this->tableName,['surname' => 'Деущаки','name' => 'Валентина и Геннадий', 'invitation_id' => '2']);
        $this->insert($this->tableName,['surname' => 'Репянчук','name' => 'Анна и Константин', 'invitation_id' => '7']);
        $this->insert($this->tableName,['surname' => 'Сандрачук','name' => 'Яна', 'invitation_id' => '4']);

        $this->insert($this->tableName,['surname' => 'Драбашевская','name' => 'Инна', 'invitation_id' => '5']);

        $this->insert($this->tableName,['surname' => 'Саввина','name' => 'Людмила Ивановна', 'invitation_id' => '5']);
        $this->insert($this->tableName,['surname' => 'Саввины','name' => 'Марина и Владимир', 'invitation_id' => '2']);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable($this->tableName);
    }
}
