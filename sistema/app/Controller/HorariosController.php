<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HorariosController
 *
 * @author joao
 */
class HorariosController extends AppController {

 public $helpers = array( 'Html','Form', 'Js' => array('Jquery'));
  
  public function lista($matriculaId = null) {

    // Passa o valor da Matricula ID para a View
    $this->set('matriculaId', $matriculaId);

    // Traz os horários referentes à matricula
    $this->set('horarios', $this->Horario->find('all', array('conditions' => array('matricula_id' => $matriculaId))));
  }

  
  public function validaHorario(){
      
    // Faz uma consulta ao banco para ver se o horário está ocupado
    $args = array('conditions' => array(
        'dia_semana' => $this->request->data['Horario']['dia_semana'],
        'hora' => $this->request->data['Horario']['hora']['hour'].':'.$this->request->data['Horario']['hora']['min'].':00'
            )
        );
    if (count($this->Horario->find('all', $args))<1){
      $resultado = 'true';
      $mensagem = '';
    }else{
      $resultado = 'false';
      $mensagem = 'Este horario não está disponível. Por favor, escolha outro.';
    }   
        
    $this->set('horarioValido', $resultado);
    $this->set('mensagem', $mensagem);
    
    $this->layout = 'ajax';
    
  }
  
  
  public function add($matriculaId = null) {

    // Passa o valor da Matricula ID para a View
    $this->set('matriculaId', $matriculaId);

    // Verifica se recebeu um POST
    if ($this->request->is('post')) {
      // Se sim cria um registro para o que está sendo incluído
      $this->Horario->create();
      if ($this->Horario->save($this->request->data)) {
        $this->Session->setFlash('Operação realizada com sucesso!');
        $this->redirect(array('action' => 'lista', $matriculaId));
      } else {
        $this->Session->setFlash('Ocorreu um erro e a operação não foi realizada. Por favor, tente novamente.');
      }
    }
  }

  public function edit($id = null) {
    // Pega o id do registro e associa ao model
    $this->Horario->id = $id;
    // Verifica se o registro existe
    if (!$this->Horario->exists()) {
      throw new NotFoundException(__('Horario inexistente'));
    }
    if ($this->request->is('post') || $this->request->is('put')) {
      if ($this->Horario->save($this->request->data)) {
        $this->Session->setFlash(__('Operação realizada com sucesso!'));
        $this->redirect(array('action' => 'index', $this->request->data['Horario']['matricula_id']));
      } else {
        $this->Session->setFlash(__('Ocorreu um erro e a operação não foi realizada. Por favor, tente novamente.'));
      }
    } else {
      $this->request->data = $this->Horario->read(null, $id);
    }
  }

}

?>
