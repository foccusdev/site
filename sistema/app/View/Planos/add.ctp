<h1>Cadastro de Plano</h1>
<? echo '<pre>';
var_dump($atividades);
echo '</pre>' ?>
<div>
<? 
echo $this->Form->create('Plano');
echo $this->Form->input('nome', array('label' => 'Nome do plano:'));
?>

  <div class="input checkbox">

    <label>Atividades Inclusas: </label>

    <? foreach ($atividades as $atividade) { ?>
      <input type="checkbox" value="<?= $atividade['Atividade']['id'] ?>" name="atividadesInclusas[]" /> <?=$atividade['Atividade']['nome']?> 
      <? if (!empty($atividade['Atividade']['valor'])) echo ' = R$ '.$atividade['Atividade']['valor']; ?>
      <br />
    <? } ?>
      
  </div>

  <?
  echo $this->Form->input('valor_especial', array('label' => '*Valor Especial: (Use PONTOS [.] para os centavos)'));
  echo $this->Form->end('Cadastrar');
  ?>

  <span>* Neste momento o sistema lida com valores apenas de forma ilustrativa, sem nenhuma relação com controle de fluxo de caixa.</span>

</div>