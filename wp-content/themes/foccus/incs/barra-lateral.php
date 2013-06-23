
<div class="coluna-direita">

  <?
  if (is_single()) {
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

  <div class="secao">
    Depoimentos
  </div>

  <?
  $wp_query = new WP_Query(array('cat' => _DEPOIMENTOS, 'tag' => 'destaque', 'posts_per_page' => 2));
  //echo '<pre>'; var_dump($wp_query); echo '</pre>';
  $i = 0;
  while (have_posts()) {
    the_post();
    ?>
    <div class="box">
      <a href="<?  bloginfo('url')?>/depoimentos/#<? the_ID() ?>">
        <h4 class="fonte-textos">"<?= substr(get_the_excerpt(), 0, 120) ?>..."</h4>        
      </a>
    </div>
    <?
  }
  ?>   

  <div class="clear"></div>

  <div class="secao">
    Notícias
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

  <div class="clear"></div>

  <div class="secao">
    Artigos
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

  <div class="clear"></div>    

</div>