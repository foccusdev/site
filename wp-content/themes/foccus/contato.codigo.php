<?php

if (isset($_POST) && !empty($_POST)) {

  // Verifica se o assunto é Envio de Currículo
  if ($_POST['assunto'] == 'Envio de Currículo') {

    // Verifica se o arquivo é pdf ou doc, e se o tamanho é valido (< 4MB)
    $arquivoTipo = $_FILES['arquivo']['type'];
    var_dump($arquivoTipo);
    $ehPdf = strpos($arquivoTipo, 'pdf') !== false ? true : false;
    $ehDoc = strpos($arquivoTipo, 'msword') !== false ? true : false;
    $ehDocx = strpos($arquivoTipo, 'officedocument') !== false ? true : false;
    $tamanhoValido = $_FILES['arquivo']['size'] < 4194304 ? true : false;

    // Se for, faz upload
    if (($ehDoc || $ehPdf || $ehDocx) && $tamanhoValido) {

      date_default_timezone_set('America/Sao_Paulo');
      $nomeArquivo = date('d-m-Y_H-i-s') . '-' . rand(0, time()) . substr($_FILES['arquivo']['name'], strrpos($_FILES['arquivo']['name'], '.'));
      $caminhoArquivo = dirname(__FILE__) . '/curriculos/' . $nomeArquivo;
      move_uploaded_file($_FILES['arquivo']['tmp_name'], $caminhoArquivo);

      $mensagemArquivo = '<p><a href="' . get_bloginfo('template_url') . '/curriculos/' . $nomeArquivo . '" target="_blank">Clique aqui para visualizar/baixar o currículo</a></p>';
    } else {

      die(header('Location: ' . get_bloginfo('url') . '/contato/?msg=1'));
    }
  } else {

    $mensagemArquivo = '';
  }

  var_dump($_POST);
  var_dump($_FILES);

  $mensagem = '
  <p><strong>Nome:</strong> ' . strip_tags($_POST['nome']) . '</p>
  <p><strong>Email:</strong> ' . strip_tags($_POST['email']) . '</p>
  <p><strong>Telefone:</strong> ' . strip_tags($_POST['tel']) . '</p>
  <p><strong>Mensagem:</strong> ' . strip_tags($_POST['msg']) . '</p>
  ' . $mensagemArquivo;

  var_dump($mensagem);


  // Envia a mensagem
  require_once ('class.phpmailer.php');

  $phpMailer = new PHPMailer();
  $phpMailer->CharSet = 'utf-8';
  $phpMailer->IsHTML();
  $phpMailer->Subject = strip_tags($_POST['assunto']);
  $phpMailer->From = 'nao_responda@site1367448928.provisorio.ws';
  $phpMailer->FromName = strip_tags($_POST['nome']);
  $phpMailer->Body = $mensagem;
  $phpMailer->IsSMTP();
  
  $phpMailer->SMTPAuth = true;
  $phpMailer->Host = 'smtp.site1367448928.provisorio.ws';
  $phpMailer->Username = 'nao_responda@site1367448928.provisorio.ws';
  $phpMailer->Password = 'f0ccu5M@a1l';
  $phpMailer->Port = 587;
  
  $phpMailer->AddAddress('joaogabrielv@gmail.com');
}
?>
