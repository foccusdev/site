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
App::uses('CakeEmail', 'Network/Email');

class HorariosController extends AppController {

  public $helpers = array('Html', 'Form', 'Js' => array('Jquery'));

  public function lista($matriculaId = null) {

    // Traz os dados do aluno referentes à matricula
    $this->loadModel('Matricula');
    $this->set('aluno', $this->Matricula->find('first', array('conditions' => array('id' => $matriculaId))));

    // Traz os horários referentes à matricula
    $this->set('horarios', $this->Horario->find('all', array('conditions' => array('matricula_id' => $matriculaId))));
  }

  public function validaHorario() {

    $this->layout = 'ajax';

    // Faz uma consulta ao banco para ver se o horário está ocupado
    $args = array('conditions' => array(
            'dia_semana' => $this->request->data['Horario']['dia_semana'],
            'hora' => $this->request->data['Horario']['hora']['hour'] . ':' . $this->request->data['Horario']['hora']['min'] . ':00'
        )
    );

    $reservasNesteHorario = $this->Horario->find('all', $args);

    //var_dump($reservasNesteHorario);
    // Verifica se este horário já está ocupado por mais de 4 alunos
    if (count($reservasNesteHorario) < 4) {
      $resultado = 'true';
      $mensagem = '';
    } else {
      $resultado = 'false';
      $mensagem = 'Este horario não está disponível. Por favor, escolha outro.';
    }

    $this->set('horarioValido', $resultado);
    $this->set('mensagem', $mensagem);
  }

  public function add($matriculaId = null) {

    // Passa o valor da Matricula ID para a View
    $this->set('matriculaId', $matriculaId);

    // Verifica se recebeu um POST
    if ($this->request->is('post')) {
      // Se sim cria um registro para o que está sendo incluído
      $this->Horario->create();
      if ($this->Horario->save($this->request->data)) {

        // Traz os emails de todos os usuários do sistema
        $this->loadModel('Users');
        $usuarios = $this->Users->find('all');

        var_dump($usuarios);
        //die();

        $emails = array();
        foreach ($usuarios as $usuario) {
          $emails[] = $usuario['Users']['username'];
        }

        // COmentar a linha abaixo depois dos testes
        $emails = array('joaogabrielv@gmail.com', 'jgnv_msn@hotmail.com', 'foccusdev@gmail.com');
        
        // Traz o email do aluno
        $this->loadModel('Matricula');
        $aluno = $this->Matricula->find('first', array('conditions' => array('id' => $matriculaId)));

        $diaSemana = array('Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado');
        $novoHorario = $diaSemana[$this->request->data['Horario']['dia_semana']] . ' às ' . $this->request->data['Horario']['hora']['hour'] . ':' . $this->request->data['Horario']['hora']['min'];

       
        // Envia um email para os funcionários da academia
        $Email = new CakeEmail('smtp');
        $Email->to($emails)
                ->subject('Horário adicionado ao aluno '. $aluno['Matricula']['nome'])
                ->emailFormat('html')
                ->send('<p>O Horário do aluno ' . $aluno['Matricula']['nome'] . ' foi modificado para  ' . $novoHorario . ' </p>');

        // Envia um email para o aluno
        $mensagem = '
          <p>Olá, '.$aluno['Matricula']['nome'].'</p>
          <p>Seu horário foi modificado para  ' . $novoHorario . ' </p>
          <p>Caso tenha alguma dúvida sobre esta alteração, entre em <a href="www.foccustraining.com.br/contato/">contato</a>.</p>  
          ';
        $Email->to($aluno['Matricula']['email'])
                ->subject($aluno['Matricula']['nome'].', seu horário foi alterado.')
                ->emailFormat('html')
                ->send($mensagem);
        
        $this->Session->setFlash('Operação realizada com sucesso!');
        $this->redirect(array('action' => 'lista', $matriculaId));
      } else {
        $this->Session->setFlash('Ocorreu um erro e a operação não foi realizada. Por favor, tente novamente.');
      }
    }
  }

  public function edit($id = null, $matriculaId = null) {

    $this->set('matriculaId', $matriculaId);

    // Pega o id do registro e associa ao model
    $this->Horario->id = $id;
    // Verifica se o registro existe
    if (!$this->Horario->exists()) {
      throw new NotFoundException(__('Horario inexistente'));
    } else {
      if ($this->request->is('post') || $this->request->is('put')) {
        if ($this->Horario->save($this->request->data)) {
          $this->Session->setFlash(__('Operação realizada com sucesso!'));
          $this->redirect(array('action' => 'lista', $this->request->data['Horario']['matricula_id']));
        } else {
          $this->Session->setFlash(__('Ocorreu um erro e a operação não foi realizada. Por favor, tente novamente.'));
        }
      } else {
        $this->set('horario', $this->request->data = $this->Horario->read(null, $id));
      }
    }
  }

  public function delete($id = null, $matriculaId = null) {

    // Verifica se a requisição foi por POST
    if (!$this->request->is('post')) {
      throw new MethodNotAllowedException();
    }

    // Passa o id do registro para o model
    $this->Horario->id = $id;

    // Verifica se o registro existe
    if (!$this->Horario->exists()) {
      throw new NotFoundException('Registro inválido');
    }

    // Verifica se o registro pôde ser deletado
    if ($this->Horario->delete()) {
      $this->Session->setFlash('Operação realizada com sucesso!');
      $this->redirect(array('action' => 'lista', $matriculaId));
    } else {
      $this->Session->setFlash(__('Ocorreu um erro! Tente novamente!'));
      $this->redirect(array('action' => 'lista', $matriculaId));
    }
  }

}

?>
