<?
/* 
 * Esta é a View do método chamado via AJAX para popular o select de Bairros de uma Cidade
 */

foreach ($bairros as $key => $value){ 
  ?>
  <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
  <?  
} 
?>