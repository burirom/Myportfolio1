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
// ?>
