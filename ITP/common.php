<?php
// 日本語の文字コード設定などをあらかじめ定義する
mb_internal_encoding("UTF-8");
mb_language("ja");
setlocale(LC_ALL,"ja_JP.UTF-8");

// タイムゾーンの設定
date_default_timezone_set('Asia/Tokyo');

// CSVで利用するファイル名を指定する
$bbs_file = "bbs.csv";

// エスケープを行うラップ関数を指定する
function h($str){
    return htmlspecialchars($str,ENT_QUOTES,"UTF-8");
}

// 掲示板のデータをファイルに書き込む関数を定義する
function bbs_write($data)
{
    global $bbs_file;
    // ファイルを追記モードで開く
    $handle = fopen($bbs_file,"a");
    //　コメントの改行コードを統一する
    $data["comment"] = str_replace(array("\r\n","\n","\r"),PHP_EOL,$data["comment"]);
    //　書き込みたい情報を配列にまとめる
    $csv[] = $data["name"];
    $csv[] = $data["comment"];
    $csv[] = time();
    //　ファイルに書き込みを行う
    $result = fputcsv($handle,$csv);
    // ファイルを閉じる
    fclose($handle);
    // 関数の実行結果を返す
    return $result;
}


// 掲示板のデータをファイルから読み込む関数を定義する
function bbs_read()
{
    global $bbs_file;
    //　ファイルを読み込みモードで開く
    $handle = fopen($bbs_file,"r");
    // 開いたポインタからデータを一行ずつ取得して配列に格納する
    while($csv = fgetcsv($handle)){
        $record["name"] = $csv[0];
        $record["comment"] = $csv[1];
        $record["time"] = $csv[2];
        $records[] = $record;
    }
    // ファイルを閉じる
    fclose($handle);
    //　関数の実行結果を返す
    return $records;
}

?>