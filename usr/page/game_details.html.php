<?php

use joker_DB\joker_DB;

global $gid;
global $result;
global $router;

$gameDetail = $result->fetch_assoc();
$topComment = joker_DB::$_instance->queryTopComments($gid);
$gameComment = joker_DB::$_instance->queryEntityComment($gid);
$gamePics = joker_DB::$_instance->queryGamePics($gid);
?>

<div class="content content2">
    <div class="introduce">
        <div class="introduce_img">

            <div class="introduce_big_img" style="background-image: url()"></div>
            <div class="introduce_change_line">
                <div class="introduce_change_left">
                    <div class="introduce_img_change_left"></div>
                </div>
                <div class="introduce_change_right">
                    <div class="introduce_img_change_right"></div>
                </div>
            </div>
            <div class="introduce_small_img_line">
                <?php
                $i = 0;
                while ($row = $gamePics->fetch_assoc()) {
                    if ($i <= 0) {
                        ?>
                        <div class="introduce_small_img introduce_small_img0 introduce_small_img_border1" style="background-image: url(<?php echo $row['picture']?>)"></div>
                        <?php
                    } else {
                        ?>
                        <div class="introduce_small_img introduce_small_img<?php echo $i;?> introduce_small_img_border0" style="background-image: url(<?php echo $row['picture']?>)"></div>
                        <?php
                    }
                    $i += 1;
                }
                ?>
            </div>
        </div>
        <div class="introduce_text">
            <div class="introduce_text_title">
                <h3><?php echo $gameDetail['game_name'] ?></h3>
            </div>
            <div class="introduce_content">
                <p><?php echo $gameDetail['game_detail'] ?>
                </p>
            </div>
        </div>
    </div>
    <div class="storey storey_2_2"><a href="">热门评论</a></div>
    <!-- 热评栏 -->
    <?php
    if ($topComment !== false && $topComment->num_rows > 0) {
        if ($topRow = $topComment->fetch_assoc()) {
            ?>
            <div class="hot_article">
                <div class="hot_article_top">
                    <div class="hot_article_img"
                         style="background-image: url(<?php echo joker_DB::$_instance->getAvatar($topRow['user_id']) ?>);"></div>
                    <a href="<?php echo $router->base_url(TRUE) . '/profile/' . $topRow['user_id'] ?>"><?php echo (joker_DB::$_instance->queryUser($topRow['user_id']))['user_name']; ?></a>
                </div>
                <div class="hot_article_bottom">
                    <a href="<?php echo $router->base_url(TRUE) . '/comment/' . $topRow['comment_id'] ?>"> <p><?php echo $topRow['comment_text']; ?></p></a>
                </div>
            </div>
            <?php
        }
    }
    ?>
    <!-- 评分栏 -->
    <div class="storey storey_2_2"><a href="">玩家评价</a></div>
    <div class="score">
        <div class="score_title">
            <h3>评分&评价</h3>
        </div>
        <div class="score_center">
            <span class="img"></span>
            <span class="text">8.1</span>
        </div>
        <div class="score_number">
            <p>4471个评价</p>
        </div>
        <div class="score_content">
            <div class="all_star">
                <div class="star2"></div>
                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>
                <div class="star2"></div>
                <div class="star2"></div>
                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>
                <div class="star2"></div>
                <div class="star2"></div>
                <div class="star2"></div>
                <div class="star"></div>
                <div class="star"></div>
                <div class="star2"></div>
                <div class="star2"></div>
                <div class="star2"></div>
                <div class="star2"></div>
                <div class="star"></div>
                <div class="star2"></div>
                <div class="star2"></div>
                <div class="star2"></div>
                <div class="star2"></div>
                <div class="star2"></div>
            </div>
        </div>
        <div class="score_content2">
            <div class="score_card"></div>
            <div class="score_card"></div>
            <div class="score_card"></div>
            <div class="score_card"></div>
            <div class="score_card"></div>
        </div>
    </div>

    <!-- 评论区 -->
    <div class="publish">
        <form action="<?php echo $router->base_url(TRUE) . '/comment' ?>" method="post">
            <input type="hidden" name="to-id" value="<?php echo $gid; ?>">
            <textarea name="comment-textarea" placeholder="说点什么吧"></textarea>
            <div class="expression"></div>
            <div class="image"></div>
            <button type="submit">发表</button>
        </form>
    </div>
    <?php
    if ($gameComment !== false && $gameComment->num_rows > 0) {
        while ($row = $gameComment->fetch_assoc()) {
            ?>
            <div class="hot_article">
                <div class="hot_article_top">
                    <div class="hot_article_img"
                         style="background-image: url(<?php echo joker_DB::$_instance->getAvatar($row['user_id']) ?>);"></div>
                    <a href="<?php echo $router->base_url(TRUE) . '/profile/' . $row['user_id'] ?>"><?php echo (joker_DB::$_instance->queryUser($row['user_id']))['user_name']; ?></a>
                </div>
                <div class="hot_article_bottom">
                    <a href="<?php echo $router->base_url(TRUE) . '/comment/' . $row['comment_id'] ?>">
                        <p><?php echo $row['comment_text'] ?></p></a>
                </div>
            </div>
            <?php
        }
    }
    ?>
</div>

