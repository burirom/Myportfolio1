<?php
// Staffクラスを定義する
class Staff {
  // インスタンスプロパティ
  public $name;
  public $age;

  // インスタンスメソッド
  public function hello() {
    echo "こんにちは！", "\n";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>クラスを定義する</title>
</head>
<body>
<pre>
<?php
  // Staffクラスのインスタンスを作る
  $hana = new Staff();
  $taro = new Staff();
  // プロパティの値を設定する
  $hana->name = "花";
  $hana->age = 21;
  $taro->name = "太郎";
  $taro->age = 35;
  // インスタンスを確認する
  print_r($hana);
  print_r($taro);
  // メソッドを実行する
  $hana->hello();
  $taro->hello();
?>
</pre>
</body>
</html>
