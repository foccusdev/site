<?
ob_start();
@session_start();
//@session_destroy();
/* Template Name: Login */



require_once ('login.codigo.php');
get_template_part('incs/head');
get_template_part('incs/topo');

if (isset($_SESSION['logado'])&&$_SESSION['logado']===TRUE) {
  require_once('horario.php');
} else {

  require_once 'login-form.php';
}


get_template_part('incs/rodape');
?>
<div id="bg_rodape"/>
<?ob_end_flush()?>