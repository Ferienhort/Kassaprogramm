<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "account".
 *
 * @property integer $aid
 * @property string $name
 * @property string $balance
 * @property string $description
 *
 * @property Bookentry[] $bookentries
 * @property Bookentry[] $bookentries0
 * @property Kid[] $ks
 */
class Account extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'account';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['aid'], 'required'],
            [['aid'], 'integer'],
            [['balance'], 'number'],
            [['name'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'aid' => 'Aid',
            'name' => 'Name',
            'balance' => 'Balance',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookentries()
    {
        return $this->hasMany(Bookentry::className(), ['fromAccount' => 'aid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookentries0()
    {
        return $this->hasMany(Bookentry::className(), ['toAccount' => 'aid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKs()
    {
        return $this->hasMany(Kid::className(), ['account' => 'aid']);
    }
}
