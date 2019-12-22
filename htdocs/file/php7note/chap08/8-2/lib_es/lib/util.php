<?php
// XSS対策のためのHTMLエスケープ
  function es($data, $charset='UTF-8'){
    // $dataが配列のとき
    if (is_array($data)){
      // 再帰呼び出し
      return array_map(__METHOD__, $data);
    } else {
      // HTMLエスケープを行う
      return htmlspecialchars($data, ENT_QUOTES, $charset);
    }
  }
// ?>
