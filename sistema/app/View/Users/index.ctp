<h1>Usuários do Sistema</h1>
<?= $this->Html->link('Cadastrar Novo Usuário', array('controller' => 'users', 'action' => 'add'), array('class' => 'botao float-right')); ?>
<div class="clear"></div>

<span><p><?=count($users)?> registros encontrados</p></span>

<table class="table-usuarios">
  <tr>
    <th>Nome</th>
    <th>Tipo de Usuário</th>
    <th>Email/Login</th>
    <th class="coluna-acoes">Ações</th>
  </tr>

  <? 
  $zebrado = false;
  foreach ($users as $user) { ?>
    <tr <?=$zebrado?'class="linha-escura"':''?>>
      <td><?= $user['User']['nome']; ?></td>
      <td><?= $user['User']['role']; ?></td>
      <td><?= $user['User']['username']; ?></td>
      <td class="coluna-acoes">
        <?= $this->Html->link('Detalhes', array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?> |
        <?= $this->Html->link('Editar Dados', array('controller' => 'users', 'action' => 'edit', $user['User']['id'])); ?> |
        <?php echo $this->Form->postLink('Excluir', array('action' => 'delete', $user['User']['id']), array('confirm' => 'Tem certeza que deseja excluir o usuário?')) ?>
      </td>

    </tr>
  <? 
  $zebrado = !$zebrado;

  } ?>

</table>