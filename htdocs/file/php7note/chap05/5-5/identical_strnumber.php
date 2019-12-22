<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>文字列と数値を厳密に比較する</title>
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
check("7cm", "7cm");
check("7km", "7cm");
check("7人", 7);
check("PHP7", 7);
check("七", 0);
?>
</pre>
</body>
</html>
