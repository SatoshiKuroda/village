<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wordpress2' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'Rice1218' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'A G9(1jbPsM1-H:EJqY {yQyX.`:VdR8K:&$=Gz8o$dufa2A;e Vz3/?PDmx1R|[' );
define( 'SECURE_AUTH_KEY',  'a8cY7[Jldq|3+,jf=Way7fb:1fn<GP*:hwydkq2KoC=Ymo-?G~#`8-|-do?:knn8' );
define( 'LOGGED_IN_KEY',    '9s`@44?NLL;|g5Hp+J6(7xZb&:Mi4X %|f 8eE4~]>4HA}m(y?EaB7@+iiXK_fA+' );
define( 'NONCE_KEY',        'rNnh7-#4+p]2fV]j=385LV+(8=A+m6^xE8|2Re#;Hb5oADGXQZf!(6T5)Ip7p%qi' );
define( 'AUTH_SALT',        'HTY-Ur,T+c~}J9cqD7qR*rQ[hUxo+f+mk0@}Na@I1y)~;vX-s{CBFPS5Epup@>tM' );
define( 'SECURE_AUTH_SALT', '6vTCxiVtB9TDSw6?#h{%fc:;%Sh|1}[LOip]!6~*bK&{yqF^@Brq_04Ktfx1vV&f' );
define( 'LOGGED_IN_SALT',   'R.Ypx<$)&gg$+!}lQ)}e~xn<#jV{>n6&O|d ScPjR)HRX1C&7bjhVS^`$M*o j]8' );
define( 'NONCE_SALT',       '.x6|70kJ6|EmYT<a;` KTXl[o0}9X=ZLB~K$iwY*3Cr>ra#-s7/zVoV+yl]8Qy![' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

define('FS_METHOD', 'direct');
