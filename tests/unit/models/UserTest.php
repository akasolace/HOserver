<?php

namespace tests\unit\models;

use app\models\OldUser;

class UserTest extends \Codeception\Test\Unit
{
    public function testFindUserById()
    {
        expect_that($user = OldUser::findIdentity(100));
        expect($user->username)->equals('admin');

        expect_not(OldUser::findIdentity(999));
    }

    public function testFindUserByAccessToken()
    {
        expect_that($user = OldUser::findIdentityByAccessToken('100-token'));
        expect($user->username)->equals('admin');

        expect_not(OldUser::findIdentityByAccessToken('non-existing'));
    }

    public function testFindUserByUsername()
    {
        expect_that($user = OldUser::findByUsername('admin'));
        expect_not(OldUser::findByUsername('not-admin'));
    }

    /**
     * @depends testFindUserByUsername
     */
    public function testValidateUser($user)
    {
        $user = OldUser::findByUsername('admin');
        expect_that($user->validateAuthKey('test100key'));
        expect_not($user->validateAuthKey('test102key'));

        expect_that($user->validatePassword('admin'));
        expect_not($user->validatePassword('123456'));        
    }

}
