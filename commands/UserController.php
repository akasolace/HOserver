<?php


namespace app\commands;

use yii;
use app\models\User;
use yii\console\Controller;

class UserController extends Controller
{
    public function actionInit()
    {
        Yii::$app->user->setIdentity(User::findOne(['username' => 'admin']));

        $usersArray = [
            [
                'username' => 'mistermax80',
                'roles' => 'admin',
                'password' => 'ho!2019',
                'email' => 'h@h.h',
                'aut_key' => 'ho!2019-mis',
                'access_token' => 'opeoirwqipofe-oieworiewuwo'
            ],
            [
                'username' => 'hattrick_organizer',
                'roles' => 'hattrickOrganizerApp',
                'password' => 'ho!2019',
                'email' => 'h@h.h',
                'aut_key' => 'ho!2019-hat',
                'access_token' => 'foqwij41094-d423r87oh43fuo'
            ],
            [
                'username' => 'akasolace',
                'roles' => 'hattrickOrganizerTeam',
                'password' => 'ho!2019',
                'email' => 'a@a.it',
                'aut_key' => 'ho!2019-aka',
                'access_token' => 'efoqwijeqwpo-efcdwlqiufhwi'
            ],
            [
                'username' => 'brokenelevator',
                'roles' => 'hattrickOrganizerTeam',
                'password' => 'ho!2019',
                'email' => 'b@b.it',
                'aut_key' => 'ho!2019-bro',
                'access_token' => 'eoiwjfoewjpo-fpoewfpewokfp'
            ]
        ];

        foreach ($usersArray as $u) {
            $user = new User();

            $user->username = $u['username'];
            $user->roles = $u['roles'];
            $user->password = $u['password'];
            $user->email = $u['email'];
            $user->aut_key = $u['aut_key'];
            $user->access_token = $u['access_token'];

            if ($user->validate() && $user->save()) {
                $user = User::findOne(['id' => $user->id]);
                echo "User salvato correttamente.\n";
                print_r($user->attributes);
            } elseif ($user->hasErrors()) {
                echo "Errori nel salvataggio:\n";
                print_r($user->errors);
            }
        }
    }
}