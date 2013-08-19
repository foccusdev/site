<h1>Atividades da Academia</h1>
<?= $this->Html->link('Cadastrar Nova Atividade', array('controller' => 'atividades', 'action' => 'add'), array('class' => 'botao float-right')); ?>
<div class="clear"></div>

<span><p><?=count($atividades)?> registros encontrados</p></span>

<table class="table-usuarios">
  <tr>
    <th>Nome</th>
    <th>Valor</th>
    <th class="coluna-acoes">Ações</th>
  </tr>

  <? 
  $zebrado = false;
  foreach ($atividades as $atividade) { ?>
    <tr <?=$zebrado?'class="linha-escura"':''?>>
      <td><?= $atividade['Atividade']['nome']; ?></td>
      <td>R$ <?= $atividade['Atividade']['valor']; ?></td>
      <td class="coluna-acoes">
        <?= $this->Html->link('Detalhes', array('controller' => 'atividades', 'action' => 'view', $atividade['Atividade']['id'])); ?> |
        <?= $this->Html->link('Editar Dados', array('controller' => 'atividades', 'action' => 'edit', $atividade['Atividade']['id'])); ?> |
        <?php echo $this->Form->postLink('Excluir', array('action' => 'delete', $atividade['Atividade']['id']), array('confirm' => 'Tem certeza que deseja excluir o registro?')) ?>
      </td>

    </tr>
  <? 
  $zebrado = !$zebrado;

  } ?>

</table>