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
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
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
define( 'DB_NAME', 'sawasick_w1_local' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
// define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '@!`L4{.09.JOgHJ[$4.qi*h(CPR=ObSa|Raizkv[0ki+r-sx^eZ>voG1;yC_,==7' );
define( 'SECURE_AUTH_KEY',  '6H></#t%(2%hxj_Hs|,a7[0eN|sF[lGT>(_${*s1%j:m&?2&r^([ F#9=f-[]~`/' );
define( 'LOGGED_IN_KEY',    'bPxREbfi?T< VzMe-H6,]UM_ !.7=$y;~&>cSCV#S&!T9~2WQXA@Z`F%9bI*,#[b' );
define( 'NONCE_KEY',        '*cRD`M^Q^Z1d-!_!24vbnjr_q/k)0@ 1g0RqaGogrvzs8<A[X@1#z[a91nTaJ5VZ' );
define( 'AUTH_SALT',        '`~,Y#feA# 5&+sIE{2D8$]W&6ZI%`gV.bbUecCA2Ts[kvr2dC8G%JZ|A}D/]=r+`' );
define( 'SECURE_AUTH_SALT', '~L`)GBf;ZM-ERTPh2bk<&t9`aV>?cJ&5Uv:W=Qu)^M3sp*fe)/FR*RJ$-G*KWc0&' );
define( 'LOGGED_IN_SALT',   '#qnLeCC#d4]&7)VQ/g[;Cx1So#6vSPN}Hb7D-Lj1X$566N:IXf331jsH?} SN.Iw' );
define( 'NONCE_SALT',       'cjv.;#&7u)I!N++TaIRQprToi2MGI*6~{pYldtqd5&k31@E2O.]8XyYP0}V_,XTs' );

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
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';