<?/*<a href="javascript:history.back(-1)" class="seta-voltar float-left" title="Clique aqui para voltar para a listagem."></a> */?>
<?= $this->Html->link('', array('controller' => 'matriculas', 'action' => 'index'), array('class' => 'seta-voltar float-left', 'title' => 'Clique aqui para voltar para a listagem.')); ?>

<h1>Horários do Aluno</h1>
<?= $this->Html->link('Adicionar Horário', array('controller' => 'horarios', 'action' => 'add', $aluno['Matricula']['id']), array('class' => 'botao float-right')); ?>
<div class="clear"></div>

<h2>Horário referente ao aluno <?= $aluno['Matricula']['nome'] ?></h2>

<span><p><?= count($horarios) ?> registros encontrados</p></span>
<?
if (count($horarios) < 1) {
  ?><span>O horário deste aluno ainda não foi definido</span><?
} else {
  ?>


  <table class="table-usuarios">
    <tr>
      <th>Dia da Semana</th>
      <th>Hora</th>
      <th class="coluna-acoes">Ações</th>
    </tr>

    <?
    $diaSemana = array('Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado');
    $zebrado = false;
    foreach ($horarios as $horario) {
      $estilo = ($horario['Horario']['alterado']==TRUE)?' bg-vermelho ':'';
      ?>
      <tr class="<?= $zebrado ? 'linha-escura' : '' ?> <?=$estilo?>">
        <td><?= $diaSemana[$horario['Horario']['dia_semana']]; ?></td>
        <td><?= $horario['Horario']['hora']; ?></td>
        <td class="coluna-acoes">
          <?= $this->Html->link('Alterar', array('controller' => 'horarios', 'action' => 'edit', $horario['Horario']['id'], $aluno['Matricula']['id'])); ?> |
    <?php echo $this->Form->postLink('Excluir', array('action' => 'delete', $horario['Horario']['id'], $aluno['Matricula']['id']), array('confirm' => 'Tem certeza que deseja excluir o registro?')) ?>
        </td>

      </tr>
      <?
      $zebrado = !$zebrado;
    }
    ?>

  </table>
  * Os horários alterados para o próximo treino aparecem marcados em vermelho.
  <?
}
?>
