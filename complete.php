<!--complete.php にGETアクセスされた場合は空っぽの文字を表示するような
工夫をしてください（POSTの内容を直接表示しないこと）-->
<?php
        $company= "空っぽ";
        $name= "空っぽ";
        $mail= "空っぽ";
        $tel= "空っぽ";
        $content= "空っぽ";

    if (array_key_exists('company', $_POST)) {
        $company = $_POST['company'];
    }
    if (array_key_exists('name', $_POST)) {
        $name = $_POST['name'];
    }
    if (array_key_exists('mail', $_POST)) {
        $mail = $_POST['mail'];
    }
    if (array_key_exists('tel', $_POST)) {
        $tel = $_POST['tel'];
    }
    if (array_key_exists('content', $_POST)) {
        $content = $_POST['content'];
    }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="サイトの概要">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!--css-->
    <link href="css/index.css" rel="stylesheet">
    <title>cafe spase ichiyon</title>
</head>
<body>
    <!--nav-->
    <header>
        <div class="header_section" id="haader">
            <nav class="navbar navbar-expand-lg navbar-light " style="background-color:#000;">
                <div>
                    <a class="logo" href="index.html"><img src="images/ichiyon.png"></a>
                    </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">

                       <li class="nav-item">
                            <a class="nav-link" href="index.html">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="space.html">SPACE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="menu.html">MENU</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="insta.html">NEWS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<body>
    <div class="container">
        <h1 class="mt-4 pb-4 border-bottom">送信完了</h1>
        <p>ありがとうございました。送信を受け付けました。</p>
        <p>3営業日以内をめどにご返信いたしますので、しばらくお待ちください。</p>
<div class="table-responsive">
    <table class="table table-striped">
        <tr>
            <th>会社名</th>
            <td><?php print nl2br(htmlspecialchars($company, ENT_QUOTES, "UTF-8")); ?></td><br>
        </tr>
        <tr>
            <th>氏名</th>
            <td><?php print nl2br( htmlspecialchars($name, ENT_QUOTES, "UTF-8")); ?></td><br>
        </tr>
        <tr>
            <th>メール</th>
            <td><?php print nl2br(htmlspecialchars($mail, ENT_QUOTES, "UTF-8")); ?></td><br>
        </tr>
        <tr>
            <th>TEL</th>
            <td><?php print nl2br(htmlspecialchars($tel, ENT_QUOTES, "UTF-8")); ?></td><br>
        </tr>

        <tr>
            <th>内容</th>
            <td><?php print nl2br(htmlspecialchars($content, ENT_QUOTES, "UTF-8")); ?></td><br>
        </tr>
    </table>
</div>
    <div class="text-center mb-4">
            <a href="index.html" class="btn btn-success">戻る</a>
    </div>
    </div>
    <!--フッター-->
   <footer id="footer" class="footer outer-block">
      <div class="container">
      <div class="inner-block">
        <div class="cont-wrap">
          <div class="cont">
            <div clas000s="info">
              <a href="https://b-risk.jp/" class="logo">
                <img src="images/ichiyon.png" alt="">
              </a>
              <p class="address">
                〒135-0002<br>
                埼玉県さいたま市浦和区東仲町１０−１<br>スカイフィールド３階<br>
                TEL: 03-XXXX-XXXX
                <br>営業時間AM10:00~AM5:00
                <br>店休　（不定休）
              </p>
              <div class="footer-sns">
                  <a href="#!"><i class="fab fa-twitter"></i></a>
  <a href="#!"><i class="fab fa-facebook"></i></a> 
  <a href="#!"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>
          <div class="map">
<iframe src="https://www.google.com/maps/d/embed?mid=1jXWTQvUfo8wrN9MghweSkZu6wu0yBSd-" width="640" height="480"></iframe>
          </div>
        </div>
      </div>
     </div>  
    </footer>
     <!--jquery-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="js/main.js"></script>
    <!--bootstrap-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
</body>
</html>
