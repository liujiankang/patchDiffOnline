<?php

namespace eonline\models\host;

use Yii;

/**
 * This is the model class for table "host_basic".
 *
 * @property integer $id
 * @property string $host_name
 * @property string $host_ip
 * @property string $auth_type
 * @property string $auth_value
 */
class HostBasic extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'host_basic';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['host_name', 'host_ip'], 'string', 'max' => 50],
            [['auth_type'], 'string', 'max' => 10],
            [['auth_value'], 'string', 'max' => 2000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'host_name' => 'Host Name',
            'host_ip' => 'Host Ip',
            'auth_type' => 'Auth Type',
            'auth_value' => 'Auth Value',
        ];
    }
}
