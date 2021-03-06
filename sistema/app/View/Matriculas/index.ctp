<h1>Matrículas</h1>
<?= $this->Html->link('Nova Matrícula', array('controller' => 'matriculas', 'action' => 'add'), array('class' => 'botao float-right')); ?>
<div class="clear"></div>

<span><p><?= count($matriculas) ?> registros encontrados</p></span>

<?
if (!isset($direcao))
  $direcao = '';
$ordemLista = array('nome' => 'asc', 'id' => 'asc', 'proximo_vencimento' => 'asc');
$ordemListaChar = array('nome' => '', 'id' => '', 'proximo_vencimento' => '');
$ordemLista[$ordem] = $direcao == 'asc' ? 'desc' : 'asc';
$ordemListaChar[$ordem] = $direcao == 'asc' ? '↓' : '↑';
?>


<table class="table-usuarios">
  <tr>
    <th><?= $this->Html->link('Nome ' . $ordemListaChar['nome'], array('controller' => 'matriculas', 'action' => 'index', 'nome', $ordemLista['nome'])); ?></th>
    <th>Email</th>
    <th>Telefone</th>
    <th>Celular</th>
    <th><?= $this->Html->link('Matrícula ' . $ordemListaChar['id'], array('controller' => 'matriculas', 'action' => 'index', 'id', $ordemLista['id'])); ?></th>
    <th><?= $this->Html->link('Data do Próximo Vencimento ' . $ordemListaChar['proximo_vencimento'], array('controller' => 'matriculas', 'action' => 'index', 'proximo_vencimento', $ordemLista['proximo_vencimento'])); ?></th>
    <th class="coluna-acoes">Ações</th>
  </tr>

  <?
  $zebrado = false;
  foreach ($matriculas as $matricula) {
    $proximoVencimentoTimestamp = strtotime($matricula['Matricula']['proximo_vencimento']);

    $estilo = '';
    if ((time()) > ($proximoVencimentoTimestamp - 604800) && (time()) <= $proximoVencimentoTimestamp)
    // Se faltar uma semana para o próximo vencimento, a linha do aluno fica laranja
      $estilo = ' bg-laranja ';
    else if ($proximoVencimentoTimestamp <= (time()))
    // Se o vencimento é hoje ou já passou, a linha do aluno fica vermelha
      $estilo = ' bg-vermelho ';
    ?>
    <tr class="<?= $estilo ?> <?= $zebrado ? 'linha-escura' : '' ?>">
      <td><?= $matricula['Matricula']['nome']; ?></td>
      <td><a href="mailto:<?= $matricula['Matricula']['email']; ?>"><?= $matricula['Matricula']['email']; ?></a></td>
      <td><?= $matricula['Matricula']['telefone']; ?></td>
      <td><?= $matricula['Matricula']['celular']; ?></td>
      <td><?= $matricula['Matricula']['id']; ?></td>
      <td><?= date('d/m/Y', $proximoVencimentoTimestamp) ?></td>
      <td class="coluna-acoes">
        <?= $this->Html->link('Detalhes', array('controller' => 'matriculas', 'action' => 'view', $matricula['Matricula']['id'])); ?> |
        <?= $this->Html->link('Editar Dados', array('controller' => 'matriculas', 'action' => 'edit', $matricula['Matricula']['id'])); ?> |
        <?= $this->Html->link('Mensalidades', array('controller' => 'pagamentos', 'action' => 'listar', $matricula['Matricula']['id'])); ?> |
        <?= $this->Html->link('Horário', array('controller' => 'horarios', 'action' => 'lista', $matricula['Matricula']['id'])); ?> |
        <?= $this->Form->postLink('Excluir', array('action' => 'delete', $matricula['Matricula']['id']), array('confirm' => 'Tem certeza que deseja excluir o registro?')) ?>       
      </td>
    </tr>
    <?
    $zebrado = !$zebrado;
  }
  ?>

</table>