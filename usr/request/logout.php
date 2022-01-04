<?php

use joker\url;

global $router;

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_SESSION['auth:login']) && $_SESSION['auth:login'] === TRUE) {
        session_destroy();
        //$_SESSION['']

        url::redirect($router->base_url(TRUE), 303);
    } else {
        $_SESSION['auth:hint'] = '未登录';
        url::redirect($router->base_url(TRUE) . '/login', 303);
    }

} else {
    url::redirect($router->base_url(TRUE) . '/login', 303);
}