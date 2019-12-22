<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>連想配列から値を取り出す</title>
</head>
<body>
<pre>
<?php
$goods = [
  'id' => 'R56',
  'size' => 'M',
  'price' => 2340
];
echo "id：" . $goods['id'] . "\n";
echo "サイズ：" . $goods['size'] . "\n";
echo "価格：" . number_format($goods['price']) . "円\n";
?>
</pre>
</body>
</html>
