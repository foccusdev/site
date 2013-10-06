<a href="javascript:history.back(-1)" class="seta-voltar float-left" title="Clique aqui para voltar para a listagem."></a> 
<h1>Edição de Plano</h1>

<div>
  <?
  echo $this->Form->create('Plano');
  echo $this->Form->input('nome', array('label' => 'Nome do Plano: '));

  echo $this->Form->label('Atividades Inclusas: ');
  echo '<small>Ao clicar numa atividade abaixo o cálculo será feito automaticamente e substituirá o valor especial pelo total das atividades selecionadas.</small>';
  foreach ($atividades as $id => $label) {
    echo $this->Form->input("Atividade.$id", array(
        'label' => $label['Atividade']['nome'] . ' - R$ ' . $label['Atividade']['valor'],
        'value' => $label['Atividade']['id'],
        'type' => 'checkbox',
        'checked' => in_array($label['Atividade']['id'], $atividadesSel)?'checked':'',
        'class' => 'atividades'
    ));
  }


  echo $this->Form->input('valor_especial', array('label' => '*Valor Especial: (Use PONTOS [.] para os centavos)'));
  echo $this->Form->end('Alterar');
  ?>
</div>
<?
$this->Html->scriptBlock('
  
  $(".atividades").click(function(){

    // Soma os preços de todas as atividades selecionadas e substitui o valor especial por esse total:
    var total = 0;
    $(".atividades").each(function(){
      
      var plano = $(this).next().html().toString();
      var precoPos = plano.indexOf("R$ ");
      var preco = parseFloat(plano.substring(precoPos+3));
      
      //alert($(this).is(":checked")+" "+preco);

      if ($(this).is(":checked"))
        total += preco;

    });

    $("#PlanoValorEspecial").val(total.toFixed(2));    
    
  });
  
  ', array('inline' => false));
?>