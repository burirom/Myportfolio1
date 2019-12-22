<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>MyGameクラスを読み込んで遊ぶ</title>
</head>
<body>
<pre>
<?php
  // MyGameクラスファイルを読み込む
  require_once("MyGame.php");
  // MyGameクラスのインスタンスを作る
  $myPlayer = new MyGame();
  for ($i=0; $i<10; $i++){
    $myPlayer->play();
    if (! $myPlayer->isAlive()) {
      break;
    }
  }
  echo "ゲーム終了", "\n";
?>
</pre>
</body>
</html>
