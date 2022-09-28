<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'cardoso' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`l+[eo`HGO]||KD0YHK&oh!W6e/R1BMMiE?^S+j_=Ih#VkpM>HCsi]8%Q(a>i%3S');
define('SECURE_AUTH_KEY',  ';-yqV18LfnnCoFmu-90t%A,U=Ph56-V8%GnB:>Smgcdw|Q76U?65hn-&^BiFaV }');
define('LOGGED_IN_KEY',    '<Y_F#d*V[}%EM?p!-gPLWZE>*_T=b>[TR|mJg0-K2C(V`gu);:,cTm`GW**:Q?$V');
define('NONCE_KEY',        'ZB3fLb#u8nDvN/+-c@1Gyoh+>aK5Ktv+E `n+%%DH2v[>+~,_#:_2QCxmo*+bf<,');
define('AUTH_SALT',        '2Jv:K[l >LAb 5s=,*^tn:;F t^#+@hD2X-L~+jPo~Y:Qbd/wl6ww-2rR.E7XNDR');
define('SECURE_AUTH_SALT', '!&DYn-hWU&s~-s!kT+j};MASsUG^]z_bI+B^.SL[54K~C?|%pemQvB)@c:*nE^n}');
define('LOGGED_IN_SALT',   'zW;iT_R| bn7xFSXCg8-rA1A9o++M[ i;8;8z@nK[$9F5g4Y|08W{jZld3qQ1KCJ');
define('NONCE_SALT',       '4[Yr|N1,tMJW?8&(Lruf/iXmh9t?rh:h Xi-My)F^%-F)jR-&fyVOr6y $5tY)#c');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
