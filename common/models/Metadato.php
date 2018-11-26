<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "metadato".
 *
 * @property int $N_PERIODO
 * @property int $CVE_PROGRAMA
 * @property int $FOLIO
 * @property string $CVE_DEPENDENCIA
 * @property string $PRIMER_APELLIDO
 * @property string $SEGUNDO_APELLIDO
 * @property string $NOMBRES
 * @property string $NOMBRE_COMPLETO
 * @property string $FECHA_NACIMIENTO
 * @property string $SEXO
 * @property string $CURP
 * @property int $EDAD
 * @property string $FOLIO_ID_OFICIAL
 * @property string $PRIMER_APELLIDO2
 * @property string $SEGUNDO_APELLIDO2
 * @property string $NOMBRES2
 * @property string $NOMBRE_COMPLETO2
 * @property string $FECHA_NACIMIENTO2
 * @property string $SEXO2
 * @property string $CURP2
 * @property int $EDAD2
 * @property string $FOLIO_ID_OFICIAL2
 * @property string $PRIMER_APELLIDO_N
 * @property string $SEGUNDO_APELLIDO_N
 * @property string $NOMBRES_N
 * @property string $NOMBRE_COMPLETO_N
 * @property string $FECHA_NACIMIENTO_N
 * @property string $SEXO_N
 * @property string $CURP_N
 * @property int $EDAD_N
 * @property string $PRIMER_APELLIDO_N2
 * @property string $SEGUNDO_APELLIDO_N2
 * @property string $NOMBRES_N2
 * @property string $NOMBRE_COMPLETO_N2
 * @property string $FECHA_NACIMIENTO_N2
 * @property string $SEXO_N2
 * @property string $CURP_N2
 * @property int $EDAD_N2
 * @property string $EMAIL
 * @property string $LADA_TELEFONO
 * @property string $TELEFONO
 * @property string $LADA_FAX
 * @property string $FAX
 * @property string $CALLE
 * @property string $NUM_EXT
 * @property string $NUM_INT
 * @property string $MANZANA
 * @property string $LOTE
 * @property int $CODIGO_POSTAL
 * @property string $ENTRE_CALLE
 * @property string $Y_CALLE
 * @property string $OTRA_REFERENCIA
 * @property string $COLONIA
 * @property string $LOCALIDAD
 * @property int $CVE_MUNICIPIO
 * @property int $CVE_ENTIDAD_FEDERATIVA
 * @property int $CVE_LOCALIDAD
 * @property int $CVE_REGION
 * @property string $AGEB
 * @property string $FECHA_REG
 * @property string $USU
 * @property string $PW
 * @property string $IP
 * @property string $FECHA_M
 * @property string $USU_M
 * @property string $PW_M
 * @property string $IP_M
 * @property string $STATUS_1
 * @property string $STATUS_2
 * @property string $STATUS_3
 * @property string $CARTA_1
 * @property string $CARTA_2
 * @property int $CVE_CARGO1
 * @property int $CVE_CARGO2
 * @property string $OTRO1
 * @property string $OTRO2
 */
