<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "lu_localidades_sedesem".
 *
 * @property int $CVE_ENTIDAD_FEDERATIVA
 * @property int $CVE_MUNICIPIO
 * @property string $NUMINEGI_ID
 * @property int $CVE_LOCALIDAD
 * @property string $DESC_LOCALIDAD
 * @property string $LOC_TIPO
 * @property double $LOC_LATITUD
 * @property double $LOC_LONGITUD
 * @property double $LOC_LATDEC
 * @property double $LOC_LONGDEC
 * @property double $LOC_ALTITUD
 * @property string $CARTA_ID
 * @property string $PTOT
 * @property string $PMAS
 * @property string $PFEM
 * @property string $VTOT
 * @property int $ZONA_ID
 * @property int $REGION_ID
 * @property string $D_CODIGO
 * @property string $DESCRI
 *
 * @property CatMunicipiosSedesem $cVEMUNICIPIO
 */
class Localidades extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lu_localidades_sedesem';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CVE_ENTIDAD_FEDERATIVA', 'CVE_MUNICIPIO', 'CVE_LOCALIDAD', 'ZONA_ID', 'REGION_ID'], 'integer'],
            [['CVE_LOCALIDAD'], 'required'],
            [['LOC_LATITUD', 'LOC_LONGITUD', 'LOC_LATDEC', 'LOC_LONGDEC', 'LOC_ALTITUD'], 'number'],
            [['NUMINEGI_ID', 'CARTA_ID', 'PFEM', 'VTOT'], 'string', 'max' => 6],
            [['DESC_LOCALIDAD', 'DESCRI'], 'string', 'max' => 150],
            [['LOC_TIPO'], 'string', 'max' => 100],
            [['PTOT', 'PMAS'], 'string', 'max' => 7],
            [['D_CODIGO'], 'string', 'max' => 5],
            [['CVE_LOCALIDAD'], 'unique'],
            [['CVE_MUNICIPIO'], 'exist', 'skipOnError' => true, 'targetClass' => CatMunicipiosSedesem::className(), 'targetAttribute' => ['CVE_MUNICIPIO' => 'MUNICIPIOID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CVE_ENTIDAD_FEDERATIVA' => 'Cve  Entidad  Federativa',
            'CVE_MUNICIPIO' => 'Cve  Municipio',
            'NUMINEGI_ID' => 'Numinegi  ID',
            'CVE_LOCALIDAD' => 'Cve  Localidad',
            'DESC_LOCALIDAD' => 'Desc  Localidad',
            'LOC_TIPO' => 'Loc  Tipo',
            'LOC_LATITUD' => 'Loc  Latitud',
            'LOC_LONGITUD' => 'Loc  Longitud',
            'LOC_LATDEC' => 'Loc  Latdec',
            'LOC_LONGDEC' => 'Loc  Longdec',
            'LOC_ALTITUD' => 'Loc  Altitud',
            'CARTA_ID' => 'Carta  ID',
            'PTOT' => 'Ptot',
            'PMAS' => 'Pmas',
            'PFEM' => 'Pfem',
            'VTOT' => 'Vtot',
            'ZONA_ID' => 'Zona  ID',
            'REGION_ID' => 'Region  ID',
            'D_CODIGO' => 'D  Codigo',
            'DESCRI' => 'Descri',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCVEMUNICIPIO()
    {
        return $this->hasOne(CatMunicipiosSedesem::className(), ['MUNICIPIOID' => 'CVE_MUNICIPIO']);
    }
}
