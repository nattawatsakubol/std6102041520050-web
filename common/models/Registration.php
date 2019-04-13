<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "registration".
 *
 * @property int $id
 * @property int $client_id
 * @property int $property_for_rent_id
 * @property string $dateJoined
 */
class Registration extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'registration';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['client_id', 'property_for_rent_id'], 'required'],
            [['client_id', 'property_for_rent_id'], 'integer'],
            [['dateJoined'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'client_id' => 'Client ID',
            'property_for_rent_id' => 'Property For Rent ID',
            'dateJoined' => 'Date Joined',
        ];
    }
}
