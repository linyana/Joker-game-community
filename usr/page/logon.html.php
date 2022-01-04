<?php

//include '../../etc/joker_DB.php';
//include '../../etc/include.php';

use joker\url;
use joker_DB\joker_DB;

global $router;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $param = $_POST;
    $account = trim(htmlentities($param['account']));
    $password = trim(htmlentities($param['password']));
    if ($account !== '' && $password !== '') {
        if (strpos($account, ' ') == false && strpos($password, ' ') == false) {
            if (joker_DB::$_instance->logon($account, password_hash($password, PASSWORD_DEFAULT))) {
                $_SESSION['auth:hint'] = '注册成功';
            }else {
                $_SESSION['auth:hint'] = '注册失败';
            }
        } else {
            $_SESSION['auth:hint'] = '请输入账号密码注册';
        }
        url::redirect($router->base_url(TRUE) . '/login', 301);
    }
}

?>

<!--<div class="action">
    <h1>Welcome</h1>
    <form action="" method="post">
        <div class="login-input1">
            <img src="<?php /*echo $router->base_url(TRUE) . '/usr/img/default-avatar.png' */ ?>" alt="">
            <input type="text" name="account" id="text" placeholder="请输入账户">
        </div>
        <br>
        <div class="login-input2">
            <img src="<?php /*echo $router->base_url(TRUE) . '/usr/img/passwd.png' */ ?>" alt="">
            <input type="password" name="password" id="password" placeholder="请输入密码">
        </div>
        <button type="submit">注册</button>
        <button><a id="cancel" href="<?php /*echo $router->base_url(TRUE)*/ ?>">取消</a> </button>
    </form>
</div>-->