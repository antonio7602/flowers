<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "goods".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property float|null $price
 * @property int|null $available
 * @property int|null $article
 * @property int|null $quantity
 * @property int|null $category_id
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Good extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'goods';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['price'], 'number'],
            [['available', 'article', 'quantity', 'category_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'price' => 'Price',
            'available' => 'Available',
            'article' => 'Article',
            'quantity' => 'Quantity',
            'category_id' => 'Category ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
