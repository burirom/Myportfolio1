<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>半角カナ、かなを全角カタカナに変換する</title>
</head>
<body>
<pre>
<?php
$yomi1 = "ﾌｼﾞﾔﾏｻｸﾗ";
$yomi2 = "あしがらきんたろう";
$hiragana1 = mb_convert_kana($yomi1, "KCV");
$hiragana2 = mb_convert_kana($yomi2, "KCV");
echo $hiragana1, "\n";
echo $hiragana2, "\n";
?>
</pre>
</body>
</html>
