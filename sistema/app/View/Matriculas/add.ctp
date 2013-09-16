<h1>Nova Matrícula</h1>

<div>

  <?
  echo $this->Form->create('Matricula');
  echo $this->Form->input('nome');
  echo $this->Form->input('email');
  echo $this->Form->input('senha');
  echo $this->Form->input('CPF');
  echo $this->Form->input('celular');
  echo $this->Form->input('telefone');
  echo $this->Form->input('estado', array('selected' => '19'));
  echo $this->Form->input('cidade', array('selected' => '7043'));
  echo $this->Form->input('bairro');
  echo $this->Form->input('endereco', array('cols' => ''));
  echo $this->Form->input('CEP');
  echo $this->Form->input('data_nascimento', array('monthNames' => false, 'dateFormat' => 'DMY', 'minYear' => date('Y') - 100));
  ?>
  <fieldset>
    <legend><strong>Sexo</strong></legend>
    <input type="hidden" name="data[matricula][sexo]" id="matriculaSexo_" value=""/>
    <input type="radio" name="data[matricula][sexo]" id="MatriculaSexoM" value="M" /> Masculino
    <input type="radio" name="data[matricula][sexo]" id="MatriculaSexoF" value="F" /> Feminino 
  </fieldset>  
    <?
    echo $this->Form->input('profissao');
    echo $this->Form->input('como_conheceu');
    echo $this->Form->input('proximo_vencimento', array('monthNames' => false, 'dateFormat' => 'DMY', 'selected' => date('Y-m-d', strtotime("+30 days"))));
    echo $this->Form->input('obs');
    echo $this->Form->end('Cadastrar');
    ?>


</div>


<?
// Código para inserir o AJAX no select de Estados e trazer as Cidades
$this->Js->get('#matriculaEstado')->event('change', $this->Js->request(array(
            'controller' => 'cidades',
            'action' => 'getByEstado'
                ), array(
            'update' => '#matriculaCidade',
            'async' => true,
            'method' => 'post',
            'dataExpression' => true,
            'data' => $this->Js->serializeForm(array(
                'isForm' => true,
                'inline' => true
            ))
        ))
);

// Código para inserir o AJAX no select de Cidades e trazer os Bairros
$this->Js->get('#matriculaCidade')->event('change', $this->Js->request(array(
            'controller' => 'bairros',
            'action' => 'getByCidade'
                ), array(
            'update' => '#matriculaBairro',
            'async' => true,
            'method' => 'post',
            'dataExpression' => true,
            'data' => $this->Js->serializeForm(array(
                'isForm' => true,
                'inline' => true
            ))
        ))
);
?>