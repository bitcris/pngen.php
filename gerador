<?php
date_default_timezone_set("America/Fortaleza"); 
$data = date('d-m-Y H:i:s');
$pro = rand();


  // CRIAÇÃO DA IMAGEM COM OS PARÂMETROS DO TAMANHO
$image = imagecreate(300, 500);
  
// SELEÇÃO DA COR DE FUNDO DA IMAGEM
$background_color = imagecolorallocate($image, 255, 255, 255);
  
// SELEÇÃO DA COR DO TEXTO
$text_color = imagecolorallocate($image, 0, 0, 0);
  
// SELEÇÃO DA POSIÇÃO DO TEXTO E DO CONTEÚDO
imagestring($image, 5, 45, 80,  "PROTOCOLO DE ATENDIMENTO", $text_color);
imagestring($image, 3, 45, 100,  $pro, $text_color);
imagestring($image, 3, 45, 120, "$data", $text_color);
imagestring($image, 3, 45, 420, "By: Cristiano Ferreira", $text_color);

  
header("Content-Type: image/png");
  
imagepng($image);
imagedestroy($image);


?>
