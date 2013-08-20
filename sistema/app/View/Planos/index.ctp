<h1>Planos da Academia</h1>

<?= $this->Html->link('Cadastrar Novo Plano', array('controller' => 'planos', 'action' => 'add'), array('class' => 'botao float-right')); ?>
<div class="clear"></div>

<span><p><?=count($atividadesPlanos)?> registros encontrados</p></span>

<table class="table-usuarios">
  <tr>
    <th>Nome</th>
    <th>Valor Total</th>
    <th>Valor Especial</th>
    <th class="coluna-acoes">Ações</th>
  </tr>

  <? 
  $zebrado = false;
  foreach ($atividadesPlanos as $atividadesPlano) { 
    $planoId = $atividadesPlano['Plano']['id'];
    $planoNome = $atividadesPlano['Plano']['nome'];
    $planoValorEspecial = $atividadesPlano['Plano']['valor_especial'];
    $valorTotal = 0;
    foreach($atividadesPlano['Atividade'] as $atividade){
      $valorTotal += $atividade['valor'];
    }
    ?>
    
    <tr <?=$zebrado?'class="linha-escura"':''?>>
      <td><?= $planoNome ?></td>
      <td>R$ <?= $valorTotal ?></td>
      <td>R$ <?= $planoValorEspecial ?></td>
      <td class="coluna-acoes">
        <?= $this->Html->link('Detalhes', array('controller' => 'planos', 'action' => 'view', $planoId)); ?> |
        <?= $this->Html->link('Editar Dados', array('controller' => 'planos', 'action' => 'edit', $planoId)); ?> |
        <?php echo $this->Form->postLink('Excluir', array('action' => 'delete', $planoId), array('confirm' => 'Tem certeza que deseja excluir o registro?')) ?>
      </td>

    </tr>
  <? 
  $zebrado = !$zebrado;

  } ?>

</table>