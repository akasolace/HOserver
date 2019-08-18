<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],

            // Admin Tool
            Yii::$app->user->can('admin') ? (
            ['label' => 'Gii', 'url' => ['/gii']]
            ) : (''),

            // Hattrick Menu
            Yii::$app->user->can('manageUser') ? (
            ['label' => 'User', 'url' => ['/user']]
            ) : (''),

            Yii::$app->user->can('manageHoFeedback') ? (
            ['label' => 'HO Feedback', 'url' => ['/ho-feedback']]
            ) : (''),

            Yii::$app->user->can('manageHoFeedback') ? (
            ['label' => 'HO Feedback View Result', 'url' => ['/ho-feedback-result-view']]
            ) : (''),

            Yii::$app->user->can('manageWsHoFeedback') ? (
            ['label' => 'Test - WS Ho Feedback', 'url' => ['/ws-ho-feedbacks']]
            ) : (''),

            // User menu
            !Yii::$app->user->isGuest ? (
            (Yii::$app->user->can('updateUser',['id' => Yii::$app->user->identity->getId()]) || Yii::$app->user->can('manageUser'))? (
                ['label' => 'My Profile', 'url' => ['/user/update?id='.Yii::$app->user->identity->getId()]]
            ) : ('')
            ) : (''),

            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            //['label' => 'About', 'url' => ['/site/about']],
            //['label' => 'Contact', 'url' => ['/site/contact']],
            ),
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
