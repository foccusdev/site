<?= $this->Html->link('', array('controller' => 'horarios', 'action' => 'lista', $matriculaId), array('class' => 'seta-voltar float-left', 'title' => 'Clique aqui para voltar para a listagem.')); ?>
<h1>Alteração de Horário</h1>

<div>
  <?
  echo $this->Form->create('Horario');
  $diaSemanaSel = array('', '', '', '', '', '', '');
  $diaSemanaSel[$horario['Horario']['dia_semana']]='selected="selected"';
  ?>
  <label for="HorarioDiaSemana">Dia da Semana: </label>
  <select name="data[Horario][dia_semana]" id="HorarioDiaSemana">
    <option value="0" <?=$diaSemanaSel[0]?>>Domingo</option>
    <option value="1" <?=$diaSemanaSel[1]?>>Segunda-Feira</option>
    <option value="2" <?=$diaSemanaSel[2]?>>Terça-Feira</option>
    <option value="3" <?=$diaSemanaSel[3]?>>Quarta-Feira</option>
    <option value="4" <?=$diaSemanaSel[4]?>>Quinta-Feira</option>
    <option value="5" <?=$diaSemanaSel[5]?>>Sexta-Feira</option>
    <option value="6" <?=$diaSemanaSel[6]?>>Sábado</option>
  </select>

  <?
  echo $this->Form->input('hora', array(
      'minHour' => 6,
      'interval' => 30,
      'timeFormat' => '24',
      'type' => 'time'
  ));

  echo $this->Form->hidden('matricula_id', array('value' => $matriculaId));

  ?><div id="aviso"></div><?
  
  echo $this->Form->end('Alterar');
  ?>

</div>



<?
// Código para inserir o AJAX no select de Estados e trazer as Cidades
$this->Js->get('#HorarioDiaSemana, #HorarioHoraHour, #HorarioHoraMin')->event(
        'change', 
        $this->Js->request(array(
            'controller' => 'horarios',
            'action' => 'validaHorario'
        ), 
        array(
            'update' => '#aviso',
            'async' => true,
            'method' => 'post',
            'dataExpression' => true,
            'data' => $this->Js->serializeForm(array(
                'isForm' => true,
                'inline' => true
            ))
        ))
);

// Ao submeter o formulário, valida se o horário está disponível 
//$this->Js->get('#HorarioAddForm')->event('submit', 
$this->Html->scriptBlock('
  
  $("#HorarioEditForm").submit(function(){
  
    if ($("#horarioValido").val()=="false"){
      alert("O Horário selecionado não está disponível. Por favor escolha outro.");
      return false;
    }

    
  });
  
  ', array('inline' => false));

?>


  