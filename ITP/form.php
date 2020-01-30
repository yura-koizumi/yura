<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせ</title>
    <link rel="stylesheet" href="index.css">
     <link rel="stylesheet" href="form.css">
</head>
<body>
    <div id="wrap">
    <div id="header">
        <h1>ひよこ掲示板</h1>
    </div> <!-- #header -->
    <div id="main">
            <div id="nav">
               <ul>
                   <li><a href="index.php">ホーム</a></li>
                   <li><a href="index.php">準備中</a></li>
                   <li><a href="index.php">準備中</a></li>
                   <li><a href="form.php">お問い合わせ</a></li>
               </ul>
            </div> <!-- #nav -->
            <div id="rule">
                <h2>＜こちらはお問い合わせ用のページになります＞</h2>
                <ul>
                    <li>あ</li>
                    <li>い</li>
                    <li>う</li>
                    <li>え</li>
                    <li>お</li>
                </ul>
            </div>
             </div> <!-- #main -->
    <div id="message">
     <form action="form2.php" method="post">
       名前<br>
       <input type="text" name="name" value="" size="24"><br>
       メールアドレス<br>
       <input type="email" name="email" value="" size="28"><br>
       内容<br>
       <textarea name="comment" cols="40" rows="6"></textarea><br>
       <input type="submit" name="submit" value="送信"><br>
    </form>
    </div>
    <footer>
        <h3>制作者：小泉唯来</h3>
        <p>twitter:ありません フォロー＆要望のほうお願いします！</p>
    </footer>
</div> <!-- #wrap -->
</body>
</html>