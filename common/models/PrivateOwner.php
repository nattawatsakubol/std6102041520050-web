<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "private_owner".
 *
 * @property int $id
 * @property string $owner_no
 * @property string $first_name
 * @property string $last_name
 * @property string $address
 * @property int $telephone
 * @property int $user_id
 */
class PrivateOwner extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'private_owner';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['owner_no', 'first_name', 'last_name'], 'required'],
            [['telephone', 'user_id'], 'integer'],
            [['owner_no'], 'string', 'max' => 5],
            [['first_name', 'last_name'], 'string', 'max' => 300],
            [['address'], 'string', 'max' => 255],
            [['owner_no'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'owner_no' => 'Owner No',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'address' => 'Address',
            'telephone' => 'Telephone',
            'user_id' => 'User ID',
        ];
    }
}
