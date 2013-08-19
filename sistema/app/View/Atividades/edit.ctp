<h1>Edição de usuário</h1>

<div>
  <?
  echo $this->Form->create('Atividade');
  echo $this->Form->input('nome', array('label' => 'Nome da Atividade: '));
  echo $this->Form->input('valor', array('label' => '*Valor da Atividade: (Use PONTOS [.] para os centavos)'));
  echo $this->Form->end('Alterar');
  ?>
</div>