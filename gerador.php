<?php

date_default_timezone_set("America/Fortaleza"); 
setlocale( LC_ALL, 'pt_BR.utf-8');
$data = date('d.m.Y - H:i:s');
$pro = rand(1, 99999);
$ped = $_POST["pedido"];
$end = $_POST["end"];



  // CRIAÇÃO DA IMAGEM COM OS PARÂMETROS DO TAMANHO
$image = imagecreate(350, 580);
  
// SELEÇÃO DA COR DE FUNDO DA IMAGEM
$background_color = imagecolorallocate($image, 255, 255, 255);
  
// SELEÇÃO DA COR DO TEXTO
$text_color = imagecolorallocate($image, 0, 0, 0);


  
// SELEÇÃO DA POSIÇÃO DO TEXTO E DO CONTEÚDO
imagestring($image, 5, 60, 40,  "PEDIDO - NOME DO ESTABELECIMENTO", $text_color);
imagestring($image, 3, 20, 80,  "ID: $pro", $text_color);            //Número de protocolo
imagestring($image, 3, 20, 95, "DATA: $data", $text_color);          //data e hora do pedido
imagestring($image, 3, 20, 150, "PEDIDO: $ped", $text_color);    //pedido
imagestring($image, 3, 20, 170, "ENDERECO: $end", $text_color); //quantidade

imagestring($image, 3, 45, 480, "By: Cristiano Ferreira", $text_color);

  

header("Content-Type: image/png");

imagepng($image);

imagedestroy($image);

?>
