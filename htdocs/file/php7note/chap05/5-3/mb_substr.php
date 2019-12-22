<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>途中の文字を取り出す</title>
</head>
<body>
<pre>
<?php
$msg = "我輩は猫である。名前はまだない。";
echo mb_strlen($msg), "\n"; // 文字数
echo mb_substr($msg, 4), "\n"; // 5文字目から最後まで
echo mb_substr($msg, 4, 10), "\n"; // 5文字目から10文字
echo mb_substr($msg, -6); // 最後から6文字
?>
</pre>
</body>
</html>
