<?php

use yii\db\Migration;

/**
 * Class m190412_223401_create_registration
 */
class m190412_223401_create_registration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%registration}}', [
            'id' => $this->primaryKey(),
            'client_id' => $this->integer()->notNull(),
            'property_for_rent_id' => $this->integer()->notNull(),
            'dateJoined' => $this->date()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%registration}}');
    }
}
