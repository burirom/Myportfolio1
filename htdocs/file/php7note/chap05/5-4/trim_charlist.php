<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>前後にある全角空白と改行を削除する</title>
</head>
<body>
<pre>
<?php
$msg = "　東京都千代田区　\n\n";
$result = trim($msg, "\x20\t\n\r\0\v　");
echo "処理前:\n";
echo "[", $msg, "]\n";
echo "処理後:\n";
echo "[", $result, "]\n";
?>
</pre>
</body>
</html>
