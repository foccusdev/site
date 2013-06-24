//Magno correção de zica

<div class="clear"></div>

<div class="rodape">


  <div class="separador"></div>

  <div class="parceiros">
    <h3>Parceiros</h3>
    <div class="linha-boxes">
      <div class="box mg-box-right">
        <a href="#">
          <img src="<?= get_bloginfo('template_url') ?>/imgs/parceiro.png" />
        </a>
      </div>   
      <div class="box mg-box-right">
        <a href="#">
          <img src="<?= get_bloginfo('template_url') ?>/imgs/parceiro.png" />
        </a>
      </div> 
      <div class="box mg-box-right">
        <a href="#">
          <img src="<?= get_bloginfo('template_url') ?>/imgs/parceiro.png" />
        </a>
      </div> 
      <div class="box no-mg-right">
        <a href="#">
          <img src="<?= get_bloginfo('template_url') ?>/imgs/parceiro.png" />
        </a>
      </div> 
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
        <li><a href="<?= get_bloginfo('url')?>/conceitos/">Conceito</a></li>
        <li><a href="#">Equipe</a></li>
        <li><a href="#">Depoimentos</a></li>
      </ul>
    </div>

    <div class="bd-menu-right" >
      <h3 class="amarelo">Notícias</h3>
      <ul class="fonte-textos">
        <li><a href="<?= get_bloginfo('url')?>/ultimas-noticias/">Últimas Notícias</a></li>
        <li><a href="<?= get_bloginfo('url')?>/artigos/">Artigos</a></li>
      </ul>
    </div>

    <div class="bd-menu-right"  >
      <h3><a href="#" class="vermelho">Login</a></h3>
    </div>

    <div class="bd-menu-right" >
      <h3><a href="#" class="cinza">Pesquisa</a></h3>
    </div>

    <div>
      <h3><a href="#" class="verde">Contato</a></h3>
    </div>

  </div>

  <div class="clear"></div>

  <div class="creditos fonte-textos">

    <div class="float-left">
      Foccus Training - Copyright <?= date('Y') ?>
    </div>

    <div class="float-right ">
      Desenvolvido por <a href="#">Magno Dal Magro</a> e <a href="#">João Gabriel N. Vieira</a>
    </div>

    <div class="clear"></div>

  </div>


</div>

</div>


<script type="text/javascript" src="<?= get_bloginfo('template_url') ?>/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?= get_bloginfo('template_url') ?>/js/core.js"></script>
</body>

</html>

<? ob_end_flush() ?>