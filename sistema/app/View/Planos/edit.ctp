<a href="javascript:history.back(-1)" class="seta-voltar float-left" title="Clique aqui para voltar para a listagem."></a> 
<h1>Edição de Plano</h1>
<?/* echo '<pre>';
var_dump($this->request->data);
var_dump($atividadesSel);
echo '</pre>'; */?>
<div>
  <?
  echo $this->Form->create('Plano');
  echo $this->Form->input('nome', array('label' => 'Nome do Plano: '));

  echo $this->Form->label('Atividades Inclusas: ');
  foreach ($atividades as $id => $label) {
    echo $this->Form->input("Atividade.$id", array(
        'label' => $label['Atividade']['nome'] . ' - R$ ' . $label['Atividade']['valor'],
        'value' => $label['Atividade']['id'],
        'type' => 'checkbox',
        'checked' => in_array($label['Atividade']['id'], $atividadesSel)?'checked':''
    ));
  }


  echo $this->Form->input('valor_especial', array('label' => '*Valor Especial: (Use PONTOS [.] para os centavos)'));
  echo $this->Form->end('Alterar');
  ?>
</div>