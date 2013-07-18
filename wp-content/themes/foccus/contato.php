<?
/* Template name: Contato */
get_template_part('incs/head');
get_template_part('incs/topo');
require_once ('contato.codigo.php');
the_post();
?>

<div class="conteudo">

  <div class="topo-contato"></div>
  <div class="clear"></div>
  <div class="contato-bloco">

    <div class="float-left contato-esquerda">
      <div class="contato-endereco">
        <? the_content() ?>
      </div>    
      <div class="mapa">         
        <iframe width="93%" height="98%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=Rua+das+Laranjeiras,+260,+Rio+de+Janeiro&amp;aq=&amp;sll=-22.934296,-43.18732&amp;sspn=0.008418,0.013926&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=R.+das+Laranjeiras,+260+-+Laranjeiras,+Rio+de+Janeiro,+22240-003&amp;ll=-22.934296,-43.18732&amp;spn=0.008418,0.013926&amp;z=14&amp;output=embed"></iframe>
      </div>
    </div>

    <div class="float-right contato-direita">      

      <form action="" method="post"  enctype="multipart/form-data" id="form-contato">
        <div>
          <div class="styled-select">
            <select name="assunto" id="assunto">
              <option value="">Selecione uma opção</option>
              <option value="Dúvidas">Dúvidas</option>
              <option value="Elogios">Elogios</option>
              <option value="Críticas">Críticas</option>
              <option value="Depoimentos">Depoimentos</option>
              <option value="Envio de Currículo">Envio de Currículo</option>
            </select>
          </div>
        </div>

        <div id="arquivoUpload" style="display: none">
          <label for="arquivo">Arquivo: (PDF ou DOC)</label>
          <input type="file" name="arquivo" id="arquivo" />
        </div>      

        <div>      
          <input type="text" name="nome" id="nome" value="NOME*" onfocus="if(this.value==='NOME*')this.value='';" onblur="if (this.value==='')this.value='NOME*';"/>
        </div>

        <div>
          <input type="text" name="email" id="email" value="E-MAIL*" onfocus="if(this.value==='E-MAIL*')this.value='';" onblur="if (this.value==='')this.value='E-MAIL*';"/>
        </div>
        <div>
          <input type="text" class="ddd" name="ddd" id="ddd" value="DDD*" onfocus="if(this.value==='DDD*')this.value='';" onblur="if (this.value==='')this.value='DDD*';"/>
          <input type="text" class="telefone "name="telefone" id="telefone" value="TELEFONE*" onfocus="if(this.value==='TELEFONE*')this.value='';" onblur="if (this.value==='')this.value='TELEFONE*';"/>
        </div>
        <div>
          <textarea name="mensagem" id="mensagem" class="mensagem" onfocus="if(this.value==='MENSAGEM')this.value='';" onblur="if (this.value==='')this.value='MENSAGEM';">MENSAGEM</textarea>
        </div>
        <div>
          <input type="submit" value="Enviar" id="submit"/>
        </div>
      </form>
    </div>
    
    <div class="clear"></div>
  </div>
</div>


<? get_template_part('incs/rodape'); ?>