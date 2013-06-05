<?
/* Template Name: Conceito */
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
  <h2 class="nome-secao">Conceito</h2>
  <span class="linha-azul"></span>

  <div class="conteudo-interno">

    <div class="coluna-esquerda">
      <img src="<?= get_bloginfo('template_url') ?>/imgs/img_conceito.jpg" class="img-destacada" />
    </div>

    <div class="coluna-direita">


    </div>

  </div>

</div>

<? get_template_part('incs/rodape'); ?>