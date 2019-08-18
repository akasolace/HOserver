<?php


namespace app\models;


use app\models\base\HoFeedbackBase;
use Yii;
use yii\helpers\Json;

class HoFeedback extends HoFeedbackBase
{
    public function elaborateJsonObjects(String $hoToken)
    {
        $result = new HoFeedbackResult();
        $result->hoToken = $hoToken;
        $result->idFeedback = $this->id;

        $jsonObjects = Json::decode($this->json_objects);

        //System Info
        if ($jsonObjects != '' && isset($jsonObjects) && isset($jsonObjects["systemInfo"]) && is_array($jsonObjects["systemInfo"])) {
            if ($this->hoFeedbackSystemInfo == null) {
                $systemInfo = new HoFeedbackSystemInfo();
                $systemInfo->id_ho_feedback = $this->id;
            } else {
                $systemInfo = $this->hoFeedbackSystemInfo;
            }
            $systemInfo->os = $jsonObjects["systemInfo"]["OS"];
            $systemInfo->java_version = $jsonObjects["systemInfo"]["Java Version"];
            $systemInfo->ho_version = $jsonObjects["systemInfo"]["HO! Version"];
            $systemInfo->ho_token = $jsonObjects["systemInfo"]["HO-Token"];
            $systemInfo->lineupName = $jsonObjects["systemInfo"]["lineupName"];
            if ($systemInfo->save()) {
                Yii::info($systemInfo::className() . ' Saved successfully.');
                $result->idSysInfo = $systemInfo->id;
            } elseif ($systemInfo->hasErrors()) {
                $errors = print_r($systemInfo->errors, true);
                Yii::error('Errors during save ' . $systemInfo::className() . ' Errors:' . $errors);
            }
        }

        // Rating
        if ($jsonObjects != '' && isset($jsonObjects) && isset($jsonObjects["rating"]) && is_array($jsonObjects["rating"])) {
            if ($this->hoFeedbackRating == null) {
                $rating = new HoFeedbackRating();
                $rating->id_ho_feedback = $this->id;
            } else {
                $rating = $this->hoFeedbackRating;
            }
            $rating->leftDefense = $jsonObjects["rating"]["leftDefense"];
            $rating->centralDefense = $jsonObjects["rating"]["centralDefense"];
            $rating->rightDefense = $jsonObjects["rating"]["rightDefense"];
            $rating->midfield = $jsonObjects["rating"]["midfield"];
            $rating->leftAttack = $jsonObjects["rating"]["leftAttack"];
            $rating->centralAttack = $jsonObjects["rating"]["centralAttack"];
            $rating->rightAttack = $jsonObjects["rating"]["rightAttack"];
            $rating->tacticType = $jsonObjects["rating"]["tacticType"];
            $rating->tacticSkill = $jsonObjects["rating"]["tacticSkill"];
            $rating->attitude = $jsonObjects["rating"]["attitude"];
            $rating->style_of_play = $jsonObjects["rating"]["style_of_play"];

            if ($rating->save()) {
                Yii::info($rating::className() . ' Saved successfully.');
                $result->idRating = $rating->id;
            } elseif ($rating->hasErrors()) {
                $errors = print_r($rating->errors, true);
                Yii::error('Errors during save ' . $rating::className() . ' Errors:' . $errors);
            }
        }

        // Players
        if (isset($this->hoFeedbackPosition)) {
            $this->hoFeedbackPosition->delete();
        }
        if ($jsonObjects != '' && isset($jsonObjects) && isset($jsonObjects["playerList"]) && is_array($jsonObjects["playerList"])) {
            foreach ($this->hoFeedbackPlayers as $p) {
                $p->delete();
            }

            foreach ($jsonObjects["playerList"] as $p) {
                $player = new HoFeedbackPlayer();
                $player->id_ho_feedback = $this->id;

                $player->playerID = $p["m_iSpielerID"];
                $player->experience = $p["m_iErfahrung"];
                $player->form = $p["m_iForm"];
                $player->stamina = $p["m_iKondition"];
                $player->keeper = $p["m_iTorwart"];
                $player->keeper += $p["m_dSubTorwart"];
                $player->playmaking = $p["m_iSpielaufbau"];
                $player->playmaking += $p["m_dSubSpielaufbau"];
                $player->passing = $p["m_iPasspiel"];
                $player->passing += $p["m_dSubPasspiel"];
                $player->winger = $p["m_iFluegelspiel"];
                $player->winger += $p["m_dSubFluegelspiel"];
                $player->defending = $p["m_iVerteidigung"];
                $player->defending += $p["m_dSubVerteidigung"];
                $player->scoring = $p["m_iTorschuss"];
                $player->scoring += $p["m_dSubTorschuss"];
                $player->set_pieces = $p["m_iStandards"];
                $player->set_pieces += $p["m_dSubStandards"];
                $player->loyalty = $p["m_iLoyalty"];
                $player->mother_club = $p["m_bHomeGrown"] ? (1) : (0);

                if ($player->save()) {
                    Yii::info($player::className() . ' Saved successfully.');
                    $result->idRating = $player->id;
                } elseif ($player->hasErrors()) {
                    $errors = print_r($player->errors, true);
                    Yii::error('Errors during save ' . $player::className() . ' Errors:' . $errors);
                }
            }
        }

        // Positions
        if ($jsonObjects != '' && isset($jsonObjects) && isset($jsonObjects["playerList"]) && is_array($jsonObjects["m_vPositionen"])) {
            if ($this->hoFeedbackPosition == null) {
                $position = new HoFeedbackPosition();
                $position->id_ho_feedback = $this->id;
            } else {
                $position = $this->hoFeedbackPosition;
            }

            // todo add the Player Behaviour core/model/player/IMatchRoleID.java
            foreach ($jsonObjects["m_vPositionen"] as $p) {
                $idPlayer = 0;
                if ($p["m_iSpielerId"] != 0) {
                    $pl = HoFeedbackPlayer::findOne(['id_ho_feedback' => $this->id, 'playerID' => $p["m_iSpielerId"]]);
                    if (isset($pl)) {
                        $idPlayer = $pl->id;
                    }
                }
                switch ($p["m_iId"]) {
                    case 100:
                        if ($idPlayer != 0) {
                            $position->id_gk = $idPlayer;
                        }
                        break;
                    case 101:
                        if ($idPlayer != 0) {
                            $position->id_wb_right = $idPlayer;
                        }
                        break;
                    case 102:
                        if ($idPlayer != 0) {
                            $position->id_cd_right = $idPlayer;
                        }
                        break;
                    case 103:
                        if ($idPlayer != 0) {
                            $position->id_cd_central = $idPlayer;
                        }
                        break;
                    case 104:
                        if ($idPlayer != 0) {
                            $position->id_cd_left = $idPlayer;
                        }
                        break;
                    case 105:
                        if ($idPlayer != 0) {
                            $position->id_wb_left = $idPlayer;
                        }
                        break;
                    case 106:
                        if ($idPlayer != 0) {
                            $position->id_w_right = $idPlayer;
                        }
                        break;
                    case 107:
                        if ($idPlayer != 0) {
                            $position->id_im_right = $idPlayer;
                        }
                        break;
                    case 108:
                        if ($idPlayer != 0) {
                            $position->id_im_central = $idPlayer;
                        }
                        break;
                    case 109:
                        if ($idPlayer != 0) {
                            $position->id_im_left = $idPlayer;
                        }
                        break;
                    case 110:
                        if ($idPlayer != 0) {
                            $position->id_w_left = $idPlayer;
                        }
                        break;
                    case 111:
                        if ($idPlayer != 0) {
                            $position->id_fw_right = $idPlayer;
                        }
                        break;
                    case 112:
                        if ($idPlayer != 0) {
                            $position->id_fw_central = $idPlayer;
                        }
                        break;
                    case 113:
                        if ($idPlayer != 0) {
                            $position->id_fw_left = $idPlayer;
                        }
                        break;
                    default:
                        break;
                }
            }

            if ($position->save()) {
                Yii::info($position::className() . ' Saved successfully.');
                $result->idPosition = $position->id;
            } elseif ($position->hasErrors()) {
                $errors = print_r($position->errors, true);
                Yii::error('Errors during save ' . $position::className() . ' Errors:' . $errors);
            }
        }

        $this->elaborated = 1;
        $this->save();

        return $result;
    }

    public function beforeSave($insert)
    {
        if (!parent::beforeSave($insert)) {
            return false;
        }
        if ($this->created_by == '') {
            $this->created_by = Yii::$app->user->identity->getId();
        }
        $this->updated_by = Yii::$app->user->identity->getId();

        return true;
    }
}