<?php
session_start();
//エンコード対策のファイル
require_once('util.php');

//エンコード対策
if(!cken($_POST)) {
    $encoding = mb_internal_encoding();
    $err = "The error occure.The expected error is".$encoding;
    exit($err);
}

//エラーの配列を作成
$errors = [];

//セッションの値を受け取る
if(empty($_SESSION['name'])) {
    $errors[] = "名前のセッションエラーです";
} else {
    $name = $_SESSION['name'];
}

if(empty($_SESSION['email'])) {
    $errors[] = "メールのセッションエラーです";
} else {
    $email = $_SESSION['email'];
}

if(empty($_SESSION['message'])) {
    $errors[] = "メッセージのセッションエラーです";
} else {
    $message = $_SESSION['message'];
}
//セッションを終了する
killSession();
?>

<?php
function killSession() {
    $_SESSION = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/thankyou.css">
</head>
<body>
    
</body>
</html>

<?php
if(count($errors) >0) {
    echo implode("<br>",$errors);?>
    <a href="contact.php">お問い合わせページに戻る</a>
<?php } else {?>
    <div id = "thankyou">
        <div class = "thank_you">
            <h2>メッセージの送信が完了しました</h2>
            <div class = "thankyou-photo"><img src="photo/thankyou.png" alt="thankyou" width = "300" height = "300"></div>
            <p>ありがとうございました</p>
        </div>
        <div class = "button"><a href="contact.php">CONTACTページに戻る</a></div>
    </div>
    
<?php } ?>

