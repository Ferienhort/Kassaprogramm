<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "campYear".
 *
 * @property integer $campYear
 *
 * @property Camp[] $camps
 */
class CampYear extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'campYear';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['campYear'], 'required'],
            [['campYear'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'campYear' => 'Camp Year',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCamps()
    {
        return $this->hasMany(Camp::className(), ['campYear' => 'campYear']);
    }
}
