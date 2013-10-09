<a href="javascript:history.back(-1)" class="seta-voltar float-left" title="Clique aqui para voltar para a listagem."></a> 
<h1>Cadastro de Plano</h1>
<div>
  <?
  echo $this->Form->create('Plano');
  echo $this->Form->input('nome', array('label' => 'Nome do plano:'));
  ?>
  <div class="input checkbox">    
    <?php
    echo $this->Form->label('Atividades Inclusas: ');
    foreach ($atividades as $id => $label) {
      echo $this->Form->input("Atividade.$id", array(
          'label' => $label['Atividade']['nome'] . ' - R$ ' . $label['Atividade']['valor'],
          'value' => $label['Atividade']['id'],
          'type' => 'checkbox',
          'class' => 'atividades'
      ));
    }
    ?>    
  </div>

  <?
  echo $this->Form->input('valor_especial', array('label' => '*Valor Especial: (Use PONTOS [.] para os centavos)', 'value' => '0'));
  echo $this->Form->end('Cadastrar');
  ?>

  <span>* Neste momento o sistema lida com valores apenas de forma ilustrativa, sem nenhuma relação com controle de fluxo de caixa.</span>

</div>
<?
$this->Html->scriptBlock('
  
  $(".atividades").click(function(){

    var plano = $(this).next().html().toString();
    var precoPos = plano.indexOf("R$ ");
    var preco = parseFloat(plano.substring(precoPos+3));
    
    var valorEspecial = parseFloat($("#PlanoValorEspecial").val());
    if (isNaN(valorEspecial))
      valorEspecial = 0;

    var novoValor = ($(this).is(":checked")) ? valorEspecial + preco : valorEspecial - preco; 
    $("#PlanoValorEspecial").val(novoValor.toFixed(2));    
    
  });
  
  ', array('inline' => false));
?>