<?php
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


  <?
  // Verifica se está sendo visualizado um post para alterar as meta tags de compartilhamento.
  if (is_single() && !is_home()) {
    if (has_post_thumbnail($post->ID)) {
      $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post-thumbnail');
      $thumbUrl = $thumb['0'];
    } else {
      $thumbUrl = 'http://www.foccustraining.com.br/wp-content/themes/foccus/imgs/logo.jpeg';
    }
    $description = get_the_excerpt($post->ID);
    $title = get_the_title();
  } else {
    $thumbUrl = 'http://www.foccustraining.com.br/wp-content/themes/foccus/imgs/logo.jpeg';
    $description = 'Um local inovador, onde o treinamento físico do aluno é realizado de um modo personalizado diariamente, durante sessões de uma hora, com o auxílio profissional integral. Isso tudo em um ambiente acolhedor, com equipamentos modernos e sem distrações, para elevar ao máximo o aproveitamento do tempo.';
    $title = 'Foccus Training';
    
  }
  ?>  

  <head>

    <meta content="width=device-width, height=420, user-scalable=no" name="viewport"/>

    <base href="<?= get_bloginfo('url') ?>/" />
    <meta name="title" content="<? the_title() ?> Foccus Training" />
    <link rel="shortcut icon" hreBom dia, Aninha,

Tenho visto que eles nos bloquearam. É muito difícil impedir que o Leandro seja manipulado, aliás, qualquer um de nós já deve ter passado por algo parecido, imagine ele, que tem menos "escudos".

Por isso meu foco é muito mais ele do que qualquer pessoa de fora... porque ele é nossa família, e não as "Beibe Dys" da vida. Tinha certeza de que ele não entenderia se falássemos com ele DELA nesse momento em que ele está 'encantado'. Ela deve representar tudo que ele busca (independência, sensação de maturidade, etc) através dessa sensação de estar apaixonado e estar enxergando um mínimo de 'retorno' nisso, e ele não abriria mão disso facilmente.

Não podemos impedir que ele (nem ninguém) se apaixone e/ou seja feito de idiota, infelizmente. Podemos dar apoio, conversar e tudo, mas tendo sempre em mente que estamos lidando com alguém que enxerga o mundo e as pessoas de uma forma um pouco mais diferente do que a maioria.

Apesar de eu estar extremamente apreensivo com o fato inevitável de que algo assim poderia acontecer um dia (e várias outras vezes depois, talvez com objetivos ainda piores, como "morar no Leblon ganhando pensão"), e ainda convicto da minha opinião sobre a solução para (parte do) assunto, agora aconteceu o que eu não queria: ELA se tornou o foco, e qualquer coisa que tentemos fazer vai soar como algo simplesmente para distanciar os dois. Por isso eu queria primeiro protegê-lo (e alguma outra possível vida que nada tem a ver com esses problemas, gerada pela irresponsabilidade de uma pessoa gananciosa) para depois afastar ESSE caso dele.

Eu pensei em formas de tornar tudo mais fácil, como dizer que é algo que o juiz pediu após ele fazer 30 anos, e usar algo como ele não também poder dirigir até que seja liberado pelo médico como parâmetro. Sendo um processo relativamente simples e reversível (pois é um nó e não necessariamente um corte) isso não seria impossível. Pensei até em ir junto com ele e fazer também (já que não pretendo ter filhos agora e nem tão cedo) para motivar e passar a imagem do quanto isso não é realmente um bicho de sete cabeças atualmente...  Na verdade é um processo simples, que nem precisa de internação e de recuperação rápida.

Pode parecer loucura, mas pelo menos na minha opinião, as consequencias de não tomarmos essas precauções são ainda mais enlouquecedoras.

Mas, nesse momento, admito que isso seria impossível, inverteu-se tudo. 

Enfim, não sei se tenho como descobrir a senha dele (ou dela) do facebook e entrar só pra conseguir informações úteis pra tirá-lo DESSA sem que ele perceba, mas normalmente ele usa o aniversário e tal. Posso tentar algo nesse sentido. 

Somado a isso, tentar incluí-lo mais na nossa vida social, para que ele não sinta tanta necessidade de buscar isso com pessoas que possivelmente só queiram se aproveitar dele sem se preocupar em magoá-lo depois.

Abraços,f="<?= get_bloginfo('template_url') ?>/favicon.png" />
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
    <meta property="og:url" content="<? the_permalink() ?>" />
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
