<?php


use joker\url;
use joker_DB\joker_DB;

global $router;
global $avatar;
$avatar = $router->base_url(TRUE) . '/usr/img/default-avatar.png';
if (isset($_SESSION['auth:login'])) {
    $uid = $_SESSION['auth:uid'];
    $avatarT = joker_DB::$_instance->getAvatar($uid);
    $avatar = $avatarT ?: $avatar;
    $user_url = $router->base_url(TRUE) . '/profile/' . $uid;
} else {
    $user_url = $router->base_url(TRUE) . '/login';
}
?>

<div class="top_nav">
    <!-- 上方导航栏的目录 -->
    <div class="nav right_menu">
        <span style="background-image: url(<?php echo url::base_url(TRUE); ?>/usr/img/menu.png);"></span>
    </div>
    <!-- 上方导航栏的内容 -->
    <ul>
        <a href="<?php echo $router->base_url(TRUE); ?>">
            <li>主页</li>
        </a>
        <a href="<?php echo $router->base_url(TRUE) . '/games'; ?>">
            <li>游戏</li>
        </a>
        <a href="<?php echo $router->base_url(TRUE) . '/community'; ?>">
            <li>社区</li>
        </a>
    </ul>
    <!-- 搜索框 -->
    <div class="search-input"><input type="text" id="search-input"></div>
    <!-- 放大镜 -->
        <div class="search_img"
             style="background-image: url(<?php echo url::base_url(TRUE); ?>/usr/img/search.png);"></div>
    <a href="<?php echo $user_url ?>">
        <div class="user" style="background-image: url(<?php echo $avatar ?>);"></div>
    </a>
    <div class="user_hover none">
        <?php
        if (isset($_SESSION['auth:uid'])) {
            ?>
            <div class="user_hover_title">
                <span class="user_hover_span"><?php echo $_SESSION['auth:userName']; ?></span>
            </div>
            <a href="">
                <div>消息</div>
            </a>
            <a href="">
                <div>关注</div>
            </a>
            <a href="<?php echo $user_url ?>">
                <div>个人中心</div>
            </a>
            <a href="<?php echo $router->base_url(TRUE) . '/logout' ?>">
                <div id="get_border">退出</div>
            </a>
            <?php
        } else {
            ?>
            <div class="user_hover_title">
                <span class="user_hover_span">游客</span>
            </div>
            <a href="<?php echo $router->base_url(TRUE) . '/login'?>">
                <div id="get_border">登录</div>
            </a>
            <?php
        }
        ?>
    </div>
    <!-- 左侧边栏的盒子 -->
    <div class="demo close"></div>
    <div class="demo close">
        <div class="demo_content">目录</div>
    </div>
    <div class="demo close">
        <div class="demo_content">时光机</div>
    </div>
    <div class="demo close"></div>
    <div class="demo close"></div>
    <div class="demo close"></div>
    <div class="demo close"></div>
    <div class="demo close"></div>
    <div class="demo close"></div>
    <div class="demo close"></div>
    <div class="demo close"></div>
    <div class="demo close"></div>
    <div class="demo big close"></div>
</div>
