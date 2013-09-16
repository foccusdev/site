<a href="javascript:history.back(-1)" class="seta-voltar float-left" title="Clique aqui para voltar para a listagem."></a> 
<h1>Edição de atividade</h1>

<div>
  <?
  echo $this->Form->create('Atividade');
  echo $this->Form->input('nome', array('label' => 'Nome da Atividade: '));
  echo $this->Form->input('valor', array('label' => '*Valor da Atividade: (Use PONTOS [.] para os centavos)'));
  echo $this->Form->end('Alterar');
  ?>
</div>