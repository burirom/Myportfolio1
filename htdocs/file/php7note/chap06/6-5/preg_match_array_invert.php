<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>配列を正規表現で検索する</title>
</head>
<body>
<pre>
<?php
$data = ["R5", "E2", "E6", "A8", "R1", "G8"];
$pattern = "/['A'|'R']/";
// パターンにマッチしない値を配列からすべて取り出す
$result = preg_grep($pattern, $data, PREG_GREP_INVERT);
echo "該当しない" . count($result) . "件\n";
// 値を改行で連結して文字列にする
$resultString = implode("\n", $result);
echo $resultString;
// foreach ($result as $value) {
//   echo $value , "\n";
// }
?>
</pre>
</body>
</html>
