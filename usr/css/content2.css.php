<?php header("Content-type: text/css; charset: UTF-8"); ?>

/* 社区的内容 */

.content2 {
    width: 800px!important;
}

.float {
    position: fixed;
    margin-left: 900px;
    top: 150px;
    width: 100px;
    height: 300px;
    text-align: center;
    background-color: #3a3939;
    font-size: 2em;
    color: rgb(206, 205, 205);
}

/* 推荐 */


.community_nav {
    margin-top: 20px;
    width: 100%;
    height: 50px;
    border-bottom: 3px solid #242424;
    background-color: #3a3939;
}

.community_nav .community_small {
    display: inline-block;
    width: 12%;
    height: 100%;
    font-size: 1.6em;
    text-align: center;
    line-height: 1.9em;
    color: rgb(206, 205, 205);
}

.community_nav .community_small p:hover {
    cursor: pointer;
    color: rgb(146, 142, 142);
}

/* 社区卡片内容 */

.community_card {
    position: relative;
    margin-top: 20px;
    height: 190px;
    background-color: #3a3939;
}

.community_card:first-child {
    margin-top: 0;
}

.community_img {
    position: absolute;
    top: 5px;
    left: 15px;
    width: 38px;
    height: 38px;
    border-radius: 20px;
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
    font-size: 1.1em;
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
    background-image: url(../img/recomment.png);
    background-size: 100% 100%;
}

.community_card .community_bottom1 .community_bottom_img {
    display: inline-block;
    width: 16px;
    height: 16px;
    background-image: url(../img/comment.png);
    background-size: 100% 100%;
}

.community_card .community_bottom2 .community_bottom_img {
    display: inline-block;
    width: 16px;
    height: 16px;
    background-image: url(../img/like.png);
    background-size: 100% 100%;
}

.community_card .community_bottom .community_bottom_text {
    display: inline-block;
    font-size: 0.9em;
    color: rgb(206, 205, 205);
}
