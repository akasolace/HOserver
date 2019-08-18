<?php


namespace app\commands;


use yii\console\Controller;
use Yii;

class UtilHoFeedbackController extends Controller
{
    public function actionCreateSqlHoResultView()
    {
        $roles_player = array('gk', 'cd_left', 'cd_central', 'cd_right', 'wb_left', 'wb_right', 'im_left', 'im_central', 'im_right', 'w_left', 'w_right', 'fw_left', 'fw_central', 'fw_right');
        $data_player = array('id', 'experience', 'form', 'stamina', 'keeper', 'playmaking', 'passing', 'winger', 'defending', 'scoring', 'set_pieces', 'loyalty', 'mother_club');
        echo "**** Avvio: CreateSqlFinalView ****\n";

        $sql = "create view yii2_ho_feedback_result_view as (\n";
        $sql .= "select feedback.id,
       feedback.created_at,
       feedback.updated_at,
       feedback.created_by,
       feedback.updated_by,
       feedback.elaborated,
       feedback.manual_elaboration,
       sys_info.os,
       sys_info.ho_version,
       sys_info.java_version,
       sys_info.ho_token,
       sys_info.lineupName,
       rating.leftDefense,
       rating.centralDefense,
       rating.rightDefense,
       rating.midfield,
       rating.leftAttack,
       rating.centralAttack,
       rating.rightAttack,
       rating.tacticType,
       rating.tacticSkill,
       rating.attitude,
       rating.style_of_play,
       skill.*";
        $sql .= "from yii2_ho_feedback feedback
         left join yii2_ho_feedback_system_info sys_info on feedback.id = sys_info.id_ho_feedback
         left join yii2_ho_feedback_rating rating on feedback.id = rating.id_ho_feedback
         left join yii2_ho_feedback_position position on feedback.id = position.id_ho_feedback
left join (";
        $sql .= "select\n";
        $sql .= "    position.id_ho_feedback\n";
        foreach ($roles_player as $r) {
            $sql .= "    ,position.id_" . $r . " as position_id_" . $r . "\n";
            foreach ($data_player as $d) {
                $sql .= "    ," . $r . "." . $d . " as " . $r . "_" . $d . "\n";
            }
        }
        $sql .= "from yii2_ho_feedback_position position";
        foreach ($roles_player as $r) {
            $sql .= "\n    left join (select * from yii2_ho_feedback_player player) " . $r . " on " . $r . ".id = position.id_" . $r;
        }
        $sql .= ") skill on feedback.id = skill.id_ho_feedback);\n\n";

        $file = Yii::getAlias('@app/note_e_sql/create_view_ho_feedback_result_' . date("Y-m-d-H:i:s") . '.sql');
        $fp = fopen($file, 'w+');
        fwrite($fp, $sql);
        fclose($fp);
        echo "Scritto file: " . $file;
        echo "**** Fine: CreateSqlFinalView ****\n";
    }
}