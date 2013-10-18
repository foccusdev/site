
<div class="coluna-direita">

  <?
  if (is_single() && false) {
    ?>

    <div class="secao">
      Assuntos Relacionados
    </div>

    <div class="box">
      <a href="#">
        <img src="<?= get_bloginfo('template_url') ?>/imgs/img-box.jpg" class="float-left" />
        <h4 class="fonte-textos">san sapien, nec pulvinar mauris vestibulum blandit. Nullam congue felis in tellus vulputate 
          id lobortis.</h4>
        <div class="saiba-mais fonte-textos">Saiba +</div>
      </a>
    </div>

    <div class="box">
      <a href="#">
        <img src="<?= get_bloginfo('template_url') ?>/imgs/img-box.jpg" class="float-left" />
        <h4 class="fonte-textos">san sapien, nec pulvinar mauris vestibulum blandit. Nullam congue felis in tellus vulputate 
          id lobortis.</h4>
        <div class="saiba-mais fonte-textos">Saiba +</div>
      </a>
    </div>    


  <? } ?>
  <div class="clear"></div>


  <?
  $wp_query = new WP_Query(array('cat' => _DEPOIMENTOS, 'tag' => 'destaque', 'posts_per_page' => 2));
  if (have_posts()) {
    ?>

    <div class="secao">
      Depoimentos
    </div>

    <?
    $wp_query = new WP_Query(array('cat' => _DEPOIMENTOS, 'tag' => 'destaque', 'posts_per_page' => 2));
    while (have_posts()) {
      the_post();
      ?>
      <div class="box">
        <a href="<? bloginfo('url') ?>/depoimentos/#<? the_ID() ?>">
          <h4 class="fonte-textos">"<?= substr(get_the_excerpt(), 0, 120) ?>..."</h4>        
        </a>
      </div>
      <?
    }
  }
  ?>   

  <div class="clear"></div>

  <div class="secao">
    Notícias
  </div>

  <?
  $wp_query = new WP_Query(array('cat' => _NOTICIAS, 'posts_per_page' => 2));
  while (have_posts()) {
    the_post();
    ?>  

    <div class="box">
      <a href="<? the_permalink() ?>">
        <? if (has_post_thumbnail()) the_post_thumbnail('post-thumbnail', array('class' => 'float-left')) ?>
        <h4 class="fonte-textos"><? the_title() ?></h4>
        <div class="saiba-mais fonte-textos">Saiba +</div>
      </a>
    </div>
    <?
  }
  ?>

  <div class="clear"></div>

  <div class="secao">
    Artigos
  </div>

  <?
  $wp_query = new WP_Query(array('cat' => _ARTIGOS, 'tag' => 'destaque'));

  while (have_posts()) {
    the_post();
    ?>  

    <div class="box">
      <a href="<? the_permalink() ?>">
        <? if (has_post_thumbnail()) the_post_thumbnail('post-thumbnail', array('class' => 'float-left')) ?>
        <h4 class="fonte-textos"><? the_title() ?></h4>
        <div class="saiba-mais fonte-textos">Saiba +</div>
      </a>
    </div>

  <? } ?>


  <div class="clear"></div>    

</div>