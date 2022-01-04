<?php

//include __ROOT_DIR__ . '/etc/joker_DB.php';

global $router;

?>

<div class="action">
    <div class="login-div">
        <h1>Welcome</h1>
        <form>
            <div class="login-input1">
                <img src="<?php echo $router->base_url(TRUE) . '/usr/img/default-avatar.png' ?>" alt="">
                <input type="text" name="account" id="text" placeholder="请输入账户">
            </div>
            <br>
            <div class="login-input2">
                <img src="<?php echo $router->base_url(TRUE) . '/usr/img/passwd.png' ?>" alt="">
                <input type="password" name="password" id="password" placeholder="请输入密码">
            </div>
            <div class="error-hint">
                <?php
                    if(isset($_SESSION['auth:hint']))
                        echo $_SESSION['auth:hint'];
                    else echo '请输入账号密码登录';
                ?>
            </div>
            <button type="submit" formaction="<?php echo $router->base_url(TRUE) . '/login' ?>" formmethod="post">登录
            </button>
            <button type="submit" formaction="<?php echo $router->base_url(TRUE) . '/logon' ?>" formmethod="post">注册
            </button>
        </form>
    </div>
</div>