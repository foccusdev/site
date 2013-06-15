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
  <div class="conteudo-interno float-left">
    <div class="listagem float-left">
      <div class="box-equipe">
        <div class="img-equipe float-left">
          <img src="<?= get_bloginfo('template_url') ?>/imgs/img-box.jpg" />
        </div>
        <div class="txt-equipe float-left">
          <h2 class="vermelho">Tatiana Azevedo Botão</h2>
          <div class="fonte-textos">
            <p><strong>CREF: 000172-G-RS</strong></p>
            <p>Currículo resumido:</p>
            <p>
              2012 - Workshop de Fitness - Providence Eco Club<br />
              Santa Maria, RS<br />
              Organizador
            </p>
            <p>
              2012 - Workshop de Fitness - Providence Eco Club<br />
              Santa Maria, RS<br />
              Organizador
            </p>
            <p>
              2012 - Workshop de Fitness - Providence Eco Club<br />
              Santa Maria, RS<br />
              Organizador
            </p>              
          </div>
        </div>
        <div class="clear"></div>
      </div>
      <div class="box-equipe">
        <div class="img-equipe float-left">
          <img src="<?= get_bloginfo('template_url') ?>/imgs/img-box.jpg" />
        </div>
        <div class="txt-equipe float-left">
          <h2 class="vermelho">Tatiana Azevedo Botão</h2>
          <div class="fonte-textos">
            <p><strong>CREF: 000172-G-RS</strong></p>
            <p>Currículo resumido:</p>
            <p>
              2012 - Workshop de Fitness - Providence Eco Club<br />
              Santa Maria, RS<br />
              Organizador
            </p>
            <p>
              2012 - Workshop de Fitness - Providence Eco Club<br />
              Santa Maria, RS<br />
              Organizador
            </p>
            <p>
              2012 - Workshop de Fitness - Providence Eco Club<br />
              Santa Maria, RS<br />
              Organizador
            </p>              
          </div>
        </div>
        <div class="clear"></div>
      </div>

      <div class="box-equipe">
        <div class="img-equipe float-left">
          <img src="<?= get_bloginfo('template_url') ?>/imgs/img-box.jpg" />
        </div>
        <div class="txt-equipe float-left">
          <h2 class="vermelho">Tatiana Azevedo Botão</h2>
          <div class="fonte-textos">
            <p><strong>CREF: 000172-G-RS</strong></p>
            <p>Currículo resumido:</p>
            <p>
              2012 - Workshop de Fitness - Providence Eco Club<br />
              Santa Maria, RS<br />
              Organizador
            </p>
            <p>
              2012 - Workshop de Fitness - Providence Eco Club<br />
              Santa Maria, RS<br />
              Organizador
            </p>
            <p>
              2012 - Workshop de Fitness - Providence Eco Club<br />
              Santa Maria, RS<br />
              Organizador
            </p>              
          </div>
        </div>
        <div class="clear"></div>
      </div>
      
      
      <div class="clear"></div>
    </div>

  </div>
  <? get_template_part('incs/barra-lateral') ?>
</div>

<? get_template_part('incs/rodape'); ?>