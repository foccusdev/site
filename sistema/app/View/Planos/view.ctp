<a href="javascript:history.back(-1)" class="seta-voltar float-left" title="Clique aqui para voltar para a listagem."></a> 
<h1>Dados do Plano</h1>
  <div class="dado-form">
    <label>Nome do Plano:</label>
    <span><?= $plano['Plano']['nome'] ?></span>
  </div>

  <h2>Atividades Inclusas:</h2>

  <?
  $valorTotal = 0;
  foreach ($plano['Atividade'] as $atividade) {
    $valorTotal += $atividade['valor'];
    ?>
    <div class="dado-form">
      <label><?= $atividade['nome'] ?>:</label>
      <span>R$ <?= $atividade['valor'] ?></span>
    </div>
    <?
  }
  ?>

  <div class="dado-form">
    <label>Valor Total:</label>
    <span> R$ <?= $valorTotal ?></span>
  </div>

  <div class="dado-form">
    <label>Valor Especial:</label>
    <span> R$ <?= $plano['Plano']['valor_especial'] ?></span>
  </div>

<div>
  <a href="javascript:history.back()">Voltar</a>
</div>
