<h1>Cadastro de Atividade</h1>

<div>
  <?
  echo $this->Form->create('Atividade');
  echo $this->Form->input('nome', array('label' => 'Nome da Atividade: '));
  echo $this->Form->input('valor', array('label' => '*Valor da Atividade: (Use PONTOS [.] para os centavos)'));
  echo $this->Form->end('Cadastrar');
  ?>
  
  <span>* Neste momento o sistema lida com valores apenas de forma ilustrativa, sem nenhuma relação com controle de fluxo de caixa.</span>
  
</div>