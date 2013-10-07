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
      // Verifica quantos 0 tem o array, se for do tamanho do array de atividades, nenhuma foi escolhida
      if (count(array_keys($this->request->data['Atividade'], '0')) == count($this->request->data['Atividade'])) {
        $this->Session->setFlash('Escolha ao menos uma atividade!');
      } else {

        // Salva os dados do Plano 
        $planoDados = array('nome' => $this->request->data['Plano']['nome'], 'valor_especial' => $this->request->data['Plano']['valor_especial']);
        $planoNovo = $this->Plano->save($planoDados);
        $planoNovoId = $planoNovo['Plano']['id'];

        // Forma o array de atividades selecionadas no formato esperado
        foreach ($this->request->data['Atividade'] as $atividade) {
          if ($atividade != 0)
            $atividadesPlano[] = array(
                'Plano' => array('id' => $planoNovoId), 'Atividade' => array('id' => $atividade));
        }

        // Salva todas as atividades do array montado acima
        $this->Plano->saveAll($atividadesPlano);

        // Redireciona para a listagem
        $this->redirect(array('action' => 'index'));
      }
    }

    // Traz as atividades cadastradas
    $this->loadModel('Atividade');
    $this->set('atividades', $this->Atividade->find('all'));
  }

  public function view($id = null) {
    // Passa o id para o model
    $this->Plano->id = $id;
    // Envia uma variável $atividade para a view com o conteúdo do registro
    $this->set('plano', $this->Plano->read());
  }

  public function edit($id = null) {
    // Pega o id do registro e associa ao model
    $this->Plano->id = $id;
    // Verifica se o registro existe
    if (!$this->Plano->exists()) {
      throw new NotFoundException(__('Plano inexistente'));
    }
    if ($this->request->is('post') || $this->request->is('put')) {

      //var_dump($this->request->data);
      // Valida se existe ao menos uma atividade selecionada
      // Verifica quantos 0 tem o array, se for do tamanho do array de atividades, nenhuma foi escolhida
      if (count(array_keys($this->request->data['Atividade'], '0')) == count($this->request->data['Atividade'])) {
        $this->Session->setFlash('Escolha ao menos uma atividade!');
      } else {

        $planoDados = array('nome' => $this->request->data['Plano']['nome'], 'valor_especial' => $this->request->data['Plano']['valor_especial']);
        if ($this->Plano->save($planoDados)) {

          // Exclui qualquer ligação com atividades anteriores deste plano
          $this->Plano->AtividadesPlano->deleteAll('plano_id = ' . $id);

          // Forma o array de atividades selecionadas no formato esperado
          foreach ($this->request->data['Atividade'] as $atividade) {
            var_dump($atividade);

            if ($atividade != 0)
              $atividadesPlano[] = array(
                  'Plano' => array('id' => $id), 'Atividade' => array('id' => $atividade));
          }

          // Salva todas as atividades do array montado acima
          $this->Plano->saveAll($atividadesPlano);

          $this->Session->setFlash(__('Operação realizada com sucesso!'));
          $this->redirect(array('action' => 'index'));
        } else {
          $this->Session->setFlash(__('Ocorreu um erro e a operação não foi realizada. Por favor, tente novamente.'));
        }
      }
    }
    $this->request->data = $this->Plano->read(null, $id);

    // Monta um array com os IDs das atividades selecionadas para o plano
    foreach ($this->request->data['Atividade'] as $atividade) {
      $atividadesSel[] = $atividade['id'];
    }

    $this->set('atividadesSel', $atividadesSel);


    // Traz as atividades cadastradas
    $this->loadModel('Atividade');
    $this->set('atividades', $this->Atividade->find('all'));
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
