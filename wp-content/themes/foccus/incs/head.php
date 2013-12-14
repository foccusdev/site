<?php
ob_start();
?>
<!DOCTYPE html">
<html>


  <?
  // Verifica se está sendo visualizado um post para alterar as meta tags de compartilhamento.
  if (is_single() && !is_home()) {
    if (has_post_thumbnail($post->ID)) {
      $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post-thumbnail');
      $thumbUrl = $thumb['0'];
      $urlFace = get_permalink();
    } elseif (is_category()) {
      $thumbUrl = 'http://www.foccustraining.com.br/wp-content/themes/foccus/imgs/logo.jpeg';
      
    }
    $description = get_the_excerpt($post->ID);
    $title = get_the_title();
    
  } elseif (is_category()) {
    global $categoria;    
    $urlFace = substr(get_permalink(), 0, strrpos(get_permalink(), '/', -2)).'/';
    $thumbUrl = 'http://www.foccustraining.com.br/wp-content/themes/foccus/imgs/logo.jpeg';
    $title = 'Foccus Training | '.$categoria->name;
    $description = 'Um local inovador, onde o treinamento físico do aluno é realizado de um modo personalizado diariamente, durante sessões de uma hora, com o auxílio profissional integral. Isso tudo em um ambiente acolhedor, com equipamentos modernos e sem distrações, para elevar ao máximo o aproveitamento do tempo.';    
  }else{
    $thumbUrl = 'http://www.foccustraining.com.br/wp-content/themes/foccus/imgs/logo.jpeg';
    $description = 'Um local inovador, onde o treinamento físico do aluno é realizado de um modo personalizado diariamente, durante sessões de uma hora, com o auxílio profissional integral. Isso tudo em um ambiente acolhedor, com equipamentos modernos e sem distrações, para elevar ao máximo o aproveitamento do tempo.';
    $title = 'Foccus Training';
    $urlFace = get_bloginfo('url');
  }
  ?>  

  <head>

    <meta content="width=device-width, height=420, user-scalable=no" name="viewport"/>

    <base href="<?= get_bloginfo('url') ?>/" />
    <meta name="title" content="<? the_title() ?> Foccus Training" />
    <link rel="shortcut icon" href="<?= get_bloginfo('template_url') ?>/favicon.png" />
    <meta name="url" content="http://www.foccustraining.com.br/" />
    <meta name="description" content="<?= $description ?>" />
    <meta name="keywords" content="foccustraining, foccus, academia, fitness, laranjeiras, zona sul, rio de janeiro" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="company" content="Foccus" />
    <meta name="revisit-after" content="1" />
    <title>Foccus Training</title>
    <link rel="stylesheet" href="<?= get_bloginfo('template_url') ?>/style.css" />
    <link rel="stylesheet" href="<?= get_bloginfo('template_url') ?>/estilos.css" />
    <link rel="stylesheet" href="<?= get_bloginfo('template_url') ?>/login.css" />
    <!-- Metas para compartilhamento no facebook -->
    <meta property="fb:admins" content="1199485757,100003731853550"/>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?=$urlFace ?>" />
    <meta property="og:title" content="<?=$title?>" />
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:image" content="<?= $thumbUrl ?>" />
    <meta property="og:description" content="<?= $description ?>" />


  </head>



  <body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
          return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>




    <?
// Envia formulário de newsletter?

    if (!empty($_POST['news_email'])) {


      $email = addslashes(strip_tags($_POST['news_email']));
      $nome = !empty($_POST['news_nome']) ? addslashes(strip_tags($_POST['news_nome'])) : '';

      $novoContato = '
   {
     "list" : {
       "contacts" : [
         {"email": "' . $email . '", "custom_fields": {"nome": "' . utf8_encode($nome) . '"} }
       ],
       "overwriteattributes" : true
     }
   }  
  ';


      $url = 'https://emailmarketing.locaweb.com.br/api/v1/accounts/51859fe336e1d9f69f002998/lists/51981ee436e1d94ce20013f5/contacts';

      $curl = curl_init($url);
      curl_setopt($curl, CURLOPT_POST, true);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
      curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8', 'X-Auth-Token: UEKZ13j57Pp1Js8siYop2gRkUUzq8UdqkTYTyYt3P6Qr'));
      curl_setopt($curl, CURLOPT_POSTFIELDS, $novoContato);

      $retorno = curl_exec($curl);

      //die(header('Location: '.  get_bloginfo('url').'/'));

      echo '<script type="text/javascript">alert("Cadastro efetuado com sucesso!");</script>';
    }
    ?>
