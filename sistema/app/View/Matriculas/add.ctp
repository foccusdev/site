<h1>Nova Matrícula</h1>

<div>

  <form action="/foccus/sistema/matriculas/add" id="AlunosAddForm" method="post" accept-charset="utf-8">

    <input type="hidden" name="_method" value="POST" />
    <?
    echo $this->Form->input('estado', array('selected' => '19'));
    echo $this->Form->input('cidade', array('selected' => '7043'));
    echo $this->Form->input('bairro');
    echo $this->Form->end('Cadastrar');
    ?>
  </form>


</div>


<?

// Código para inserir o AJAX no select de Estados
$this->Js->get('#estado')->event('change', 
	$this->Js->request(array(
		'controller'=>'cidades',
		'action'=>'getByEstado'
		), array(
		'update'=>'#cidade',
		'async' => true,
		'method' => 'post',
		'dataExpression'=>true,
		'data'=> $this->Js->serializeForm(array(
			'isForm' => true,
			'inline' => true
			))
		))
	);

?>