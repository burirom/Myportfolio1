<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>比較演算子で文字列の大小を比較する</title>
</head>
<body>
<pre>
<?php
function compare($a, $b){
  if($a < $b){
    echo "{$a}、{$b}の順。\n";
  } else if($a == $b){
    echo "{$a}と{$b}は同じ。\n";
  } else if($a > $b){
    echo "{$b}、{$a}の順。\n";
  }
}
// 文字列と数値を比較する
compare("120", 99);
compare("-1A", 0);
// $numをString型にキャストして比較する
$num = 99;
compare("A5", (string)$num);
?>
</pre>
</body>
</html>
