<a href="javascript:history.back(-1)" class="seta-voltar float-left" title="Clique aqui para voltar para a listagem."></a> 
<h1>Dados do Usuário</h1>

<div class="dado-form">
  <label>Nome:</label>
  <span><?=$user['User']['nome']?></span>
</div>

<div class="dado-form">
  <label>Email/Login:</label>
  <span><a href="mailto:<?=$user['User']['username']?>"><?=$user['User']['username']?></a></span>
</div>

<div class="dado-form">
      <label>    Tipo de usuário:</label>
  <span><?=$user['User']['role']?></span>
</div>

<div>
  <a href="javascript:history.back()">Voltar</a>
</div>