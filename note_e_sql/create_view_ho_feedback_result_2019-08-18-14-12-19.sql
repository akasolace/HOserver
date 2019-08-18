create view yii2_ho_feedback_result_view as (
select feedback.id,
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
       skill.*from yii2_ho_feedback feedback
         left join yii2_ho_feedback_system_info sys_info on feedback.id = sys_info.id_ho_feedback
         left join yii2_ho_feedback_rating rating on feedback.id = rating.id_ho_feedback
         left join yii2_ho_feedback_position position on feedback.id = position.id_ho_feedback
left join (select
    position.id_ho_feedback
    ,position.id_gk as position_id_gk
    ,gk.id as gk_id
    ,gk.experience as gk_experience
    ,gk.form as gk_form
    ,gk.stamina as gk_stamina
    ,gk.injury_status as gk_injury_status
    ,gk.keeper as gk_keeper
    ,gk.playmaking as gk_playmaking
    ,gk.passing as gk_passing
    ,gk.winger as gk_winger
    ,gk.defending as gk_defending
    ,gk.scoring as gk_scoring
    ,gk.set_pieces as gk_set_pieces
    ,gk.loyalty as gk_loyalty
    ,gk.mother_club as gk_mother_club
    ,position.id_cd_left as position_id_cd_left
    ,cd_left.id as cd_left_id
    ,cd_left.experience as cd_left_experience
    ,cd_left.form as cd_left_form
    ,cd_left.stamina as cd_left_stamina
    ,cd_left.injury_status as cd_left_injury_status
    ,cd_left.keeper as cd_left_keeper
    ,cd_left.playmaking as cd_left_playmaking
    ,cd_left.passing as cd_left_passing
    ,cd_left.winger as cd_left_winger
    ,cd_left.defending as cd_left_defending
    ,cd_left.scoring as cd_left_scoring
    ,cd_left.set_pieces as cd_left_set_pieces
    ,cd_left.loyalty as cd_left_loyalty
    ,cd_left.mother_club as cd_left_mother_club
    ,position.id_cd_central as position_id_cd_central
    ,cd_central.id as cd_central_id
    ,cd_central.experience as cd_central_experience
    ,cd_central.form as cd_central_form
    ,cd_central.stamina as cd_central_stamina
    ,cd_central.injury_status as cd_central_injury_status
    ,cd_central.keeper as cd_central_keeper
    ,cd_central.playmaking as cd_central_playmaking
    ,cd_central.passing as cd_central_passing
    ,cd_central.winger as cd_central_winger
    ,cd_central.defending as cd_central_defending
    ,cd_central.scoring as cd_central_scoring
    ,cd_central.set_pieces as cd_central_set_pieces
    ,cd_central.loyalty as cd_central_loyalty
    ,cd_central.mother_club as cd_central_mother_club
    ,position.id_cd_right as position_id_cd_right
    ,cd_right.id as cd_right_id
    ,cd_right.experience as cd_right_experience
    ,cd_right.form as cd_right_form
    ,cd_right.stamina as cd_right_stamina
    ,cd_right.injury_status as cd_right_injury_status
    ,cd_right.keeper as cd_right_keeper
    ,cd_right.playmaking as cd_right_playmaking
    ,cd_right.passing as cd_right_passing
    ,cd_right.winger as cd_right_winger
    ,cd_right.defending as cd_right_defending
    ,cd_right.scoring as cd_right_scoring
    ,cd_right.set_pieces as cd_right_set_pieces
    ,cd_right.loyalty as cd_right_loyalty
    ,cd_right.mother_club as cd_right_mother_club
    ,position.id_wb_left as position_id_wb_left
    ,wb_left.id as wb_left_id
    ,wb_left.experience as wb_left_experience
    ,wb_left.form as wb_left_form
    ,wb_left.stamina as wb_left_stamina
    ,wb_left.injury_status as wb_left_injury_status
    ,wb_left.keeper as wb_left_keeper
    ,wb_left.playmaking as wb_left_playmaking
    ,wb_left.passing as wb_left_passing
    ,wb_left.winger as wb_left_winger
    ,wb_left.defending as wb_left_defending
    ,wb_left.scoring as wb_left_scoring
    ,wb_left.set_pieces as wb_left_set_pieces
    ,wb_left.loyalty as wb_left_loyalty
    ,wb_left.mother_club as wb_left_mother_club
    ,position.id_wb_right as position_id_wb_right
    ,wb_right.id as wb_right_id
    ,wb_right.experience as wb_right_experience
    ,wb_right.form as wb_right_form
    ,wb_right.stamina as wb_right_stamina
    ,wb_right.injury_status as wb_right_injury_status
    ,wb_right.keeper as wb_right_keeper
    ,wb_right.playmaking as wb_right_playmaking
    ,wb_right.passing as wb_right_passing
    ,wb_right.winger as wb_right_winger
    ,wb_right.defending as wb_right_defending
    ,wb_right.scoring as wb_right_scoring
    ,wb_right.set_pieces as wb_right_set_pieces
    ,wb_right.loyalty as wb_right_loyalty
    ,wb_right.mother_club as wb_right_mother_club
    ,position.id_im_left as position_id_im_left
    ,im_left.id as im_left_id
    ,im_left.experience as im_left_experience
    ,im_left.form as im_left_form
    ,im_left.stamina as im_left_stamina
    ,im_left.injury_status as im_left_injury_status
    ,im_left.keeper as im_left_keeper
    ,im_left.playmaking as im_left_playmaking
    ,im_left.passing as im_left_passing
    ,im_left.winger as im_left_winger
    ,im_left.defending as im_left_defending
    ,im_left.scoring as im_left_scoring
    ,im_left.set_pieces as im_left_set_pieces
    ,im_left.loyalty as im_left_loyalty
    ,im_left.mother_club as im_left_mother_club
    ,position.id_im_central as position_id_im_central
    ,im_central.id as im_central_id
    ,im_central.experience as im_central_experience
    ,im_central.form as im_central_form
    ,im_central.stamina as im_central_stamina
    ,im_central.injury_status as im_central_injury_status
    ,im_central.keeper as im_central_keeper
    ,im_central.playmaking as im_central_playmaking
    ,im_central.passing as im_central_passing
    ,im_central.winger as im_central_winger
    ,im_central.defending as im_central_defending
    ,im_central.scoring as im_central_scoring
    ,im_central.set_pieces as im_central_set_pieces
    ,im_central.loyalty as im_central_loyalty
    ,im_central.mother_club as im_central_mother_club
    ,position.id_im_right as position_id_im_right
    ,im_right.id as im_right_id
    ,im_right.experience as im_right_experience
    ,im_right.form as im_right_form
    ,im_right.stamina as im_right_stamina
    ,im_right.injury_status as im_right_injury_status
    ,im_right.keeper as im_right_keeper
    ,im_right.playmaking as im_right_playmaking
    ,im_right.passing as im_right_passing
    ,im_right.winger as im_right_winger
    ,im_right.defending as im_right_defending
    ,im_right.scoring as im_right_scoring
    ,im_right.set_pieces as im_right_set_pieces
    ,im_right.loyalty as im_right_loyalty
    ,im_right.mother_club as im_right_mother_club
    ,position.id_w_left as position_id_w_left
    ,w_left.id as w_left_id
    ,w_left.experience as w_left_experience
    ,w_left.form as w_left_form
    ,w_left.stamina as w_left_stamina
    ,w_left.injury_status as w_left_injury_status
    ,w_left.keeper as w_left_keeper
    ,w_left.playmaking as w_left_playmaking
    ,w_left.passing as w_left_passing
    ,w_left.winger as w_left_winger
    ,w_left.defending as w_left_defending
    ,w_left.scoring as w_left_scoring
    ,w_left.set_pieces as w_left_set_pieces
    ,w_left.loyalty as w_left_loyalty
    ,w_left.mother_club as w_left_mother_club
    ,position.id_w_right as position_id_w_right
    ,w_right.id as w_right_id
    ,w_right.experience as w_right_experience
    ,w_right.form as w_right_form
    ,w_right.stamina as w_right_stamina
    ,w_right.injury_status as w_right_injury_status
    ,w_right.keeper as w_right_keeper
    ,w_right.playmaking as w_right_playmaking
    ,w_right.passing as w_right_passing
    ,w_right.winger as w_right_winger
    ,w_right.defending as w_right_defending
    ,w_right.scoring as w_right_scoring
    ,w_right.set_pieces as w_right_set_pieces
    ,w_right.loyalty as w_right_loyalty
    ,w_right.mother_club as w_right_mother_club
    ,position.id_fw_left as position_id_fw_left
    ,fw_left.id as fw_left_id
    ,fw_left.experience as fw_left_experience
    ,fw_left.form as fw_left_form
    ,fw_left.stamina as fw_left_stamina
    ,fw_left.injury_status as fw_left_injury_status
    ,fw_left.keeper as fw_left_keeper
    ,fw_left.playmaking as fw_left_playmaking
    ,fw_left.passing as fw_left_passing
    ,fw_left.winger as fw_left_winger
    ,fw_left.defending as fw_left_defending
    ,fw_left.scoring as fw_left_scoring
    ,fw_left.set_pieces as fw_left_set_pieces
    ,fw_left.loyalty as fw_left_loyalty
    ,fw_left.mother_club as fw_left_mother_club
    ,position.id_fw_central as position_id_fw_central
    ,fw_central.id as fw_central_id
    ,fw_central.experience as fw_central_experience
    ,fw_central.form as fw_central_form
    ,fw_central.stamina as fw_central_stamina
    ,fw_central.injury_status as fw_central_injury_status
    ,fw_central.keeper as fw_central_keeper
    ,fw_central.playmaking as fw_central_playmaking
    ,fw_central.passing as fw_central_passing
    ,fw_central.winger as fw_central_winger
    ,fw_central.defending as fw_central_defending
    ,fw_central.scoring as fw_central_scoring
    ,fw_central.set_pieces as fw_central_set_pieces
    ,fw_central.loyalty as fw_central_loyalty
    ,fw_central.mother_club as fw_central_mother_club
    ,position.id_fw_right as position_id_fw_right
    ,fw_right.id as fw_right_id
    ,fw_right.experience as fw_right_experience
    ,fw_right.form as fw_right_form
    ,fw_right.stamina as fw_right_stamina
    ,fw_right.injury_status as fw_right_injury_status
    ,fw_right.keeper as fw_right_keeper
    ,fw_right.playmaking as fw_right_playmaking
    ,fw_right.passing as fw_right_passing
    ,fw_right.winger as fw_right_winger
    ,fw_right.defending as fw_right_defending
    ,fw_right.scoring as fw_right_scoring
    ,fw_right.set_pieces as fw_right_set_pieces
    ,fw_right.loyalty as fw_right_loyalty
    ,fw_right.mother_club as fw_right_mother_club
from yii2_ho_feedback_position position
    left join (select * from yii2_ho_feedback_player player) gk on gk.id = position.id_gk
    left join (select * from yii2_ho_feedback_player player) cd_left on cd_left.id = position.id_cd_left
    left join (select * from yii2_ho_feedback_player player) cd_central on cd_central.id = position.id_cd_central
    left join (select * from yii2_ho_feedback_player player) cd_right on cd_right.id = position.id_cd_right
    left join (select * from yii2_ho_feedback_player player) wb_left on wb_left.id = position.id_wb_left
    left join (select * from yii2_ho_feedback_player player) wb_right on wb_right.id = position.id_wb_right
    left join (select * from yii2_ho_feedback_player player) im_left on im_left.id = position.id_im_left
    left join (select * from yii2_ho_feedback_player player) im_central on im_central.id = position.id_im_central
    left join (select * from yii2_ho_feedback_player player) im_right on im_right.id = position.id_im_right
    left join (select * from yii2_ho_feedback_player player) w_left on w_left.id = position.id_w_left
    left join (select * from yii2_ho_feedback_player player) w_right on w_right.id = position.id_w_right
    left join (select * from yii2_ho_feedback_player player) fw_left on fw_left.id = position.id_fw_left
    left join (select * from yii2_ho_feedback_player player) fw_central on fw_central.id = position.id_fw_central
    left join (select * from yii2_ho_feedback_player player) fw_right on fw_right.id = position.id_fw_right) skill on feedback.id = skill.id_ho_feedback);

