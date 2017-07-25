<?php
session_start();
if(isset($_COOKIE['tag'])){
    $_SESSION['chave'] = str_replace('#access_token=', '', $_COOKIE['tag']);
    unset($_COOKIE['tag']);
}
header('Location: ./');
?>
