<?php

use yii\db\Migration;

/**
 * Class m190412_222844_create_branch
 */
class m190412_222844_create_branch extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
	 $this->createTable('{{%branch}}', [
            'id' => $this->primaryKey(),
            'branch_no' => $this->string(5)->notNull()->unique(),
            'name' => $this->string(200),
            'street' => $this->string(150),
            'city' => $this->string(150),
            'postcode'=> $this->string(10)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%branch}}');
    }

}
