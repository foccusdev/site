<?php
// Verifica se o usuário saiu da sessão
if (isset($_GET['sair']) && $_GET['sair']=='true'){
  @session_destroy();
  die(header('Location: '.get_bloginfo('url').'/login/'));
}

// Veridica se houve erro de login
if (isset($_GET['erro']) && $_GET['erro']=='true'){
  echo '<script>alert("Login ou Senha incorretos")</script>';
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
    $_SESSION['logado'] = TRUE;
  }else{
    $_SESSION['logado'] = FALSE;
    die(header('Location: '.get_bloginfo('url').'/login/?erro=true'));
  }
}
?>
