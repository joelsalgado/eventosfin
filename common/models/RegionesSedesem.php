<?php

namespace common\models;

use Yii;


class RegionesSedesem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cat_regiones_sedesem';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['REGIONID'], 'required'],
            [['REGIONID', 'CANT_PROG7', 'CANT_AVAN7', 'CANT_SURTIDA7', 'CANT_PROG94_01', 'CATN_AVAN94_01', 'CANT_SURTIDA94_01', 'CANT_PROG94_02', 'CANT_AVAN94_02', 'CANT_SURTIDA94_02', 'CANT_PROG94_03', 'CANT_AVAN94_03', 'CANT_SURTIDA94_03', 'CANT_PROG94_04', 'CANT_AVAN94_04', 'CANT_SURTIDA94_04', 'CANT_PROG94_05', 'CANT_AVAN94_05', 'CANT_SURTIDA94_05', 'CANT_PROG94_06', 'CANT_AVAN94_06', 'CANT_SURTIDA94_06', 'CANT_PROG94_07', 'CANT_AVAN94_07', 'CANT_SURTIDA94_07', 'CANT_PROG94_08', 'CANT_AVAN94_08', 'CANT_SURTIDA94_08', 'CANT_PROG94_09', 'CANT_AVAN94_09', 'CANT_SURTIDA94_09', 'CANT_PROGRAMADA', 'CANT_PROGRAMADA_222', 'ORDEN'], 'integer'],
            [['REGIONNOMBRE'], 'string', 'max' => 15],
            [['REGIONDESCRIPCION'], 'string', 'max' => 20],
            [['SEPUBLICA', 'GABINETE'], 'string', 'max' => 1],
            [['REGIONID'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'REGIONID' => 'Regionid',
            'REGIONNOMBRE' => 'Regionnombre',
            'REGIONDESCRIPCION' => 'Regiondescripcion',
            'CANT_PROG7' => 'Cant  Prog7',
            'CANT_AVAN7' => 'Cant  Avan7',
            'CANT_SURTIDA7' => 'Cant  Surtida7',
            'CANT_PROG94_01' => 'Cant  Prog94 01',
            'CATN_AVAN94_01' => 'Catn  Avan94 01',
            'CANT_SURTIDA94_01' => 'Cant  Surtida94 01',
            'CANT_PROG94_02' => 'Cant  Prog94 02',
            'CANT_AVAN94_02' => 'Cant  Avan94 02',
            'CANT_SURTIDA94_02' => 'Cant  Surtida94 02',
            'CANT_PROG94_03' => 'Cant  Prog94 03',
            'CANT_AVAN94_03' => 'Cant  Avan94 03',
            'CANT_SURTIDA94_03' => 'Cant  Surtida94 03',
            'CANT_PROG94_04' => 'Cant  Prog94 04',
            'CANT_AVAN94_04' => 'Cant  Avan94 04',
            'CANT_SURTIDA94_04' => 'Cant  Surtida94 04',
            'CANT_PROG94_05' => 'Cant  Prog94 05',
            'CANT_AVAN94_05' => 'Cant  Avan94 05',
            'CANT_SURTIDA94_05' => 'Cant  Surtida94 05',
            'CANT_PROG94_06' => 'Cant  Prog94 06',
            'CANT_AVAN94_06' => 'Cant  Avan94 06',
            'CANT_SURTIDA94_06' => 'Cant  Surtida94 06',
            'CANT_PROG94_07' => 'Cant  Prog94 07',
            'CANT_AVAN94_07' => 'Cant  Avan94 07',
            'CANT_SURTIDA94_07' => 'Cant  Surtida94 07',
            'CANT_PROG94_08' => 'Cant  Prog94 08',
            'CANT_AVAN94_08' => 'Cant  Avan94 08',
            'CANT_SURTIDA94_08' => 'Cant  Surtida94 08',
            'CANT_PROG94_09' => 'Cant  Prog94 09',
            'CANT_AVAN94_09' => 'Cant  Avan94 09',
            'CANT_SURTIDA94_09' => 'Cant  Surtida94 09',
            'SEPUBLICA' => 'Sepublica',
            'CANT_PROGRAMADA' => 'Cant  Programada',
            'CANT_PROGRAMADA_222' => 'Cant  Programada 222',
            'GABINETE' => 'Gabinete',
            'ORDEN' => 'Orden',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['region_id' => 'REGIONID']);
    }

    public static function getRegionesOk(){
        if(Yii::$app->user->identity->role == 30){
            $regiones_activas = self::find()
                ->select(['REGIONID', 'REGIONDESCRIPCION'])
                ->orderBy(['REGIONDESCRIPCION' => 'DESC'])
                ->all();
        }else{
            $regiones_activas = self::find()
                ->select(['REGIONID', 'REGIONDESCRIPCION'])
                ->where(['REGIONID' => Yii::$app->user->identity->region_id ])
                ->orderBy(['REGIONDESCRIPCION' => 'DESC'])
                ->all();
        }

        return $regiones_activas;
    }
}
