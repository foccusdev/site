<?php

//Magno correção de zica
// Cria constantes para as seções do site
define('_NOTICIAS', 2);
define('_ARTIGOS', 3);
define('_CONCEITO', 4);
define('_EQUIPE', 5);
define('_AMBIENTE', 6);
define('_DEPOIMENTOS', 10);
define('_PARCEIROS', 11);
define('_CONCEITO_TEXTO_CIMA', 54);
define('_CONCEITO_TEXTO_BAIXO', 51);

define('_CONTATO', 45);


if ($_SERVER['HTTP_HOST'] == 'localhost') {
  define('_EMAILS', 107);
} else {
  define('_EMAILS', 114);
}
?>
