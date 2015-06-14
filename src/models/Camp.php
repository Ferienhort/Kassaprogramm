<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "camp".
 *
 * @property integer $cid
 * @property string $name
 * @property integer $campYear
 *
 * @property CampYear $campYear0
 * @property CampGroup[] $campGroups
 */
class Camp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'camp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cid'], 'required'],
            [['cid', 'campYear'], 'integer'],
            [['name'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cid' => 'Cid',
            'name' => 'Name',
            'campYear' => 'Camp Year',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCampYear0()
    {
        return $this->hasOne(CampYear::className(), ['campYear' => 'campYear']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCampGroups()
    {
        return $this->hasMany(CampGroup::className(), ['camp' => 'cid']);
    }
}
