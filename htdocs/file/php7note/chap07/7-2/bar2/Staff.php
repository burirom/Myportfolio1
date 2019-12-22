<?php
// Staffクラスを定義する
class Staff {
  // クラスプロパティ
  public static $piggyBank = 0;
  // クラスメソッド
  public static function deposit(int $yen) {
    self::$piggyBank += $yen;
  }
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

  // 遅刻して罰金
  public function latePenalty(){
    // スタティックメソッドを実行
    self::deposit(1000);
  }
}
// ?>
