<?php
function charge($rank, $days=1) {
  switch ($rank){
    case "A":
      $ryoukin = 15000 * $days;
      break;
    case "B":
      $ryoukin = 12000 * $days;
      break;
    default:
      $ryoukin = 8000 * $days;
      break;
  }
  return $ryoukin;
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>ユーザ定義関数を使って計算する</title>
</head>
<body>
<?php
// ランク、宿泊数ともに省略した場合
$kingaku3 = charge();
echo "金額3は{$kingaku3}円";
?>
</body>
</html>
