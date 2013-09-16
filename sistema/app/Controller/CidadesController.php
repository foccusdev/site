<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CidadesController
 *
 * @author joao
 */


// Provavelmente isso é por que a chamada AJAX não segue o fluxo normal do programa
// Então precisamos incluir as classes base do CAKEPHP
App::uses('AppController', 'Controller');

class CidadesController extends AppController{
 
  
    // método que será chamado via ajax na mudança de item do select de Estados
  	public function getByEstado() {
      
    // Pega o ID do estado (que será passado via post)  
		$estado_id = $this->request->data['Matricula']['estado'];
 
    // Traz as cidades do estado selecionado
		$cidades = $this->Cidade->find('list', array(
      'fields' => array('Codigo', 'Descricao'),
			'conditions' => array('Cidade.UF' => $estado_id),
			'recursive' => -1
			));
 
    // Seta a variável $cidades para a View deste método (View/Cidades/get_by_estado.ctp)
		$this->set('cidades',$cidades);
		$this->layout = 'ajax';
	}
  
  
}

?>
