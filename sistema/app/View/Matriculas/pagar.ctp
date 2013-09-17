<a href="javascript:history.back(-1)" class="seta-voltar float-left" title="Clique aqui para voltar para a listagem."></a> 
<h1>Pagar Mensalidade</h1>

<div>
  <?
  echo $this->Form->create();
  echo $this->Form->input('proximo_vencimento', array(
      'monthNames' => false,
      'dateFormat' => 'DMY',
      'selected' => date('Y-m-d', strtotime($matriculas['Matricula']['proximo_vencimento'])),
      'label' => 'Pagar mensalidade referente a '
    )
  );
  echo $this->Form->input('Plano.valor_especial', array('label' => ' no valor de ', 'value' => $planos['Plano']['valor_especial']));

  echo '<div><strong>Plano: ' . $planos['Plano']['nome'] . '</strong></div>';
  ?>

  <div class="input date"><label for="MatriculaProximoVencimentoDay"></label>

    <?
    echo $this->Form->input('proximo_vencimento', array(
        'monthNames' => false,
        'dateFormat' => 'DMY',
        'selected' => date('Y-m-d', strtotime($matriculas['Matricula']['proximo_vencimento']."+30 days")),
        'label' => 'Próximo vencimento: '
      )
    );
    ?>

  </div>
  <?
  echo $this->Form->end('Efetuar Pagamento');
  ?>
</div>