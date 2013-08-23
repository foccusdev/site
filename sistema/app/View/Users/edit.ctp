<h1>Edição de usuário</h1>

<div>
  <?
  echo $this->Form->create('User');
  echo $this->Form->input('nome', array('label' => 'Nome do Usuário: '));
  echo $this->Form->input('username', array('label' => 'Email / Login: '));
  echo $this->Form->input('password', array('label' => 'Senha: '));
  echo $this->Form->input('role', array('label' => 'Tipo de Usuário: ', 'options' => array('admin' => 'Administrador', 'recepcionista' => 'Recepcionista')));
  echo $this->Form->end('Alterar');
  ?>
</div>