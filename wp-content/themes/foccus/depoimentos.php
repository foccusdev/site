<?
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
  <h2 class="nome-secao"><?= $categoria->name ?></h2>
  <span class="linha-azul"></span>
  <div class="conteudo-interno float-left lista-depoimentos">
    <div class="listagem float-left">

      <?
      $wp_query = new WP_Query(array('cat' => _DEPOIMENTOS, 'posts_per_page' => -1));
      //echo '<pre>'; var_dump($wp_query); echo '</pre>';
      while (have_posts()) {
        the_post();
        ?>      
        <a name="<? the_ID() ?>"></a>
        <div class="box-depoimentos">
          <h2><? the_title() ?></h2>
          <p class="fonte-textos"><? the_content() ?></p>
        </div>

        <?
      }
      ?>

      <div class="clear"></div>

    </div>

  </div>
  <? get_template_part('incs/barra-lateral') ?>
</div>

<? get_template_part('incs/rodape'); ?>