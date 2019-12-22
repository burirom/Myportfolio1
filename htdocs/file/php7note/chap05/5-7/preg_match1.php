<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>正規表現の基本</title>
</head>
<body>
<pre>
<?php
// 探しているナンバーは「46-49」
$result1 = preg_match("/確か46-49/u", "確か49-46でした");
$result2 = preg_match("/46-49/u", "たぶん46-49だった");
$result3 = preg_match("/46-49/u", "46-49");
// 結果
var_dump($result1);
var_dump($result2);
var_dump($result3);
?>
</pre>
</body>
</html>