<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>コロンで区切ったswitch構文</title>
</head>
<body>
<?php
$color = "pink"; // 色がpinkのとき
switch ($color):
  case "pink":
    $price = 120;
    break;
  case "red":
    $price = 140;
    break;
  default:
      $price = 100;
      break;
endswitch;
echo "{$color}は{$price}円";
?>
</body>
</html>
