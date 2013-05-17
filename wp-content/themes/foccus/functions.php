<?php

// Define as constantes 
require_once ('defineConstantes.php');

// Habilita thumbnails
add_theme_support('post-thumbnails');


// Registra o tipo Slides
$args = array(
    'public' => true,
    'label' => 'Slides',
    'exclude_from_search' => true,
    'supports' => array('title', 'thumbnail', 'excerpt')
);
register_post_type('slide', $args);

// Altera o logo do login do wp-admin
function my_custom_login_logo() {
  echo '<style type="text/css">
        h1 a { background-image:url(' . get_bloginfo('template_url') . '/images/login_page_logo.png) !important; }
    </style>';
}

add_action('login_head', 'my_custom_login_logo');



//********************************************************
// Personalizações para o usuário Editor
//********************************************************

if (!current_user_can('manage_options')) {

// Personalização da barra superior no wp-admin para o Editor 
  function customizeTopMenu() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('new-content');
    $wp_admin_bar->remove_menu('new-link');
    $wp_admin_bar->remove_menu('comments');
  }

  add_action('wp_before_admin_bar_render', 'customizeTopMenu');

// Personalização do menu lateral no wp-admin para o Editor 
  function customizeAdminLeftMenu() {


    remove_menu_page('index.php');                // Retira Painel
    remove_menu_page('edit.php');                 // Retira Posts
    remove_menu_page('upload.php');               // Retira Mídia
    remove_menu_page('edit.php?post_type=page');  // Retira Páginas
    remove_menu_page('edit.php?post_type=slide'); // Retira Slides
    remove_menu_page('edit-comments.php');        // Retira Comentários         
    remove_menu_page('tools.php');                // Retira Configurações

    $primeiroItem = 37;

    add_menu_page('Slides', 'Slides', 'edit_posts', 'edit.php?post_type=slide', '', get_bloginfo('template_url') . '/imgs/noticias.png', $primeiroItem++);
    add_menu_page('Parceiros', 'Parceiros', 'edit_posts', 'edit.php?cat=' . _PARCEIROS, '', get_bloginfo('template_url') . '/imgs/noticias.png', $primeiroItem++);
    add_menu_page('Notícias', 'Notícias', 'edit_posts', 'edit.php?cat=' . _NOTICIAS, '', get_bloginfo('template_url') . '/imgs/noticias.png', $primeiroItem++);
    add_menu_page('Artigos', 'Artigos', 'edit_posts', 'edit.php?cat=' . _ARTIGOS, '', get_bloginfo('template_url') . '/imgs/noticias.png', $primeiroItem++);
    add_menu_page('Conceito', 'Conceito', 'edit_posts', 'edit.php?cat=' . _CONCEITO, '', get_bloginfo('template_url') . '/imgs/noticias.png', $primeiroItem++);
    add_menu_page('Equipe', 'Equipe', 'edit_posts', 'edit.php?cat=' . _EQUIPE, '', get_bloginfo('template_url') . '/imgs/noticias.png', $primeiroItem++);
    add_menu_page('Ambiente', 'Ambiente', 'edit_posts', 'edit.php?cat=' . _AMBIENTE, '', get_bloginfo('template_url') . '/imgs/noticias.png', $primeiroItem++);
    add_menu_page('Depoimentos', 'Depoimentos', 'edit_posts', 'edit.php?cat=' . _DEPOIMENTOS, '', get_bloginfo('template_url') . '/imgs/noticias.png', $primeiroItem++);
    add_menu_page('Contato', 'Contato', 'edit_posts', 'post.php?post=45&action=edit', '', get_bloginfo('template_url') . '/imgs/noticias.png', $primeiroItem++);



    add_submenu_page('edit.php?cat=' . _PARCEIROS, 'Parceiros', 'Adicionar Novo', 'edit_posts', 'post-new.php?cat=' . _PARCEIROS);
    add_submenu_page('edit.php?cat=' . _NOTICIAS, 'Notícias', 'Adicionar Nova', 'edit_posts', 'post-new.php?cat=' . _NOTICIAS);
    add_submenu_page('edit.php?cat=' . _ARTIGOS, 'Artigos', 'Adicionar Novo', 'edit_posts', 'post-new.php?cat=' . _ARTIGOS);
    add_submenu_page('edit.php?cat=' . _EQUIPE, 'Equipe', 'Adicionar Novo', 'edit_posts', 'post-new.php?cat=' . _EQUIPE);
    add_submenu_page('edit.php?cat=' . _AMBIENTE, 'Ambiente', 'Adicionar Novo', 'edit_posts', 'post-new.php?cat=' . _AMBIENTE);
    add_submenu_page('edit.php?cat=' . _DEPOIMENTOS, 'Depoimentos', 'Adicionar Novo', 'edit_posts', 'post-new.php?cat=' . _DEPOIMENTOS);
    
  }

  add_action('admin_menu', 'customizeAdminLeftMenu');

