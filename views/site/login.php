<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'RAD | Вход';
$this->params['breadcrumbs'][] = $this->title;
?>

<main>
    <section>
      <form action="be.php" method="post">
        <h1>Авторизация</h1>
        <article>
          <a href="#"><img src="img/logo/facebook.png" alt="FACEBOOK_logo"></a>
          <a href="#"><img src="img/logo/google.png" alt="GOOGLE_logo"></a>
          <a href="#"><img src="img/logo/vk.png" alt="VK_logo"></a>
        </article>   
        <input type="text" name="login" placeholder="ЛОГИН" required pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$">
        <input type="password" name="password" placeholder="ПАРОЛЬ" required pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
        <input type="submit" name="vhod" required>     
      </form>
    </section>
    
    <section>
      <form action="be.php" method="post">
        <h1>Регистрация</h1>
        <input type="text" name="login" placeholder="ЛОГИН" required pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$"> 
        <input type="email" name="pochta" placeholder="ПОЧТА" required pattern="^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$">
        <input type="password" name="password" placeholder="ПАРОЛЬ" required pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
        <input type="submit" name="vhod" placeholder="Зарегистрироваться" required>
      </form>
    </section>
  </main>
