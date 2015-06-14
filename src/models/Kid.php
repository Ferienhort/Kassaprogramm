<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kid".
 *
 * @property integer $kid
 * @property string $number
 * @property string $firstname
 * @property string $lastname
 * @property integer $campGroup
 * @property integer $account
 *
 * @property CampGroup $campGroup0
 * @property Account $account0
 */
class Kid extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kid';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kid'], 'required'],
            [['kid', 'campGroup', 'account'], 'integer'],
            [['number'], 'string', 'max' => 4],
            [['firstname', 'lastname'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kid' => 'Kid',
            'number' => 'Number',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'campGroup' => 'Camp Group',
            'account' => 'Account',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCampGroup0()
    {
        return $this->hasOne(CampGroup::className(), ['gid' => 'campGroup']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccount0()
    {
        return $this->hasOne(Account::className(), ['aid' => 'account']);
    }
}
