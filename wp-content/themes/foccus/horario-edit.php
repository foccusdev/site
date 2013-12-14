<?
/* Template Name: Horario */

?>

<div class='horario-container'>
    <div class='select-dia_semana float-left'>
      <div class="styled-select">
        <select name="dia_semana" id="assunto">
          <option value="0">Domingo</option>
          <option value="1">Segunda-feira</option>
          <option value="2">Terça-feira</option>
          <option value="3">Quarta-feira</option>
          <option value="4">Quinta-feira</option>
          <option value="5">Sexta-feira</option>
          <option value="6">Sábado</option>
        </select>
      </div>
    </div>
    <div class='texto-horario float-left'  style="width: 4.2%">às</div>

    <div class='select-horario float-left' >
      <div class="styled-select ">
        <select name="hora" id="assunto"> 
          <option value="">09</option>
          <option value="">10</option>
        </select>
      </div>          
    </div>   
    <div class='texto-horario float-left' style="width: 2.03%">:</div>
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