<?
/* Template Name: Busca */
get_template_part('incs/head');
get_template_part('incs/topo');
?>

<div class="conteudo busca-pag">

  <div class="conteudo_busca">

    <h2 class="nome-secao">Pesquisar</h2>
    <span class="linha-azul"></span>
  </div>
  
  <div class="topo-interna div-form-busca">
    <form action="<? bloginfo('url') ?>" method="get" id="busca-form">
      <input type= "text" id="main" name="s" value="Pesquisar no site" onfocus="if(this.value==='Pesquisar no site')this.value='';" onblur="if (this.value==='')this.value='Pesquisar no site';">
      <input type="submit"  id="botao" class="solid" value="">
      <div class="clear"></div>
    </form>
  </div>

</div>


<? get_template_part('incs/rodape'); ?>
<div id="bg_rodape"/>