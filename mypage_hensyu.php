<?php
mb_internal_encoding("utf8");
session_start();

if(empty($_POST['from_mypage'])){
  header("Location:login_error.php");
}
//$_POST['from_mypage'];
?>
<!DOCTYPE HTML>
<html lang = "ja">
 <head>
   <title>マイページ登録</title>
   <link rel = "stylesheet" type = "text/css" href = "mypage_hensyu.css">
 </head>
   <body>
     <header>
       <img src = "4eachblog_logo.jpg">
     </header>

     <main>
       <h2>会員情報</h2>
       <?php echo "こんにちは！　".$_SESSION['name']."　さん"; ?><br>
       <div class = "img-pass">
         <img src = "<?php echo $_SESSION['picture']; ?>" class = "imageC">

         <form action="mypage_update.php" method="post">
         <div class = "name-pass">
           <p>氏名：
             <input type = "text" value = "<?php echo $_SESSION['name']; ?>" class = "box" name = "name"></p>
           <p>メール：
             <input type = "text" value = "<?php echo $_SESSION['mail']; ?>" class = "box" name = "mail"></p>
           <p>パスワード：
             <input type = "text" value = "<?php echo $_SESSION['password']; ?>" class = "box" name = "password"></p>
         </div>
       </div>
       <textarea class = "cmBox" name = "comments"><?php echo $_SESSION['comments']; ?></textarea>

       <div class = "button">
         <input type = "submit" value = "この内容に変更する" class = "submit_button">
      </div>
    </form>

    </main>
    <footer>
      ©2018 InterNous.inc All rights reserved
    </footer>
  </body>
</html>
