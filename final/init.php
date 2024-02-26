<?php
// 初期設定ファイル

// エラー表示
// 開発中
//ini_set( "error_reporting", E_ALL );
//ini_set( "error_reporting", E_ERROR | E_WARNING | E_PARSE );

// 運用中
ini_set( "error_reporting", E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED );


// データベース関連
// データベース接続ユーザー名
define("_DB_USER", "sample");

// データベース接続パスワード
define("_DB_PASS", "password");

// データベースホスト名
define("_DB_HOST", "localhost");

// データベース名
define("_DB_NAME", "sampledb");

// データベースの種類
define("_DB_TYPE", "mysql");

// データソースネーム
define("_DSN", _DB_TYPE . ":host=" . _DB_HOST . ";dbname=" . _DB_NAME. ";charset=utf8");


// セッション関連
// 各サイト用セッション名
define("_SITE_SESSNAME", "PHPSESSION_SITE");

// 各サイト情報 保管変数名
define("_SITE_INFO", "siteinfo");


// ファイル設置ディレクトリ
// 関連ファイルを設置するディレクトリ
define( "_FINAL_DIR", _ROOT_DIR . "../final/");

// クラスファイル
define( "_CLASS_DIR", _FINAL_DIR . "class/");

// 環境変数
define( "_SCRIPT_NAME", $_SERVER['SCRIPT_NAME']);

// Smarty関連設定
//  Smartyのlibsディレクトリ
define( "_SMARTY_LIBS_DIR",         _FINAL_DIR . "smarty/libs/");

//  Smartyのテンプレートファイルを保存したディレクトリ
define( "_SMARTY_TEMPLATES_DIR",    _FINAL_DIR . "smarty/templates/");

//  Smartyのコンパイル用ディレクトリ Webサーバから書き込めるようにします。、
define( "_SMARTY_TEMPLATES_C_DIR",  _FINAL_DIR . "smarty/templates_c/");

//  Smartyの設定ディレクトリ 未使用
define( "_SMARTY_CONFIG_DIR",       _FINAL_DIR . "smarty/configs/");

//  Smartyのキャッシュディレクトリ Webサーバから書き込めるようにします。、
define( "_SMARTY_CACHE_DIR",        _FINAL_DIR . "smarty/cache/");


// 汎用ライブラリの読み込み
// PEARファイル設置ディレクトリ
define( "_PEAR_PATH1", _FINAL_DIR . "PEAR/");
define( "_PEAR_PATH2", _FINAL_DIR . "PEAR/Pager/");

// ファイル読み込みディレクトリ
ini_set('include_path', ini_get('include_path') . PATH_SEPARATOR . _PEAR_PATH1 .PATH_SEPARATOR . _PEAR_PATH2);

// 入力フォーム機能
require_once("HTML/QuickForm2.php");
require_once("HTML/QuickForm2/Renderer.php");

// Smartyテンプレートエンジン
require_once(_SMARTY_LIBS_DIR . "Smarty.class.php");


// 自作クラスファイルの読み込み(ファイル名の指定なしでディレクトリ内のクラスファイルを自動で読み込む)
spl_autoload_register(function ($className) {
    require_once _CLASS_DIR . $className . ".php";
});
