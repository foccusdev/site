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
  
  
  $url = 'https://emailmarketing.locaweb.com.br/api/v1/accounts/51859fe336e1d9f69f002998/lists/51981ee436e1d94ce20013f5/contacts';

  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
  curl_setopt($curl, CURLOPT_HTTPHEADER,array('Content-Type: application/json; charset=utf-8', 'X-Auth-Token: UEKZ13j57Pp1Js8siYop2gRkUUzq8UdqkTYTyYt3P6Qr')); 
  curl_setopt($curl, CURLOPT_POSTFIELDS, $novoContato);

  $retorno = curl_exec($curl);
  
  //die(header('Location: '.  get_bloginfo('url').'/'));
  
  echo '<script type="text/javsacript">alert("Cadastro efetuado com sucesso!");</script>';
  

}
?>