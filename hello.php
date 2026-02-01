<?php

    // echo "Hello World";

    // php -S localhost:8000
    // 上記コマンドでサーバー立ち上げ
    // http://localhost:8000/hello.php
    
    // phpinfo();

    echo $_SERVER['HTTP_USER_AGENT']

?>

<?php
if (str_contains($_SERVER['HTTP_USER_AGENT'], 'Chrome')) {
?>

<h3>str_contains() がtrueを返しました</h3>
<center>あなたはChromeを使用しています</center>

<?php
} else {
?>

<h3>str_contains()がfalseを返しました</h3>
<center>あなたはChromeを使用していません</center>

<?php
}
?>