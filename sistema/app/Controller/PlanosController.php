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
class PlanosController extends AppController {

  public $helpers = array('Html', 'Form');
  public $name = 'Planos';

  public function index() {
    $this->set('atividadesPlanos', $this->Plano->find('all'));
  }

  public function add() {
    // Verifica se recebeu um POST
    if ($this->request->is('post')) {

      // Valida se existe ao menos uma atividade selecionada
      if (count($this->request->data['Atividade']['checkbox']) < 1) {
        $this->Session->setFlash('Escolha ao menos uma atividade!');
        break;
      }

      // Salva os dados do Plano 
      $planoDados = array('nome' => $this->request->data['Plano']['nome'], 'valor_especial' => $this->request->data['Plano']['valor_especial']);
      $planoNovo = $this->Plano->save($planoDados);
      $planoNovoId = $planoNovo['Plano']['id'];

      // Forma o array de atividades selecionadas no formato esperado
      foreach ($this->request->data['Atividade']['checkbox'] as $atividade) {
        if ($atividade != 0)
          $atividadesPlano[] = array(
              'Plano' => array('id' => $planoNovoId), 'Atividade' => array('id' => $atividade));
      }
      
      // Salva todas as atividades do array montado acima
      $this->Plano->saveAll($atividadesPlano);
    }

    // Traz as atividades cadastradas
    $this->loadModel('Atividade');
    $this->set('atividades', $this->Atividade->find('all', array('fields' => array('Atividade.id', 'Atividade.nome'))));
  }
  
  public function delete($id = null) {
    
    // Verifica se a requisição foi por POST
    if (!$this->request->is('post')) {
      throw new MethodNotAllowedException();
    }
    
    // Passa o id do registro para o model
    $this->Plano->id = $id;
    
    // Verifica se o registro existe
    if (!$this->Plano->exists()) {
      throw new NotFoundException('Registro inválido');
    }
    
    // Verifica se o registro pôde ser deletado
    if ($this->Plano->delete()) {
      $this->Session->setFlash('Operação realizada com sucesso!');
      $this->redirect(array('action' => 'index'));
    }
    $this->Session->setFlash(__('Ocorreu um erro! Tente novamente!'));
    $this->redirect(array('action' => 'index'));
  }   
  

}

?>
