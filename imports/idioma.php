<?php
if(!isset($_GET['i'])){
  $ID = "PT";
} else {
  $ID = $_GET['i'];
}
//if (!isset($_GET['i'])) {
//  $_GET['i']='PT';
//} else{
//}

//variavel lang para usar na definição do idioma do html
if ($ID =='EN') {
  $lang = "en-US";
  $link = "?i=EN";
} else {
  $lang = "pt-BR";
  $link = "";
}

//variavel ID para usar a posição da Matriz
//  $ID = $_GET['i'];
?>
