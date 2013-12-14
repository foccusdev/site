<?
ob_start();
@session_start();
/* Template Name: Horario */
require_once('horario-edit.codigo.php');
get_template_part('incs/head');
get_template_part('incs/topo');
?>

<?php
if (!isset($_SESSION['usuarioId']))
  die(header('Location: ' . get_bloginfo('url')));

$usuarioId = $_SESSION['usuarioId'];

// Traz os dados do usuário logado
$usuarioRs = mysql_query('SELECT * from sys_matriculas WHERE id = ' . $usuarioId);
$usuarioDados = mysql_fetch_array($usuarioRs);

// Traz os horários do usuário
$horarioRs = mysql_query('SELECT * from sys_horarios WHERE matricula_id = ' . $usuarioId);
?>
<div class="conteudo login-foccus" >

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

  <div class="conteudo">
    <img src="<?= get_bloginfo('template_url') ?>/imgs/arco.png" class="arco">
    <h2 class="nome-secao">Horário</h2>
    <span class="linha-azul"></span>

    <h3>Olá, <?= $usuarioDados['nome'] ?>.</h3>
    <span class='float-right'><a href="<? bloginfo('url') ?>/login/?sair=true">Sair X</a></span>

    <p>Altere o horário do seu treino abaixo</p>

    <div class='horario-container'>

      <div class='select-dia_semana float-left'>
        <div class="styled-select">
          <select name="dia_semana" >
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
      <div class='texto-horario float-left'>&nbsp;&nbsp;</div>
      <div class="hora-box">
        <div class='select-horario float-left' >
          <div class="styled-select ">
            <select name="hora" > 
              <option value="">09</option>
              <option value="">10</option>
            </select>
          </div>          
        </div>   
        <div class='texto-horario float-left'>:</div>
        <div class='select-horario float-left' >
          <div class="styled-select ">
            <select name="hora" >
              <option value="">00</option>
              <option value="">30</option>
            </select>
          </div>          
        </div>
        <div class='clear'></div>
      </div>
      <div class='clear'></div>

      <input type="submit"  value="Alterar">    
    </div>

  </div>




  <div class='clear'></div>
</div>


<?
get_template_part('incs/rodape');
?>
<div id="bg_rodape"/>
<?
ob_end_flush()?>