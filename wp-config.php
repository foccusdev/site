<?php

/**
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */
// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //


if ($_SERVER['HTTP_HOST'] == 'localhost') {

  /** O nome do banco de dados do WordPress */
  //define('DB_NAME', 'site1367448928');
  define('DB_NAME', 'foccus');

  /** Usuário do banco de dados MySQL */
  define('DB_USER', 'root');

  /** Senha do banco de dados MySQL */
  define('DB_PASSWORD', '');

  /** nome do host do MySQL */
  define('DB_HOST', 'localhost');
} else {
  
  /** O nome do banco de dados do WordPress */
  define('DB_NAME', 'site1367448928');

  /** Usuário do banco de dados MySQL */
  define('DB_USER', 'site1367448928');

  /** Senha do banco de dados MySQL */
  define('DB_PASSWORD', 'f0Ccu5dB');

  /** nome do host do MySQL */
  define('DB_HOST', 'mysql01.site1367448928.hospedagemdesites.ws');
}


/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/* * #@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'W@R4=QM*Py>yY`|4%+BI*Taul+|!$0d?vAy8o2,-uqEM+DR:)$ E<1w_@No`<DK{');
define('SECURE_AUTH_KEY', 'UF|NJJeB_X&Y+8bJR]cPF<|r.ehm;T-UMJ}R-p,XJ)U=f?Wvxa,KMW#?IJ$sL%KN');
define('LOGGED_IN_KEY', 'tHyUKNGGusLpqazW)H1B`1i!6~2WU%bhwK+olt C.I6&+;F#k|&rRsVmJ>gS#0;S');
define('NONCE_KEY', 'gtn tc+V22grD9o+VV,.9`uF$)|h%;I7~(0_(~j*74X/R]COlo.aaN9-]K)!an]9');
define('AUTH_SALT', 'KD:PL9SqeOg1c-wDSsPr0fb{Fw?P0(^~XkwJZt&IsAvi0? B_uTHPiS#&{i}7}x&');
define('SECURE_AUTH_SALT', 'uf:dE*FmR@9lth&/8[OXmIZo)jw?D4<=d,#3Sm48KH~SP4b{FT^TP<)|!R]cBIW*');
define('LOGGED_IN_SALT', 'rCq%69,50`Y9^sI4XJEnXCh-w]xbmN.Wf7/Z]iqgj^N5K,t</2`~F;XJ9uHd$X2n');
define('NONCE_SALT', 'aiDA#RpZQ]!kPEHSTRnd!2Hzsu-bo~7D?&gBtUM$ Cuw_?j)ii>-s^[|+[h/=K9M');

/* * #@- */

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if (!defined('ABSPATH'))
  define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
