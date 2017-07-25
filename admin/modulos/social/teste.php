<?php

function UrlAtual(){
$dominio= $_SERVER['HTTP_HOST'];
$url = "http://" . $dominio. $_SERVER['REQUEST_URI'];
return $url;
}

echo "A URL atual é: ". UrlAtual();
?>