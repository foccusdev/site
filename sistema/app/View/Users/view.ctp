<?= $this->Html->link('', array('controller' => 'users', 'action' => 'index'), array('class' => 'seta-voltar float-left', 'title' => 'Clique aqui para voltar para a listagem.')); ?>
<h1>Dados do Usuário</h1>

<div class="detalhes">

  <div class="dado-form">
    <label>Nome:</label>
    <span><?= $user['User']['nome'] ?></span>
  </div>

  <div class="dado-form">
    <label>Email/Login:</label>
    <span><a href="mailto:<?= $user['User']['username'] ?>"><?= $user['User']['username'] ?></a></span>
  </div>

  <div class="dado-form">
    <label>Tipo de usuário:</label>
    <span><?= $user['User']['role'] ?></span>
  </div>
</div>

