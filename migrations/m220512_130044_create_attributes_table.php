<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%attributes}}`.
 */
class m220512_130044_create_attributes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%attributes}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'value' => $this->integer(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->timestamp(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%attributes}}');
    }
}
