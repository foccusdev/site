<?php

if (!isset($_SESSION['usuarioId']))
  die(header('Location: '.get_bloginfo ('url')));

$usuarioId = $_SESSION['usuarioId'];



// Traz os dados do usuário logado
$usuarioRs = mysql_query('SELECT * from sys_matriculas WHERE id = '.$usuarioId);
$usuarioDados = mysql_fetch_array($usuarioRs);

// Traz os horários do usuário
$horarioRs = mysql_query('SELECT * from sys_horarios WHERE matricula_id = '.$usuarioId);

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
  
  <h3>Olá, <?=$usuarioDados['nome']?>.</h3>
  <span class='float-right'><a href="<?bloginfo('url')?>/login/?sair=true">Sair X</a></span>
  
  <table class="table-usuarios">
    <tr>
      <th>Dia da Semana</th>
      <th>Hora</th>
      <th class="coluna-acoes">Ações</th>
    </tr>

    <?
    $diaSemana = array('Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado');
    $zebrado = false;
    while ($horario = mysql_fetch_array($horarioRs)) {
      ?>
      <tr class="<?= $zebrado ? 'linha-escura' : '' ?> <?=$estilo?>">
        <td><?= $diaSemana[$horario['dia_semana']]; ?></td>
        <td><?= $horario['hora']; ?></td>
        <td class="coluna-acoes">
          <a href="<?bloginfo('url');?>/alterar-horario/?id=<?=$horario['id']?>">Alterar</a>
        </td>

      </tr>
      <?
      $zebrado = !$zebrado;
    }
    ?>

  </table>  
  
</div>


 
  
<div class='clear'></div>
</div>