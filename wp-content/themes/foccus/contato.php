<?php
/* Template Name: Contato */
require_once ('incs/head.php');
require_once ('contato.codigo.php');
?>
<form action="" method="post" enctype="multipart/form-data">

  <div>
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" />
  </div>

  <div>
    <label for="email">Email:</label>
    <input type="text" name="email" id="email" />
  </div>

  <div>
    <label for="tel">Telefone:</label>
    <input type="text" name="tel" id="tel" />
  </div>

  <div>
    <label for="assunto">Assunto:</label>
    <select name="assunto" id="assunto" >      
      <option value="">Selecione uma opção</option>
      <option value="0">Dúvidas</option>
      <option value="1">Elogios</option>
      <option value="2">Críticas</option>
      <option value="3">Depoimentos</option>
      <option value="4">Envio de Currículo</option>
    </select>
  </div>

  <div id="arquivoUpload" style="display: none">
    <label for="arquivo">Arquivo: (PDF ou DOC)</label>
    <input type="file" name="arquivo" id="arquivo" />
  </div>

  <div>
    <label for="msg">Mensagem:</label><br />
    <textarea cols="80" rows="5"></textarea>
  </div>

  <input type="submit" value="Enviar" />

</form>


<? require_once ('incs/footer.php') ?>