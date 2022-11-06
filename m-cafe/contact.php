<?php
session_start();
//エンコード対策のファイル
require_once('util.php');

//エンコード対策
if(!cken($_POST)) {
    $encoding = mb_internal_encoding();
    $err = "The error occure.The expected error is".$encoding;
    exit($err);}
?>

<?php
//エラーの配列
$errors = [];
//セッションでの値を受け取る
if(!empty($_SESSION)) {
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $message = $_SESSION['message'];
} else {
    $name = '';
    $email = '';
    $message = '';
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiyaCafe</title>
    <link rel="stylesheet" href="css/contact.css">
    
</head>
<body>
    <header class = "page-header">
        <div><a href="index.html"><img class = "logo" src="photo/MiyaCafe.png" alt="miyacafe"></a></div>
        <nav><ul class="main-nav">
                <li><a href="index.html">TOP</a></li>
                <li><a href="menu.html">MENU</a></li>
                <li class = "current"><a href="contact.php">CONTACT</a></li>
            </ul>
        </nav>
    </header>

    <!--横幅が800px以下のナビゲーションメニュー用-->
    <div id = "openbtn"><span></span><span></span><span></span></div>
        <nav id = "gnav">
            <ul>
                <li><a href="index.html">TOP</a></li>
                <li><a href="menu.html">MENU</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul>
        </nav>
        <div id = "circle-bg"></div>
        <!--横幅が800px以下のナビゲーション終了-->
        
    <div class = "contact-header">
        <div class = "contact-main-text">
            <h2>CONTACT </h2>
        </div>
    
        <div class = "contact-main">
            <div>
                <p>お気軽に</p>
                <p>お問い合わせください</p>
            </div>
            <div><img src="photo/contact-main.png" alt="contactmain"></div>
        </div>
    </div>
    
    <ul class = "contact-head">
        <li><a href="#question">Q&A</a></li>
        <li><a href="#contact">CONTACT</a></li>
    </ul>
    

    <div class = "contact-title">
        <h2 id = "question">Q&A</h2>
        <ul class = "accordion-area">
            <li>
                <section>
                    <h3 class = "title">商品の写真を撮って、SNSにアップすることは可能ですか？</h3>
                    <div class = "box">
                    <p>問題ありません。より多くのお客様に知っていただけるので、許可しています。</p>
                    </div>
                </section>
            </li>
            <li>
                <section>
                    <h3 class = "title">アルバイトの応募方法を教えてください</h3>
                    <div class = "box">
                    <p>下記の「CONTACT」からお問い合わせください。</p>
                    </div>
                </section>
            </li>
            <li>
                <section>
                    <h3 class = "title">予約制ですか？</h3>
                    <div class = "box">
                    <p>いいえ。当店では、予約制を承っておりません。</p>
                    </div>
                </section>
            </li>
            <li>
                <section>
                    <h3 class = "title">お店のピーク時間は何時ごろですか？</h3>
                    <div class = "box">
                    <p>おやつのタイムの午後3時ごろが一番混みあっております!</p>
                    </div>
                </section>
            </li>
        </ul>
    </div>

    <div class = "contact-title">
        <h2 id = "contact">CONTACT</h2>
        <form action="contact-confirm.php" method = "POST">
            <div>
                <label for="name">お名前</label><br>
                <input type="text" id = "name" name = "your-name" value = "<?php echo es($name);?>">
            </div>
            <div>
                <label for="email">メールアドレス</label><br>
                <input type="email" id = "email" name = "your-email" value = "<?php echo es($email);?>">
            </div>
            <div>
                <label for="message">お問い合わせ内容</label><br>
                <textarea id = "message" name = "your-message" rows="30" cols="30" maxlength = "900"><?php echo es($message) ;?></textarea>
            </div>
            <div>
                <input type="submit"  class = "input-button" value = "送信する">
            </div>
            
        </form>
    </div>

    <!--ページトップ-->
    <p id = "page-top"><a href="#">Page Top</a></p>
    
    <footer>
        <div>
            <p><small>&copy;2019 Miyacafe</small></p>
        </div>
    </footer>
    <!--jQueryのコード-->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src = "js/script.js"></script>
    <script src = "js/contact.js"></script>

</body>
</html>