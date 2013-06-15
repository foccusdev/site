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

      <div class="box-depoimentos">
        <h2>Letícia Freitas de Souza</h2>
        <p class="fonte-textos">
          Lorem ipsum dolor sit amet, consectruer adipsiscing Lorem ipsum dolor sit amet, consectruer 
          adipsiscing Lorem ipsum dolor sit amet, consectruer adipsiscing Lorem ipsum dolor sit amet, 
          consectruer adipsiscing 
        </p>
      </div>

      <div class="box-depoimentos">
        <h2>Letícia Freitas de Souza</h2>
        <p class="fonte-textos">
          Lorem ipsum dolor sit amet, consectruer adipsiscing Lorem ipsum dolor sit amet, consectruer 
          adipsiscing Lorem ipsumet, consectruer adipsiscing Lorem ipsum dolor sit amet, consectruer 
          adipsiscing Lorem ipsum et, consectruer adipsiscing Lorem ipsum dolor sit amet, consectruer 
          adipsiscing Lorem ipsum sit amet, consectruer adipsiscing Lorem ipsum dolor sit amet, 
          consectruer adipsiscing 
        </p>
      </div>

      <div class="box-depoimentos">
        <h2>Letícia Freitas de Souza</h2>
        <p class="fonte-textos">
          Lorem ipsum dolor sit amet, consectruer adipsiscing Lorem ipsum dolor sit amet, consectruer 
          adipset, consectruer adipsiscing Lorem ipsum dolor sit amet, consectruer 
          adipsiscing Lorem ipsum et, consectruer adipsiscing Lorem ipsum dolor sit amet, consectruer 
          adipsiscing Lorem ipsum et, consectruer adipsiscing Lorem ipsum dolor sit amet, consectruer 
          adipsiscing Lorem ipsum et, consectruer adipsiscing Lorem ipsum dolor sit amet, consectruer 
          adipsiscing Lorem ipsum  ipsum dolor sit amet, consectruer adipsiscing Lorem ipsum dolor sit amet, 
          consectruer adipsiscing 
        </p>
      </div>

      <div class="box-depoimentos">
        <h2>Letícia Freitas de Souza</h2>
        <p class="fonte-textos">
          Lorem ipsum dolor sit amet, consectruer adipsiscing Lorem ipsum dolor sit amet, consectruer 
          adipsiscing Lorem ipsum dolor sit amet, consectruer adipsiscing Lorem ipsum dolor sit amet, 
          consectruer adipsiscing       Lorem ipsum dolor sit amet, consectruer adipsiscing Lorem ipsum dolor sit amet, consectruer 
          adipsiscing Lorem ipsum dolor sit amet, consectruer adipsiscing Lorem ipsum dolor sit amet, 
          consectruer adipsiscing       Lorem ipsum dolor sit amet, consectruer adipsiscing Lorem ipsum dolor sit amet, consectruer 
          adipsiscing Lorem ipsum dolor sit amet, consectruer adipsiscing Lorem ipsum dolor sit amet, 
          consectruer adipsiscing 
        </p>
      </div>

      <div class="box-depoimentos">
        <h2>Letícia Freitas de Souza</h2>
        <p class="fonte-textos">
          Lorem ipsum dolor sit amet, consectruer adipsiscing Lorem ipsum dolor sit amet, consectruer 
          adipsiscing Lorem ipsum et, consectruer adipsiscing Lorem ipsum dolor sit amet, consectruer 
          adipsiscing Lorem ipsum et, consectruer adipsiscing Lorem ipsum dolor sit amet, consectruer 
          adipsiscing Lorem ipsum dolor sit amet, consectruer adipsiscing Lorem ipsum dolor sit amet, 
          consectruer adipsiscing 
        </p>
      </div>
      
      <div class="clear"></div>

    </div>

  </div>
  <? get_template_part('incs/barra-lateral') ?>
</div>

<? get_template_part('incs/rodape'); ?>