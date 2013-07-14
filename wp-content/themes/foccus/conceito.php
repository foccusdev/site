


<?
/* Template Name: Conceito */
get_template_part('incs/head');
get_template_part('incs/topo');
?>

<div class="conteudo">

  <div class="topo-interna">
    <div class="newsletter">
      <span>Receba nossa newsletter</span>
      <form action="" method="post" class="float-right">
        <label for="news_nome">Nome</label>
        <input type="text" name="news_nome" id="news_nome" />
        <label for="news_email">email</label>
        <input type="text" name="news_email" id="news_email" />
        <input type="submit" value="enviar" />
      </form>
    </div>
  </div>


  <img src="<?= get_bloginfo('template_url') ?>/imgs/arco.png" class="arco">
  <h2 class="nome-secao">Conceito</h2>
  <span class="linha-azul"></span>

  <?
  $wp_query = new WP_Query('p=' . _CONCEITO_TEXTO_BAIXO);
  the_post();
  $mensagemIncentivo = get_the_excerpt();
  ?>  

  <div class="conteudo-interno fonte-textos float-left">
    <?
    $wp_query = new WP_Query('p=' . _CONCEITO_TEXTO_CIMA);
    the_post();
    if (has_post_thumbnail())
      the_post_thumbnail('post-thumbnail', array('class' => 'img-conceito float-left'));
    ?>  

    <div class="mensagem_incentivo" >
      <div class="texto_img-circulo" >
        <?=$mensagemIncentivo ?>
      </div> 
      <div class="img-circulo" >
        <img src="<?= get_bloginfo('template_url') ?>/imgs/circulo_pontilhado.png"/>
      </div> 
    </div> 


    <div class="texto-conceito">
      <? the_content() ?>
    </div>

    <?
    $wp_query = new WP_Query('p=' . _CONCEITO_TEXTO_BAIXO);
    the_post();
    ?>

    <div class="conceito-texto-baixo float-left">

      <div class="objetivos">
        <div class="texto_objetivos"><? the_title() ?><img src="<?= get_bloginfo('template_url') ?>/imgs/img_objetivos.png"/></div>
      </div>
      <div class="texto-conceito2">
        <? the_content() ?>

      </div>    
    </div>
    <div class="clear"> </div>
  </div>

  <? get_template_part('incs/barra-lateral') ?>

</div>



<div class="clear"> </div>

<? get_template_part('incs/rodape'); ?>
<div id="bg_rodape"/>