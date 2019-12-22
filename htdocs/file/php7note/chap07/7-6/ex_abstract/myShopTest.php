<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>MyShopクラスを読み込んで試す</title>
</head>
<body>
<pre>
<?php
  // MyShopクラスファイルを読み込む
  require_once("MyShop.php");
  // MyShopクラスのインスタンスを作って試す
  $myObj = new MyShop();
  $myObj->hanbai(240, 3);
  $myObj->hanbai(400, 1);
  $myObj->getUriage();
?>
</pre>
</body>
</html>
