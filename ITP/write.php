<?php
include("common.php");
// フォームが送信された場合、入力内容をチェックして書き込みを行う。
if(isset($_POST["submit"])){
    // 名前の入力チェック
    if(!isset($_POST["name"])){ //isset関数でネーム確認
        $errors["name"] = "名前が入力されていません";
    }elseif(mb_strlen($_POST["name"]) == 0){ //mb_strlen関数で文字の長さを確認
        $errors["name"] = "名前が入力されていません";
    }elseif(mb_strlen($_POST["name"]) > 20){
        $errors["name"] = "名前は20文字以内で入力してください";
    }
    // コメントの入力チェック
    if(!isset($_POST["comment"])){
        $errors["comment"] = "コメントが入力されていません";
    }elseif(mb_strlen($_POST["comment"]) == 0){
        $errors["comment"] = "コメントが入力されていません";
    }elseif(mb_strlen($_POST["comment"]) > 400){
        $errors["comment"] = "コメントは400文字以内で入力してください";
    }
}else{
    $errors["submit"] = "フォームが正しく送信されていません";
}
// エラーがない場合書き込み処理に進む
if(count($errors) == 0){
    $result = bbs_write($_POST);
    if(!$result){
        $errors["result"] = "書き込みに失敗しました";
    }
}
// エラーがなければindex.phpに戻す
if(count($errors) == 0){
    header("Location: index.php");
}
// 以下エラーが発生した時のHTMLページ
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        ul.error{color: red;}
    </style>
</head>
<body>
    <h1>ひよこ掲示板-投稿エラー</h1>
    <h2>以下のエラーが発生しました再度入力してください</h2>
    <ul class="error"><?php 
    foreach($errors as $error){
        ?> <li><?php print $error; ?></li><?php
        } ?>
    </ul>
    <a href="index.php">ひよこ掲示板に戻る</a>
</body>
</html>