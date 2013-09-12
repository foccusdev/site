<h1>Matrículas</h1>
<?= $this->Html->link('Nova Matrícula', array('controller' => 'matriculas', 'action' => 'add'), array('class' => 'botao float-right')); ?>
<div class="clear"></div>

<span><p><?=count($matriculas)?> registros encontrados</p></span>

<table class="table-usuarios">
  <tr>
    <th>Nome</th>
    <th>Valor</th>
    <th class="coluna-acoes">Ações</th>
  </tr>

  <? 
  $zebrado = false;
  foreach ($matriculas as $matricula) { ?>
    <tr <?=$zebrado?'class="linha-escura"':''?>>
      <td><?= $matricula['Atividade']['nome']; ?></td>
      <td>R$ <?= $matricula['Atividade']['valor']; ?></td>
      <td class="coluna-acoes">
        <?= $this->Html->link('Detalhes', array('controller' => 'matriculas', 'action' => 'view', $matricula['Atividade']['id'])); ?> |
        <?= $this->Html->link('Editar Dados', array('controller' => 'matriculas', 'action' => 'edit', $matricula['Atividade']['id'])); ?> |
        <?php echo $this->Form->postLink('Excluir', array('action' => 'delete', $matricula['Atividade']['id']), array('confirm' => 'Tem certeza que deseja excluir o registro?')) ?>
      </td>

    </tr>
  <? 
  $zebrado = !$zebrado;

  } ?>

</table>