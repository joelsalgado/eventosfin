<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "cat_cargos".
 *
 * @property int $CVE_CARGO
 * @property string $DESC_CARGO
 * @property string $STATUS_1
 * @property string $SEPUBLICA
 */
class Cargos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cat_cargos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CVE_CARGO'], 'required'],
            [['CVE_CARGO'], 'integer'],
            [['DESC_CARGO'], 'string', 'max' => 80],
            [['STATUS_1', 'SEPUBLICA'], 'string', 'max' => 1],
            [['CVE_CARGO'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CVE_CARGO' => 'Cve  Cargo',
            'DESC_CARGO' => 'Desc  Cargo',
            'STATUS_1' => 'Status 1',
            'SEPUBLICA' => 'Sepublica',
        ];
    }
}
