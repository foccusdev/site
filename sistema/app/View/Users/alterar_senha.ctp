<?= $this->Html->link('', array('controller' => 'users', 'action' => 'index'), array('class' => 'seta-voltar float-left', 'title' => 'Clique aqui para voltar para a listagem.')); ?>
<h1>Alteração de senha de usuário</h1>

<div>
  <?
  echo $this->Form->create('User');
  echo $this->Form->input('password', array('label' => 'Nova Senha: '));
  
  ?>
  <div class="input required">
    <label for="ConfirmPassword">Confirme a senha:</label>
    <input name="ConfirmPassword" type="password" id="ConfirmPassword" required="required" />
  </div>
  
  <div class="dado-form">
    <input type="checkbox" id="enviar-aviso" name="enviar-aviso" checked="checked"/> Avisar o usuário por email que sua senha foi alterada.
  </div>    
  
  <div class="dado-form">
    <input type="checkbox" id="enviar-senha" name="enviar-senha" checked="checked"/> Enviar a nova senha ao usuário por email.
  </div>      
  
  <?
  echo $this->Form->end('Alterar');
  ?>
</div>


<?/* 
 * 
 *Criar script para validar os dois passwords 
 */
?>