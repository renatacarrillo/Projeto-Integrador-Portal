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
} elseif ($ID =='PT'){
  $lang = "pt-BR";
  $link = "?i=PT";
} elseif ($ID =='ES') {
  $lang = "es-ES";
  $link = "?i=ES";
}

//variavel ID para usar a posição da Matriz
//  $ID = $_GET['i'];
?>
