<?
get_template_part('incs/head');
get_template_part('incs/topo');
the_post();
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
  <h2 class="nome-secao"><? the_title() ?></h2>
  <span class="linha-azul"></span>
  <div class="conteudo-interno  float-left">

    <div class="fonte-textos">
      <? the_content() ?>
    </div>

    <div class="fb-like" data-href="<? the_permalink() ?>" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false" data-font="verdana"></div>

    <a href="https://twitter.com/share" class="twitter-share-button" data-url="<? the_permalink() ?>" data-text="<? the_title() ?>">Tweet</a>

    <br /><br /><br />

    <div class="fb-comments" data-href="<? the_permalink() ?>" data-width="470" data-num-posts="10"></div>  

  </div>
  <? get_template_part('incs/barra-lateral') ?>
</div>

<? get_template_part('incs/rodape'); ?>