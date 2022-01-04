<?php
global $cid;
global $avatar;

use joker_DB\joker_DB;

$comment = joker_DB::$_instance->queryComment($cid);
$row = $comment->fetch_assoc();
?>

<div class="content content5">
    <div class="community_card" id="community_card1_1">
        <div class="community_img" style="background-image: url(<?php echo joker_DB::$_instance->getAvatar($row['user_id']); ?>)">
    </div>
    <div class="community_name"><?php echo (joker_DB::$_instance->queryUser($row['user_id']))['user_name']; ?></div>
    <div class="community_time"><?php echo $row['comment_time'];?></div>
    <div class="community_center">
        <p>
            <?php echo $row['comment_text'];?>
        </p>
    </div>
    <div class="comment_last">
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
<div class="comment_prompt">
    <p>最新回复</p>
</div>
<div class="publish">
    <div class="line"></div>
    <input type="text" placeholder="说点什么吧">
    <div class="expression"></div>
    <div class="image"></div>
    <button>发表</button>
</div>
    <?php
        $reply = joker_DB::$_instance->queryEntityComment($row['comment_id']);
        while($rowReply = $reply->fetch_assoc()){
            ?>
            <div class="community_card" id="community_card1_1">
                <div class="community_img" style="background-image: url(<?php echo joker_DB::$_instance->getAvatar($rowReply['user_id']); ?>)"></div>
                <div class="community_name"><?php echo (joker_DB::$_instance->queryUser($rowReply['user_id']))['user_name']; ?></div>
                <div class="community_time"><?php echo $rowReply['comment_time'];?></div>
                <div class="community_center">
                    <p>
                        <?php echo $rowReply['comment_text'];?>
                    </p>
                </div>
                <div class="comment_last">
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
    ?>

</div>
