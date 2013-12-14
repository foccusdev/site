<div class="conteudo">

  <div class="topo-interna">
    <div class="newsletter">
      <span>Receba nossa newsletter</span>
      <form action="" method="post" class="float-right">
        <label for="news_nome">Nome</label>
        <input type="text" name="news_nome" id="news_nome" />
        <label for="news_email">email</label>
        <input type="text" name="news_email" id="news_email" />
        <input type="submit" value="enviar" />
      </form>
    </div>
  </div>

  <img src="<?= get_bloginfo('template_url') ?>/imgs/arco.png" class="arco">
  <h2 class="nome-secao">Login</h2>
  <span class="linha-azul"></span>
  <div class="conteudo-interno fonte-textos float-left">
    <div class="listagem float-left">

      <div class="login-container">
        <h3>Entre com os dados abaixo para acessar a área restrita.</h3>

        <form action="<? bloginfo('url') ?>/login/" method="post" class="login-form" >
          <input type= "text" name="login" placeholder="SEU EMAIL">
          <input type= "password" name="senha" placeholder="SUA SENHA" />
          <input type="submit"  value="Entrar">
          <div class="clear"></div>
        </form>

        <div class="clear"></div>
        <p>
          OBS: Estes dados foram informados no momento da matrícula.<br />
          Em caso de dúvidas entre em <a href="<?bloginfo('url')?>/contato">[contato]</a>
        </p>
        <div class="clear"></div>

      </div>
      <div class="clear"></div>
    </div>

  </div>
</div>

