<?php
global $uid;

use joker_DB\joker_DB;

global $router;

$followers = joker_DB::$_instance->queryFollowers($uid);
?>

<div class="content">
    <div class="portrait">
        <div class="head_portrait" style="background-image: url(<?php echo joker_DB::$_instance->getAvatar($uid);?>)"></div>
    </div>
    <div class="personal_nav">
        <div class="personal_li">
            <a href="<?php echo $router->base_url(TRUE).'/profile/'.$uid?>" style="text-decoration: none;color: rgb(206,205,205);">
                动态
            </a>
        </div>
        <div class="personal_li">文章</div>
        <div class="personal_li">关注</div>
        <div class="personal_li">粉丝</div>
        <div class="personal_li">收藏</div>
    </div>

    <!-- 个人中心导航栏内容2  -->

    <?php
    if ($followers != null) {
        while ($row = $followers->fetch_assoc()) {
            ?>
            <div class="personal_content2">
                <div class="personal_card2">
                    <div class="personal_img2"
                         style="background-image: url(<?php echo joker_DB::$_instance->getAvatar($row['user_id']); ?>)"></div>
                    <div class="personal_name2">
                        <a href="<?php echo $router->base_url(TRUE) . '/profile/' . $row['user_id'] ?>"
                        style="text-decoration: none;color: rgb(206,205,205);">
                            <?php echo joker_DB::$_instance->queryUser($row['user_id'])['user_name']; ?>
                        </a>
                    </div>
                    <button class="attention">已关注</button>
                </div>
            </div>
            <?php
        }
    }
    ?>
</div>
