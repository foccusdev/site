<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Plano
 *
 * @author joao
 */
class Plano extends AppModel{
 
    public $name = 'Plano';
  
    public $hasAndBelongsToMany = array(
        'AtividadesPlano'=>
            array(
                'className' => 'Atividade',
                'joinTable' => 'atividades_planos',
                'foreignKey' => 'plano_id',
                'associationForeignKey' => 'atividade_id',
                'unique' => true,
                'with' => 'AtividadesPlano'
                )
          );
}

?>
