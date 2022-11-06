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
//postされた値を受け取る
if(isset($_POST['your-name'])) {
    $your_name = trim(mb_convert_kana($_POST['your-name']));
    if($your_name==='') {
        $errors[] = "名前が空欄になっています。正しく記入してください。";
    }

} else {
    $errors[] = "名前の送信エラーが起きました";
}

if(isset($_POST['your-email'])) {
    $your_email = trim(mb_convert_kana($_POST['your-email']));
    if($your_email==='') {
        $errors[] = "メールが空欄になっています。正しく記入してください。";
    }

} else {
    $errors[] = "メールの送信エラーが起きました";
}

if(isset($_POST['your-message'])) {
    $your_message = trim(mb_convert_kana($_POST['your-message']));
    $your_message = strip_tags($your_message);
    if($your_message==='') {
        $errors[] = "メッセージが空欄になっています。正しく記入してください。";
    }

} else {
    $errors[] = "メッセージの送信エラーが起きました";
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/contact-form.css">
</head>
<body>
    
</body>
</html>
<?php
//値を出力する
if(count($errors)>0) {?>
    <div id ="contact-error">
        <div>
            <h1>エラーメッセージ</h1>
            <div>
                <?php echo implode("<br>",$errors);?>
            </div>
            <a href="contact.php">戻る</a>
            
        </div>
        
    </div>
    
<?php } else { ?>
    <div class = "contact">
        <h1>お問い合わせ内容確認</h1>
        <div class = "title"><p>お名前</p></div>
        <div><p><?php echo es($your_name) ;?></p></div>
        <div class = "title"><p>メールアドレス</p></div>
        <div><p><?php echo es($your_email) ;?></p></div>
        <div class = "title"><p>メッセージ</p></div>
        <div><p><?php echo es($your_message) ;?></p></div>

        <div class = "submit">
            <a href="contact.php" class = "submit-back">戻る</a>
            <a href="thankyou.php" class = "submit-front">送信</a>        
        </div>


    </div>
<?php } ?>

<?php
//それぞれの値をセッション変数に代入
$_SESSION['name'] = $your_name;
$_SESSION['email'] = $your_email;
$_SESSION['message'] = $your_message;

?>



