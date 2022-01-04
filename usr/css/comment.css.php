<?php header("Content-type: text/css; charset: UTF-8"); ?>

/*  本页的内容 */
.content {
    position: relative;
    width: 900px;
    margin: 60px auto;
}

.community_card {
    position: relative;
    margin-top: 15px;
    width: 100%;
    height: 160px;
    background-color: #3a3939;
}

.community_card:first-child {
    margin-top: 80px;
    height: 200px;
}

.community_img {
    position: absolute;
    top: 5px;
    left: 15px;
    width: 38px;
    height: 38px;
    border-radius: 20px;
    background-image: url(图片/头像.jpeg);
    background-size: 100% 100%;
}

.community_card .community_name {
    position: absolute;
    left: 60px;
    top: 2px;
    font-size: 1.2em;
    color: rgb(206, 205, 205);
}

.community_card .community_time {
    position: absolute;
    left: 60px;
    top: 28px;
    font-size: 0.8em;
    color: rgb(206, 205, 205);
}

.community_card .community_center {
    position: absolute;
    top: 55px;
    width: 95%;
    margin-left: 2.5%;
    height: 100px;
    font-size: 1em;
    text-indent: 1em;
    color: rgb(206, 205, 205);
}


.community_card .community_bottom .community_bottom0 {
    position: absolute;
    bottom: 10px;
    right: 250px;
}

.community_card .community_bottom .community_bottom1 {
    position: absolute;
    bottom: 10px;
    right: 150px;
}

.community_card .community_bottom .community_bottom2 {
    position: absolute;
    bottom: 10px;
    right: 50px;
}

.community_card .community_bottom0 .community_bottom_img {
    display: inline-block;
    width: 16px;
    height: 16px;
    background-image: url(图片/转发.png);
    background-size: 100% 100%;
}

.community_card .community_bottom1 .community_bottom_img {
    display: inline-block;
    width: 16px;
    height: 16px;
    background-image: url(图片/评论.png);
    background-size: 100% 100%;
}

.community_card .community_bottom2 .community_bottom_img {
    display: inline-block;
    width: 16px;
    height: 16px;
    background-image: url(图片/点赞.png);
    background-size: 100% 100%;
}

.community_card .community_bottom .community_bottom_text {
    display: inline-block;
    font-size: 0.9em;
    color: rgb(206, 205, 205);
}

.comment_prompt {
    width: 100%;
    height: 50px;
    margin-top: 20px;
    font-size: 1.6em;
    line-height: 1.7em;
    color: rgb(206, 205, 205);
    background-color: #3a3939;
}

.comment_prompt p {
    margin-left: 25px;
}

.publish {
    position: relative;
    margin-top: -10px;
    width: 100%;
    height: 150px;
    background-color: #3a3939;
}

.publish .line {
    position: absolute;
    top: 10px;
    width: 100%;
    height: 20px;
    background-color: #242424;
}

.publish input {
    width: 99.5%;
    height: 100px;
    font-size: 1.2em;
    border: none;
    text-indent: 1em;
    background-color: #3a3939;
    color: rgb(206, 205, 205);
}

.publish input:focus {
    outline: none;
}

.publish .expression {
    position: absolute;
    bottom: 10px;
    left: 30px;
    width: 25px;
    height: 25px;
    background-image: url(图片/表情.png);
    background-size: 100% 100%;
}

.publish .image {
    position: absolute;
    bottom: 10px;
    left: 80px;
    width: 25px;
    height: 25px;
    background-image: url(图片/图片.png);
    background-size: 100% 100%;
}

.publish button {
    position: absolute;
    right: 20px;
    bottom: 10px;
    width: 80px;
    height: 30px;
    border: none;
    border-radius: 5px;
    background-color: rgb(206, 205, 205);
}

.comment_last {
    position: absolute;
    right: 0;
    bottom: 0;
    width: 100%;
    height: 30px;
}

.comment_last .action {
    position: relative;
    margin-left: 30px;
    display: inline-block;
    width: 100px;
    height: 30px;
}

.comment_last .action:nth-child(1) {
    margin-left: 350px;
}

.comment_last .action .action_img {
    display: inline-block;
    width: 20px;
    height: 20px;
    background-size: 100% 100%;
}

.comment_last .action .forward {
    background-image: url(图片/转发.png);
}

.comment_last .action .comment {
    background-image: url(图片/评论.png);
}

.comment_last .action .collection {
    width: 23px;
    height: 23px;
    background-image: url(图片/收藏.png);
}

.comment_last .action .like {
    background-image: url(图片/点赞.png);
}

.comment_last .action .action_text {
    position: absolute;
    right: 0;
    top: 10px;
    margin-left: 5px;
    display: inline-block;
    width: 50px;
    height: 20px;
    font-size: 1em;
    line-height: 0.01em;
    color: rgb(206, 205, 205);
}
