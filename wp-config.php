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
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'stm');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'stm');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'stm14');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '<VX7!uM}MvgT@C3l@HYJ.GpXz.]L8-UN*22[$|DU<+7?F7$ag[@Sv-LinzyBOMm#');
define('SECURE_AUTH_KEY',  '+4|}~43604CVvJ/,D`S-U6lZBO6_s+2hr&Dzsr1$t;[?kG_h|r`,&q!])ItaJyq]');
define('LOGGED_IN_KEY',    '~2B4T|<G.R}njaU9La9V>wc-5q3|CNxgVW;!m${gHQ,;+P`z,e_^QTZ{^FX)=bLC');
define('NONCE_KEY',        ')DR6S^N_WS//u+uY,6O_2D1zu4y6,QZo_t+h]M{v!RjMr=2-+WM-?d>a|~Ep&m|R');
define('AUTH_SALT',        ']3(W2c8caN~lwUN-X nJ*AZ@~*Q-S*`j5aptte&v|^VCeh4fV^$uO-Vu_/+7>7 :');
define('SECURE_AUTH_SALT', '-tX!+(o+I|19r}sNTxtP*cx5`Nu0rG.Nov@e4Z<kt~V7z/z-+A;}A~D8bl-lda,{');
define('LOGGED_IN_SALT',   'MSsse={nHv} 8[q`pDD-R0#8br7!B:xnWp|2TvR-$|umkxjo>zT6! cUS 3L=3Q{');
define('NONCE_SALT',       ' ZP/K!}g$5n|-i*,wb3(lSN4R5Op j_v~U}u/G!_^Ke@JfE0,A@(n6st_QIPwmRW');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'stm_';


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
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
