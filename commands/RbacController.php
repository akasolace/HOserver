<?php

namespace app\commands;

use app\models\User;
use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;
        //$auth->removeAllRules();
        $auth->removeAll();
        echo "Rimossa configurazione RBAC.\n";

        echo "Creo permessi.\n";
        // Gestione Permessi per UserFeedbackController
        $manageHoFeedback = $auth->createPermission('manageHoFeedback');
        $auth->add($manageHoFeedback);
        // Gestione Permessi per WsUserFeedbackController
        $manageWsHoFeedback = $auth->createPermission('manageWsHoFeedback');
        $auth->add($manageWsHoFeedback);

        $createWsHoFeedback = $auth->createPermission('createWsHoFeedback');
        $auth->add($createWsHoFeedback);

        //Gestione Utenti
        $manageUser = $auth->createPermission('manageUser');
        $auth->add($manageUser);

        //Aggiormaneto Utente
        $updateUser = $auth->createPermission('updateUser');
        $auth->add($updateUser);

        echo "Permessi creati:\n";
        foreach ($auth->getPermissions() as $p) {
            echo "    " . $p->name . "\n";
        }

        echo "Creo Regole.\n";
        $updateMyProfileRule = new \app\rbac\MyProfileRule();
        $auth->add($updateMyProfileRule);
        // Creo nuovo permesso
        $updateMyUser = $auth->createPermission('updateMyUser');
        $updateMyUser->ruleName = $updateMyProfileRule->name;
        $auth->add($updateMyUser);

        $auth->addChild($updateMyUser, $updateUser);

        echo "Regole create:\n";
        foreach ($auth->getRules() as $r) {
            echo "    " . $r->name . "\n";
        }

        // *** Gestione Ruoli ***
        echo "Creo Ruoli ed associo permessi.\n";

        // Ruolo hattrickOrganizerApp
        $hattrickOrganizerApp = $auth->createRole('hattrickOrganizerApp');
        $auth->add($hattrickOrganizerApp);
        $auth->addChild($hattrickOrganizerApp, $createWsHoFeedback);

        // Ruolo hattrickOrganizerTeam
        $hattrickOrganizerTeam = $auth->createRole('hattrickOrganizerTeam');
        $auth->add($hattrickOrganizerTeam);
        $auth->addChild($hattrickOrganizerTeam, $manageHoFeedback);
        $auth->addChild($hattrickOrganizerTeam, $updateMyUser);

        // Gestione Ruolo Admin
        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $manageUser);
        //$auth->addChild($admin, $updateUser);
        $auth->addChild($admin, $manageHoFeedback);
        $auth->addChild($admin, $manageWsHoFeedback);
        //$auth->addChild($admin, $hattrickOrganizerTeam);
        //$auth->addChild($admin, $hattrickOrganizerApp);

        echo "Ruoli creati e permessi associati:\n";
        foreach ($auth->getRoles() as $r) {
            echo "    " . $r->name . ":\n";
            foreach ($auth->getPermissionsByRole($r->name) as $p) {
                echo "        " . $p->name . "\n";
            }
        }

        echo "Assegnazione Ruoli ad Utenti.\n";
        foreach ($users = User::find()->all() as $user) {
            foreach ($roles = $user->getRolesArray() as $role) {
                $auth->assign($auth->getRole($role), $user->ID);
            }
        }
        echo "Assegnati Ruoli ad Utenti:\n";
        foreach ($users = User::find()->all() as $user) {
            echo "    " . $user->username . " (id=" . $user->id . "):\n";
            foreach ($auth->getRolesByUser($user->id) as $r) {
                echo "        " . $r->name . ":\n";
                foreach ($auth->getPermissionsByRole($r->name) as $p) {
                    echo "            " . $p->name . "\n";
                }
            }
        }
    }
}