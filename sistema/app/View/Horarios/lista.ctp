<h1>Horarios da Academia</h1>
<?= $this->Html->link('Adicionar Horário', array('controller' => 'horarios', 'action' => 'add'), array('class' => 'botao float-right')); ?>
<div class="clear"></div>

<span><p><?=count($horarios)?> registros encontrados</p></span>

<table class="table-usuarios">
  <tr>
    <th>Nome</th>
    <th>Valor</th>
    <th class="coluna-acoes">Ações</th>
  </tr>

  <? 
  $zebrado = false;
  foreach ($horarios as $horario) { ?>
    <tr <?=$zebrado?'class="linha-escura"':''?>>
      <td><?= $horario['Horario']['dia_semana']; ?></td>
      <td>R$ <?= $horario['Horario']['hora']; ?></td>
      <td class="coluna-acoes">
        <?= $this->Html->link('Alterar', array('controller' => 'horarios', 'action' => 'edit', $horario['Horario']['id'])); ?> |
        <?php echo $this->Form->postLink('Excluir', array('action' => 'delete', $horario['Horario']['id']), array('confirm' => 'Tem certeza que deseja excluir o registro?')) ?>
      </td>

    </tr>
  <? 
  $zebrado = !$zebrado;

  } ?>

</table>