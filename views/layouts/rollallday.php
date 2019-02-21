<?php 
    use yii\helpers\Html;
    use app\assets\AppAsset;
    AppAsset::register($this);
    $this -> BeginPage();
?>
<!DOCTYPE html>
<html lang="<?=Yii::$app -> language ?> ">
<head>
  <title><?=  Html::encode($this -> title)?></title>
  <meta charset="<?=Yii::$app -> charset ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="shortcut icon" href="img/logo/logo.png" type="image/x-icon">
  <?=  Html::csrfMetatags() ?>
  <?php $this -> head(); ?>
</head>
<body>
    <?php $this -> BeginBody(); ?>
  <header>
    <nav>
      <ul>
        <li><a href="index.html">RollAllDay</a></li>
        <li><a href="error.html">Барахолка</a></li>
        <li><a href="error.html">Статьи</a></li>
        <li><a href="error.html">Новости</a></li>
        <li><a href="error.html">Медиа</a></li>
        <li><a href="error.html">Споты</a></li>
        <li><a href="reg.html">Вход</a></li>
      </ul>
    </nav>
  </header>
  <?= $content ?>
  <footer>
    <section>
      <h1>Полезные ресурсы:</h1>
      <ul>
        <li><a href="http://hellride.ru" target="_blank">hellride.ru</a></li>
        <li><a href="http://veloremont.ru" target="_blank">veloremont.ru</a></li>
        <li><a href="http://mtbstickers.ru" target="_blank">mtbstickers.ru</a></li>
      </ul>
    </section>
    <section>
      <h1>
        RollAllDay в других соцсетях, присоединяйся, райдер!
      </h1>
      <a href="#" target="_blank" ><img src="img/logo/facebook.png" alt="FACEBOOKlogo"></a>
      <a href="https://www.youtube.com/user/RollAllDayFF" target="_blank" ><img src="img/logo/youtube.png" alt="YTlogo" ></a>
      <a href="#" target="_blank"><img src="img/logo/telegram.png" alt="TELEGRAMlogo"></a>
      <a href="#" target="_blank"><img src="img/logo/instagram.png" alt="INSTAGRAMlogo"></a>
      <a href="#" target="_blank"><img src="img/logo/twitter.png" alt="TWITTERlogo"></a>
      <a href="https://vk.com/rollallday" target="_blank"><img src="img/logo/vk.png" alt="VKlogo"></a>
    </section>
  </footer>
  <?php $this -> EndBody(); ?>
</body>
</html>
<?php $this -> EndPage(); ?>
