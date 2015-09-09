<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "goods".
 *
 * @property integer $id
 * @property string $items
 * @property integer $quantity
 * @property string $barcode
 * @property string $price_unit
 * @property string $date_enter
 * @property string $date_update
 */
class Goods extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'goods';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['quantity'], 'integer'],
            [['price_unit'], 'number'],
            [['items', 'barcode'], 'string', 'max' => 225],
            [['date_enter', 'date_update'], 'string', 'max' => 50]
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
            'quantity' => 'Quantity',
            'barcode' => 'Barcode',
            'price_unit' => 'Price Unit',
            'date_enter' => 'Date Enter',
            'date_update' => 'Date Update',
        ];
    }
}
