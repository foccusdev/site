<h1>Cadastro de Horario</h1>

<div class="aviso">
  ATENÇÃO: São exibidos somente os horários disponíveis.
</div>

<div>
  <?
  echo $this->Form->create('Horario');
  echo $this->Form->input('dia_semana', array('label' => 'Dia da Semana: '));
  echo $this->Form->input('hora', array('label' => 'Hora:'));
  echo $this->Form->end('Cadastrar');
  ?>
  
</div>