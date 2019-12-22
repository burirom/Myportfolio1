<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>名前のリスト</title>
</head>
<body>
<pre>
<?php
$teamA = ["赤井一郎", "伊藤五郎", "上野信二"];
// インデックス番号1の値を変更する
$teamA[1] = "石丸四郎";
echo $teamA[0], "さん\n";
echo $teamA[1], "さん\n";
echo $teamA[2], "さん\n";
?>
</pre>
</body>
</html>
