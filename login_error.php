<?php
session_start();
if(isset($_SESSION['id'])){
  header("Location:mypage.php");
} ?>
<!DOCTYPE HTML>
<html lang = "ja">
 <head>
   <title>マイページ登録</title>
   <link rel = "stylesheet" type = "text/css" href = "login.css">
 </head>
   <body>
     <header>
       <img src = "4eachblog_logo.jpg">
     </header>

     <main>
       <div class = "error">メールアドレスまたはパスワードが間違っています。</div>
       <form action = "mypage.php" method = "post">
         <p>メールアドレス</p>
         <input type = "text" class = "formbox" size = "40" name = "mail">

         <p>パスワード</p>
         <input type = "password" class = "formbox" size = "40" name = "password" id = "password" >

         <br>
         <div class = "C">
           <input type = "checkbox" name = "pCheck" class = "check">　ログイン状態を維持する<br>
         </div>

         <input type = "submit" value = "ログイン" class = "submit_button">
      </form>
    </main>

    <footer>
      ©2018 InterNous.inc All rights reserved
    </footer>
  </body>
</html>