class Metadato extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'metadato2';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PRIMER_APELLIDO', 'NOMBRES', 'FECHA_NACIMIENTO', 'SEXO', 'CURP', 'FOLIO_ID_OFICIAL', 'CVE_CARGO1',
                'PRIMER_APELLIDO_N', 'NOMBRES_N', 'FECHA_NACIMIENTO_N', 'SEXO_N', 'CURP_N',
                'CALLE', 'OTRA_REFERENCIA', 'COLONIA','CODIGO_POSTAL', 'CVE_LOCALIDAD', 'CVE_MUNICIPIO', 'TELEFONO', 'STATUS_1'],
                'required', 'message' => 'Campo Requerido'],
            [['N_PERIODO', 'CVE_PROGRAMA', 'FOLIO', 'EDAD', 'EDAD2', 'EDAD_N', 'EDAD_N2', 'CODIGO_POSTAL', 'CVE_MUNICIPIO', 'CVE_ENTIDAD_FEDERATIVA', 'CVE_LOCALIDAD', 'CVE_REGION', 'CVE_CARGO1', 'CVE_CARGO2'], 'integer','message' => 'Debe ser numerico' ],
            [['FECHA_NACIMIENTO', 'FECHA_NACIMIENTO2', 'FECHA_NACIMIENTO_N', 'FECHA_NACIMIENTO_N2', 'FECHA_REG', 'FECHA_M'], 'safe'],
            [['CVE_DEPENDENCIA'], 'string', 'max' => 10],
            [['PRIMER_APELLIDO', 'SEGUNDO_APELLIDO', 'PRIMER_APELLIDO2', 'SEGUNDO_APELLIDO2', 'NOMBRES2', 'PRIMER_APELLIDO_N', 'SEGUNDO_APELLIDO_N', 'NOMBRES_N', 'PRIMER_APELLIDO_N2', 'SEGUNDO_APELLIDO_N2', 'NOMBRES_N2', 'USU', 'PW', 'IP', 'USU_M', 'PW_M', 'IP_M'], 'string', 'max' => 100],
            [['NOMBRES', 'EMAIL', 'CALLE', 'OTRA_REFERENCIA', 'COLONIA', 'LOCALIDAD', 'OTRO1', 'OTRO2'], 'string', 'max' => 150],
            [['NOMBRE_COMPLETO', 'NOMBRE_COMPLETO2', 'NOMBRE_COMPLETO_N', 'NOMBRE_COMPLETO_N2'], 'string', 'max' => 250],
            [['SEXO', 'SEXO2', 'SEXO_N', 'SEXO_N2', 'STATUS_1', 'STATUS_2', 'STATUS_3', 'CARTA_1', 'CARTA_2'], 'string', 'max' => 1],
            [['CURP'], 'string', 'max' => 20],
            [['FOLIO_ID_OFICIAL', 'CURP2', 'FOLIO_ID_OFICIAL2', 'CURP_N', 'CURP_N2', 'LADA_TELEFONO', 'TELEFONO', 'LADA_FAX', 'FAX', 'AGEB'], 'string', 'max' => 30],
            [['NUM_EXT', 'NUM_INT', 'ENTRE_CALLE', 'Y_CALLE'], 'string', 'max' => 80],
            [['MANZANA', 'LOTE'], 'string', 'max' => 40],

            [[  'FOLIO_ID_OFICIAL', 'FOLIO_ID_OFICIAL2', 'CALLE',
                'ENTRE_CALLE', 'Y_CALLE', 'OTRA_REFERENCIA', 'COLONIA'
                ], 'match', 'pattern' => '/^[a-zñ0-9#()\s]+$/i',
                'message' => 'Sólo se aceptan letras sin acentos y numéros'],

            [[  'PRIMER_APELLIDO','SEGUNDO_APELLIDO', 'NOMBRES',
                'PRIMER_APELLIDO2','SEGUNDO_APELLIDO2', 'NOMBRES2',
                'PRIMER_APELLIDO_N','SEGUNDO_APELLIDO_N', 'NOMBRES_N',
                'PRIMER_APELLIDO_N2','SEGUNDO_APELLIDO_N2', 'NOMBRES_N2',

                ], 'match', 'pattern' => '/^[a-zñ\s]+$/i',
                'message' => 'Sólo se aceptan letras sin acentos'],

            [['CODIGO_POSTAL'], 'match', 'pattern' => '/^[0-9]{5}/i', 'message' => 'Deben ser 5 digitos'],
            [['CODIGO_POSTAL'], 'integer', 'max' => 90000,'tooBig' => '{attribute} no debe ser mayor a 9000' ],

            [['CURP', 'CURP2', 'CURP_N', 'CURP_N2'], 'match', 'pattern' => '/[A-Z]{4}\d{6}[HM][A-Z]{2}[B-DF-HJ-NP-TV-Z]{3}[A-Z0-9][0-9]/', 'message' => 'Formato de CURP invalido (18 Digitos)'],
            [['FECHA_NACIMIENTO', 'FECHA_NACIMIENTO2', 'FECHA_NACIMIENTO_N', 'FECHA_NACIMIENTO_N2'],'date', 'format'=>'yyyy-mm-dd', 'message' => 'Formato no valido'],

            [['TELEFONO','FAX'], 'match', 'pattern' => '/^[0-9+\s]+$/i', 'message' => 'Solo se aceptan números'],
            ['EMAIL','email', 'message' => 'Formato de correo incorrecto'],
            ['CURP', 'validateCurp'],
            ['CURP2', 'validateCurp2'],
            ['CURP_N', 'validateCurpN'],
            ['CURP_N2', 'validateCurpN2'],
            ['TELEFONO', 'validateDuplicados'],
            [['CURP'], 'unique', 'message' => 'Ya se encuentra un registro con este mismo valor'],

        ];
    }

    public function validateCurp()
    {
        $fecha = $this->FECHA_NACIMIENTO;
        $curp = $this->CURP;
        $sexo = $this->SEXO;
        $loc = $this->CVE_LOCALIDAD;

        $fecha_esp = str_replace("-", "", $fecha);
        $dia     = substr($fecha_esp, 6, 2);
        $mes     = substr($fecha_esp, 4, 2);
        $anio     = substr($fecha_esp, 2, 2);

        $fechaCurp = substr($curp, 4, 6);
        $sexoCurp = substr($curp, 10, 1);
        $armada = $anio.$mes.$dia;

        if ($fechaCurp != $armada){
            $this->addError('CURP', 'El CURP no corrresponde a tu fecha de nacimiento.');
            $this->CVE_LOCALIDAD = $loc;
            $this->CVE_MUNICIPIO = null;
        }

        if ($sexo != $sexoCurp){
            $this->addError('CURP', 'El CURP no corrresponde a tu Sexo.');
            $this->CVE_LOCALIDAD = $loc;
            $this->CVE_MUNICIPIO = null;
        }

    }

    public function validateCurp2()
    {
        $fecha = $this->FECHA_NACIMIENTO2;
        $curp = $this->CURP2;
        $sexo = $this->SEXO2;

        $fecha_esp = str_replace("-", "", $fecha);
        $dia     = substr($fecha_esp, 6, 2);
        $mes     = substr($fecha_esp, 4, 2);
        $anio     = substr($fecha_esp, 2, 2);

        $fechaCurp = substr($curp, 4, 6);
        $sexoCurp = substr($curp, 10, 1);
        $armada = $anio.$mes.$dia;

        if ($fechaCurp != $armada){
            $this->addError('CURP2', 'El CURP no corrresponde a tu fecha de nacimiento.');
            $this->CVE_MUNICIPIO = null;

        }

        if ($sexo != $sexoCurp){
            $this->addError('CURP2', 'El CURP no corrresponde a tu Sexo.');
            $this->CVE_MUNICIPIO = null;
        }

    }

    public function validateCurpN()
    {
        $fecha = $this->FECHA_NACIMIENTO_N;
        $curp = $this->CURP_N;
        $sexo = $this->SEXO_N;

        $fecha_esp = str_replace("-", "", $fecha);
        $dia     = substr($fecha_esp, 6, 2);
        $mes     = substr($fecha_esp, 4, 2);
        $anio     = substr($fecha_esp, 2, 2);

        $fechaCurp = substr($curp, 4, 6);
        $sexoCurp = substr($curp, 10, 1);
        $armada = $anio.$mes.$dia;

        if ($fechaCurp != $armada){
            $this->addError('CURP_N', 'El CURP no corrresponde a tu fecha de nacimiento.');
            $this->CVE_MUNICIPIO = null;
        }

        if ($sexo != $sexoCurp){
            $this->addError('CURP_N', 'El CURP no corrresponde a tu Sexo.');
            $this->CVE_MUNICIPIO = null;
        }

    }

    public function validateCurpN2()
    {
        $fecha = $this->FECHA_NACIMIENTO_N2;
        $curp = $this->CURP_N2;
        $sexo = $this->SEXO_N2;

        $fecha_esp = str_replace("-", "", $fecha);
        $dia     = substr($fecha_esp, 6, 2);
        $mes     = substr($fecha_esp, 4, 2);
        $anio     = substr($fecha_esp, 2, 2);

        $fechaCurp = substr($curp, 4, 6);
        $sexoCurp = substr($curp, 10, 1);
        $armada = $anio.$mes.$dia;

        if ($fechaCurp != $armada){
            $this->addError('CURP_N2', 'El CURP no corrresponde a tu fecha de nacimiento.');
            $this->CVE_MUNICIPIO = null;
        }

        if ($sexo != $sexoCurp){
            $this->addError('CURP_N2', 'El CURP no corrresponde a tu Sexo.');
            $this->CVE_MUNICIPIO = null;
        }

    }

    public function validateDuplicados(){
        if ($this->isNewRecord) {
            $dup = Metadato::find()->where([
                'NOMBRE_COMPLETO' => $this->NOMBRE_COMPLETO,
                'FECHA_NACIMIENTO' => $this->FECHA_NACIMIENTO,
                'CVE_MUNICIPIO' => $this->CVE_MUNICIPIO
            ])->all();
            if ($dup) {
                $this->addError('TELEFONO', 'Este registro ya se encuentra en base de datos');
                $this->CVE_MUNICIPIO = null;
            }
        }

    }


    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'N_PERIODO' => 'N  Periodo',
            'CVE_PROGRAMA' => 'Cve  Programa',
            'FOLIO' => 'Folio',
            'CVE_DEPENDENCIA' => 'Cve  Dependencia',
            'PRIMER_APELLIDO' => 'Apellido Paterno',
            'SEGUNDO_APELLIDO' => 'Apellido Materno',
            'NOMBRES' => 'Nombres',
            'NOMBRE_COMPLETO' => 'Nombre  Completo',
            'FECHA_NACIMIENTO' => 'Fecha de Nacimiento',
            'SEXO' => 'Sexo',
            'CURP' => 'Curp',
            'EDAD' => 'Edad',
            'FOLIO_ID_OFICIAL' => 'Folio  Id  Oficial',
            'PRIMER_APELLIDO2' =>  'Apellido Paterno',
            'SEGUNDO_APELLIDO2' => 'Apellido Materno',
            'NOMBRES2' => 'Nombres',
            'NOMBRE_COMPLETO2' => 'Nombre  Completo2',
            'FECHA_NACIMIENTO2' => 'Fecha de Nacimiento',
            'SEXO2' => 'Sexo',
            'CURP2' => 'Curp',
            'EDAD2' => 'Edad2',
            'FOLIO_ID_OFICIAL2' => 'Folio  Id  Oficial',
            'PRIMER_APELLIDO_N' => 'Apellido Paterno',
            'SEGUNDO_APELLIDO_N' => 'Apellido Materno',
            'NOMBRES_N' => 'Nombres',
            'NOMBRE_COMPLETO_N' => 'Nombre  Completo  N',
            'FECHA_NACIMIENTO_N' => 'Fecha  Nacimiento',
            'SEXO_N' => 'Sexo',
            'CURP_N' => 'Curp',
            'EDAD_N' => 'Edad  N',
            'PRIMER_APELLIDO_N2' => 'Apellido Paterno',
            'SEGUNDO_APELLIDO_N2' => 'Apellido Materno',
            'NOMBRES_N2' => 'Nombres',
            'NOMBRE_COMPLETO_N2' => 'Nombre  Completo  N2',
            'FECHA_NACIMIENTO_N2' => 'Fecha  Nacimiento',
            'SEXO_N2' => 'Sexo',
            'CURP_N2' => 'Curp',
            'EDAD_N2' => 'Edad  N2',
            'EMAIL' => 'Email',
            'LADA_TELEFONO' => 'Lada  Telefono',
            'TELEFONO' => 'Telefono',
            'LADA_FAX' => 'Lada  Fax',
            'FAX' => 'Celular',
            'CALLE' => 'Calle',
            'NUM_EXT' => 'Num  Ext',
            'NUM_INT' => 'Num  Int',
            'MANZANA' => 'Manzana',
            'LOTE' => 'Lote',
            'CODIGO_POSTAL' => 'Codigo  Postal',
            'ENTRE_CALLE' => 'Entre  Calle',
            'Y_CALLE' => 'Y  Calle',
            'OTRA_REFERENCIA' => 'Otra  Referencia',
            'COLONIA' => 'Colonia',
            'LOCALIDAD' => 'Localidad',
            'CVE_MUNICIPIO' => 'Municipio',
            'CVE_ENTIDAD_FEDERATIVA' => 'Cve  Entidad  Federativa',
            'CVE_LOCALIDAD' => 'Localidad',
            'CVE_REGION' => 'Cve  Region',
            'AGEB' => 'Ageb',
            'FECHA_REG' => 'Fecha  Reg',
            'USU' => 'Usu',
            'PW' => 'Pw',
            'IP' => 'Ip',
            'FECHA_M' => 'Fecha  M',
            'USU_M' => 'Usu  M',
            'PW_M' => 'Pw  M',
            'IP_M' => 'Ip  M',
            'STATUS_1' => 'Evento a Participar',
            'STATUS_2' => 'Status 2',
            'STATUS_3' => 'Status 3',
            'CARTA_1' => 'Carta 1',
            'CARTA_2' => 'Carta 2',
            'CVE_CARGO1' => 'Cargo',
            'CVE_CARGO2' => 'Cargo',
            'OTRO1' => 'Otro1',
            'OTRO2' => 'Otro2',
        ];
    }

    public function getLoc()
    {
        return $this->hasOne(Localidades::className(), ['CVE_LOCALIDAD' => 'CVE_LOCALIDAD']);
    }
}
