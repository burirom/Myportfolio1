<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>配列を変数に展開する</title>
</head>
<body>
<pre>
<?php
$data = ["a987", "鈴木薫", 23];
list($id, $name, $age) = $data;
echo "会員ID: ", $id, "\n";
echo "お名前: ", $name, "\n";
echo "年齢: ", $age, "\n";
?>
</pre>
</body>
</html>
