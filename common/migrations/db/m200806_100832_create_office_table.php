<?php

use yii\db\Migration;

/**
 * Class m200806_100832_create_office_table
 */
class m200806_100832_create_office_table extends Migration
{

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('{{%office}}', [
            'id' => $this->primaryKey(),
            'officename' => $this->string(32)->notNull()->unique(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'logged_at' => $this->integer(),
            'phone' => $this->string(),
        ]);

        $this->createContentTable();
    }

    public function down()
    {
        $this->dropTable('{{%office}}');
    }

    private function createContentTable() {
        $this->insert('office', [
            'officename' => 'Еще один Офис#1',
            'phone' => '0986706899',
        ]);
        $this->insert('office', [
            'officename' => 'Новый Офис#2',
            'phone' => '0986706891',
        ]);
        $this->insert('office', [
            'officename' => 'Большой Офис#3',
            'phone' => '0986705899',
        ]);
        $this->insert('office', [
            'officename' => 'Офис#4',
            'phone' => '0984706899',
        ]);
    }
}
