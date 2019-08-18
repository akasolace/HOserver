<?php

namespace app\models\base;

use app\models\User;
use Yii;

/**
 * This is the model class for table "{{%ho_feedback_result_view}}".
 *
 * @property int $id
 * @property string $created_at
 * @property string $updated_at
 * @property int $created_by
 * @property int $updated_by
 * @property int $elaborated
 * @property int $manual_elaboration
 * @property string $os
 * @property string $ho_version
 * @property string $java_version
 * @property string $ho_token
 * @property string $lineupName
 * @property double $leftDefense
 * @property double $centralDefense
 * @property double $rightDefense
 * @property double $midfield
 * @property double $leftAttack
 * @property double $centralAttack
 * @property double $rightAttack
 * @property int $tacticType
 * @property int $tacticSkill
 * @property int $attitude
 * @property int $style_of_play
 * @property int $id_ho_feedback
 * @property int $position_id_gk "m_iId": 100
 * @property int $gk_id
 * @property double $gk_experience
 * @property double $gk_form
 * @property double $gk_stamina
 * @property int $gk_injury_status
 * @property double $gk_keeper
 * @property double $gk_playmaking
 * @property double $gk_passing
 * @property double $gk_winger
 * @property double $gk_defending
 * @property double $gk_scoring
 * @property double $gk_set_pieces
 * @property double $gk_loyalty
 * @property int $gk_mother_club
 * @property int $position_id_cd_left "m_iId": 104
 * @property int $cd_left_id
 * @property double $cd_left_experience
 * @property double $cd_left_form
 * @property double $cd_left_stamina
 * @property int $cd_left_injury_status
 * @property double $cd_left_keeper
 * @property double $cd_left_playmaking
 * @property double $cd_left_passing
 * @property double $cd_left_winger
 * @property double $cd_left_defending
 * @property double $cd_left_scoring
 * @property double $cd_left_set_pieces
 * @property double $cd_left_loyalty
 * @property int $cd_left_mother_club
 * @property int $position_id_cd_central "m_iId": 103
 * @property int $cd_central_id
 * @property double $cd_central_experience
 * @property double $cd_central_form
 * @property double $cd_central_stamina
 * @property int $cd_central_injury_status
 * @property double $cd_central_keeper
 * @property double $cd_central_playmaking
 * @property double $cd_central_passing
 * @property double $cd_central_winger
 * @property double $cd_central_defending
 * @property double $cd_central_scoring
 * @property double $cd_central_set_pieces
 * @property double $cd_central_loyalty
 * @property int $cd_central_mother_club
 * @property int $position_id_cd_right "m_iId": 102
 * @property int $cd_right_id
 * @property double $cd_right_experience
 * @property double $cd_right_form
 * @property double $cd_right_stamina
 * @property int $cd_right_injury_status
 * @property double $cd_right_keeper
 * @property double $cd_right_playmaking
 * @property double $cd_right_passing
 * @property double $cd_right_winger
 * @property double $cd_right_defending
 * @property double $cd_right_scoring
 * @property double $cd_right_set_pieces
 * @property double $cd_right_loyalty
 * @property int $cd_right_mother_club
 * @property int $position_id_wb_left "m_iId": 105
 * @property int $wb_left_id
 * @property double $wb_left_experience
 * @property double $wb_left_form
 * @property double $wb_left_stamina
 * @property int $wb_left_injury_status
 * @property double $wb_left_keeper
 * @property double $wb_left_playmaking
 * @property double $wb_left_passing
 * @property double $wb_left_winger
 * @property double $wb_left_defending
 * @property double $wb_left_scoring
 * @property double $wb_left_set_pieces
 * @property double $wb_left_loyalty
 * @property int $wb_left_mother_club
 * @property int $position_id_wb_right "m_iId": 101
 * @property int $wb_right_id
 * @property double $wb_right_experience
 * @property double $wb_right_form
 * @property double $wb_right_stamina
 * @property int $wb_right_injury_status
 * @property double $wb_right_keeper
 * @property double $wb_right_playmaking
 * @property double $wb_right_passing
 * @property double $wb_right_winger
 * @property double $wb_right_defending
 * @property double $wb_right_scoring
 * @property double $wb_right_set_pieces
 * @property double $wb_right_loyalty
 * @property int $wb_right_mother_club
 * @property int $position_id_im_left "m_iId": 109
 * @property int $im_left_id
 * @property double $im_left_experience
 * @property double $im_left_form
 * @property double $im_left_stamina
 * @property int $im_left_injury_status
 * @property double $im_left_keeper
 * @property double $im_left_playmaking
 * @property double $im_left_passing
 * @property double $im_left_winger
 * @property double $im_left_defending
 * @property double $im_left_scoring
 * @property double $im_left_set_pieces
 * @property double $im_left_loyalty
 * @property int $im_left_mother_club
 * @property int $position_id_im_central "m_iId": 108
 * @property int $im_central_id
 * @property double $im_central_experience
 * @property double $im_central_form
 * @property double $im_central_stamina
 * @property int $im_central_injury_status
 * @property double $im_central_keeper
 * @property double $im_central_playmaking
 * @property double $im_central_passing
 * @property double $im_central_winger
 * @property double $im_central_defending
 * @property double $im_central_scoring
 * @property double $im_central_set_pieces
 * @property double $im_central_loyalty
 * @property int $im_central_mother_club
 * @property int $position_id_im_right "m_iId": 107
 * @property int $im_right_id
 * @property double $im_right_experience
 * @property double $im_right_form
 * @property double $im_right_stamina
 * @property int $im_right_injury_status
 * @property double $im_right_keeper
 * @property double $im_right_playmaking
 * @property double $im_right_passing
 * @property double $im_right_winger
 * @property double $im_right_defending
 * @property double $im_right_scoring
 * @property double $im_right_set_pieces
 * @property double $im_right_loyalty
 * @property int $im_right_mother_club
 * @property int $position_id_w_left "m_iId": 110
 * @property int $w_left_id
 * @property double $w_left_experience
 * @property double $w_left_form
 * @property double $w_left_stamina
 * @property int $w_left_injury_status
 * @property double $w_left_keeper
 * @property double $w_left_playmaking
 * @property double $w_left_passing
 * @property double $w_left_winger
 * @property double $w_left_defending
 * @property double $w_left_scoring
 * @property double $w_left_set_pieces
 * @property double $w_left_loyalty
 * @property int $w_left_mother_club
 * @property int $position_id_w_right "m_iId": 106
 * @property int $w_right_id
 * @property double $w_right_experience
 * @property double $w_right_form
 * @property double $w_right_stamina
 * @property int $w_right_injury_status
 * @property double $w_right_keeper
 * @property double $w_right_playmaking
 * @property double $w_right_passing
 * @property double $w_right_winger
 * @property double $w_right_defending
 * @property double $w_right_scoring
 * @property double $w_right_set_pieces
 * @property double $w_right_loyalty
 * @property int $w_right_mother_club
 * @property int $position_id_fw_left "m_iId": 113
 * @property int $fw_left_id
 * @property double $fw_left_experience
 * @property double $fw_left_form
 * @property double $fw_left_stamina
 * @property int $fw_left_injury_status
 * @property double $fw_left_keeper
 * @property double $fw_left_playmaking
 * @property double $fw_left_passing
 * @property double $fw_left_winger
 * @property double $fw_left_defending
 * @property double $fw_left_scoring
 * @property double $fw_left_set_pieces
 * @property double $fw_left_loyalty
 * @property int $fw_left_mother_club
 * @property int $position_id_fw_central "m_iId": 112
 * @property int $fw_central_id
 * @property double $fw_central_experience
 * @property double $fw_central_form
 * @property double $fw_central_stamina
 * @property int $fw_central_injury_status
 * @property double $fw_central_keeper
 * @property double $fw_central_playmaking
 * @property double $fw_central_passing
 * @property double $fw_central_winger
 * @property double $fw_central_defending
 * @property double $fw_central_scoring
 * @property double $fw_central_set_pieces
 * @property double $fw_central_loyalty
 * @property int $fw_central_mother_club
 * @property int $position_id_fw_right "m_iId": 111
 * @property int $fw_right_id
 * @property double $fw_right_experience
 * @property double $fw_right_form
 * @property double $fw_right_stamina
 * @property int $fw_right_injury_status
 * @property double $fw_right_keeper
 * @property double $fw_right_playmaking
 * @property double $fw_right_passing
 * @property double $fw_right_winger
 * @property double $fw_right_defending
 * @property double $fw_right_scoring
 * @property double $fw_right_set_pieces
 * @property double $fw_right_loyalty
 * @property int $fw_right_mother_club
 */
