<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>配列の要素で関数を繰り返し実行する</title>
</head>
<body>

<?php
// 通貨換算してリスト表示するコールバック関数
function exchangeList($value, $key, $rateData){
  // レート換算する
  $rate = $rateData["rate"];
  if ($rate == 0) {
    return;
  }
  $price = $value/$rate;
  // 下２桁まで表示する書式に変換する
  $exPrice = sprintf('%.02f', $price);
  // <li>タグと通貨シンボルを付けてリスト形式で表示する
  echo "<li>", $rateData["symbol"], $exPrice, "</li>";
}

// 円での値段
$priceList = [2300, 1200, 4000];
// 円／ドルのレート
$dollaryen = ["symbol"=>'$', "rate"=>112.50];
// 通貨換算してリスト表示する
echo "<ul>";
array_walk($priceList, "exchangeList", $dollaryen);
echo "</ul>";
print_r($result);
?>

</body>
</html>
