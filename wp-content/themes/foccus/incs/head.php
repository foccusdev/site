<?php
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>

    <meta content="width=device-width, height=420, user-scalable=no" name="viewport"/>

    <base href="<?= get_bloginfo('url') ?>/" />
    <meta name="title" content="Foccus Training" />
    <meta name="url" content="http://www.foccustraining.com.br/" />
    <meta name="description" content="Aqui vai entrar a descrição da página!" />
    <meta name="keywords" content="Aqui entrarão as keywords" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="company" content="Foccus" />
    <meta name="revisit-after" content="1" />
    <title>Foccus Training</title>
    <link rel="stylesheet" href="<?=get_bloginfo('template_url') ?>/style.css" />
    <link rel="stylesheet" href="<?=get_bloginfo('template_url') ?>/estilos.css" />
    <!-- Metas para compartilhamento no facebook -->
    <meta property="fb:admins" content="1199485757"/>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.foccustraining.com.br/face-teste/" />
    <meta property="og:title" content="Foccus" />
    <meta property="og:image" content="http://www.foccustraining.com.br/wp-content/themes/foccus/imgs/logo.jpeg" />

  </head>

 

  <body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>