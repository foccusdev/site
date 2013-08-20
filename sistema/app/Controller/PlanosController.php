<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PlanosController
 *
 * @author joao
 */
class PlanosController extends AppController{
  
  public $helpers = array('Html', 'Form');
  public $name = 'Planos';
 
  public function index(){
    $this->set('atividadesPlanos', $this->Plano->find('all'));
  }
  
  
 public function add() {
    $this->loadModel('Atividade'); //if it's not already loaded
    $this->set('atividades', $this->Atividade->find('all'));
   
    // Verifica se recebeu um POST
    if ($this->request->is('post')) {
      
      var_dump($this->request->data);
      
      // Salva os dados do Plano 
      $planoDados = array('nome' => $this->request->data['Plano']['nome'], 'valor_especial' => $this->request->data['Plano']['valor_especial']);
      // This will update Recipe with id 10
      $planoNovo = $this->Plano->save($planoDados);      
      
      var_dump($planoNovo['Plano']['id']);
      
      // Se sim cria um registro para o que está sendo incluído
      /*
      $this->Atividade->create();
      if ($this->Atividade->save($this->request->data)) {
        $this->Session->setFlash('Operação realizada com sucesso!');
        $this->redirect(array('action' => 'index'));
      } else {
        $this->Session->setFlash('Ocorreu um erro e a operação não foi realizada. Por favor, tente novamente.');
      }
       * 
       */
    }
      
   
 }
  
}

?>
