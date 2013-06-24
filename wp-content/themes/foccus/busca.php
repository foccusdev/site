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
  
  <div class="topo-interna">
    <form>
      <input type= "text"   id="main" value="Pesquisar no site" onfocus="if(this.value==='Pesquisar no site')this.value='';" onblur="if (this.value==='')this.value='Pesquisar no site';">
      <input type="submit"  id="botao" class="solid" value="">
    </form>
  </div>


</div>
<? get_template_part('incs/rodape'); ?>
=======
    <form action="<? bloginfo('url') ?>" method="get" id="busca-form">
      <input type= "text" id="main" name="s" value="Pesquisar no site" onfocus="if(this.value==='Pesquisar no site')this.value='';" onblur="if (this.value==='')this.value='Pesquisar no site';">
      <input type="submit"  id="botao" class="solid" value="">
    </form>
  </div>

</div>
<? get_template_part('incs/rodape'); ?>
>>>>>>> branch 'master' of https://github.com/foccusdev/site.git
