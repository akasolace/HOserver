<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\HoFeedbackResultView;

/**
 * HoFeedbackResultViewSearch represents the model behind the search form of `app\models\HoFeedbackResultView`.
 */
class HoFeedbackResultViewSearch extends HoFeedbackResultView
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'created_by', 'updated_by', 'elaborated', 'manual_elaboration', 'id_ho_feedback', 'position_id_gk', 'gk_id', 'gk_mother_club', 'position_id_cd_left', 'cd_left_id', 'cd_left_mother_club', 'position_id_cd_central', 'cd_central_id', 'cd_central_mother_club', 'position_id_cd_right', 'cd_right_id', 'cd_right_mother_club', 'position_id_wb_left', 'wb_left_id', 'wb_left_mother_club', 'position_id_wb_right', 'wb_right_id', 'wb_right_mother_club', 'position_id_im_left', 'im_left_id', 'im_left_mother_club', 'position_id_im_central', 'im_central_id', 'im_central_mother_club', 'position_id_im_right', 'im_right_id', 'im_right_mother_club', 'position_id_w_left', 'w_left_id', 'w_left_mother_club', 'position_id_w_right', 'w_right_id', 'w_right_mother_club', 'position_id_fw_left', 'fw_left_id', 'fw_left_mother_club', 'position_id_fw_central', 'fw_central_id', 'fw_central_mother_club', 'position_id_fw_right', 'fw_right_id', 'fw_right_mother_club'], 'integer'],
            [['created_at', 'updated_at', 'os', 'ho_version', 'java_version', 'ho_token'], 'safe'],
            [['leftDefense', 'centralDefense', 'rightDefense', 'midfield', 'leftAttack', 'centralAttack', 'rightAttack', 'gk_experience', 'gk_form', 'gk_stamina', 'gk_keeper', 'gk_playmaking', 'gk_passing', 'gk_winger', 'gk_defending', 'gk_scoring', 'gk_set_pieces', 'gk_loyalty', 'cd_left_experience', 'cd_left_form', 'cd_left_stamina', 'cd_left_keeper', 'cd_left_playmaking', 'cd_left_passing', 'cd_left_winger', 'cd_left_defending', 'cd_left_scoring', 'cd_left_set_pieces', 'cd_left_loyalty', 'cd_central_experience', 'cd_central_form', 'cd_central_stamina', 'cd_central_keeper', 'cd_central_playmaking', 'cd_central_passing', 'cd_central_winger', 'cd_central_defending', 'cd_central_scoring', 'cd_central_set_pieces', 'cd_central_loyalty', 'cd_right_experience', 'cd_right_form', 'cd_right_stamina', 'cd_right_keeper', 'cd_right_playmaking', 'cd_right_passing', 'cd_right_winger', 'cd_right_defending', 'cd_right_scoring', 'cd_right_set_pieces', 'cd_right_loyalty', 'wb_left_experience', 'wb_left_form', 'wb_left_stamina', 'wb_left_keeper', 'wb_left_playmaking', 'wb_left_passing', 'wb_left_winger', 'wb_left_defending', 'wb_left_scoring', 'wb_left_set_pieces', 'wb_left_loyalty', 'wb_right_experience', 'wb_right_form', 'wb_right_stamina', 'wb_right_keeper', 'wb_right_playmaking', 'wb_right_passing', 'wb_right_winger', 'wb_right_defending', 'wb_right_scoring', 'wb_right_set_pieces', 'wb_right_loyalty', 'im_left_experience', 'im_left_form', 'im_left_stamina', 'im_left_keeper', 'im_left_playmaking', 'im_left_passing', 'im_left_winger', 'im_left_defending', 'im_left_scoring', 'im_left_set_pieces', 'im_left_loyalty', 'im_central_experience', 'im_central_form', 'im_central_stamina', 'im_central_keeper', 'im_central_playmaking', 'im_central_passing', 'im_central_winger', 'im_central_defending', 'im_central_scoring', 'im_central_set_pieces', 'im_central_loyalty', 'im_right_experience', 'im_right_form', 'im_right_stamina', 'im_right_keeper', 'im_right_playmaking', 'im_right_passing', 'im_right_winger', 'im_right_defending', 'im_right_scoring', 'im_right_set_pieces', 'im_right_loyalty', 'w_left_experience', 'w_left_form', 'w_left_stamina', 'w_left_keeper', 'w_left_playmaking', 'w_left_passing', 'w_left_winger', 'w_left_defending', 'w_left_scoring', 'w_left_set_pieces', 'w_left_loyalty', 'w_right_experience', 'w_right_form', 'w_right_stamina', 'w_right_keeper', 'w_right_playmaking', 'w_right_passing', 'w_right_winger', 'w_right_defending', 'w_right_scoring', 'w_right_set_pieces', 'w_right_loyalty', 'fw_left_experience', 'fw_left_form', 'fw_left_stamina', 'fw_left_keeper', 'fw_left_playmaking', 'fw_left_passing', 'fw_left_winger', 'fw_left_defending', 'fw_left_scoring', 'fw_left_set_pieces', 'fw_left_loyalty', 'fw_central_experience', 'fw_central_form', 'fw_central_stamina', 'fw_central_keeper', 'fw_central_playmaking', 'fw_central_passing', 'fw_central_winger', 'fw_central_defending', 'fw_central_scoring', 'fw_central_set_pieces', 'fw_central_loyalty', 'fw_right_experience', 'fw_right_form', 'fw_right_stamina', 'fw_right_keeper', 'fw_right_playmaking', 'fw_right_passing', 'fw_right_winger', 'fw_right_defending', 'fw_right_scoring', 'fw_right_set_pieces', 'fw_right_loyalty'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = HoFeedbackResultView::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'elaborated' => $this->elaborated,
            'manual_elaboration' => $this->manual_elaboration,
            'leftDefense' => $this->leftDefense,
            'centralDefense' => $this->centralDefense,
            'rightDefense' => $this->rightDefense,
            'midfield' => $this->midfield,
            'leftAttack' => $this->leftAttack,
            'centralAttack' => $this->centralAttack,
            'rightAttack' => $this->rightAttack,
            'id_ho_feedback' => $this->id_ho_feedback,
            'position_id_gk' => $this->position_id_gk,
            'gk_id' => $this->gk_id,
            'gk_experience' => $this->gk_experience,
            'gk_form' => $this->gk_form,
            'gk_stamina' => $this->gk_stamina,
            'gk_keeper' => $this->gk_keeper,
            'gk_playmaking' => $this->gk_playmaking,
            'gk_passing' => $this->gk_passing,
            'gk_winger' => $this->gk_winger,
            'gk_defending' => $this->gk_defending,
            'gk_scoring' => $this->gk_scoring,
            'gk_set_pieces' => $this->gk_set_pieces,
            'gk_loyalty' => $this->gk_loyalty,
            'gk_mother_club' => $this->gk_mother_club,
            'position_id_cd_left' => $this->position_id_cd_left,
            'cd_left_id' => $this->cd_left_id,
            'cd_left_experience' => $this->cd_left_experience,
            'cd_left_form' => $this->cd_left_form,
            'cd_left_stamina' => $this->cd_left_stamina,
            'cd_left_keeper' => $this->cd_left_keeper,
            'cd_left_playmaking' => $this->cd_left_playmaking,
            'cd_left_passing' => $this->cd_left_passing,
            'cd_left_winger' => $this->cd_left_winger,
            'cd_left_defending' => $this->cd_left_defending,
            'cd_left_scoring' => $this->cd_left_scoring,
            'cd_left_set_pieces' => $this->cd_left_set_pieces,
            'cd_left_loyalty' => $this->cd_left_loyalty,
            'cd_left_mother_club' => $this->cd_left_mother_club,
            'position_id_cd_central' => $this->position_id_cd_central,
            'cd_central_id' => $this->cd_central_id,
            'cd_central_experience' => $this->cd_central_experience,
            'cd_central_form' => $this->cd_central_form,
            'cd_central_stamina' => $this->cd_central_stamina,
            'cd_central_keeper' => $this->cd_central_keeper,
            'cd_central_playmaking' => $this->cd_central_playmaking,
            'cd_central_passing' => $this->cd_central_passing,
            'cd_central_winger' => $this->cd_central_winger,
            'cd_central_defending' => $this->cd_central_defending,
            'cd_central_scoring' => $this->cd_central_scoring,
            'cd_central_set_pieces' => $this->cd_central_set_pieces,
            'cd_central_loyalty' => $this->cd_central_loyalty,
            'cd_central_mother_club' => $this->cd_central_mother_club,
            'position_id_cd_right' => $this->position_id_cd_right,
            'cd_right_id' => $this->cd_right_id,
            'cd_right_experience' => $this->cd_right_experience,
            'cd_right_form' => $this->cd_right_form,
            'cd_right_stamina' => $this->cd_right_stamina,
            'cd_right_keeper' => $this->cd_right_keeper,
            'cd_right_playmaking' => $this->cd_right_playmaking,
            'cd_right_passing' => $this->cd_right_passing,
            'cd_right_winger' => $this->cd_right_winger,
            'cd_right_defending' => $this->cd_right_defending,
            'cd_right_scoring' => $this->cd_right_scoring,
            'cd_right_set_pieces' => $this->cd_right_set_pieces,
            'cd_right_loyalty' => $this->cd_right_loyalty,
            'cd_right_mother_club' => $this->cd_right_mother_club,
            'position_id_wb_left' => $this->position_id_wb_left,
            'wb_left_id' => $this->wb_left_id,
            'wb_left_experience' => $this->wb_left_experience,
            'wb_left_form' => $this->wb_left_form,
            'wb_left_stamina' => $this->wb_left_stamina,
            'wb_left_keeper' => $this->wb_left_keeper,
            'wb_left_playmaking' => $this->wb_left_playmaking,
            'wb_left_passing' => $this->wb_left_passing,
            'wb_left_winger' => $this->wb_left_winger,
            'wb_left_defending' => $this->wb_left_defending,
            'wb_left_scoring' => $this->wb_left_scoring,
            'wb_left_set_pieces' => $this->wb_left_set_pieces,
            'wb_left_loyalty' => $this->wb_left_loyalty,
            'wb_left_mother_club' => $this->wb_left_mother_club,
            'position_id_wb_right' => $this->position_id_wb_right,
            'wb_right_id' => $this->wb_right_id,
            'wb_right_experience' => $this->wb_right_experience,
            'wb_right_form' => $this->wb_right_form,
            'wb_right_stamina' => $this->wb_right_stamina,
            'wb_right_keeper' => $this->wb_right_keeper,
            'wb_right_playmaking' => $this->wb_right_playmaking,
            'wb_right_passing' => $this->wb_right_passing,
            'wb_right_winger' => $this->wb_right_winger,
            'wb_right_defending' => $this->wb_right_defending,
            'wb_right_scoring' => $this->wb_right_scoring,
            'wb_right_set_pieces' => $this->wb_right_set_pieces,
            'wb_right_loyalty' => $this->wb_right_loyalty,
            'wb_right_mother_club' => $this->wb_right_mother_club,
            'position_id_im_left' => $this->position_id_im_left,
            'im_left_id' => $this->im_left_id,
            'im_left_experience' => $this->im_left_experience,
            'im_left_form' => $this->im_left_form,
            'im_left_stamina' => $this->im_left_stamina,
            'im_left_keeper' => $this->im_left_keeper,
            'im_left_playmaking' => $this->im_left_playmaking,
            'im_left_passing' => $this->im_left_passing,
            'im_left_winger' => $this->im_left_winger,
            'im_left_defending' => $this->im_left_defending,
            'im_left_scoring' => $this->im_left_scoring,
            'im_left_set_pieces' => $this->im_left_set_pieces,
            'im_left_loyalty' => $this->im_left_loyalty,
            'im_left_mother_club' => $this->im_left_mother_club,
            'position_id_im_central' => $this->position_id_im_central,
            'im_central_id' => $this->im_central_id,
            'im_central_experience' => $this->im_central_experience,
            'im_central_form' => $this->im_central_form,
            'im_central_stamina' => $this->im_central_stamina,
            'im_central_keeper' => $this->im_central_keeper,
            'im_central_playmaking' => $this->im_central_playmaking,
            'im_central_passing' => $this->im_central_passing,
            'im_central_winger' => $this->im_central_winger,
            'im_central_defending' => $this->im_central_defending,
            'im_central_scoring' => $this->im_central_scoring,
            'im_central_set_pieces' => $this->im_central_set_pieces,
            'im_central_loyalty' => $this->im_central_loyalty,
            'im_central_mother_club' => $this->im_central_mother_club,
            'position_id_im_right' => $this->position_id_im_right,
            'im_right_id' => $this->im_right_id,
            'im_right_experience' => $this->im_right_experience,
            'im_right_form' => $this->im_right_form,
            'im_right_stamina' => $this->im_right_stamina,
            'im_right_keeper' => $this->im_right_keeper,
            'im_right_playmaking' => $this->im_right_playmaking,
            'im_right_passing' => $this->im_right_passing,
            'im_right_winger' => $this->im_right_winger,
            'im_right_defending' => $this->im_right_defending,
            'im_right_scoring' => $this->im_right_scoring,
            'im_right_set_pieces' => $this->im_right_set_pieces,
            'im_right_loyalty' => $this->im_right_loyalty,
            'im_right_mother_club' => $this->im_right_mother_club,
            'position_id_w_left' => $this->position_id_w_left,
            'w_left_id' => $this->w_left_id,
            'w_left_experience' => $this->w_left_experience,
            'w_left_form' => $this->w_left_form,
            'w_left_stamina' => $this->w_left_stamina,
            'w_left_keeper' => $this->w_left_keeper,
            'w_left_playmaking' => $this->w_left_playmaking,
            'w_left_passing' => $this->w_left_passing,
            'w_left_winger' => $this->w_left_winger,
            'w_left_defending' => $this->w_left_defending,
            'w_left_scoring' => $this->w_left_scoring,
            'w_left_set_pieces' => $this->w_left_set_pieces,
            'w_left_loyalty' => $this->w_left_loyalty,
            'w_left_mother_club' => $this->w_left_mother_club,
            'position_id_w_right' => $this->position_id_w_right,
            'w_right_id' => $this->w_right_id,
            'w_right_experience' => $this->w_right_experience,
            'w_right_form' => $this->w_right_form,
            'w_right_stamina' => $this->w_right_stamina,
            'w_right_keeper' => $this->w_right_keeper,
            'w_right_playmaking' => $this->w_right_playmaking,
            'w_right_passing' => $this->w_right_passing,
            'w_right_winger' => $this->w_right_winger,
            'w_right_defending' => $this->w_right_defending,
            'w_right_scoring' => $this->w_right_scoring,
            'w_right_set_pieces' => $this->w_right_set_pieces,
            'w_right_loyalty' => $this->w_right_loyalty,
            'w_right_mother_club' => $this->w_right_mother_club,
            'position_id_fw_left' => $this->position_id_fw_left,
            'fw_left_id' => $this->fw_left_id,
            'fw_left_experience' => $this->fw_left_experience,
            'fw_left_form' => $this->fw_left_form,
            'fw_left_stamina' => $this->fw_left_stamina,
            'fw_left_keeper' => $this->fw_left_keeper,
            'fw_left_playmaking' => $this->fw_left_playmaking,
            'fw_left_passing' => $this->fw_left_passing,
            'fw_left_winger' => $this->fw_left_winger,
            'fw_left_defending' => $this->fw_left_defending,
            'fw_left_scoring' => $this->fw_left_scoring,
            'fw_left_set_pieces' => $this->fw_left_set_pieces,
            'fw_left_loyalty' => $this->fw_left_loyalty,
            'fw_left_mother_club' => $this->fw_left_mother_club,
            'position_id_fw_central' => $this->position_id_fw_central,
            'fw_central_id' => $this->fw_central_id,
            'fw_central_experience' => $this->fw_central_experience,
            'fw_central_form' => $this->fw_central_form,
            'fw_central_stamina' => $this->fw_central_stamina,
            'fw_central_keeper' => $this->fw_central_keeper,
            'fw_central_playmaking' => $this->fw_central_playmaking,
            'fw_central_passing' => $this->fw_central_passing,
            'fw_central_winger' => $this->fw_central_winger,
            'fw_central_defending' => $this->fw_central_defending,
            'fw_central_scoring' => $this->fw_central_scoring,
            'fw_central_set_pieces' => $this->fw_central_set_pieces,
            'fw_central_loyalty' => $this->fw_central_loyalty,
            'fw_central_mother_club' => $this->fw_central_mother_club,
            'position_id_fw_right' => $this->position_id_fw_right,
            'fw_right_id' => $this->fw_right_id,
            'fw_right_experience' => $this->fw_right_experience,
            'fw_right_form' => $this->fw_right_form,
            'fw_right_stamina' => $this->fw_right_stamina,
            'fw_right_keeper' => $this->fw_right_keeper,
            'fw_right_playmaking' => $this->fw_right_playmaking,
            'fw_right_passing' => $this->fw_right_passing,
            'fw_right_winger' => $this->fw_right_winger,
            'fw_right_defending' => $this->fw_right_defending,
            'fw_right_scoring' => $this->fw_right_scoring,
            'fw_right_set_pieces' => $this->fw_right_set_pieces,
            'fw_right_loyalty' => $this->fw_right_loyalty,
            'fw_right_mother_club' => $this->fw_right_mother_club,
        ]);

        $query->andFilterWhere(['like', 'os', $this->os])
            ->andFilterWhere(['like', 'ho_version', $this->ho_version])
            ->andFilterWhere(['like', 'java_version', $this->java_version])
            ->andFilterWhere(['like', 'ho_token', $this->ho_token]);

        return $dataProvider;
    }
}
