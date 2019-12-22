<?php
// Playerクラス定義ファイルを読み込む
require_once("Player.php");
// Runnerクラスを定義する
class Runner extends Player {
  // プロパティ
  public $age;

  // コンストラクタ
  function __construct($name, $age){
    // 親クラスのコンストラクタを呼ぶ
    parent::__construct($name);
    // プロパティに初期値を設定する
    $this->age = $age;
  }

  // インスタンスメソッド
  public function play() {
    echo "{$this->name}が走る！", "\n";
  }
}
// ?>
