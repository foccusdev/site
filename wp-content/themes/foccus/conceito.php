<?
/* Template Name: Conceito */
get_template_part('incs/head');
get_template_part('incs/topo');
?>

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
  <div class="conteudo-interno fonte-textos">
    <img src="<?= get_bloginfo('template_url') ?>/imgs/arco.png" class="arco">
    <h2 class="nome-secao">Conceito</h2>
    <span class="linha-azul"></span>

    <img src="<?= get_bloginfo('template_url') ?>/imgs/img_conceito.jpg" class="img-conceito float-left" />

    <div class="texto-conceito">

      <p>
        Duis vel leo justo, et porttitor est. Mauris imperdiet bibendum dolor, luctus eleifend enim sagittis 
        nec. Nulla vitae augue massa. Nunc augue ipsum, eleifend in tempor sed, adipiscing non lectus. Sed 
        convallis sodales ipsum, quis consectetur quam consectetur nec. Vivamus velit massa, tristique at 
        dapibus ut, semper ac velit. Ut sed sapien sem, a feugiat lacus. Sed venenatis sollicitudin urna, 
        nec pulvinar orci sagittis a. Aliquam tincidunt elit non velit luctus cursus. Nunc eget tellus leo. 
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      </p>

      <p>
        Mauris ut tortor ante, vel luctus dui. Integer bibendum mollis lacinia. Curabitur sit amet felis in 
        sem fermentum lacinia interdum et ante. Vestibulum at semper orci. Ut sagittis felis et libero feugiat
        a mattis ipsum congue. Quisque ut dui sed libero pretium ultrices. Donec vel mauris metus, quis 
        pellentesque ipsum. Donec tempus ultricies posuere. Nulla luctus libero quis tellus lobortis porttitor.
        Nunc ante neque, ultrices eu adipiscing vitae, vulputate cursus libero. Nunc et nulla nulla.
      </p>

      <p>
        Nam vestibulum accumsan sapien, nec pulvinar mauris vestibulum blandit. Nullam congue felis in tellus vulputate 
        id lobortis tortor tempus. In hac habitasse platea dictumst. Etiam malesuada leo id lectus suscipit bibendum. Sed 
        eu arcu vitae odio fringilla condimentum pretium quis ligula. Aenean sit amet lectus vitae elit dignissim aliquam 
        in sit amet tortor. Etiam eget magna lectus, convallis convallis nulla. Mauris dictum consequat turpis, eget faucibus 
        ligula bibendum eget. Suspendisse potenti.                  
      </p>


    </div>

  </div>

  <div class="coluna-direita">

    <div class="secao">
      Assuntos Relacionados
    </div>
    
    <div class="box">
      <a href="#">
        <img src="<?= get_bloginfo('template_url') ?>/imgs/img-box.jpg" class="float-left" />
        <h4 class="fonte-textos">san sapien, nec pulvinar mauris vestibulum blandit. Nullam congue felis in tellus vulputate 
        id lobortis.</h4>
        <div class="saiba-mais fonte-textos">Saiba +</div>
      </a>
    </div>
    
    <div class="box">
      <a href="#">
        <img src="<?= get_bloginfo('template_url') ?>/imgs/img-box.jpg" class="float-left" />
        <h4 class="fonte-textos">san sapien, nec pulvinar mauris vestibulum blandit. Nullam congue felis in tellus vulputate 
        id lobortis.</h4>
        <div class="saiba-mais fonte-textos">Saiba +</div>
      </a>
    </div>    

    <div class="clear"></div>
    
    <div class="secao">
      Depoimentos
    </div>
    
    <div class="box">
      <a href="#">
        <h4 class="fonte-textos">"san sapien, nec pulvinar mauris vestibulum blandit. Nullam congue felis in tellus vulputate mauris vestibulum blandit. Nullam congue felis in tellus vulputate 
        id lobortis."</h4>        
      </a>
    </div>
    
    <div class="box">
      <a href="#">
        <h4 class="fonte-textos">"san sapien, nec pulvinar mauris vestibulum blandit. Nulmauris vestibulum blandit. Nullam congue felis in tellus vulputate lam congue felis in tellus vulputate 
        id lobortis."</h4>        
      </a>
    </div>    

    <div class="clear"></div>
    
    <div class="secao">
      Notícias
    </div>
    
    <div class="box">
      <a href="#">
        <img src="<?= get_bloginfo('template_url') ?>/imgs/img-box.jpg" class="float-left" />
        <h4 class="fonte-textos">san sapien, nec pulvinar mauris vestibulum blandit. Nullam congue felis in tellus vulputate 
        id lobortis.</h4>
        <div class="saiba-mais fonte-textos">Saiba +</div>
      </a>
    </div>
    
    <div class="box">
      <a href="#">
        <img src="<?= get_bloginfo('template_url') ?>/imgs/img-box.jpg" class="float-left" />
        <h4 class="fonte-textos">san sapien, nec pulvinar mauris vestibulum blandit. Nullam congue felis in tellus vulputate 
        id lobortis.</h4>
        <div class="saiba-mais fonte-textos">Saiba +</div>
      </a>
    </div>    

    <div class="clear"></div>
    
    <div class="secao">
      Artigos
    </div>
    
    <div class="box">
      <a href="#">
        <img src="<?= get_bloginfo('template_url') ?>/imgs/img-box.jpg" class="float-left" />
        <h4 class="fonte-textos">san sapien, nec pulvinar mauris vestibulum blandit. Nullam congue felis in tellus vulputate 
        id lobortis.</h4>
        <div class="saiba-mais fonte-textos">Saiba +</div>
      </a>
    </div>
    
    <div class="box">
      <a href="#">
        <img src="<?= get_bloginfo('template_url') ?>/imgs/img-box.jpg" class="float-left" />
        <h4 class="fonte-textos">san sapien, nec pulvinar mauris vestibulum blandit. Nullam congue felis in tellus vulputate 
        id lobortis.</h4>
        <div class="saiba-mais fonte-textos">Saiba +</div>
      </a>
    </div>    

    <div class="clear"></div>    
    
  </div>


</div>

<? get_template_part('incs/rodape'); ?>