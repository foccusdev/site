<?
/* Template Name: Equipe */
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
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/><br/>
           
                Mauris ut tortor ante, vel luctus dui. Integer bibendum mollis lacinia. Curabitur sit amet felis in 
                sem fermentum lacinia interdum et ante. Vestibulum at semper orci. Ut sagittis felis et libero feugiat
                a mattis ipsum congue. Quisque ut dui sed libero pretium ultrices. Donec vel mauris metus, quis 
                pellentesque ipsum. Donec tempus ultricies posuere. Nulla luctus libero quis tellus lobortis porttitor.
                Nunc ante neque, ultrices eu adipiscing vitae, vulputate cursus libero. Nunc et nulla nulla.<br/><br/>
            
                Nam vestibulum accumsan sapien, nec pulvinar mauris vestibulum blandit. Nullam congue felis in tellus vulputate 
                id lobortis tortor tempus. In hac habitasse platea dictumst.
            </p>


        </div>

        
    </div>

    <? get_template_part('incs/barra-lateral') ?>

</div>

<div class="mensagem_incentivo" >
  <div class="texto_img-circulo" >
     <p><b><i>Mensagem de incentivo</i></b></p>
  </div> 
  <div class="img-circulo" >
     <img src="<?= get_bloginfo('template_url') ?>/imgs/circulo_pontilhado.png"/>
  </div> 
</div> 

 <div class="objetivos">
     <div class="texto_objetivos">Objetivos<img src="<?= get_bloginfo('template_url') ?>/imgs/img_objetivos.png"/></div>
 </div>
 <div class="texto-conceito2">
  
            <P>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. 
               Mirum est notare quam littera gothica, quam nunc putamu s parum claram, anteposuerit 
               litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, 
               qui nunc nobis videntur parum clari, fiant sollemnes in futurum. Claritas est etiam 
               processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare 
               quam littera gothica, quam nunc putamu s parum claram, anteposuerit litterarum formas 
               humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis 
               videntur parum clari, fiant sollemnes in futurum.Claritas est etiam processus dynamicus, 
               qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, 
               quam nunc putamu s parum claram, anteposuerit litterarum formas humanitatis per seacula 
               quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, 
               fiant sollemnes in futurum. Claritas est etiam processus dynamicus, qui sequitur mutationem 
               consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamu s parum claram, 
               anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. 
               Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.Mirum est notare 
               quam littera gothica, quam nunc putamu s parum claram, anteposuerit litterarum formas 
               humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis 
               videntur parum clari, fiant sollemnes in futurum.</P>

</div>

</div> 
  
<? get_template_part('incs/rodape'); ?>