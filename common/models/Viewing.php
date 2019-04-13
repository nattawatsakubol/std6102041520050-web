<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "viewing".
 *
 * @property int $id
 * @property int $client_id
 * @property int $property_for_rent_id
 * @property string $view_date
 * @property string $comment
 */
class Viewing extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'viewing';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['client_id', 'property_for_rent_id'], 'required'],
            [['client_id', 'property_for_rent_id'], 'integer'],
            [['view_date'], 'safe'],
            [['comment'], 'string', 'max' => 255],
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
            'view_date' => 'View Date',
            'comment' => 'Comment',
        ];
    }
}
