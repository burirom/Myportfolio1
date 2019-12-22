<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>文字列の前後にある不要な文字を取り除く</title>
</head>
<body>
<pre>
<?php
$msg = "\tHello World!!   \n\n";
$result = trim($msg);
echo "処理前:\n";
echo "[", $msg, "]\n";
echo "処理後:\n";
echo "[", $result, "]\n";
?>
</pre>
</body>
</html>
