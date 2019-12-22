<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>文字列と数値を比較する</title>
</head>
<body>
<pre>
<?php
function check($a, $b){
  if($a === $b){
    echo "{$a}と{$b}は", "同じ。\n";
  } else {
    echo "{$a}と{$b}は", "違う。\n";
  }
}
// 試す
check("7あ", "7あ");
check("7km", "7");
check("7人", 7);
check("PHP7", 7);
check("七", 7);
?>
</pre>
</body>
</html>
