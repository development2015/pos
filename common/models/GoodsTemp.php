<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "goods_temp".
 *
 * @property integer $id
 * @property string $items
 * @property integer $quantity
 */
class GoodsTemp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'goods_temp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['quantity'], 'integer'],
            [['price'], 'number'],
            [['items'], 'string', 'max' => 225]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'items' => 'Items',
                        'price_unit' => 'Price Unit',
            'quantity' => 'Quantity',
        ];
    }
}
