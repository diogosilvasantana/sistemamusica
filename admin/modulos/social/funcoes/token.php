<?php
echo "<script>document.cookie = 'tag=' + window.location.hash.replace('#','&');</script>";
$chave = str_replace('&access_token=', '', $_COOKIE['tag']);

echo $chave;
unset($_COOKIE['tag']);
//header("location:../../../index.php?id=social$chave");

?>

