<h1>Dados do Usuário</h1>

<div class="dado-form">
  <label>Nome:</label>
  <span><?=$usuario['Usuario']['nome']?></span>
</div>

<div class="dado-form">
  <label>Email:</label>
  <span><a href="mailto:<?=$usuario['Usuario']['email']?>"><?=$usuario['Usuario']['email']?></a></span>
</div>

<div>
  <a href="javascript:history.back()">Voltar</a>
</div>