<?php
// Staffクラスを定義する
class Staff {
  // インスタンスプロパティ
  public $name;
  public $age;

  // コンストラクタ
  function __construct($name, $age){
    // プロパティに初期値を設定する
    $this->name = $name;
    $this->age = $age;
  }

  // インスタンスメソッド
  public function hello() {
    if (is_null($this->name)) {
      echo "こんにちは！", "\n";
    } else {
      echo "こんにちは、{$this->name}です！", "\n";
    }
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>コンストラクタがあるクラスを利用する</title>
</head>
<body>
<pre>
<?php
  // Staffクラスのインスタンスを作る
  $hana = new Staff("花", 21);
  $taro = new Staff("太郎", 35);
  // メソッドを実行する
  $hana->hello();
  $taro->hello();
?>
</pre>
</body>
</html>
