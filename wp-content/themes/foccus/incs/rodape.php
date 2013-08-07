

<div class="clear"></div>

<div class="rodape">


  <div class="separador"></div>

  <div class="parceiros">
    <h3>Parceiros</h3>
    <div class="linha-boxes">

      <?
      $wp_query = new WP_Query(array('cat' => _PARCEIROS));
      //echo '<pre>'; var_dump($wp_query); echo '</pre>';
      while (have_posts()) {
        the_post();
        ?>
        <div class="box mg-box-right">
          <a href="<? the_content() ?>" target="_blank">
            <?
            if (has_post_thumbnail())
              the_post_thumbnail();
            ?>
          </a>
        </div>   

        <?
      }
      ?>
    </div>
  </div>

  <div class="clear"></div>

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


  <div class="menu-rodape">

    <div class="bd-menu-right" >
      <h3 class="azul">Foccus</h3>
      <ul class="fonte-textos">
        <li><a href="<?= get_bloginfo('url') ?>/conceitos/">Conceito</a></li>
        <li><a href="<?= get_bloginfo('url') ?>/equipe/">Equipe</a></li>
        <li><a href="<?= get_bloginfo('url') ?>/depoimentos/">Depoimentos</a></li>
      </ul>
    </div>

    <div class="bd-menu-right" >
      <h3 class="amarelo">Notícias</h3>
      <ul class="fonte-textos">
        <li><a href="<?= get_bloginfo('url') ?>/ultimas-noticias/">Últimas Notícias</a></li>
        <li><a href="<?= get_bloginfo('url') ?>/artigos/">Artigos</a></li>
      </ul>
    </div>

    <div class="bd-menu-right"  >
      <h3><a href="#" class="vermelho">Login</a></h3>
    </div>

    <div class="bd-menu-right" >
      <h3><a href="<?= get_bloginfo('url') ?>/busca/" class="cinza">Pesquisa</a></h3>
    </div>

    <div>
      <h3><a href="<?= get_bloginfo('url') ?>/contato/" class="verde">Contato</a></h3>
    </div>

  </div>

  <div class="clear"></div>




</div>

</div>


  <div class="creditos ">

    <div class="wrapper fonte-textos branco">
    
    <div class="float-left">
      Foccus Training - Copyright <?= date('Y') ?>
    </div>

    <div class="float-right ">
      Desenvolvido por <a href="#">Magno Dal Magro</a> e <a href="#">João Gabriel N. Vieira</a>
    </div>
    
    <div class="clear"></div>

    
    </div>
  </div>

<script type="text/javascript" src="<?= get_bloginfo('template_url') ?>/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?= get_bloginfo('template_url') ?>/js/core.js"></script>
<script type="text/javascript" src="<?= get_bloginfo('template_url') ?>/js/cycle.js"></script>

<script type="text/javascript">

  if ($('#slideshow').length>0){
    $('#slideshow').cycle({ 
      fx:     'fade', 
      speed:   300, 
      timeout: 3000, 
      next:   '#slideshow', 
      pause:   1 
    });  
  
  }

</script>

<!-- Twitter -->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>


<script type="text/javascript"> 
var $buoop = {
  vs:{i:8,f:15,o:10.6,s:4,n:9},
  text: "Seu navegador está desatualizado e pode não suportar todas as características deste site. Clique aqui para ver uma lista de navegadores compatíveis.",
  l: 'pt',
  test: false,
  newwindow: true
} 
$buoop.ol = window.onload; 
window.onload=function(){ 
 try {if ($buoop.ol) $buoop.ol();}catch (e) {} 
 var e = document.createElement("script"); 
 e.setAttribute("type", "text/javascript"); 
 e.setAttribute("src", "http://browser-update.org/update.js"); 
 document.body.appendChild(e); 
} 
</script> 



</body>

</html>

<? ob_end_flush() ?>
