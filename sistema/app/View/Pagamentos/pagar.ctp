<a href="javascript:history.back(-1)" class="seta-voltar float-left" title="Clique aqui para voltar para a listagem."></a> 
<h1>Pagar Mensalidade</h1>

<div>
  <?
  echo $this->Form->create();
  echo $this->Form->input('Matricula.proximo_vencimento', array(
      'monthNames' => false,
      'dateFormat' => 'DMY',
      'selected' => date('Y-m-d', strtotime($matriculas['Matricula']['proximo_vencimento'])),
      'label' => 'Pagar mensalidade referente a '
          )
  );
  
  echo $this->Form->input('valor', array('label' => ' No valor de ', 'value' => $planos['Plano']['valor_especial']));

  echo '<div><strong>Plano: ' . $planos['Plano']['nome'] . '</strong></div>';
  
  echo $this->Form->input('Pagamento.data_proximo_vencimento', array(
      'monthNames' => false,
      'dateFormat' => 'DMY',
      'selected' => date('Y-m-d', strtotime($matriculas['Matricula']['proximo_vencimento'] . "+30 days")),
      'label' => 'Próximo vencimento: '
          )
  );

  echo $this->Form->hidden('Pagamento.data_referencia', array('value' => $matriculas['Matricula']['proximo_vencimento']));
  
  echo $this->Form->hidden('Pagamento.matricula_id', array('value' => $matriculas['Matricula']['id']));
  
  echo $this->Form->end('Efetuar Pagamento');
  ?>
</div>