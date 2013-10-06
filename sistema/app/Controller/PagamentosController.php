<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PagamentosController
 *
 * @author joao
 */
class PagamentosController extends AppController {

  public $helpers = array('Html', 'Form', 'Js');
  public $name = 'Pagamentos';

  public function listar($matriculaId) {

    $this->set('matriculaId', $matriculaId);

    // Traz os dados do aluno desta matrícula
    $this->loadModel('Matricula');
    $this->set('aluno', $this->Matricula->find('first', array('conditions' => array('id' => $matriculaId))));

    // Traz todos os pagamentos desta matrícula
    $this->set('pagamentos', $this->Pagamento->find('all', array('conditions' => array('matricula_id' => $matriculaId))));
  }

  public function pagar($id = null) {

    // Pega o id do registro e associa ao model
    $this->loadModel('Matricula');
    $aluno = $this->Matricula->find('first', array('conditions' => array('id' => $id)));
    $this->set('matriculas', $aluno);
    
    $this->Matricula->id = $id;
    // Verifica se o registro existe
    if (!$this->Matricula->exists()) {
      throw new NotFoundException(__('Matricula inexistente'));
    }

    // Verifica se o formulário foi submetido
    if ($this->request->is('post')) {

      // Altera a data do próximo vencimento na matrícula para o Campo Pagamento.data_proximo_vencimento
      $this->Matricula->saveField('proximo_vencimento', $this->request->data['Pagamento']['data_proximo_vencimento']);

      // Insere o registro de pagamento
      $this->Pagamento->save($this->request->data);

      $this->Session->setFlash('Operação realizada com sucesso!');
      $this->redirect(array('action' => 'listar', $aluno['Matricula']['id']));
    }

    // Passa o id para o model
    $this->Matricula->id = $id;
    // Envia uma variável $matricula para a view com o conteúdo do registro
    $matricula = $this->Matricula->read();
    $this->set('matriculas', $matricula);

    // Traz o plano
    $this->loadModel('Plano');
    $args = array('conditions' => array('id' => $matricula['Matricula']['plano']));
    $this->set('planos', $this->Plano->find('first', $args));

    // Traz o model de pagamento
    $this->loadModel('Pagamento');
  }

}

?>
