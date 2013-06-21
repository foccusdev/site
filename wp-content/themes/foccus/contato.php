<?php
/* Template Name: Contato */

require_once ('incs/head.php');
require_once ('contato.codigo.php');
?>
<form action="" method="post" enctype="multipart/form-data" id="form-contato">

  <div>
    <label for="nome">* Nome:</label>
    <input type="text" name="nome" id="nome" />
    <span class="erro">Digite um nome com mais de 3 caracteres.</span>
  </div>

  <div>
    <label for="email">* Email:</label>
    <input type="text" name="email" id="email" />
    <span class="erro">Digite um email válido.</span>
  </div>
  
  <div>
    <label for="tel">Telefone:</label>
    <input type="text" name="tel" id="tel" />
  </div>

 
  
  
<div class="styled-select">
   <select>
      <option>Here is the first option</option>
      <option>The second option</option>
   </select>
</div> 
  
  
  
  
  
  
  
  
  
  
  
  
  

  <div id="arquivoUpload" style="display: none">
    <label for="arquivo">Arquivo: (PDF ou DOC)</label>
    <input type="file" name="arquivo" id="arquivo" />
  </div>

  <div>
    <label for="msg">* Mensagem:</label><br />
    <textarea cols="80" rows="5" name="msg" id="msg"></textarea>
    <span class="erro"><br />Digite uma mensagem.</span>
  </div>

  <input type="submit" value="Enviar" />

  <small>* Campos obrigatórios.</small>
  
</form>


<? 
require_once ('incs/footer.php');
if (isset($_GET['msg'])){
  
  switch ($_GET['msg']){
    
    case 1:
      $msg = 'Email enviado com sucesso!';
      break;
    
    case 2:
      $msg = 'Lamentamos informar que houve um erro no envio de email! \nPor favor, tente mais tarde ou entre em contato conosco por outro meio.\nAjude-nos a oferecer um serviço cada vez melhor e informe-nos sobre este erro.';
      break;
    
    case 3:
      $msg = 'O tipo do arquivo enviado não é permitido.\nPor favor, envie apenas arquivos com as extensões .doc .docx ou .pdf!';
      break;
    
  }
  
  echo '<script type="text/javascript">alert("'.$msg.'")</script>';
  
  
}
?>