// Manipula o que o editor pode ou não fazer
  function manipulaPapeisDeUsuarios() {
    // gets the author role
    $role = get_role('editor');
    $role->add_cap('create_users');
    $role->add_cap('delete_users');
    $role->add_cap('view_users');
    $role->remove_cap('manage_categories');
  }

  add_action('admin_init', 'manipulaPapeisDeUsuarios');

// Retira os filtros por categoria e a possibilidade de se listar todos os posts da listagem de posts
  function escondeFiltros() {
    echo '
    <style type="text/css">
      .tablenav.top .alignleft.actions select[name="m"],
      .tablenav.top .alignleft.actions select#cat,
      .tablenav.top .alignleft.actions input#post-query-submit,
      .tablenav.top .view-switch,
      .subsubsub,
      #message p a{ 
          display: none; 
      }
    </style>
    ';
  }

  add_action('admin_head-edit.php', 'escondeFiltros');
  add_action('admin_head-post-new.php', 'escondeFiltros');

  // Faz algumas alterações visuais via Javascript (mais detalhes abaixo)
  function customInterface() {

    $customUIScript = '
          <script src="' . get_bloginfo('template_url') . '/js/jquery-1.9.1.min.js"></script>
      <script>

      $("document").ready(function(){
    ';

    // Edição de conteúdo
    if (isset($_GET['post']) && isset($_GET['cat']) && $_GET['cat'] == _CONCEITO) {
      $customUIScript .= '$(".deletion").hide();';
    }

    if (isset($_GET['cat']) || isset($_GET['post'])) {

      // Traz o nome da categoria
      if (isset($_GET['cat'])) {
        $categoriaNome = get_the_category_by_ID($_GET['cat']);
        $categoriaId = $_GET['cat'];
      } else {
        $categoria = get_the_category();
        $categoriaNome = $categoria[0]->name;
        $categoriaId = $categoria[0]->term_id;
      }


      // Substitui o nome Posts no alto de cada tela pelo nome da categoria sendo alterada
      $customUIScript .= 'var conteudoH2 = "' . $categoriaNome . ' ";';


      $customUIScript .= '
        $("h2:first").html(conteudoH2);
        
        // Pre-seleciona a categoria 
        if ($("#categorychecklist").length>0)
          $("#in-category-' . $categoriaId . '").attr("checked", "checked");     
      ';
    }


    // Esconde o botão excluir da listagem, se for institucional
    if (isset($_GET['cat']) && $_GET['cat'] == _CONCEITO) {
      $customUIScript .= '$(".trash").remove();';
    }

    
    // Esconde o link "edição rápida" da listagem (para evitar que se configure categorias)
    $customUIScript .= '$(".inline").remove();';
    

    // Se estiver na index.php, exibe uma mensagem de boas vindas
    if (strpos($_SERVER['PHP_SELF'], '/index.php') !== FALSE) {
      $handle = fopen(dirname(__FILE__) . '/adminWelcome.php', 'r');
      $adminWelcome = fread($handle, filesize(dirname(__FILE__) . '/adminWelcome.php'));
      $adminWelcome = str_replace("\n", '', $adminWelcome);
      $customUIScript.='$("#dashboard-widgets").html(\'' . $adminWelcome . '\');';
    }


    // Esconde a edição do link permanente
    $customUIScript .= '
      if ($("#edit-slug-box").length>0)
          $("#edit-slug-box").hide();   
    ';


    // Esconde o link "Ver post" depois da mensagem 
    $customUIScript .= '
      if ($("#message").length>0)
          $("#message p a").hide();
      ';
    
    
    $customUIScript .= '
        });
      </script>
    ';

    echo $customUIScript;
  }

  add_action('admin_print_scripts', 'customInterface');


  // Esconde Opções de Tela e Ajuda
  add_action('admin_head', 'mytheme_remove_help_tabs');

  function mytheme_remove_help_tabs() {
    $screen = get_current_screen();
    $screen->remove_help_tabs();
  }

  add_filter('screen_options_show_screen', '__return_false');
}

//Altera o logo do login 
function custom_login_logo() {
  echo '<style type="text/css">' .
  'h1 a { background-image:url(' . get_bloginfo('template_directory') . '/imgs/logo.jpeg) !important; width: 319px !important; padding-bottom: 131px !important; background-size: auto !important; border: 1px solid #ccc}' .
  '</style>';
}

add_action('login_head', 'custom_login_logo');
?>
