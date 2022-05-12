<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%goods_attributes}}`.
 */
class m220512_152331_create_goods_attributes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%goods_attributes}}', [
            'goods_id' => $this->integer(),
            'attribute_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%goods_attributes}}');
    }
}
