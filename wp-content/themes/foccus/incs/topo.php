<div class="wrapper">

  <div class="topo">

    <div class="logo float-left">
      <a href="<?= get_bloginfo('url') . '/' ?>"><img src="<? bloginfo('template_url') ?>/imgs/logo_site.png"/></a>
      <div class="clear"></div>
    </div>

    <div class="social-topo float-left">
      <div class="icon-topo face float-left"><a href="javascript:alert('Em breve')" title='Em breve'></a></div>
      <div class="icon-topo inst float-left"><a href="http://instagram.com/foccustraining" target='_blank'></a></div>
      <div class="icon-topo twitter float-left"><a href="javascript:alert('Em breve')" title='Em breve'></a></div>     
    </div>

    <div class="menu-desktop float-right">

      <ul>
        <li class="menu-item-home"><a href="<?=get_bloginfo('url')?>">Home</a></li>
        <li class="menu-item-foccus" id="menu-item-foccus"><a href="javascript:void(0)">Foccus<div class="down-arrow"></div></a></li>
        <li class="menu-item-noticias" id="menu-item-noticias"><a href="javascript:void(0)">Notícias<div class="down-arrow"></div></a></li>
        <?/*<li class="menu-item-login"><a href="<?= get_bloginfo('url') ?>/login/" title="em breve">Login</a></li>*/?>
        <li class="menu-item-login"><a href="javascript:alert('Em breve')" title="em breve">Login</a></li>
        <li class="menu-item-busca"><a href="<?= get_bloginfo('url') ?>/busca/"><img src="<?= get_bloginfo('template_url') ?>/imgs/lupa.png"/></a></li>
        <li class="menu-item-contato"><a href="<?= get_bloginfo('url') ?>/contato/">Contato</a></li>
      </ul>

    </div>

    <div class="submenu float-right display-none" id="submenu-foccus">
      <span>Conheça nosso trabalho</span>
      <ul>
        <li><a href="<?= get_bloginfo('url') ?>/conceito/" class="fonte-textos seta-azul">Conceito</a></li>
        <li><a href="<?= get_bloginfo('url') ?>/equipe/" class="fonte-textos seta-azul">Equipe</a></li>
        <li><a href="<?= get_bloginfo('url') ?>/depoimentos/" class="fonte-textos seta-azul">Depoimentos</a></li>
        <li><a href="<?= get_bloginfo('url') ?>/atividades/" class="fonte-textos seta-azul">Atividades</a></li>
      </ul>
    </div>

    <div class="submenu float-right display-none" id="submenu-noticias">
      <span>Fique Informado</span>
      <ul>
        <li><a href="<?= get_bloginfo('url') ?>/ultimas-noticias/" class="fonte-textos seta-amarela">Últimas Notícias</a></li>
        <li><a href="<?= get_bloginfo('url') ?>/artigos/" class="fonte-textos seta-amarela">Artigos</a></li>
      </ul>
    </div>
<div class="menu-mobile-icon"><a href="javascript:void()"></a></div>
    <div class="clear"></div>
    
    <div class="menu-mobile display-none">

      <ul>
        <li class="menu-item-home"><a href="#">Home</a></li>
        <li class="menu-item-foccus" id="menu-item-foccus-mobile">
          <a href="javascript:void(0)">Foccus + </a>
        </li>
        <li id="submenu-foccus-mobile" class="display-none">
          <div class="submenu" >
            <span>Conheça nosso trabalho</span>
            <ul>
              <li><a href="<?= get_bloginfo('url') ?>/conceito/" class="fonte-textos seta-azul">Conceito</a></li>
              <li><a href="<?= get_bloginfo('url') ?>/equipe/" class="fonte-textos seta-azul">Equipe</a></li>
              <li><a href="<?= get_bloginfo('url') ?>/depoimentos/" class="fonte-textos seta-azul">Depoimentos</a></li>
              <li><a href="<?= get_bloginfo('url') ?>/atividades/" class="fonte-textos seta-azul">Atividades</a></li>
            </ul>
          </div>
        </li>
        <li class="menu-item-noticias" id="menu-item-noticias-mobile">
          <a href="javascript:void(0)">Notícias +</a>
        </li>
        <li class="display-none" id="submenu-noticias-mobile">
          <div class="submenu">
            <span>Fique Informado</span>
            <ul>
              <li><a href="<?= get_bloginfo('url') ?>/ultimas-noticias/" class="fonte-textos seta-amarela">Últimas Notícias</a></li>
              <li><a href="<?= get_bloginfo('url') ?>/artigos/" class="fonte-textos seta-amarela">Artigos</a></li>
            </ul>
          </div>          
        </li>
        <li class="menu-item-login"><a href="javascript:alert('Em breve!')" title="em breve">Login</a></li>
        <li class="menu-item-busca"><a href="<?= get_bloginfo('url') ?>/busca/"><img src="<?= get_bloginfo('template_url') ?>/imgs/lupa.png"/></a></li>
        <li class="menu-item-contato"><a href="<?= get_bloginfo('url') ?>/contato/">Contato</a></li>
      </ul>      
      <div class="clear"></div>
    </div>    
    
  </div>

