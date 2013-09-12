<?php
$categoria = get_category(get_query_var('cat'),false);
switch($categoria->term_id){
    
    case _NOTICIAS:
    case _ARTIGOS:
        $pagina = 'noticias.php';
        break;
    
    case _EQUIPE:
        $pagina = 'equipe.php';
        break;

    case _DEPOIMENTOS:
        $pagina = 'depoimentos.php';
        break;
          
      case _ATIVIDADES:
        $pagina = 'atividades.php';
        break;
        
      
    default:
        $pagina = '404.php';
        break;
    
}

require_once ($pagina);

?>
