<?php header("Content-type: text/css; charset: UTF-8"); ?>

/* 搜索 */
.content {
    width: 724px!important;
}
.big_search {
    margin: 100px auto 30px;
    display: flex;
    justify-content: center;
    align-content: space-between;
    width: 100%;
    height: 30px;
}

.big_search .search_input {
    position: relative;
    display: inline-block;
    width: 800px;
    height: 40px;
    border-radius: 10px;
}

.big_search .search_input input {
    padding-left: 20px;
    width: 600px;
    height: 40px;
    font-size: 20px;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
}

.big_search .search_input input:focus {
    outline: none;
}

.big_search button {
    cursor: pointer;
    position: absolute;
    top: 1px;
    width: 100px;
    height: 44px;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    border-left: none;
    font-size: 20px;
    font-family: 微软雅黑;
    color: white;
    background-color: rgb(96, 96, 99);
}

.community_card {
    position: relative;
    margin-top: 15px;
    width: 100%;
    height: 150px;
    border-radius: 10px;
    background-color: #3a3939;
}

.community_img {
    position: absolute;
    top: 5px;
    left: 15px;
    width: 38px;
    height: 38px;
    border-radius: 20px;
    background-image: url(../img/avatar.jpeg);
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
    overflow: hidden;
    top: 55px;
    width: 95%;
    margin-left: 2.5%;
    height: 85px;
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
