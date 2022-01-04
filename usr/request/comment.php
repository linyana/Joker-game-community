<?php

use joker\url;
use joker_DB\joker_DB;

global $router;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_SESSION['auth:login']) && $_SESSION['auth:login'] !== TRUE) {
        $_SESSION['auth:hint'] = '未登录';
        url::redirect($router->base_url(TRUE) . '/login');
    } else {
        $param = $_POST;
        $t = $_POST['comment-textarea'];
        $to = $_POST['to-id'];
        $uid = (int)$_SESSION['auth:uid'];
        if ($to)
            $to_id = (int)htmlentities(trim($to));
        else
            $to_id = 42;
        $datetime = date('Y-m-d H:i:s');
        $comment_text = htmlentities(trim($t));
        if ($comment_text !== '') {
            if (joker_DB::$_instance->addComment($to_id, $uid, $datetime, $comment_text)) {
                //$_SESSION['']

                url::redirect($router->base_url(TRUE), 303);
            } else {
                $_SESSION['comment:hint'] = '评论失败';
                url::redirect($router->base_url(TRUE) . '/login', 303);
            }
        }
    }
} else {
    //session_destroy();
    url::redirect($router->base_url(TRUE) . '/404', 303);
}