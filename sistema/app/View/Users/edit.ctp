<?= $this->Html->link('', array('controller' => 'users', 'action' => 'index'), array('class' => 'seta-voltar float-left', 'title' => 'Clique aqui para voltar para a listagem.')); ?>
<h1>Edição de usuário</h1>

<div>
  <?
  echo $this->Form->create('User');
  echo $this->Form->input('nome', array('label' => 'Nome do Usuário: '));
  echo $this->Form->input('username', array('label' => 'Email / Login: '));
  echo $this->Form->input('role', array('label' => 'Tipo de Usuário: ', 'options' => array('admin' => 'Administrador', 'recepcionista' => 'Recepcionista')));
  ?>
  <div class="dado-form">
    <?= $this->Html->link('Alterar senha do usuário', array('controller' => 'users', 'action' => 'alterarSenha', $usuarioId)); ?><br /><br />
  </div>    
  <?
  echo $this->Form->end('Alterar');
  ?>
</div>