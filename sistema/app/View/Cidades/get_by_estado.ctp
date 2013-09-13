<?
/* 
 * Esta é a View do método chamado via AJAX para popular o select de Cidades de um Estado
 */

foreach ($cidades as $key => $value){ 
  ?>
  <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
  <?  
} 
?>