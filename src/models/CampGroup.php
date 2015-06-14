<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "campGroup".
 *
 * @property integer $gid
 * @property string $name
 * @property integer $camp
 *
 * @property Camp $camp0
 * @property Kid[] $ks
 */
class CampGroup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'campGroup';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gid'], 'required'],
            [['gid', 'camp'], 'integer'],
            [['name'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'gid' => 'Gid',
            'name' => 'Name',
            'camp' => 'Camp',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCamp0()
    {
        return $this->hasOne(Camp::className(), ['cid' => 'camp']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKs()
    {
        return $this->hasMany(Kid::className(), ['campGroup' => 'gid']);
    }
}
