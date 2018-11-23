<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "cat_municipios_sedesem".
 *
 * @property int $ENTIDADFEDERATIVAID
 * @property int $MUNICIPIOID
 * @property int $MUNICIPIOIDESPECIAL
 * @property string $MUNICIPIONOMBRE
 * @property int $MUNICIPIOESTATUS
 * @property int $REGIONID
 * @property int $MUNICIPIOID_SBIS
 * @property int $REGIONID_SBIS
 * @property int $REGIONID_GAB
 * @property int $COINCIDES_CANTPROG
 * @property string $CVE_COORDINACION
 *
 * @property CatRegionesSedesem $rEGION
 * @property LuLocalidadesSedesem[] $luLocalidadesSedesems
 * @property Metadato[] $metadatos
 */
class Municipios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cat_municipios_sedesem';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ENTIDADFEDERATIVAID', 'MUNICIPIOIDESPECIAL', 'MUNICIPIOESTATUS', 'REGIONID', 'MUNICIPIOID_SBIS', 'REGIONID_SBIS', 'REGIONID_GAB', 'COINCIDES_CANTPROG'], 'integer'],
            [['MUNICIPIONOMBRE'], 'string', 'max' => 50],
            [['CVE_COORDINACION'], 'string', 'max' => 10],
            [['REGIONID'], 'exist', 'skipOnError' => true, 'targetClass' => CatRegionesSedesem::className(), 'targetAttribute' => ['REGIONID' => 'REGIONID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ENTIDADFEDERATIVAID' => 'Entidadfederativaid',
            'MUNICIPIOID' => 'Municipioid',
            'MUNICIPIOIDESPECIAL' => 'Municipioidespecial',
            'MUNICIPIONOMBRE' => 'Municipionombre',
            'MUNICIPIOESTATUS' => 'Municipioestatus',
            'REGIONID' => 'Regionid',
            'MUNICIPIOID_SBIS' => 'Municipioid  Sbis',
            'REGIONID_SBIS' => 'Regionid  Sbis',
            'REGIONID_GAB' => 'Regionid  Gab',
            'COINCIDES_CANTPROG' => 'Coincides  Cantprog',
            'CVE_COORDINACION' => 'Cve  Coordinacion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getREGION()
    {
        return $this->hasOne(RegionesSedesem::className(), ['REGIONID' => 'REGIONID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLuLocalidadesSedesems()
    {
        return $this->hasMany(Localidades::className(), ['CVE_MUNICIPIO' => 'MUNICIPIOID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMetadatos()
    {
        return $this->hasMany(Metadato::className(), ['CVE_MUNICIPIO' => 'MUNICIPIOID']);
    }

    public static function getMunOk(){
        if(Yii::$app->user->identity->role == 30 || Yii::$app->user->identity->role == 40){
            $mun_id = self::find()
                ->select(['MUNICIPIOID', 'MUNICIPIONOMBRE'])
                ->orderBy(['MUNICIPIONOMBRE' => 'DESC'])
                ->all();
        }else{
            $mun_id = self::find()
                ->select(['MUNICIPIOID', 'MUNICIPIONOMBRE'])
                ->andWhere(['REGIONID' => Yii::$app->user->identity->region_id ])
                ->orderBy(['MUNICIPIONOMBRE' => 'DESC'])
                ->all();
        }
        return $mun_id;
    }
}
