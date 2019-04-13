<?php

use yii\db\Migration;

/**
 * Class m190412_223430_create_viewing
 */
class m190412_223430_create_viewing extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%viewing}}', [
            'id' => $this->primaryKey(),
            'client_id' => $this->integer()->notNull(),
            'property_for_rent_id' => $this->integer()->notNull(),
            'view_date' => $this->date(),
            'comment' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%viewing}}');
    }
}
