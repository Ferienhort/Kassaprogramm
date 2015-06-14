<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bookentry".
 *
 * @property integer $bid
 * @property integer $fromAccount
 * @property integer $toAccount
 * @property string $amount
 * @property string $date
 * @property string $description
 *
 * @property Account $fromAccount0
 * @property Account $toAccount0
 */
class Bookentry extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bookentry';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bid'], 'required'],
            [['bid', 'fromAccount', 'toAccount'], 'integer'],
            [['amount'], 'number'],
            [['date'], 'safe'],
            [['description'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bid' => 'Bid',
            'fromAccount' => 'From Account',
            'toAccount' => 'To Account',
            'amount' => 'Amount',
            'date' => 'Date',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFromAccount0()
    {
        return $this->hasOne(Account::className(), ['aid' => 'fromAccount']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getToAccount0()
    {
        return $this->hasOne(Account::className(), ['aid' => 'toAccount']);
    }
}
