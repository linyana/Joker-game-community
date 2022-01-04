<?php

use joker_DB\joker_DB;
use Router\Router;

if (!defined('__ROOT_DIR__') && !@include_once 'config.inc.php') {
    exit;
}

session_start();

require_once __ROOT_DIR__ . '/etc/Router/Router.php';

$router = new Router();

$content = '404';

$router->set404(function () {
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found;');
    global $content;
    $content = '404';
    require __ROOT_DIR__ . __LAYOUT__['header'];
    require __ROOT_DIR__ . __LAYOUT__['404'];
    //require __ROOT_DIR__ .__LAYOUT__['footer'];
});

$router->before('GET', '/.*', function () {
    //session_start();
});

$router->get('/', function () {
    global $content;
    $content = 'content0';
    require __ROOT_DIR__ . __LAYOUT__['header'];
    require __ROOT_DIR__ . __LAYOUT__['nav'];
    require __ROOT_DIR__ . __LAYOUT__['content0'];
    require __ROOT_DIR__ . __LAYOUT__['footer'];
});

$router->mount('/search', function () use ($router) {
    $router->get('/', function () {
        global $content;
        $content = 'search';
        require __ROOT_DIR__ . __LAYOUT__['header'];
        require __ROOT_DIR__ . __LAYOUT__['nav'];
        require __ROOT_DIR__ . __LAYOUT__['search'];
    });
    $router->get('/(.+)', function ($s) {
        global $str;
        $str = htmlentities($s);
        global $content;
        $content = 'searchResult';
        require __ROOT_DIR__ . __LAYOUT__['header'];
        require __ROOT_DIR__ . __LAYOUT__['nav'];
        require __ROOT_DIR__ . __LAYOUT__['searchResult'];
    });
    //require __ROOT_DIR__ . __LAYOUT__['footer'];
});

$router->get('/games', function () {
    global $content;
    $content = 'games';
    require __ROOT_DIR__ . __LAYOUT__['header'];
    require __ROOT_DIR__ . __LAYOUT__['nav'];
    require __ROOT_DIR__ . __LAYOUT__['content1'];
    require __ROOT_DIR__ . __LAYOUT__['footer'];
});
$router->mount('/login', function () use ($router) {
    $router->get('/', function () {
        global $content;
        $content = 'login';
        require __ROOT_DIR__ . __LAYOUT__['header'];
        require __ROOT_DIR__ . __LAYOUT__['nav'];
        require __ROOT_DIR__ . __LAYOUT__['login'];
        require __ROOT_DIR__ . __LAYOUT__['footer'];
    });
    $router->post('/', function () {
        global $content;
        $content = 'login';
        require __ROOT_DIR__ . __RESPONSE__['login'];
        $content = '';
    });
});
$router->mount('/logon', function () use ($router) {
    $router->get('/', function () use ($router) {
        $router->trigger404();
    });
    $router->post('/', function () {
        require __ROOT_DIR__ . __LAYOUT__['logon'];
    });
});
$router->mount('/logout', function () use ($router) {
    $router->get('/', function () {
        require __ROOT_DIR__ . __RESPONSE__['logout'];
    });
    $router->post('/', function () use ($router) {
        $router->trigger404();
    });
});

$router->get('/community', function () {
    global $content;
    $content = 'community';
    require __ROOT_DIR__ . __LAYOUT__['header'];
    require __ROOT_DIR__ . __LAYOUT__['nav'];
    require __ROOT_DIR__ . __LAYOUT__['content2'];
    require __ROOT_DIR__ . __LAYOUT__['footer'];
});

$router->get('/profile/(\d+)', function ($id) use ($router) {
    global $profile_uid;
    $profile_uid = (int)htmlentities($id);
    if (!joker_DB::$_instance->existsUID($profile_uid)) {
        $router->trigger404();
        return;
    }

    //echo 'Hello ' . htmlentities($uid);
    global $content;
    $content = 'profile';
    require __ROOT_DIR__ . __LAYOUT__['header'];
    require __ROOT_DIR__ . __LAYOUT__['nav'];
    require __ROOT_DIR__ . __LAYOUT__['profile'];
    require __ROOT_DIR__ . __LAYOUT__['footer'];
});
$router->get('/profile/(\d+)/followers', function ($id) {
    //echo 'Hello ' . htmlentities($uid);
    global $uid;
    $uid = (int)htmlentities(trim($id));
    global $content;
    $content = 'profile-follow';
    require __ROOT_DIR__ . __LAYOUT__['header'];
    require __ROOT_DIR__ . __LAYOUT__['nav'];
    require __ROOT_DIR__ . __LAYOUT__['follower'];
    require __ROOT_DIR__ . __LAYOUT__['footer'];
});

$router->get('/game/(\d+)', function ($id) use ($router) {
    global $gid;
    $gid = (int)htmlentities($id);
    global $result;
    $result = joker_DB::$_instance->queryGame($gid);
    if ($result !== false && $result->num_rows > 0) {
        global $content;
        $content = 'game';
        require __ROOT_DIR__ . __LAYOUT__['header'];
        require __ROOT_DIR__ . __LAYOUT__['nav'];
        require __ROOT_DIR__ . __LAYOUT__['game'];
        require __ROOT_DIR__ . __LAYOUT__['footer'];
    } else {
        $router->trigger404();
    }
});

$router->mount('/comment', function () use ($router) {
    $router->post('/', function () {
        require __ROOT_DIR__ . __RESPONSE__['comment'];
    });
    $router->get('/(\d+)', function ($id) use ($router) {
        global $cid;
        $cid = (int)htmlentities($id);
        $result = joker_DB::$_instance->queryComment($cid);
        if ($result !== false && $result->num_rows > 0) {
            global $content;
            $content = 'comment';
            require __ROOT_DIR__ . __LAYOUT__['header'];
            require __ROOT_DIR__ . __LAYOUT__['nav'];
            require __ROOT_DIR__ . __LAYOUT__['comment'];
            require __ROOT_DIR__ . __LAYOUT__['footer'];
        } else {
            $router->trigger404();
        }
    });
});

$router->run();
