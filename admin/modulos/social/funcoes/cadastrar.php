<?php
require "../../../config/data.php";
require "../../../../conexao.php";

$facebook = $_POST['facebook'];
$instagram = $_POST['instagram'];
$youtube = $_POST['youtube'];
$twitter = $_POST['twitter'];
$snapchat = $_POST['snapchat'];
$google = $_POST ['google'];
$linkedin = $_POST ['linkedin'];
$flickr = $_POST ['flickr'];

    $sql = ("INSERT INTO `sistema`.`redes_sociais` (`facebook`, `instagram`, `youtube`, `twiiter`, `snapchat`, `google`, `linkedin`, `flickr`) VALUES ('$facebook', '$instagram', '$youtube', '$twitter', '$snapchat', '$google', '$linkedin', '$flickr');");
    $result = mysqli_query($conexao, $sql);


    header("location:../../../index.php?id=social");
echo "<script>window.alert(Cadastro Realizado Com Sucesso!)</script>";

?>

