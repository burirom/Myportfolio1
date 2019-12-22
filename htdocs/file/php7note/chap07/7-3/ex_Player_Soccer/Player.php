<?php
// Playerクラスを定義する
class Player {
  // インスタンスプロパティ
  public $name;

  // コンストラクタ
  function __construct($name = '名無し'){
    // プロパティに初期値を設定する
    $this->name = $name;
  }

  // ストリングにキャストされたとき返す文字列
  public function __toString() {
    return $this->name;
  }

  // インスタンスメソッド
  public function who() {
    echo "{$this->name}です。", "\n";
  }
}
// ?>
