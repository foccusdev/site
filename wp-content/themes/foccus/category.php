<?php
$categoria = get_category(get_query_var('cat'),false);

print_r($thisCat);

switch($categoria->term_id){
    
    case _NOTICIAS:
    case _ARTIGOS:
        $pagina = 'noticias.php';
        break;
    
    case _EQUIPE:
        $pagina = 'equipe.php';
        break;
    
    default:
        $pagina = '404.php';
        break;
    
}

require_once ($pagina);

?>
