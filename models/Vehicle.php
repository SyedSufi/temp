<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vehicle".
 *
 * @property integer $vehice_id
 * @property string $vehicle_category
 * @property string $vehicle_name
 * @property integer $vehicle_model
 * @property string $manufacturer
 * @property string $color
 * @property integer $price
 */
class Vehicle extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vehicle';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vehicle_category', 'vehicle_name', 'vehicle_model', 'manufacturer', 'color', 'price'], 'required'],
            [['vehicle_model', 'price'], 'integer'],
            [['vehicle_category', 'vehicle_name', 'manufacturer', 'color'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'vehice_id' => 'Vehice ID',
            'vehicle_category' => 'Vehicle Category',
            'vehicle_name' => 'Vehicle Name',
            'vehicle_model' => 'Vehicle Model',
            'manufacturer' => 'Manufacturer',
            'color' => 'Color',
            'price' => 'Price',
        ];
    }
}
