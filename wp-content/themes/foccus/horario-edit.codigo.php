<?php

// Configura a conexão com o banco de dados
$conexao = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
mysql_select_db(DB_NAME, $conexao);

$horarioId = strip_tags(addslashes($_GET['id']));

// Traz os dados do horário:
$horarioRs = mysql_query('SELECT * from sys_horarios WHERE id = ' . $horarioId);

// Achou o horário?
if (mysql_num_rows($horarioRs) == 0) {
  @session_destroy();
  die(header('Location: ' . get_bloginfo('url')));
}

$horario = mysql_fetch_array($horarioRs);

// Verifica se este horário realmente pertence ao usuário logado
if ($horario['matricula_id'] != $_SESSION['usuarioId']) {
  @session_destroy();
  die(header('Location: ' . get_bloginfo('url')));
}


// Verifica se o horário foi alterado
if (isset($_POST['hora'])){
  
  $hora = addslashes(strip_tags($_POST['hora']));
  $min = addslashes(strip_tags($_POST['min']));
  $dia = addslashes(strip_tags($_POST['dia_semana']));
  
  $query = 'UPDATE sys_horarios SET alterado = 1, hora = "'.$hora.':'.$min.':00", dia_semana = "'.$dia.'" ';
  
  // Se o horário atual já estava alterado, não salva o horário anterior para que não se perca o horário original do usuário
  if ($horario['alterado']==FALSE)
    $query .= ', hora_anterior = "'.$horario['hora'].'", dia_semana_anterior = "'.$horario['dia_semana'].'" ';
  
  $query .= 'WHERE id = '.$horarioId; 
  mysql_query($query);
  
  die(header("Location: ".get_bloginfo('url').'/login/?erro=ok'));
  
}




// Como os treinos não ocorrem em até 4 horas depois da meia noite, 
// é seguro comparar o dia da semana do horário com o dia da semana atual
if ($horario['dia_semana'] == date('w')) {
  // O treino é hoje
  $horaTreino = strtotime($horario['hora']);
  $horaAtual = time();
  // Verifica se ele já passou 
  if ($horaTreino < $horaAtual) {
    // O treino de hoje já passou, o usuário pode alterar o da próxima semana
    $permitido = TRUE;
    $dataDoTreinoAlterado = date('d/m/Y', time()+604800); // 604800 segundos = 7 dias
  } else {
    // Verifica se o treino irá ocorrer em menos de 4 horas
    $horaTreinoMenos4Horas = $horaTreino - (60 * 60 * 4);
    var_dump($horaTreinoMenos4Horas);
    $permitido = $horaTreino - (60 * 60 * 4) > $horaAtual;
    $dataDoTreinoAlterado = 'Hoje';
  }

} else {
  // Se o treino não for hoje, certamente o usuário poderá alterar seu horário
  $permitido = TRUE;
}

// Verifica se o usuário tem permissão para alterar este horário
if (!$permitido){
  die(header('Location: '.get_bloginfo('url').'/login/?erro=nao-permitido'));
}


// Monta as opções de dia da semana, pré-selecionando a do horário
$diasDaSemana = array('Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado');
$diaSemanaOpt = '';
for ($i=0; $i<7; $i++){
  $selecionar = $i==$horario['dia_semana']?'selected="selected"':'';
  $diaSemanaOpt.='<option value="'.$i.'" '.$selecionar.'>'.$diasDaSemana[$i].'</option>';
}

// Monta as opções de hora
$horarioTreino = explode(':', $horario['hora']);
$horaOpt = '';
for ($i=6; $i<23; $i++){
  $hora = str_pad($i, 2, '0', STR_PAD_LEFT);
  $selecionar = $hora==$horarioTreino[0]?'selected="selected"':'';
  $horaOpt.='<option value="'.$hora.'" '.$selecionar.'>'.$hora.'</option>';
}

// Verifica se é meia hora ou não
$emeia = $horarioTreino[1]=='30'?'selected="selected"':'';

?>