class HoFeedbackResultViewBase extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%ho_feedback_result_view}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'created_by', 'updated_by', 'elaborated', 'manual_elaboration', 'tacticType', 'tacticSkill', 'attitude', 'style_of_play', 'id_ho_feedback', 'position_id_gk', 'gk_id', 'gk_injury_status', 'gk_mother_club', 'position_id_cd_left', 'cd_left_id', 'cd_left_injury_status', 'cd_left_mother_club', 'position_id_cd_central', 'cd_central_id', 'cd_central_injury_status', 'cd_central_mother_club', 'position_id_cd_right', 'cd_right_id', 'cd_right_injury_status', 'cd_right_mother_club', 'position_id_wb_left', 'wb_left_id', 'wb_left_injury_status', 'wb_left_mother_club', 'position_id_wb_right', 'wb_right_id', 'wb_right_injury_status', 'wb_right_mother_club', 'position_id_im_left', 'im_left_id', 'im_left_injury_status', 'im_left_mother_club', 'position_id_im_central', 'im_central_id', 'im_central_injury_status', 'im_central_mother_club', 'position_id_im_right', 'im_right_id', 'im_right_injury_status', 'im_right_mother_club', 'position_id_w_left', 'w_left_id', 'w_left_injury_status', 'w_left_mother_club', 'position_id_w_right', 'w_right_id', 'w_right_injury_status', 'w_right_mother_club', 'position_id_fw_left', 'fw_left_id', 'fw_left_injury_status', 'fw_left_mother_club', 'position_id_fw_central', 'fw_central_id', 'fw_central_injury_status', 'fw_central_mother_club', 'position_id_fw_right', 'fw_right_id', 'fw_right_injury_status', 'fw_right_mother_club'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['leftDefense', 'centralDefense', 'rightDefense', 'midfield', 'leftAttack', 'centralAttack', 'rightAttack', 'gk_experience', 'gk_form', 'gk_stamina', 'gk_keeper', 'gk_playmaking', 'gk_passing', 'gk_winger', 'gk_defending', 'gk_scoring', 'gk_set_pieces', 'gk_loyalty', 'cd_left_experience', 'cd_left_form', 'cd_left_stamina', 'cd_left_keeper', 'cd_left_playmaking', 'cd_left_passing', 'cd_left_winger', 'cd_left_defending', 'cd_left_scoring', 'cd_left_set_pieces', 'cd_left_loyalty', 'cd_central_experience', 'cd_central_form', 'cd_central_stamina', 'cd_central_keeper', 'cd_central_playmaking', 'cd_central_passing', 'cd_central_winger', 'cd_central_defending', 'cd_central_scoring', 'cd_central_set_pieces', 'cd_central_loyalty', 'cd_right_experience', 'cd_right_form', 'cd_right_stamina', 'cd_right_keeper', 'cd_right_playmaking', 'cd_right_passing', 'cd_right_winger', 'cd_right_defending', 'cd_right_scoring', 'cd_right_set_pieces', 'cd_right_loyalty', 'wb_left_experience', 'wb_left_form', 'wb_left_stamina', 'wb_left_keeper', 'wb_left_playmaking', 'wb_left_passing', 'wb_left_winger', 'wb_left_defending', 'wb_left_scoring', 'wb_left_set_pieces', 'wb_left_loyalty', 'wb_right_experience', 'wb_right_form', 'wb_right_stamina', 'wb_right_keeper', 'wb_right_playmaking', 'wb_right_passing', 'wb_right_winger', 'wb_right_defending', 'wb_right_scoring', 'wb_right_set_pieces', 'wb_right_loyalty', 'im_left_experience', 'im_left_form', 'im_left_stamina', 'im_left_keeper', 'im_left_playmaking', 'im_left_passing', 'im_left_winger', 'im_left_defending', 'im_left_scoring', 'im_left_set_pieces', 'im_left_loyalty', 'im_central_experience', 'im_central_form', 'im_central_stamina', 'im_central_keeper', 'im_central_playmaking', 'im_central_passing', 'im_central_winger', 'im_central_defending', 'im_central_scoring', 'im_central_set_pieces', 'im_central_loyalty', 'im_right_experience', 'im_right_form', 'im_right_stamina', 'im_right_keeper', 'im_right_playmaking', 'im_right_passing', 'im_right_winger', 'im_right_defending', 'im_right_scoring', 'im_right_set_pieces', 'im_right_loyalty', 'w_left_experience', 'w_left_form', 'w_left_stamina', 'w_left_keeper', 'w_left_playmaking', 'w_left_passing', 'w_left_winger', 'w_left_defending', 'w_left_scoring', 'w_left_set_pieces', 'w_left_loyalty', 'w_right_experience', 'w_right_form', 'w_right_stamina', 'w_right_keeper', 'w_right_playmaking', 'w_right_passing', 'w_right_winger', 'w_right_defending', 'w_right_scoring', 'w_right_set_pieces', 'w_right_loyalty', 'fw_left_experience', 'fw_left_form', 'fw_left_stamina', 'fw_left_keeper', 'fw_left_playmaking', 'fw_left_passing', 'fw_left_winger', 'fw_left_defending', 'fw_left_scoring', 'fw_left_set_pieces', 'fw_left_loyalty', 'fw_central_experience', 'fw_central_form', 'fw_central_stamina', 'fw_central_keeper', 'fw_central_playmaking', 'fw_central_passing', 'fw_central_winger', 'fw_central_defending', 'fw_central_scoring', 'fw_central_set_pieces', 'fw_central_loyalty', 'fw_right_experience', 'fw_right_form', 'fw_right_stamina', 'fw_right_keeper', 'fw_right_playmaking', 'fw_right_passing', 'fw_right_winger', 'fw_right_defending', 'fw_right_scoring', 'fw_right_set_pieces', 'fw_right_loyalty'], 'number'],
            [['os', 'ho_version', 'java_version', 'ho_token'], 'string', 'max' => 255],
            [['lineupName'], 'string', 'max' => 64],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'elaborated' => Yii::t('app', 'Elaborated'),
            'manual_elaboration' => Yii::t('app', 'Manual Elaboration'),
            'os' => Yii::t('app', 'Os'),
            'ho_version' => Yii::t('app', 'Ho Version'),
            'java_version' => Yii::t('app', 'Java Version'),
            'ho_token' => Yii::t('app', 'Ho Token'),
            'lineupName' => Yii::t('app', 'Lineup Name'),
            'leftDefense' => Yii::t('app', 'Left Defense'),
            'centralDefense' => Yii::t('app', 'Central Defense'),
            'rightDefense' => Yii::t('app', 'Right Defense'),
            'midfield' => Yii::t('app', 'Midfield'),
            'leftAttack' => Yii::t('app', 'Left Attack'),
            'centralAttack' => Yii::t('app', 'Central Attack'),
            'rightAttack' => Yii::t('app', 'Right Attack'),
            'tacticType' => Yii::t('app', 'Tactic Type'),
            'tacticSkill' => Yii::t('app', 'Tactic Skill'),
            'attitude' => Yii::t('app', 'Attitude'),
            'style_of_play' => Yii::t('app', 'Style Of Play'),
            'id_ho_feedback' => Yii::t('app', 'Id Ho Feedback'),
            'position_id_gk' => Yii::t('app', 'Position Id Gk'),
            'gk_id' => Yii::t('app', 'Gk ID'),
            'gk_experience' => Yii::t('app', 'Gk Experience'),
            'gk_form' => Yii::t('app', 'Gk Form'),
            'gk_stamina' => Yii::t('app', 'Gk Stamina'),
            'gk_injury_status' => Yii::t('app', 'Gk Injury Status'),
            'gk_keeper' => Yii::t('app', 'Gk Keeper'),
            'gk_playmaking' => Yii::t('app', 'Gk Playmaking'),
            'gk_passing' => Yii::t('app', 'Gk Passing'),
            'gk_winger' => Yii::t('app', 'Gk Winger'),
            'gk_defending' => Yii::t('app', 'Gk Defending'),
            'gk_scoring' => Yii::t('app', 'Gk Scoring'),
            'gk_set_pieces' => Yii::t('app', 'Gk Set Pieces'),
            'gk_loyalty' => Yii::t('app', 'Gk Loyalty'),
            'gk_mother_club' => Yii::t('app', 'Gk Mother Club'),
            'position_id_cd_left' => Yii::t('app', 'Position Id Cd Left'),
            'cd_left_id' => Yii::t('app', 'Cd Left ID'),
            'cd_left_experience' => Yii::t('app', 'Cd Left Experience'),
            'cd_left_form' => Yii::t('app', 'Cd Left Form'),
            'cd_left_stamina' => Yii::t('app', 'Cd Left Stamina'),
            'cd_left_injury_status' => Yii::t('app', 'Cd Left Injury Status'),
            'cd_left_keeper' => Yii::t('app', 'Cd Left Keeper'),
            'cd_left_playmaking' => Yii::t('app', 'Cd Left Playmaking'),
            'cd_left_passing' => Yii::t('app', 'Cd Left Passing'),
            'cd_left_winger' => Yii::t('app', 'Cd Left Winger'),
            'cd_left_defending' => Yii::t('app', 'Cd Left Defending'),
            'cd_left_scoring' => Yii::t('app', 'Cd Left Scoring'),
            'cd_left_set_pieces' => Yii::t('app', 'Cd Left Set Pieces'),
            'cd_left_loyalty' => Yii::t('app', 'Cd Left Loyalty'),
            'cd_left_mother_club' => Yii::t('app', 'Cd Left Mother Club'),
            'position_id_cd_central' => Yii::t('app', 'Position Id Cd Central'),
            'cd_central_id' => Yii::t('app', 'Cd Central ID'),
            'cd_central_experience' => Yii::t('app', 'Cd Central Experience'),
            'cd_central_form' => Yii::t('app', 'Cd Central Form'),
            'cd_central_stamina' => Yii::t('app', 'Cd Central Stamina'),
            'cd_central_injury_status' => Yii::t('app', 'Cd Central Injury Status'),
            'cd_central_keeper' => Yii::t('app', 'Cd Central Keeper'),
            'cd_central_playmaking' => Yii::t('app', 'Cd Central Playmaking'),
            'cd_central_passing' => Yii::t('app', 'Cd Central Passing'),
            'cd_central_winger' => Yii::t('app', 'Cd Central Winger'),
            'cd_central_defending' => Yii::t('app', 'Cd Central Defending'),
            'cd_central_scoring' => Yii::t('app', 'Cd Central Scoring'),
            'cd_central_set_pieces' => Yii::t('app', 'Cd Central Set Pieces'),
            'cd_central_loyalty' => Yii::t('app', 'Cd Central Loyalty'),
            'cd_central_mother_club' => Yii::t('app', 'Cd Central Mother Club'),
            'position_id_cd_right' => Yii::t('app', 'Position Id Cd Right'),
            'cd_right_id' => Yii::t('app', 'Cd Right ID'),
            'cd_right_experience' => Yii::t('app', 'Cd Right Experience'),
            'cd_right_form' => Yii::t('app', 'Cd Right Form'),
            'cd_right_stamina' => Yii::t('app', 'Cd Right Stamina'),
            'cd_right_injury_status' => Yii::t('app', 'Cd Right Injury Status'),
            'cd_right_keeper' => Yii::t('app', 'Cd Right Keeper'),
            'cd_right_playmaking' => Yii::t('app', 'Cd Right Playmaking'),
            'cd_right_passing' => Yii::t('app', 'Cd Right Passing'),
            'cd_right_winger' => Yii::t('app', 'Cd Right Winger'),
            'cd_right_defending' => Yii::t('app', 'Cd Right Defending'),
            'cd_right_scoring' => Yii::t('app', 'Cd Right Scoring'),
            'cd_right_set_pieces' => Yii::t('app', 'Cd Right Set Pieces'),
            'cd_right_loyalty' => Yii::t('app', 'Cd Right Loyalty'),
            'cd_right_mother_club' => Yii::t('app', 'Cd Right Mother Club'),
            'position_id_wb_left' => Yii::t('app', 'Position Id Wb Left'),
            'wb_left_id' => Yii::t('app', 'Wb Left ID'),
            'wb_left_experience' => Yii::t('app', 'Wb Left Experience'),
            'wb_left_form' => Yii::t('app', 'Wb Left Form'),
            'wb_left_stamina' => Yii::t('app', 'Wb Left Stamina'),
            'wb_left_injury_status' => Yii::t('app', 'Wb Left Injury Status'),
            'wb_left_keeper' => Yii::t('app', 'Wb Left Keeper'),
            'wb_left_playmaking' => Yii::t('app', 'Wb Left Playmaking'),
            'wb_left_passing' => Yii::t('app', 'Wb Left Passing'),
            'wb_left_winger' => Yii::t('app', 'Wb Left Winger'),
            'wb_left_defending' => Yii::t('app', 'Wb Left Defending'),
            'wb_left_scoring' => Yii::t('app', 'Wb Left Scoring'),
            'wb_left_set_pieces' => Yii::t('app', 'Wb Left Set Pieces'),
            'wb_left_loyalty' => Yii::t('app', 'Wb Left Loyalty'),
            'wb_left_mother_club' => Yii::t('app', 'Wb Left Mother Club'),
            'position_id_wb_right' => Yii::t('app', 'Position Id Wb Right'),
            'wb_right_id' => Yii::t('app', 'Wb Right ID'),
            'wb_right_experience' => Yii::t('app', 'Wb Right Experience'),
            'wb_right_form' => Yii::t('app', 'Wb Right Form'),
            'wb_right_stamina' => Yii::t('app', 'Wb Right Stamina'),
            'wb_right_injury_status' => Yii::t('app', 'Wb Right Injury Status'),
            'wb_right_keeper' => Yii::t('app', 'Wb Right Keeper'),
            'wb_right_playmaking' => Yii::t('app', 'Wb Right Playmaking'),
            'wb_right_passing' => Yii::t('app', 'Wb Right Passing'),
            'wb_right_winger' => Yii::t('app', 'Wb Right Winger'),
            'wb_right_defending' => Yii::t('app', 'Wb Right Defending'),
            'wb_right_scoring' => Yii::t('app', 'Wb Right Scoring'),
            'wb_right_set_pieces' => Yii::t('app', 'Wb Right Set Pieces'),
            'wb_right_loyalty' => Yii::t('app', 'Wb Right Loyalty'),
            'wb_right_mother_club' => Yii::t('app', 'Wb Right Mother Club'),
            'position_id_im_left' => Yii::t('app', 'Position Id Im Left'),
            'im_left_id' => Yii::t('app', 'Im Left ID'),
            'im_left_experience' => Yii::t('app', 'Im Left Experience'),
            'im_left_form' => Yii::t('app', 'Im Left Form'),
            'im_left_stamina' => Yii::t('app', 'Im Left Stamina'),
            'im_left_injury_status' => Yii::t('app', 'Im Left Injury Status'),
            'im_left_keeper' => Yii::t('app', 'Im Left Keeper'),
            'im_left_playmaking' => Yii::t('app', 'Im Left Playmaking'),
            'im_left_passing' => Yii::t('app', 'Im Left Passing'),
            'im_left_winger' => Yii::t('app', 'Im Left Winger'),
            'im_left_defending' => Yii::t('app', 'Im Left Defending'),
            'im_left_scoring' => Yii::t('app', 'Im Left Scoring'),
            'im_left_set_pieces' => Yii::t('app', 'Im Left Set Pieces'),
            'im_left_loyalty' => Yii::t('app', 'Im Left Loyalty'),
            'im_left_mother_club' => Yii::t('app', 'Im Left Mother Club'),
            'position_id_im_central' => Yii::t('app', 'Position Id Im Central'),
            'im_central_id' => Yii::t('app', 'Im Central ID'),
            'im_central_experience' => Yii::t('app', 'Im Central Experience'),
            'im_central_form' => Yii::t('app', 'Im Central Form'),
            'im_central_stamina' => Yii::t('app', 'Im Central Stamina'),
            'im_central_injury_status' => Yii::t('app', 'Im Central Injury Status'),
            'im_central_keeper' => Yii::t('app', 'Im Central Keeper'),
            'im_central_playmaking' => Yii::t('app', 'Im Central Playmaking'),
            'im_central_passing' => Yii::t('app', 'Im Central Passing'),
            'im_central_winger' => Yii::t('app', 'Im Central Winger'),
            'im_central_defending' => Yii::t('app', 'Im Central Defending'),
            'im_central_scoring' => Yii::t('app', 'Im Central Scoring'),
            'im_central_set_pieces' => Yii::t('app', 'Im Central Set Pieces'),
            'im_central_loyalty' => Yii::t('app', 'Im Central Loyalty'),
            'im_central_mother_club' => Yii::t('app', 'Im Central Mother Club'),
            'position_id_im_right' => Yii::t('app', 'Position Id Im Right'),
            'im_right_id' => Yii::t('app', 'Im Right ID'),
            'im_right_experience' => Yii::t('app', 'Im Right Experience'),
            'im_right_form' => Yii::t('app', 'Im Right Form'),
            'im_right_stamina' => Yii::t('app', 'Im Right Stamina'),
            'im_right_injury_status' => Yii::t('app', 'Im Right Injury Status'),
            'im_right_keeper' => Yii::t('app', 'Im Right Keeper'),
            'im_right_playmaking' => Yii::t('app', 'Im Right Playmaking'),
            'im_right_passing' => Yii::t('app', 'Im Right Passing'),
            'im_right_winger' => Yii::t('app', 'Im Right Winger'),
            'im_right_defending' => Yii::t('app', 'Im Right Defending'),
            'im_right_scoring' => Yii::t('app', 'Im Right Scoring'),
            'im_right_set_pieces' => Yii::t('app', 'Im Right Set Pieces'),
            'im_right_loyalty' => Yii::t('app', 'Im Right Loyalty'),
            'im_right_mother_club' => Yii::t('app', 'Im Right Mother Club'),
            'position_id_w_left' => Yii::t('app', 'Position Id W Left'),
            'w_left_id' => Yii::t('app', 'W Left ID'),
            'w_left_experience' => Yii::t('app', 'W Left Experience'),
            'w_left_form' => Yii::t('app', 'W Left Form'),
            'w_left_stamina' => Yii::t('app', 'W Left Stamina'),
            'w_left_injury_status' => Yii::t('app', 'W Left Injury Status'),
            'w_left_keeper' => Yii::t('app', 'W Left Keeper'),
            'w_left_playmaking' => Yii::t('app', 'W Left Playmaking'),
            'w_left_passing' => Yii::t('app', 'W Left Passing'),
            'w_left_winger' => Yii::t('app', 'W Left Winger'),
            'w_left_defending' => Yii::t('app', 'W Left Defending'),
            'w_left_scoring' => Yii::t('app', 'W Left Scoring'),
            'w_left_set_pieces' => Yii::t('app', 'W Left Set Pieces'),
            'w_left_loyalty' => Yii::t('app', 'W Left Loyalty'),
            'w_left_mother_club' => Yii::t('app', 'W Left Mother Club'),
            'position_id_w_right' => Yii::t('app', 'Position Id W Right'),
            'w_right_id' => Yii::t('app', 'W Right ID'),
            'w_right_experience' => Yii::t('app', 'W Right Experience'),
            'w_right_form' => Yii::t('app', 'W Right Form'),
            'w_right_stamina' => Yii::t('app', 'W Right Stamina'),
            'w_right_injury_status' => Yii::t('app', 'W Right Injury Status'),
            'w_right_keeper' => Yii::t('app', 'W Right Keeper'),
            'w_right_playmaking' => Yii::t('app', 'W Right Playmaking'),
            'w_right_passing' => Yii::t('app', 'W Right Passing'),
            'w_right_winger' => Yii::t('app', 'W Right Winger'),
            'w_right_defending' => Yii::t('app', 'W Right Defending'),
            'w_right_scoring' => Yii::t('app', 'W Right Scoring'),
            'w_right_set_pieces' => Yii::t('app', 'W Right Set Pieces'),
            'w_right_loyalty' => Yii::t('app', 'W Right Loyalty'),
            'w_right_mother_club' => Yii::t('app', 'W Right Mother Club'),
            'position_id_fw_left' => Yii::t('app', 'Position Id Fw Left'),
            'fw_left_id' => Yii::t('app', 'Fw Left ID'),
            'fw_left_experience' => Yii::t('app', 'Fw Left Experience'),
            'fw_left_form' => Yii::t('app', 'Fw Left Form'),
            'fw_left_stamina' => Yii::t('app', 'Fw Left Stamina'),
            'fw_left_injury_status' => Yii::t('app', 'Fw Left Injury Status'),
            'fw_left_keeper' => Yii::t('app', 'Fw Left Keeper'),
            'fw_left_playmaking' => Yii::t('app', 'Fw Left Playmaking'),
            'fw_left_passing' => Yii::t('app', 'Fw Left Passing'),
            'fw_left_winger' => Yii::t('app', 'Fw Left Winger'),
            'fw_left_defending' => Yii::t('app', 'Fw Left Defending'),
            'fw_left_scoring' => Yii::t('app', 'Fw Left Scoring'),
            'fw_left_set_pieces' => Yii::t('app', 'Fw Left Set Pieces'),
            'fw_left_loyalty' => Yii::t('app', 'Fw Left Loyalty'),
            'fw_left_mother_club' => Yii::t('app', 'Fw Left Mother Club'),
            'position_id_fw_central' => Yii::t('app', 'Position Id Fw Central'),
            'fw_central_id' => Yii::t('app', 'Fw Central ID'),
            'fw_central_experience' => Yii::t('app', 'Fw Central Experience'),
            'fw_central_form' => Yii::t('app', 'Fw Central Form'),
            'fw_central_stamina' => Yii::t('app', 'Fw Central Stamina'),
            'fw_central_injury_status' => Yii::t('app', 'Fw Central Injury Status'),
            'fw_central_keeper' => Yii::t('app', 'Fw Central Keeper'),
            'fw_central_playmaking' => Yii::t('app', 'Fw Central Playmaking'),
            'fw_central_passing' => Yii::t('app', 'Fw Central Passing'),
            'fw_central_winger' => Yii::t('app', 'Fw Central Winger'),
            'fw_central_defending' => Yii::t('app', 'Fw Central Defending'),
            'fw_central_scoring' => Yii::t('app', 'Fw Central Scoring'),
            'fw_central_set_pieces' => Yii::t('app', 'Fw Central Set Pieces'),
            'fw_central_loyalty' => Yii::t('app', 'Fw Central Loyalty'),
            'fw_central_mother_club' => Yii::t('app', 'Fw Central Mother Club'),
            'position_id_fw_right' => Yii::t('app', 'Position Id Fw Right'),
            'fw_right_id' => Yii::t('app', 'Fw Right ID'),
            'fw_right_experience' => Yii::t('app', 'Fw Right Experience'),
            'fw_right_form' => Yii::t('app', 'Fw Right Form'),
            'fw_right_stamina' => Yii::t('app', 'Fw Right Stamina'),
            'fw_right_injury_status' => Yii::t('app', 'Fw Right Injury Status'),
            'fw_right_keeper' => Yii::t('app', 'Fw Right Keeper'),
            'fw_right_playmaking' => Yii::t('app', 'Fw Right Playmaking'),
            'fw_right_passing' => Yii::t('app', 'Fw Right Passing'),
            'fw_right_winger' => Yii::t('app', 'Fw Right Winger'),
            'fw_right_defending' => Yii::t('app', 'Fw Right Defending'),
            'fw_right_scoring' => Yii::t('app', 'Fw Right Scoring'),
            'fw_right_set_pieces' => Yii::t('app', 'Fw Right Set Pieces'),
            'fw_right_loyalty' => Yii::t('app', 'Fw Right Loyalty'),
            'fw_right_mother_club' => Yii::t('app', 'Fw Right Mother Club'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUpdatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'updated_by']);
    }
}
