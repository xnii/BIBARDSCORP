<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error container">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
       Произошла ошибка. Попробуйте еще раз. Но у вас все равано ничего не выйдет 

    </p>
    <p>
        Если ошибка не устранилась, позвоните Нам на горячую линию. Спасибо ИДИТЕ НАХУЙ

    </p>

</div>
