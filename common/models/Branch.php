<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "branch".
 *
 * @property int $id
 * @property string $branch_no
 * @property string $name
 * @property string $street
 * @property string $city
 * @property string $postcode
 */
class Branch extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'branch';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['branch_no'], 'required'],
            [['branch_no'], 'string', 'max' => 5],
            [['name'], 'string', 'max' => 200],
            [['street', 'city'], 'string', 'max' => 150],
            [['postcode'], 'string', 'max' => 10],
            [['branch_no'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'branch_no' => 'Branch No',
            'name' => 'Name',
            'street' => 'Street',
            'city' => 'City',
            'postcode' => 'Postcode',
        ];
    }
}
