<div class="wrapper">

  <div class="topo">

    <div class="logo float-left">
      <a href="<?= get_bloginfo('url') . '/' ?>"><img src="<?bloginfo('template_url')?>/imgs/bg_topo.png"/></a>
      <div class="clear"></div>
    </div>

    <div class="social-topo float-left">
      <div class="icon-topo face float-left"><a href="#"></a></div>
      <div class="icon-topo inst float-left"><a href="#"></a></div>
      <div class="icon-topo twitter float-left"><a href="#"></a></div>     
    </div>

    <div class="menu-desktop float-right">

      <ul>
        <li class="menu-item-home"><a href="#">Home</a></li>
        <li class="menu-item-foccus" id="menu-item-foccus"><a href="#">Foccus<div class="down-arrow"></div></a></li>
        <li class="menu-item-noticias" id="menu-item-noticias"><a href="#">Notícias<div class="down-arrow"></div></a></li>
        <li class="menu-item-login"><a href="#" title="em breve">Login</a></li>
        <li class="menu-item-busca"><a href="<?= get_bloginfo('url') ?>/busca/"><img src="<?= get_bloginfo('template_url') ?>/imgs/lupa.png"/></a></li>
        <li class="menu-item-contato"><a href="<?= get_bloginfo('url') ?>/contato/">Contato</a></li>
      </ul>

    </div>

    <div class="submenu float-right display-none" id="submenu-foccus">
      <span>Conheça nosso trabalho</span>
      <ul>Þ
        <li><a href="<?= get_bloginfo('url') ?>/conceito/" class="fonte-textos seta-azul">Conceito</a></li>
        <li><a href="<?= get_bloginfo('url') ?>/equipe/" class="fonte-textos seta-azul">Equipe</a></li>
        <li><a href="<?= get_bloginfo('url') ?>/depoimentos/" class="fonte-textos seta-azul">Depoimentos</a></li>
      </ul>
    </div>

    <div class="submenu float-right display-none" id="submenu-noticias">
      <span>Fique Informado</span>
      <ul>
        <li><a href="<?= get_bloginfo('url') ?>/ultimas-noticias/" class="fonte-textos seta-amarela">Últimas Notícias</a></li>
        <li><a href="<?= get_bloginfo('url') ?>/artigos/" class="fonte-textos seta-amarela">Artigos</a></li>
      </ul>
    </div>

    <div class="menu-mobile"></div>

    <div class="clear"></div>

  </div>

