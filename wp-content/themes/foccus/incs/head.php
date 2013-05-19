<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="<?= get_bloginfo('template_url') ?>/style.css" />
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