<?php

use joker_DB\joker_DB;

global $router;
$latestComment = joker_DB::$_instance->queryLatestComment();

?>

<div class="content content2">
    <!-- 发表评论 -->
    <div class="publish" style="margin-top: 90px!important;">
        <!--<div class="line"></div>-->
        <form method="post" action="<?php echo $router->base_url(TRUE).'/comment'?>">
            <textarea name="comment-textarea" placeholder="说点什么吧"></textarea>
            <div class="expression"></div>
            <div class="image"></div>
            <button type="submit">发表</button>
            <div class="float">广告</div>
        </form>
    </div>
    <!-- 内容导航栏 -->
    <div class="community_nav">
        <div class="community_focus community_small">
            <p>关注</p>
        </div>
        <div class="community_recommend community_small">
            <p>推荐</p>
        </div>
        <div class="community_hot community_small">
            <p>热榜</p>
        </div>
    </div>
    <?php
    if ($latestComment->num_rows > 0) {
        while ($row = $latestComment->fetch_assoc()) {
            ?>
            <div class="community_card">
                <div class="community_img"
                     style="background-image: url(<?php echo joker_DB::$_instance->getAvatar($row['user_id']) ?>);"></div>
                <div class="community_name"><a style="color: rgb(206,205,205); text-decoration: none"
                            href="<?php echo $router->base_url(TRUE) . '/profile/' . $row['user_id'] ?>"><?php echo (joker_DB::$_instance->queryUser($row['user_id']))['user_name']; ?></a>
                </div>
                <div class="community_time"><?php echo $row['comment_time'] ?></div>
                <div class="community_center">
                    <p><?php echo $row['comment_text']; ?>
                    </p>
                </div>
                <div class="community_bottom">
                    <div class="community_bottom0">
                        <div class="community_bottom_img"></div>
                        <div class="community_bottom_text">
                            <p>13</p>
                        </div>
                    </div>
                    <div class="community_bottom1">
                        <div class="community_bottom_img"></div>
                        <div class="community_bottom_text">
                            <p>255</p>
                        </div>
                    </div>
                    <div class="community_bottom2">
                        <div class="community_bottom_img"></div>
                        <div class="community_bottom_text">
                            <p>2456</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    }
    ?>

</div>
