<?php
define("__ROOT_DIR__", dirname(__FILE__));
const __PAGE_DIR__ = DIRECTORY_SEPARATOR . 'usr' . DIRECTORY_SEPARATOR . 'page';
const __CSS_DIR__ = DIRECTORY_SEPARATOR . 'usr' . DIRECTORY_SEPARATOR . 'css';
const __JS_DIR__ = DIRECTORY_SEPARATOR . 'usr' . DIRECTORY_SEPARATOR . 'js';
const __IMG_DIR__ = DIRECTORY_SEPARATOR . 'usr' . DIRECTORY_SEPARATOR . 'img';
const __RESPONSE_DIR__ = DIRECTORY_SEPARATOR . 'usr' . DIRECTORY_SEPARATOR . 'request';

const __LAYOUT__ = ['header' => __PAGE_DIR__ . DIRECTORY_SEPARATOR . 'header.html.php',
    'nav' => __PAGE_DIR__ . DIRECTORY_SEPARATOR . 'nav.html.php',
    'login' => __PAGE_DIR__ . DIRECTORY_SEPARATOR . 'login.html.php',
    'logon' => __PAGE_DIR__ . DIRECTORY_SEPARATOR . 'logon.html.php',
    'comment' => __PAGE_DIR__ . DIRECTORY_SEPARATOR . 'comment.html.php',
    'content0' => __PAGE_DIR__ . DIRECTORY_SEPARATOR . 'content0.html.php',
    'search' => __PAGE_DIR__ . DIRECTORY_SEPARATOR . 'search.html.php',
    'searchResult' => __PAGE_DIR__ . DIRECTORY_SEPARATOR . 'searchResult.html.php',
    'profile' => __PAGE_DIR__ . DIRECTORY_SEPARATOR . 'profile.html.php',
    'footer' => __PAGE_DIR__ . DIRECTORY_SEPARATOR . 'footer.html.php',
    'follower' => __PAGE_DIR__ . DIRECTORY_SEPARATOR . 'follow.html.php',
    'content1' => __PAGE_DIR__ . DIRECTORY_SEPARATOR . 'content1.html.php',
    'content2' => __PAGE_DIR__ . DIRECTORY_SEPARATOR . 'content2.html.php',
    'game' => __PAGE_DIR__ . DIRECTORY_SEPARATOR . 'game_details.html.php',
    '404' => __PAGE_DIR__ . DIRECTORY_SEPARATOR . 'error.html.php'];
const __STYLE__ = ['header' => __CSS_DIR__ . DIRECTORY_SEPARATOR . 'page-wrapper.css.php',
    'nav' => __CSS_DIR__ . DIRECTORY_SEPARATOR . 'nav.css.php',
    'banner' => __CSS_DIR__ . DIRECTORY_SEPARATOR . 'banner.css.php',
    'login' => __CSS_DIR__ . DIRECTORY_SEPARATOR . 'login.css.php',
    'content-wrapper' => __CSS_DIR__ . DIRECTORY_SEPARATOR . 'content-wrapper.css.php',
    'content0' => __CSS_DIR__ . DIRECTORY_SEPARATOR . 'content0.css.php',
    'comment-block' => __CSS_DIR__ . DIRECTORY_SEPARATOR . 'comment-block.css.php',
    'comment' => __CSS_DIR__ . DIRECTORY_SEPARATOR . 'comment.css.php',
    'search' => __CSS_DIR__ . DIRECTORY_SEPARATOR . 'search.css.php',
    'searchResult' => __CSS_DIR__ . DIRECTORY_SEPARATOR . 'searchResult.css.php',
    'profile' => __CSS_DIR__ . DIRECTORY_SEPARATOR . 'profile.css.php',
    'footer' => __CSS_DIR__ . DIRECTORY_SEPARATOR . 'footer.css.php',
    'follower' => __CSS_DIR__ . DIRECTORY_SEPARATOR . 'follow.css.php',
    'content1' => __CSS_DIR__ . DIRECTORY_SEPARATOR . 'content1.css.php',
    'content2' => __CSS_DIR__ . DIRECTORY_SEPARATOR . 'content2.css.php',
    'game' => __CSS_DIR__ . DIRECTORY_SEPARATOR . 'game_details.css.php',
    '404' => __CSS_DIR__ . DIRECTORY_SEPARATOR . 'error.css.php'];
const __JS__ = ['nav' => __JS_DIR__ . DIRECTORY_SEPARATOR . 'nav.js',
    'profile' => __JS_DIR__ . DIRECTORY_SEPARATOR . 'profile-follow.js',
    'game_detail' => __JS_DIR__ . DIRECTORY_SEPARATOR . 'game_detail.js',
    'banner' => __JS_DIR__ . DIRECTORY_SEPARATOR . 'banner.js'];

const __RESPONSE__ = ['login' => __RESPONSE_DIR__ . DIRECTORY_SEPARATOR . 'login.php',
    'comment' => __RESPONSE_DIR__ . DIRECTORY_SEPARATOR . 'comment.php',
    'logout' => __RESPONSE_DIR__ . DIRECTORY_SEPARATOR . 'logout.php'];

$config = ['host' => 'localhost',
    //'socket' => '/tmp/mysql.sock',
    //'socket' => '/run/mysqld/mysqld.sock',
    'user' => 'joker',
    'passwd' => 'qwerty123',
    'charset' => 'utf8',
    'port' => '3307',
    'database' => 'joker'];

require __ROOT_DIR__ . '/etc/joker_DB.php';
require __ROOT_DIR__ . '/etc/include.php';

$db = new joker_DB\joker_DB();
$db->addServer($config);
\joker_DB\joker_DB::set($db);
