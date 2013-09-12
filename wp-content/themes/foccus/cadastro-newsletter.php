<?

//require_once ('incs/head.php');
require_once ('cadastro-newsletter.codigo.php');

?>

<div class="box-tp2">
<div class="pd-all-default">
  <h3>NEWSLETTER</h3>
  <cite>Cadastre-se para receber nossa newsletter.</cite>
    <form method="post" action="" class="form-news">
      <div class="form-linha">
        <label for="nome_news">Nome:</label>
        <input type="text" name="nome_news" id="nome_news" class="campo-size1" />
        <div class="float-clear"></div>
      </div>
      <div class="form-linha">
        <label for="email_news">Email:</label>
        <input type="text" name="email_news" id="email_news" class="campo-size1" />
        <div class="float-clear"></div>
      </div>
      <div class="form-bt-type1">
        <input type="submit" name="" value="Enviar" />
      </div>
      <div class="float-clear"></div>
    </form><!--form-contato-->
  </div><!--pd-all-default-->
</div><!--box-->

<? 
//require_once ('incs/footer.php');
if (isset($_GET['msg'])){
  
  switch ($_GET['msg']){
    
    case 1:
      $msg = 'Cadastro efetuado com sucesso!';
      break;
    
    case 2:
      $msg = 'Lamentamos informar que houve um erro no cadastro! \nPor favor, tente mais tarde ou entre em contato conosco.\nAjude-nos a oferecer um serviço cada vez melhor e informe-nos sobre este erro.';
      break;
    
  }
  
  echo '<script type="text/javascript">alert("'.$msg.'")</script>';
  
  
}
?>