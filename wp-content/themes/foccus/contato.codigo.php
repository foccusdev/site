<?php

if (isset($_POST) && !empty($_POST)) {

  require_once ('class.phpmailer.php');

  $phpMailer = new PHPMailer();

  $phpMailer->CharSet = 'utf-8';

  // Verifica se o assunto é Envio de Currículo
  if ($_POST['assunto'] == '4') {

    // Verifica se o arquivo é pdf ou doc, e se o tamanho é valido (< 4MB)
    $arquivoTipo = $_FILES['arquivo']['type'];
    $ehPdf = strpos($tipo, 'application/pdf') !== false ? true : false;
    $ehDoc = strpos($tipo, 'application/pdf') !== false ? true : false;
    $tamanhoValido = $_FILES['arquivo']['size'] < 4194304 ? true : false;

    // Se for, faz upload
    if (($ehDoc || $ehPdf) && $tamanhoValido) {
      
      move_uploaded_file($_FILES['arquivo']['tmp_name'], dirname(__FILE__) . '/curriculos/');
        
      
    }
  }

  var_dump($_POST);
  var_dump($_FILES);
}
?>
