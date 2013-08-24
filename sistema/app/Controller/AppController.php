<?php

/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
  /* Inclui o controle de sessão a todas as classes controller */

  public $components = array(
      'Session',
      'Auth' => array(
          'loginRedirect' => array('controller' => 'matriculas', 'action' => 'index'),
          'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
          'authError' => 'A seção que você tentou acessar exige autenticação e nível de acesso compatível.',
          'authorize' => array('Controller') // Adicionamos essa linha            
      )
  );

  // Não permite que usuários que não são administradores entrem em áreas restritas
  public function isAuthorized($user) {

    // Se for administrador, pode acessar qualquer página do sistema
    if (isset($user['role']) && $user['role'] === 'admin') {
      return true;
    } elseif (isset($user['role']) && $user['role'] === 'recepcionista') {
      // Se for recepcionista, pode acessar apenas listagens e visualizações
      if (in_array($this->action, array('index', 'view'))) {    
        return true;
      }else{
        $this->Session->setFlash(
        'Você não tem permissão para adicionar, editar ou excluir estes registros. <br/>Entre em contato com um dos administradores do sistema.',
        'default',
        array('class' => 'erro') 
                );
        return false;
      }
    }

    // Se for aluno (ou qq outro), não pode acessar nenhuma das páginas do sistem    
    return false; // O resto não pode
  }

}
