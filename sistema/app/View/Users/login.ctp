<div class="users form">
<?
echo $this->Session->flash('auth'); 
echo $this->Form->create('User');
echo $this->Form->input('username', array('label' => 'Email / Login: '));
echo $this->Form->input('password', array('label' => 'Senha: '));   
echo $this->Form->end(__('Login'));
?>
</div>