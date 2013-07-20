<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>

    <meta content="width=device-width, height=420, user-scalable=no" name="viewport"/>


    <meta name="title" content="Foccus Training" />
    <meta name="url" content="http://www.foccustraining.com.br/" />
    <meta name="description" content="Aqui vai entrar a descrição da página!" />
    <meta name="keywords" content="Aqui entrarão as keywords" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="company" content="Foccus" />
    <meta name="revisit-after" content="1" />
    <title>Foccus Training</title>
    <? /* <link rel="stylesheet" href="http://www.foccustraining.com.br/wp-content/themes/foccus/style.css" /> */ ?>
    <!-- Metas para compartilhamento no facebook -->
    <meta property="fb:admins" content="1199485757"/>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.foccustraining.com.br/face-teste/" />
    <meta property="og:title" content="Foccus" />
    <meta property="og:image" content="http://www.foccustraining.com.br/wp-content/themes/foccus/imgs/logo.jpeg" />
    <style>
      * { text-align: center}
      img { -webkit-filter: blur(8px); -moz-filter: blur(8px); -o-filter: blur(8px); -ms-filter: blur(8px); filter: blur(8px); }
      p { text-align: center; font-family: verdana; font-size: 31px; color: #2B91B3;}
    </style>

  </head>
  <body>
    <img src="http://www.foccustraining.com.br/wp-content/themes/foccus/imgs/logo_embreve.jpg?nocache=<?=rand()?>" id="logo" />

    <p>Um novo conceito em treinamento</p>
    <script type="text/javascript" src="http://www.foccustraining.com.br/wp-content/themes/foccus/js/jquery-1.9.1.min.js"></script>
    <script>

      var animacao = setInterval(function() {
        var logo = $('#logo');
        var blur = logo.css('-webkit-filter');
        var novoBlur = blur.replace('blur(','');
        novoBlur = novoBlur.replace('px)','');
        novoBlur = parseInt(novoBlur);
        novoBlur--;          
        novoBlur = novoBlur.toString();
        logo.css('-webkit-filter', 'blur('+novoBlur+'px)');
        logo.css('-moz-filter', 'blur('+novoBlur+'px)');
        logo.css('-o-filter', 'blur('+novoBlur+'px)');
        logo.css('-ms-filter', 'blur('+novoBlur+'px)');
        logo.css('-ms-filter', 'blur('+novoBlur+'px)');
        logo.css('filter', 'blur('+novoBlur+'px)');
      },
      100
    );

      setTimeout(function(){
        window.clearInterval(animacao);
        var logo = $('#logo');
        logo.css('-webkit-filter', 'blur(0px)');
        logo.css('-moz-filter', 'blur(0px)');
        logo.css('-o-filter', 'blur(0px)');
        logo.css('-ms-filter', 'blur(0px)');
        logo.css('-ms-filter', 'blur(0px)');
        logo.css('filter', 'blur(0px)');        
        
      },3000);

    </script>

  </body>