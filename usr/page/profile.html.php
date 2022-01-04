<?php //include '../../etc/include.php';
global $router;

use joker_DB\joker_DB;

global $profile_uid;
$avatar = joker_DB::$_instance->getAvatar($profile_uid);
$user = joker_DB::$_instance->queryUser($profile_uid);
$comments = joker_DB::$_instance->queryUserComment($profile_uid);
?>
<div class="content">
    <div class="portrait">
        <div class="head_portrait" style="background-image: url(<?php echo $avatar; ?>);"></div>
    </div>
    <div class="personal_nav">
        <div class="personal_li">动态</div>
        <div class="personal_li">文章</div>
        <div class="personal_li">关注</div>
        <a href="<?php echo $router->base_url(TRUE) . $router->getCurrentUri() . '/followers' ?>">
            <div class="personal_li">粉丝</div>
        </a>
        <div class="personal_li">收藏</div>
    </div>
    <div class="personal_content">
        <?php
        if ($comments !== false && $comments->num_rows > 0) {
            while ($row = $comments->fetch_assoc()) {
                ?>
                <div class="personal_card">
                    <div class="personal_first">
                        <div class="personal_img" style="background-image: url(<?php echo $avatar; ?>);"></div>
                        <div class="personal_id"><?php echo $user['user_name'] ?></div>
                        <div class="personal_time"><?php echo $row['comment_time'] ?></div>
                        <div class="personal_delete">删除</div>
                    </div>
                    <div class="personal_center">
                        <a href="<?php echo $router->base_url(TRUE) . '/comment/'.$row['comment_id']?>">
                            <p><?php echo $row['comment_text'] ?></p>
                        </a>
                    </div>
                    <div class="personal_last">
                        <div class="action">
                            <div class="forward action_img"></div>
                            <div class="action_text">转发</div>
                        </div>
                        <div class="action">
                            <div class="comment action_img"></div>
                            <div class="action_text">评论</div>
                        </div>
                        <div class="action">
                            <div class="collection action_img"></div>
                            <div class="action_text" id="text1">收藏</div>
                        </div>
                        <div class="action">
                            <div class="like action_img"></div>
                            <div class="action_text">点赞</div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
</div>
