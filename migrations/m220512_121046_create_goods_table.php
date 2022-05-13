<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%goods}}`.
 */
class m220512_121046_create_goods_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%goods}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'description' => $this->text(),
            'price' => $this->money(),
            'available' => $this->boolean(),
            'article' => $this->integer(),
            'quantity' => $this->integer(),
            'category_id' => $this->integer(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->timestamp(),


        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%goods}}');
    }
}
