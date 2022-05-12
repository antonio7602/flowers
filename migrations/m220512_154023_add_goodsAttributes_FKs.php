<?php

use yii\db\Migration;

/**
 * Class m220512_154023_add_goodsAttributes_FKs
 */
class m220512_154023_add_goodsAttributes_FKs extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('goods-goodsAttributes',
            'goods_attributes',
            'goods_id',
            'goods',
            'id',
            'CASCADE'
        );
        $this->addForeignKey('attributes-goodsAttributes',
            'goods_attributes',
            'attribute_id',
            'attributes',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('goods-goodsAttributes','goods_attributes');
        $this->dropForeignKey('attributes-goodsAttributes','goods_attributes');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220512_154023_add_goodsAttributes_FKs cannot be reverted.\n";

        return false;
    }
    */
}
