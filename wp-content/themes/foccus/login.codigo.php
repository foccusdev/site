<?php
// Verifica se o usuário saiu da sessão
if (isset($_GET['sair']) && $_GET['sair']=='true'){
  @session_destroy();
  die(header('Location: '.get_bloginfo('url').'/login/'));
}

// Veridica se houve erro 
if (isset($_GET['erro'])){
  
  $msg = strip_tags($_GET['erro']);
  switch($msg){
    
    case 'login':
      $texto = 'Login ou Senha incorretos';
      break;
    
    case 'nao-permitido':
      $texto = 'Desculpe, este horário não pode ser modificado.\nÉ necessária uma antecedência mínima de quatro horas para modificar um horário.';
      break;
    
    default:
      $texto = 'Ops! Algo deu errado, tente novamente mais tarde ou entre em contato informando este erro.';
      break;
    
  }  
  
  echo '<script>alert("'.$texto.'")</script>';
}

// Configura a conexão com o banco de dados
$conexao = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
mysql_select_db(DB_NAME, $conexao);

if (!empty($_POST['login'])){
  
  $login = addslashes(strip_tags($_POST['login']));
  $senha = addslashes(strip_tags($_POST['senha']));
  
  // valida o login
  $query = 'SELECT * FROM sys_matriculas WHERE email = "'.$login.'" && senha = "'.$senha.'"';
  $result = mysql_query($query);
  if (mysql_num_rows($result)>0){
    $dados = mysql_fetch_array($result);
    $_SESSION['logado'] = TRUE;
    $_SESSION['usuarioId'] = $dados['id'];
  }else{
    $_SESSION['logado'] = FALSE;
    die(header('Location: '.get_bloginfo('url').'/login/?erro=login'));
  }
}
?>
