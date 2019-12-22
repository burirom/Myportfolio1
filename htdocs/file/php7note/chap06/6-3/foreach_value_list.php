<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>配列から順に値を取り出す</title>
</head>
<body>
<?php
$namelist = ["赤井一郎", "伊藤五郎", "上野信二"];
echo "<ol>", "\n";
// 配列から順に値を取り出す
foreach($namelist as $value){
  echo "<li>", $value, "さん</li>\n";
}
echo "</ol>\n";
?>
</body>
</html>
