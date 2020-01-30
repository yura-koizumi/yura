<?php
// 日本語の文字コード設定などをあらかじめ定義する
mb_internal_encoding("UTF-8");
mb_language("ja");
setlocale(LC_ALL,"ja_JP.UTF-8");

// タイムゾーンの設定
date_default_timezone_set('Asia/Tokyo');

// エスケープを行うラップ関数を指定する
function h($str){
    return htmlspecialchars($str,ENT_QUOTES,"UTF-8");
}

