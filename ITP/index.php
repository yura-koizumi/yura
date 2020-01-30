<?php include("common.php"); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ひよこ掲示板</title>
    <link rel="stylesheet" href="index.css"> 
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
                   <li><a href="form/form.php">お問い合わせ</a></li>
               </ul>
            </div> <!-- #nav -->
        <div id="rule">
            <h2>＜注意事項とひよこ掲示板のルール＞</h2>
            <p>
                ・誹謗中傷や下ネタワード等はやめてください。<br>
                ・製作者が未熟で完成度低いので要望があれば製作者まで連絡お願いします。<br>
                ・基本的に細かいルールはありませんがNGワードは気づき次第消します。<br>
                ・名前とコメント記入して投稿してくださいお願いします。<br>
                ・最後にマナー良く楽しんで使ってください！
            </p>
        </div> <!-- #rule -->
    </div> <!-- #main -->
    <?php
        $records = bbs_read();
        foreach($records as $key => $record){
    ?><div class="content">
          <span class="id"><?php print h($key + 1); ?></span>
          <span class="name">名前：<?php print h($record["name"]); ?></span>
          <span class="time"><?php print date("Y年m月d日H時i分s秒",intval($record["time"])); ?></span>
          <p class="comment"><?php print nl2br(h($record["comment"])); ?></p>
      </div> <!-- .content --> 
    <?php } ?>
       <form action="write.php" method="post">
       <div id="message">名前<br>
       <input type="text" name="name" value="" size="24"><br>
       コメント<br>
       <textarea name="comment" cols="40" rows="6"></textarea><br>
       <input type="submit" name="submit" value="書き込み"><br>
       </div> <!-- #message -->
    </form>
    
    <footer>
        <h3>制作者：小泉唯来</h3>
        <p>お問い合わせ＆要望のほうお願いします！</p>
    </footer>
</div> <!-- #wrap -->
</body>
</html>