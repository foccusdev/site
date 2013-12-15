<?php

/*
  avaliar se algum horário alterado já passou, se sim, apaga os dados dos campos
  e hora_anterior, dia_semana_anterior e coloca o valor de 'alterado' para "0"
 */


// Configura a conexão com o banco de dados
if ($_SERVER['HTTP_HOST'] == 'localhost') {

  /** O nome do banco de dados do WordPress */
  //define('DB_NAME', 'site1367448928');
  define('DB_NAME', 'foccus');

  /** Usuário do banco de dados MySQL */
  define('DB_USER', 'root');

  /** Senha do banco de dados MySQL */
  define('DB_PASSWORD', '');

  /** nome do host do MySQL */
  define('DB_HOST', 'localhost');
} else {

  /** O nome do banco de dados do WordPress */
  define('DB_NAME', 'site1367448928');

  /** Usuário do banco de dados MySQL */
  define('DB_USER', 'site1367448928');

  /** Senha do banco de dados MySQL */
  define('DB_PASSWORD', 'f0Ccu5dB');

  /** nome do host do MySQL */
  define('DB_HOST', 'mysql01.site1367448928.hospedagemdesites.ws');
}
$diasDaSemana = array('Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado');
$conexao = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
mysql_select_db(DB_NAME, $conexao);
date_default_timezone_set('America/Sao_Paulo');
// Traz todos os horários alterados do dia da semana de hoje que já passaram
$query = 'SELECT * FROM sys_horarios WHERE alterado = 1 && dia_semana = "' . date('w') . '" && hora < "' . date('H:i') . ':00"';
var_dump($query);
$result = mysql_query($query);
if (mysql_num_rows($result) > 0) {
  while ($horario = mysql_fetch_array($result)) {
    // Atualiza o horário para o horário anterior e coloca alterado = 0
    $query = 'UPDATE sys_horarios SET hora = "' . $horario['hora_anterior'] . '", dia_semana = "' . $horario['dia_semana_anterior'] . '", alterado = 0 WHERE id = ' . $horario['id'];
    mysql_query($query);
    // Envia emails para o aluno e para os usuários do sistema avisando da volta ao horário normal
    // Traz os dados do aluno
    $usuarioRs = mysql_query('SELECT * from sys_matriculas WHERE id = ' . $horario['matricula_id']);
    $aluno = mysql_fetch_array($usuarioRs);
    
    $horaTreino = explode(':', $horario['hora_anterior']);
    var_dump($horaTreino);
    $mensagem = '
    <p>Um horário do aluno ' . $aluno['nome'] . ' foi alterado de volta para <strong>' . $diasDaSemana[$horario['dia_semana_anterior']] . ' às ' . $horaTreino[0] . ':' . $horaTreino[1]  . '</strong> </p>
    <p><strong>Telefone:</strong>' . $aluno['telefone'] . '</p>
    <p><strong>Celular:</strong>' . $aluno['celular'] . '</p>
    <p><strong>Email:</strong>' . $aluno['email'] . '</p>  
    ';

    // Envia a mensagem
    require_once ('../wp-content/themes/foccus/class.phpmailer.php');

    $phpMailer = new PHPMailer();
    $phpMailer->CharSet = 'utf-8';
    $phpMailer->IsHTML();
    $phpMailer->Subject = 'Um treino de ' . $aluno['nome'] . ' voltou ao horário normal.';
    $phpMailer->From = 'nao_responda@site1367448928.provisorio.ws';
    $phpMailer->FromName = 'Site Foccus';
    $phpMailer->AddReplyTo(strip_tags($aluno['email']));
    $phpMailer->Body = $mensagem;
    $phpMailer->IsSMTP();

    $phpMailer->SMTPAuth = true;
    $phpMailer->Host = 'smtp.site1367448928.provisorio.ws';
    $phpMailer->Username = 'nao_responda@site1367448928.provisorio.ws';
    $phpMailer->Password = 'f0ccu5M@a1l';
    $phpMailer->Port = 587;

    // Envia um email notificando todos os usuários do sistema 
    // Traz os usuários
    $result = mysql_query('SELECT * from sys_users');
    $emailsArray = array();
    while ($usuario = mysql_fetch_array($result)) {
      $emailsArray[] = $usuario['username'];
    }
    /*
      $phpMailer->AddAddress(trim($emailsArray[0]));

      for ($i = 1; $i < count($emailsArray); $i++) {
      $phpMailer->AddCC(trim($emailsArray[$i]));
      }
     */

    $phpMailer->AddAddress('joaogabrielv@gmail.com');
    $enviou = $phpMailer->Send();   
    
    // Altera a mensagem e assunto e envia para o aluno:
    $mensagem = '
    <p>Olá, ' . $aluno['nome'] . ' </p>
    <p>Seu treino foi alterado de volta para <strong>' . $diasDaSemana[$horario['dia_semana_anterior']] . ' às ' . $horaTreino[0] . ':' . $horaTreino[1]  . '</strong> </p>
    <p>
      <small>
        Este é um email automático gerado pelo sistema. <br />
        Não responda para este remetente diretamente, 
        em caso de dúvidas ou maiores informações entre em <a href="http://www.foccustraining.com.br/contato/">contato pelo site</a>.
      </small>
    </p>
    ';       
    
    $phpMailer = new PHPMailer();
    $phpMailer->CharSet = 'utf-8';
    $phpMailer->IsHTML();
    $phpMailer->Subject = 'Seu treino voltou ao horário normal.';
    $phpMailer->From = 'nao_responda@site1367448928.provisorio.ws';
    $phpMailer->FromName = 'Site Foccus';
    $phpMailer->AddReplyTo('nao_responda@site1367448928.provisorio.ws');
    $phpMailer->Body = $mensagem;
    $phpMailer->IsSMTP();

    $phpMailer->SMTPAuth = true;
    $phpMailer->Host = 'smtp.site1367448928.provisorio.ws';
    $phpMailer->Username = 'nao_responda@site1367448928.provisorio.ws';
    $phpMailer->Password = 'f0ccu5M@a1l';
    $phpMailer->Port = 587;    
    
    $phpMailer->AddAddress('joaogabrielv@gmail.com');
    $enviou = $phpMailer->Send();    
    
  }
}
?>
