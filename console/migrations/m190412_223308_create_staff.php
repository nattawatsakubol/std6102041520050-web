<?php

use yii\db\Migration;

/**
 * Class m190412_223308_create_staff
 */
class m190412_223308_create_staff extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%staff}}', [
            'id' => $this->primaryKey(),
            'staff_no' => $this->string(5)->notNull()->unique(),
            'f_name' => $this->string(100)->notNull(),
            'l_name' => $this->string(100)->notNull(),
            'position' => $this->string(50),
            'sex' => $this->string(2),
            'd_o_b' => $this->date(),
            'salary' => $this->decimal(17,2),
            'branch_id' => $this->integer(11)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%staff}}');
    }
}
