<?php

use joker_DB\joker_DB;
use joker\url;

global $router;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_SESSION['auth:login']) && $_SESSION['auth:login'] === TRUE) {
        $_SESSION['auth:hint'] = '您已登录';
        url::redirect($router->base_url(TRUE));
    } else {
        $param = $_POST;
        $account = trim(htmlentities($param['account']));
        $password = trim(htmlentities($param['password']));
        if ($account !== '' && $password !== '') {
            if (strpos($account, ' ') == false && strpos($password, ' ') == false) {
                $uid = joker_DB::$_instance->login($account, $password);
                if ($uid > -1) {
                    $_SESSION['auth:login'] = TRUE;
                    $_SESSION['auth:userName'] = $account;
                    $_SESSION['auth:uid'] = $uid;
                    $_SESSION['auth:hint'] = '登录成功';
                    //$_SESSION['']

                    url::redirect($router->base_url(TRUE), 303);
                } else {
                    $_SESSION['auth:hint'] = '登录失败';
                    url::redirect($router->base_url(TRUE) . '/login', 303);
                }
            } else {
                $_SESSION['auth:hint'] = '请检查您的输入';
                url::redirect($router->base_url(TRUE) . '/login', 303);
            }
        }
    }
} else {
    //session_destroy();
    url::redirect($router->base_url(TRUE) . '/login', 303);
}