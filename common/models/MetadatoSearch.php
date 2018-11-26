<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Metadato;

/**
 * MetadatoSearch represents the model behind the search form of `common\models\Metadato`.
 */
class MetadatoSearch extends Metadato
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['N_PERIODO', 'CVE_PROGRAMA', 'FOLIO', 'EDAD', 'EDAD2', 'EDAD_N', 'EDAD_N2', 'CODIGO_POSTAL', 'CVE_MUNICIPIO', 'CVE_ENTIDAD_FEDERATIVA', 'CVE_LOCALIDAD', 'CVE_REGION', 'CVE_CARGO1', 'CVE_CARGO2'], 'integer'],
            [['CVE_DEPENDENCIA', 'PRIMER_APELLIDO', 'SEGUNDO_APELLIDO', 'NOMBRES', 'NOMBRE_COMPLETO', 'FECHA_NACIMIENTO', 'SEXO', 'CURP', 'FOLIO_ID_OFICIAL', 'PRIMER_APELLIDO2', 'SEGUNDO_APELLIDO2', 'NOMBRES2', 'NOMBRE_COMPLETO2', 'FECHA_NACIMIENTO2', 'SEXO2', 'CURP2', 'FOLIO_ID_OFICIAL2', 'PRIMER_APELLIDO_N', 'SEGUNDO_APELLIDO_N', 'NOMBRES_N', 'NOMBRE_COMPLETO_N', 'FECHA_NACIMIENTO_N', 'SEXO_N', 'CURP_N', 'PRIMER_APELLIDO_N2', 'SEGUNDO_APELLIDO_N2', 'NOMBRES_N2', 'NOMBRE_COMPLETO_N2', 'FECHA_NACIMIENTO_N2', 'SEXO_N2', 'CURP_N2', 'EMAIL', 'LADA_TELEFONO', 'TELEFONO', 'LADA_FAX', 'FAX', 'CALLE', 'NUM_EXT', 'NUM_INT', 'MANZANA', 'LOTE', 'ENTRE_CALLE', 'Y_CALLE', 'OTRA_REFERENCIA', 'COLONIA', 'LOCALIDAD', 'AGEB', 'FECHA_REG', 'USU', 'PW', 'IP', 'FECHA_M', 'USU_M', 'PW_M', 'IP_M', 'STATUS_1', 'STATUS_2', 'STATUS_3', 'CARTA_1', 'CARTA_2', 'OTRO1', 'OTRO2'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Metadato::find();

        if (Yii::$app->user->identity->role == 10 || Yii::$app->user->identity->role == 20){
            $region = Yii::$app->user->identity->region_id;
            $query->andWhere(['CVE_REGION' => $region]);
        }

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'N_PERIODO' => $this->N_PERIODO,
            'CVE_PROGRAMA' => $this->CVE_PROGRAMA,
            'FOLIO' => $this->FOLIO,
            'FECHA_NACIMIENTO' => $this->FECHA_NACIMIENTO,
            'EDAD' => $this->EDAD,
            'FECHA_NACIMIENTO2' => $this->FECHA_NACIMIENTO2,
            'EDAD2' => $this->EDAD2,
            'FECHA_NACIMIENTO_N' => $this->FECHA_NACIMIENTO_N,
            'EDAD_N' => $this->EDAD_N,
            'FECHA_NACIMIENTO_N2' => $this->FECHA_NACIMIENTO_N2,
            'EDAD_N2' => $this->EDAD_N2,
            'CODIGO_POSTAL' => $this->CODIGO_POSTAL,
            'CVE_MUNICIPIO' => $this->CVE_MUNICIPIO,
            'CVE_ENTIDAD_FEDERATIVA' => $this->CVE_ENTIDAD_FEDERATIVA,
            'CVE_LOCALIDAD' => $this->CVE_LOCALIDAD,
            'CVE_REGION' => $this->CVE_REGION,
            'FECHA_REG' => $this->FECHA_REG,
            'FECHA_M' => $this->FECHA_M,
            'CVE_CARGO1' => $this->CVE_CARGO1,
            'CVE_CARGO2' => $this->CVE_CARGO2,
        ]);

        $query->andFilterWhere(['like', 'CVE_DEPENDENCIA', $this->CVE_DEPENDENCIA])
            ->andFilterWhere(['like', 'PRIMER_APELLIDO', $this->PRIMER_APELLIDO])
            ->andFilterWhere(['like', 'SEGUNDO_APELLIDO', $this->SEGUNDO_APELLIDO])
            ->andFilterWhere(['like', 'NOMBRES', $this->NOMBRES])
            ->andFilterWhere(['like', 'NOMBRE_COMPLETO', $this->NOMBRE_COMPLETO])
            ->andFilterWhere(['like', 'SEXO', $this->SEXO])
            ->andFilterWhere(['like', 'CURP', $this->CURP])
            ->andFilterWhere(['like', 'FOLIO_ID_OFICIAL', $this->FOLIO_ID_OFICIAL])
            ->andFilterWhere(['like', 'PRIMER_APELLIDO2', $this->PRIMER_APELLIDO2])
            ->andFilterWhere(['like', 'SEGUNDO_APELLIDO2', $this->SEGUNDO_APELLIDO2])
            ->andFilterWhere(['like', 'NOMBRES2', $this->NOMBRES2])
            ->andFilterWhere(['like', 'NOMBRE_COMPLETO2', $this->NOMBRE_COMPLETO2])
            ->andFilterWhere(['like', 'SEXO2', $this->SEXO2])
            ->andFilterWhere(['like', 'CURP2', $this->CURP2])
            ->andFilterWhere(['like', 'FOLIO_ID_OFICIAL2', $this->FOLIO_ID_OFICIAL2])
            ->andFilterWhere(['like', 'PRIMER_APELLIDO_N', $this->PRIMER_APELLIDO_N])
            ->andFilterWhere(['like', 'SEGUNDO_APELLIDO_N', $this->SEGUNDO_APELLIDO_N])
            ->andFilterWhere(['like', 'NOMBRES_N', $this->NOMBRES_N])
            ->andFilterWhere(['like', 'NOMBRE_COMPLETO_N', $this->NOMBRE_COMPLETO_N])
            ->andFilterWhere(['like', 'SEXO_N', $this->SEXO_N])
            ->andFilterWhere(['like', 'CURP_N', $this->CURP_N])
            ->andFilterWhere(['like', 'PRIMER_APELLIDO_N2', $this->PRIMER_APELLIDO_N2])
            ->andFilterWhere(['like', 'SEGUNDO_APELLIDO_N2', $this->SEGUNDO_APELLIDO_N2])
            ->andFilterWhere(['like', 'NOMBRES_N2', $this->NOMBRES_N2])
            ->andFilterWhere(['like', 'NOMBRE_COMPLETO_N2', $this->NOMBRE_COMPLETO_N2])
            ->andFilterWhere(['like', 'SEXO_N2', $this->SEXO_N2])
            ->andFilterWhere(['like', 'CURP_N2', $this->CURP_N2])
            ->andFilterWhere(['like', 'EMAIL', $this->EMAIL])
            ->andFilterWhere(['like', 'LADA_TELEFONO', $this->LADA_TELEFONO])
            ->andFilterWhere(['like', 'TELEFONO', $this->TELEFONO])
            ->andFilterWhere(['like', 'LADA_FAX', $this->LADA_FAX])
            ->andFilterWhere(['like', 'FAX', $this->FAX])
            ->andFilterWhere(['like', 'CALLE', $this->CALLE])
            ->andFilterWhere(['like', 'NUM_EXT', $this->NUM_EXT])
            ->andFilterWhere(['like', 'NUM_INT', $this->NUM_INT])
            ->andFilterWhere(['like', 'MANZANA', $this->MANZANA])
            ->andFilterWhere(['like', 'LOTE', $this->LOTE])
            ->andFilterWhere(['like', 'ENTRE_CALLE', $this->ENTRE_CALLE])
            ->andFilterWhere(['like', 'Y_CALLE', $this->Y_CALLE])
            ->andFilterWhere(['like', 'OTRA_REFERENCIA', $this->OTRA_REFERENCIA])
            ->andFilterWhere(['like', 'COLONIA', $this->COLONIA])
            ->andFilterWhere(['like', 'LOCALIDAD', $this->LOCALIDAD])
            ->andFilterWhere(['like', 'AGEB', $this->AGEB])
            ->andFilterWhere(['like', 'USU', $this->USU])
            ->andFilterWhere(['like', 'PW', $this->PW])
            ->andFilterWhere(['like', 'IP', $this->IP])
            ->andFilterWhere(['like', 'USU_M', $this->USU_M])
            ->andFilterWhere(['like', 'PW_M', $this->PW_M])
            ->andFilterWhere(['like', 'IP_M', $this->IP_M])
            ->andFilterWhere(['like', 'STATUS_1', $this->STATUS_1])
            ->andFilterWhere(['like', 'STATUS_2', $this->STATUS_2])
            ->andFilterWhere(['like', 'STATUS_3', $this->STATUS_3])
            ->andFilterWhere(['like', 'CARTA_1', $this->CARTA_1])
            ->andFilterWhere(['like', 'CARTA_2', $this->CARTA_2])
            ->andFilterWhere(['like', 'OTRO1', $this->OTRO1])
            ->andFilterWhere(['like', 'OTRO2', $this->OTRO2]);

        return $dataProvider;
    }
}
