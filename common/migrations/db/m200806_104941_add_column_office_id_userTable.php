<?php

use yii\db\Migration;

/**
 * Class m200806_104941_add_column_office_id_userTable
 */
class m200806_104941_add_column_office_id_userTable extends Migration
{

    public function Up()
    {
        $this->addColumn('{{%user}}', 'office_id', $this->integer());
        $this->addForeignKey('fk_office', '{{%user}}', 'office_id', '{{%office}}',
            'id', 'SET NULL', 'SET NULL');
    }

    public function Down()
    {
        $this->dropForeignKey('fk_office', '{{%user}}');
        $this->dropColumn('{{%user}}', 'office_id');
    }
}
