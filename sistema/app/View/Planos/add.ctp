<h1>Cadastro de Plano</h1>
<div>
  <?
  echo $this->Form->create('Plano');
  echo $this->Form->input('nome', array('label' => 'Nome do plano:'));
  ?>
  <div class="input checkbox">    
    <?php
    echo $this->Form->label('Atividades Inclusas: ');
    foreach ($atividades as $id => $label) {
      echo $this->Form->input("Atividade.checkbox.$id", array(
          'label' => $label['Atividade']['nome'],
          'value' => $label['Atividade']['id'],
          'type' => 'checkbox'
      ));
    }
    ?>    
  </div>

  <?
  echo $this->Form->input('valor_especial', array('label' => '*Valor Especial: (Use PONTOS [.] para os centavos)'));
  echo $this->Form->end('Cadastrar');
  ?>

  <span>* Neste momento o sistema lida com valores apenas de forma ilustrativa, sem nenhuma relação com controle de fluxo de caixa.</span>

</div>