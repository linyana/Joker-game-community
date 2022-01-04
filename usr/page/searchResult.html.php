<?php

use joker_DB\joker_DB;

//global $str;
$result = null;
if (isset($str))
    $result = joker_DB::$_instance->search($str);
?>

<div class="content content3">
    <div class="big_search">
        <div class="search_input">
            <input type="text" class="search-input">
            <button id="search_button">搜索</button>
        </div>
    </div>
    <?php
    if ($result !== false && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="community_card" id="community_card1_1">
                <div class="community_img"
                     style="background-image: url(<?php echo joker_DB::$_instance->getAvatar($row['user_id']) ?>);"></div>
                <div class="community_name"><?php echo (joker_DB::$_instance->queryUser($row['user_id']))['user_name']; ?></div>
                <div class="community_time"><?php echo $row['comment_time'] ?></div>
                <div class="community_center">
                    <p>
                        <?php
                        echo $row['comment_text'];
                        ?>
                    </p>
                </div>
            </div>
            <?php
        }
    } else {
        ?>
        <h2 style="color: rgb(206,205,205)">未找到相关结果</h2>
        <?php
    }
    ?>
</div>
<?php
\joker\LayoutController::addJavaScript(__JS__['nav']);
?>