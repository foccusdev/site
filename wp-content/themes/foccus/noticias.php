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
  <div class="conteudo-interno fonte-textos float-left">
    <div class="listagem float-left">

      <?
      $i = 0;
      while (have_posts()) {
        $i++;
        the_post();
        $novaLinha = $i % 3 == 0 ? '<div class="clear"></div>' : '';
        ?>
        <div class="box mg-box-right">
          <a href="<? the_permalink() ?>">
            <? if (has_post_thumbnail()) the_post_thumbnail() ?>
            <h2 class="seta-azul fonte-textos"><? the_title() ?></h2>
          </a>
        </div>
        <?=$novaLinha?>
        <?
        
      }
      ?>

      

      <div class="clear"></div>
<?/*
      <div class="paginacao float-right mg-box-right">
        <a href="#"><<</a> página 2 de 12 <a href="#">>></a>
      </div>
 * 
 * 
 */?>
    </div>

  </div>
  <? get_template_part('incs/barra-lateral') ?>
</div>

<? get_template_part('incs/rodape'); ?>