<a href="javascript:history.back(-1)" class="seta-voltar float-left" title="Clique aqui para voltar para a listagem."></a> 
<h1>Edição de Horario</h1>

<div class="aviso">
  ATENÇÃO: São exibidos somente os horários disponíveis.
</div>

<div>
  <?
  echo $this->Form->create('Horario');
  //echo $this->Form->input('dia_semana', array('label' => 'Dia da Semana: '));
  ?>
  <label for="HorarioDiaSemana">Dia da Semana: </label>
  <select name="data[Horario][dia_semana]" id="HorarioDiaSemana">
    <option value="0">Domingo</option>
    <option value="1">Segunda-Feira</option>
    <option value="2">Terça-Feira</option>
    <option value="3">Quarta-Feira</option>
    <option value="4">Quinta-Feira</option>
    <option value="5">Sexta-Feira</option>
    <option value="6">Sábado</option>
  </select>

  <?
  echo $this->Form->input('hora', array(
      'minHour' => 6,
      'interval' => 30,
      'timeFormat' => '24',
      'type' => 'time',
      'selected' => array(
          'hour' => '6',
          'min' => '00'
      )
  ));

echo $this->Form->hidden('matricula_id', array('value' => $matriculaId));

  echo $this->Form->end('Cadastrar');
  ?>

</div>