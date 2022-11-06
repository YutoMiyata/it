<?php
//XSS対策のためのHTMLエスケープ
function es(array|string $data ,string $charset = 'UTF-8'):mixed {
    //$dataが配列の時
    if(is_array($data)) {
        //再起呼び出し
        return array_map(__METHOD__,$data);
    } else {
        //エスケープシーケンスを行う
        return htmlspecialchars(string:$data,flags:ENT_QUOTES,encoding:$charset);
    }
}


//配列の文字エンコーディングのチェック
function cken(array $data):bool {
    $result = true;
    foreach($data as $key => $value) {
        if(is_array($value)) {
            $value = implode("",$value);
        }
        if(!mb_check_encoding($value)) {
            //文字エンコードが一致しないとき
            $result = false;
            break;
        }
    }
    return $result;
}

?>