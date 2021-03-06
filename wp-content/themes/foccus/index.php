<?
/* if (!is_user_logged_in())
  die(header('Location: '.  get_bloginfo('url').'/embreve.php')); */
get_template_part('incs/head');
get_template_part('incs/topo');
?>

<div class="conteudo">


  <div class="slideshow" id="slideshow">
    <?
    $wp_query = new WP_Query('post_type=slide');
    while (have_posts()) {
      the_post();
      the_post_thumbnail();
    }
    ?>
  </div>   

  <div class="clear"></div>
  <div class="texto-home-mobile">
    <?
    $wp_query = new WP_Query('p=' . _CONCEITO_TEXTO_CIMA);
    the_post();
    echo str_replace('[...]', '', get_the_excerpt()) . '<a href="' . get_bloginfo('url') . '/conceito/">Saiba +</a>';
    ?>
  </div>

  <div class="newsletter">
    <span>Receba nossa newsletter</span>
    <form action="" method="post" class="float-right">
      <div class="form-campo">
        <label for="news_nome">Nome</label>
        <input type="text" name="news_nome" id="news_nome" />
      </div>
      <div class="form-campo">
        <label for="news_email">email</label>
        <input type="text" name="news_email" id="news_email" />
      </div>
      <div class="form-campo">
        <input type="submit" value="enviar" />
      </div>
    </form>
    <div class="clear"></div>
  </div>

  <img src="<?= get_bloginfo('template_url') ?>/imgs/arco.png" class="arco">
  <span class="nome-secao">Últimas Notícias</span>
  <span class="linha-azul"></span>

  <div class="linha-boxes">

    <?
    $wp_query = new WP_Query(array('cat' => _NOTICIAS, 'posts_per_page' => 4));
    $i = 0;
    while (have_posts()) {
      the_post();
      $classe = $i == 3 ? 'class="no-mg-right box"' : 'class="box mg-box-right"';
      ?>

      <div <?= $classe ?>>
        <a href="<? the_permalink() ?>">
          <?
          if (has_post_thumbnail()) {
            ?><div class="img-box"><? the_post_thumbnail(); ?> </div> <?
          }
          ?>
          <h2 class="seta-azul fonte-textos"><? the_title() ?></h2>
        </a>
      </div>
      <?
      $i++;
    }
    ?>
  </div>
  <div class="clear"></div>

  <img src="<?= get_bloginfo('template_url') ?>/imgs/arco.png" class="arco">
  <span class="nome-secao">Artigos</span>
  <span class="linha-azul"></span>

  <?
  $wp_query = new WP_Query(array('cat' => _ARTIGOS, 'tag' => 'destaque'));
//echo '<pre>'; var_dump($wp_query); echo '</pre>';
  $i = 0;
  while (have_posts()) {
    the_post();
    $classe = $i == 3 ? 'class="no-mg-right box"' : 'class="box mg-box-right"';
    ?>

    <div <?= $classe ?>>
      <a href="<? the_permalink() ?>">
        <?
        if (has_post_thumbnail())
          the_post_thumbnail();
        ?>
        <h2 class="seta-azul fonte-textos"><? the_title() ?></h2>
      </a>
    </div>
    <?
    $i++;
  }
  ?>  

  <div class="clear"></div>

  <?
  $wp_query = new WP_Query(array('cat' => _DEPOIMENTOS, 'tag' => 'destaque'));
  if (have_posts()) {
    ?>

    <img src="<?= get_bloginfo('template_url') ?>/imgs/arco.png" class="arco">
    <span class="nome-secao">Depoimentos</span>
    <span class="linha-azul"></span>

    <?
//echo '<pre>'; var_dump($wp_query); echo '</pre>';
    $i = 0;
    while (have_posts()) {
      the_post();
      $classe = $i == 3 ? 'class="no-mg-right box"' : 'class="box mg-box-right"';
      ?>
      <div <?= $classe ?>>
        <a href="<? the_permalink() ?>">
          <h3><? the_title() ?></h3>
          <p class="fonte-textos"><? the_excerpt() ?> </p>
        </a>
      </div>
      <?
      $i++;
    }
  }
  ?>    


  <div class="clear"></div>

</div>


<? get_template_part('incs/rodape') ?>
