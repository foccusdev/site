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
var_dump($permitido);
var_dump($dataDoTreinoAlterado);

// Verifica se o usuário tem permissão para alterar este horário
if (!$permitido){
  die(header('Location: '.get_bloginfo('url').'/login/?erro=nao-permitido'));
}

?>
