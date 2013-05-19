<?


if (!empty($_POST['email_news'])){

  
  $email = addslashes(strip_tags($_POST['email_news']));
  $nome = !empty($_POST['nome_news'])?addslashes(strip_tags($_POST['nome_news'])):'';
  
  $novoContato = '
   {
     "list" : {
       "contacts" : [
         {"email": "'.$email.'", "custom_fields": {"nome": "'.utf8_encode($nome).'"} }
       ],
       "overwriteattributes" : true
     }
   }  
  ';
  
  
  // https://DOMINIO/api/v1/accounts/ID_CONTA/lists/ID_LISTA/contacts
  $url = 'https://emailmarketing.locaweb.com.br/api/v1/accounts/51859fe336e1d9f69f002998/lists/51981ee436e1d94ce20013f5/contacts';

  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
  curl_setopt($curl, CURLOPT_HTTPHEADER,array('Content-Type: application/json; charset=utf-8', 'X-Auth-Token: UEKZ13j57Pp1Js8siYop2gRkUUzq8UdqkTYTyYt3P6Qr')); 
  curl_setopt($curl, CURLOPT_POSTFIELDS, $novoContato);

  $retorno = curl_exec($curl);
  
  var_dump($retorno);
  
  echo '<script type="text/javascript">alert("Cadastro efetuado com sucesso!");</script>';
  
  die();
  

}
?>



Þ
<div class="box-tp2">
<div class="pd-all-default">
  <h3>NEWSLETTER</h3>
  <cite>Cadastre-se para receber nossa newsletter.</cite>
    <form method="post" action="" class="form-news">
      <div class="form-linha">
        <input type="text" name="nome_news" id="nome" class="campo-size1" value="Nome" />
        <div class="float-clear"></div>
      </div>
      <div class="form-linha">
        <input type="text" name="email_news" id="email" class="campo-size1" value="E-mail" />
        <div class="float-clear"></div>
      </div>
      <div class="form-bt-type1">
        <input type="submit" name="" value="Enviar" />
      </div>
      <div class="float-clear"></div>
    </form><!--form-contato-->
  </div><!--pd-all-default-->
</div><!--box-->
