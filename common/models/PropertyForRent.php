<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "property_for_rent".
 *
 * @property int $id
 * @property string $property_no
 * @property string $type
 * @property int $rooms
 * @property string $rent
 * @property int $private_owner_id
 * @property int $staff_id
 * @property int $branch_id
 */
class PropertyForRent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'property_for_rent';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['property_no'], 'required'],
            [['rooms', 'private_owner_id', 'staff_id', 'branch_id'], 'integer'],
            [['rent'], 'number'],
            [['property_no', 'type'], 'string', 'max' => 5],
            [['property_no'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'property_no' => 'Property No',
            'type' => 'Type',
            'rooms' => 'Rooms',
            'rent' => 'Rent',
            'private_owner_id' => 'Private Owner ID',
            'staff_id' => 'Staff ID',
            'branch_id' => 'Branch ID',
        ];
    }
}
