<?php

use yii\db\Migration;

/**
 * Class m220512_152751_add_goodsCategory_FK
 */
class m220512_152751_add_goodsCategory_FK extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('category_identification',
            'goods',
            'category_id',
            'categories',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('category_identification','goods');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220512_152751_add_goodsCategory_FK cannot be reverted.\n";

        return false;
    }
    */
}
