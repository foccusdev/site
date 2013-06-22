<?
get_template_part('incs/head');
get_template_part('incs/topo');
?>

<div class="conteudo">

  <div class="topo-contato"></div>

  <div class="float-left contato">

    <div class="contato-endereco">

      <h3>Horário de Funcionamento</h3>
      <p>Segunda a Sexta: 06h às 23h Sábados: 09h às 20h</p>

      <h3>Telefones</h3>
      <p>
        (21)3333.3333<br />
        (21)3333.3333
      </p>

      <h3>Email</h3>
      <p>contato@foccustraining.com.br</p>

      <h3>Localização</h3>
      <p>
        Rua das Laranjeiras, 200, Laranjeiras, Rio de Janeiro - RJ.<br />
        CEP 22240-005
      </p>

    </div>    

    <div class="mapa">         
      <iframe width="294" height="171" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=Rua+das+Laranjeiras,+260,+Rio+de+Janeiro&amp;aq=&amp;sll=-22.934296,-43.18732&amp;sspn=0.008418,0.013926&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=R.+das+Laranjeiras,+260+-+Laranjeiras,+Rio+de+Janeiro,+22240-003&amp;ll=-22.934296,-43.18732&amp;spn=0.008418,0.013926&amp;z=14&amp;output=embed"></iframe>
    </div>



  </div>
  <div class="float-right form-contato">      

    <form action="" method="post">

     
  <div class="styled-select">
    <select>
      <option>Here is the first option</option>
      <option>The second option</option>
    </select>
  </div>
        
        
        <input type="text" name="nome" id="nome" value="NOME*"/>
      </div>
      <div>
        <input type="text" name="email" id="email" value="E-MAIL*"/>
      </div>
      <div>
        <input type="text" class="ddd" name="ddd" id="ddd" value="DDD*"/>
        <input type="text" class="telefone "name="telefone" id="telefone" value="TELEFONE*"/>
      </div>
      <div>
        <textarea name="mensagem" id="mensagem" class="mensagem">MENSAGEM</textarea>
      </div>
      <div>
        <input type="submit" value="Enviar" />
      </div>
    </form>
  </div>
</div>

<? get_template_part('incs/rodape'); ?>
