<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="conteudo" >

  <div class="conteudo_busca">
  <img src="<?= get_bloginfo('template_url') ?>/imgs/arco.png" class="arco">
  <h2 class="nome-secao">Horário</h2>
  <span class="linha-azul"></span>
  
  <h3>Olá, Fulano.</h3>
  <span class='float-right'><a href='#'>Sair X</a></span>
  <p>Abaixo você pode alterar o horário de seu próximo treino.</p>  
  
</div>


  <div class='horario-container'>
  <div class='select-dia_semana float-left'>
    <div class="styled-select">
      <select name="dia_semana" id="assunto">
        <option value="">Domingo</option>
        <option value="">Segunda-feira</option>
        <option value="">Terça-feira</option>
        <option value="">Quarta-feira</option>
        <option value="">Quinta-feira</option>
        <option value="">Sexta-feira</option>
        <option value="">Sábado</option>
      </select>
    </div>
  </div>
    <div class='texto-horario float-left'>às</div>
    
  <div class='select-horario float-left' >
    <div class="styled-select ">
      <select name="hora" id="assunto"> 
        <option value="">09</option>
        <option value="">10</option>
      </select>
    </div>          
  </div>   
    <div class='texto-horario float-left'>:</div>
  <div class='select-horario float-left' >
    <div class="styled-select ">
      <select name="hora" id="assunto">
        <option value="">00</option>
        <option value="">30</option>
      </select>
    </div>          
  </div>  
    <div class='clear'></div>
    
   <input type="submit"  value="Alterar">    
</div>
  
<div class='clear'></div>
</div>