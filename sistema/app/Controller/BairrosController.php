<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BairrosController
 *
 * @author joao
 */

// Provavelmente isso é por que a chamada AJAX não segue o fluxo normal do programa
// Então precisamos incluir as classes base do CAKEPHP
App::uses('AppController', 'Controller');

class BairrosController extends AppController{
  
  
    // método que será chamado via ajax na mudança de item do select de Estados
  	public function getByCidade() {
      
    // Pega o ID do estado (que será passado via post)  
		$cidade_id = $this->request->data['matricula']['cidade'];
 
    // Traz as cidades do estado selecionado
		$bairros = $this->Bairro->find('list', array(
      'fields' => array('Codigo', 'Descricao'),
			'conditions' => array('Bairro.CodigoCidade' => $cidade_id),
			'recursive' => -1
			));
 
    // Seta a variável $cidades para a View deste método (View/Bairros/get_by_cidade.ctp)
		$this->set('bairros',$bairros);
		$this->layout = 'ajax';
	}
}

?>
