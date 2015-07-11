<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "meal".
 *
 * @property string $id
 * @property string $item_id
 * @property string $name
 * @property string $day
 * @property double $meal_price
 * @property string $created_at
 * @property string $last_updated
 */
class Meal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'meal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_id'], 'integer'],
            [['day', 'created_at', 'last_updated'], 'safe'],
            [['meal_price'], 'number'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'item_id' => 'Item ID',
            'name' => 'Name',
            'day' => 'Day',
            'meal_price' => 'Meal Price',
            'created_at' => 'Created At',
            'last_updated' => 'Last Updated',
        ];
    }
}
