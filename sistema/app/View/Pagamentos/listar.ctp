<?= $this->Html->link('', array('controller' => 'matriculas', 'action' => 'index'), array('class' => 'seta-voltar float-left', 'title' => 'Clique aqui para voltar para a listagem.')); ?>
<h1>Pagamentos do Aluno</h1>
<?= $this->Html->link('Efetuar Pagamento', array('controller' => 'pagamentos', 'action' => 'pagar', $matriculaId), array('class' => 'botao float-right')); ?>
<div class="clear"></div>

<h2>Pagamentos referentes ao aluno <?= $aluno['Matricula']['nome'] ?></h2>

<span><p><?= count($pagamentos) ?> registros encontrados</p></span>
<?
if (count($pagamentos) < 1) {
  ?><span>Este aluno ainda não efetuou nenhum pagamento.</span><?
} else {
  ?>
  <table class="table-usuarios">
    <tr>
      <th>Data de referência</th>
      <th>Data do pagamento</th>
      <th>Valor</th>
    </tr>

    <?
    $total = 0;
    $zebrado = false;
    foreach ($pagamentos as $pagamento) {
      ?>
      <tr <?= $zebrado ? 'class="linha-escura"' : '' ?>>
        <td><?= date('d/m/Y', strtotime($pagamento['Pagamento']['data_referencia'])); ?></td>
        <td><?= date('d/m/Y', strtotime($pagamento['Pagamento']['created'])); ?></td>
        <td>R$ <?= $pagamento['Pagamento']['valor']; ?></td>
      </tr>
      <?
      $zebrado = !$zebrado;
      $total += $pagamento['Pagamento']['valor'];
    }
    ?> 
  </table>

  <span><strong>Total: </strong> R$ <?= number_format($total, 2) ?></span>
  <?
}
?>