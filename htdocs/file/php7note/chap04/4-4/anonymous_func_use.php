<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>無名関数で使う変数に値を設定する</title>
</head>
<body>
<?php
// 無名関数で使う変数に値を設定する
$msg = "ありがとう";
$myFunc = function ($who) use ($msg){
  echo "{$who}さん、" . $msg;
};

// 実行する
$myFunc("田中");
?>
</body>
</html>
