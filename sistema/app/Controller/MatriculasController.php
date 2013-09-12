<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MatriculasController
 *
 * @author joao
 */
class MatriculasController extends AppController {

  public $helpers = array('Html', 'Form');
  public $name = 'Matriculas';
  
  // Método para autorizar recepcionistas a adicionar, editar e excluir Matrículas
  public function isAuthorized($user) {
    //var_dump($user);
    // Verficia se não foi autorizado pelo método da classe AppController (ou seja, não é administrador)
    if (!parent::isAuthorized($user)){
      
      // Verifica se é recepcionista
      if ($user['role']=='recepcionista') {
        // Se for, libera o acesso  
        return true;
      }else{
        // Se não for recepcionista, nem administrador, não libera o acesso
        return false;
      }
    }else{
      // Se ele foi autorizado pelo método da classe AppController, ele é administrador. Libera o acesso
      return true;
    }
    
    // Em qualquer outro caso, não libera o acesso
    return false;
  }

  public function index() {
    
        // Traz todas as atividades cadastradas
    $this->set('matriculas', $this->Matricula->find('all'));
    
    
  }

}

?>
