<?php
global $router;

?>

<div class="content content0">
    <!-- 轮播图 -->
    <div class="main">
        <div class="banner">
            <div class="banner_child banner_left banner_left_img"></div>
            <div class="banner_child banner_center banner_center_img"></div>
            <div class="banner_child banner_right banner_right_img"></div>
        </div>
        <!-- 资讯栏 -->
        <div class="information">
            <div class="information_nav">
                <ul>
                    <li><a href="#">最新资讯</a></li>
                    <ins></ins>
                    <li><a href="#">公告</a></li>
                    <ins></ins>
                    <li><a href="#">赛事</a></li>
                    <ins></ins>
                    <li><a href="#">攻略</a></li>
                    <ins></ins>
                    <li><a href="#">推荐</a></li>
                </ul>
            </div>
            <div class="information_content">
                <ul>
                    <li><a href="#">金铲铲之战上线</a></li>
                    <li><a href="#">lol手游上线</a></li>
                    <li><a href="#">s11全球总决赛开赛</a></li>
                    <li><a href="#">lol手游上线</a></li>
                    <li><a href="#">最后的生还者2跳票至明年</a></li>
                    <li><a href="#">lol手游上线</a></li>
                    <li><a href="#">lol手游上线</a></li>
                </ul>
            </div>
        </div>
    </div>
    <?php
    $topGames = \joker_DB\joker_DB::$_instance->queryTopGame();
    ?>
    <div class="storey"><a href="#">热门游戏</a></div>
    <div class="card_list">
        <?php
        $i = 0;
        $j = 0;
        while ($row = $topGames->fetch_assoc()) {
            $card = [0 => '/usr/img/card0.jpg', 1 => '/usr/img/card1.jpg', 2 => '/usr/img/card2.png', 3 => '/usr/img/card3.png'];
            ?>
            <div class="card <?php echo 'card' . $i; ?>">
                <a href="<?php echo $router->base_url(TRUE) . '/game/' . 2 ?>">
                    <div class="card_img card_img0" style="background-image: url(<?php echo $card[$j] ?>);"></div>
                </a>
                <div class="card_text"><a
                            href="<?php echo $router->base_url(TRUE) . '/game/' . 2 ?>"><?php echo $row['game_name'] ?></a>
                </div>
            </div>
            <?php
            $i += 1;
            $j += 1;
            if ($j > 3)
                $j = 0;
            if ($i > 8)
                break;
        }
        ?>
    </div>
    <!-- 首页热门文章 -->
    <div class="storey"><a href="#">热门文章</a></div>
    <?php
    $topComments = \joker_DB\joker_DB::$_instance->queryTopComments(2);
    $i = 0;
    while ($row = $topComments->fetch_assoc()) {
        ?>
        <div class="hot-article">
            <div class="article article0">
                <div class="article_img" style="background-image: url(/usr/img/banner-no-shadow.jpg);"></div>
                <div class="article_content">
                    <div class="article_title"><a href="">用户评论</a></div>
                    <div class="article_text">
                        <a href="<?php echo $router->base_url(TRUE).'/comment/'.$row['comment_id']?>">
                            <p><?php echo $row['comment_text']; ?></p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $i += 1;
        if ($i > 2) {
            break;
        }
    }
    ?>
</div>