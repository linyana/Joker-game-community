<?php header("Content-type: text/css; charset: UTF-8"); ?>

/* 游戏介绍 */

.introduce {
    margin-top: 100px;
    position: relative;
    width: 100%;
    height: 500px;
}

.introduce_img {
    position: relative;
    width: 700px;
    height: 487px;
    border: 1px solid rgb(146, 142, 142);
}

.introduce_img .introduce_big_img {
    width: 100%;
    height: 370px;
    background-size: 100%;
    background-repeat: no-repeat;
}

.introduce_change_line {
    position: relative;
    width: 100%;
    height: 30px;
}

.introduce_change_left {
    display: inline-block;
    width: 348px;
    height: 30px;
    margin-left: 0;
    background-color: #3a3939;
}

.introduce_img_change_left {
    width: 30px;
    height: 30px;
    margin-left: 165px;
    background-image: url(../img/right.png);
    background-size: 100% 100%;
}

.introduce_change_left:hover {
    cursor: pointer;
    background-color: rgb(0, 0, 0, 0.5);
}

.introduce_change_right {
    display: inline-block;
    width: 347px;
    height: 30px;
    margin-left: 0;
    background-color: #3a3939;
}

.introduce_img_change_right {
    width: 30px;
    height: 30px;
    margin-left: 175px;
    background-image: url(../img/left.png);
    background-size: 100% 100%;
}

.introduce_change_right:hover {
    cursor: pointer;
    background-color: rgb(0, 0, 0, 0.5);
}

.introduce_img .introduce_small_img_line {
    display: flex;
    width: 700px;
    height: 75px;
}

.introduce_img .introduce_small_img {
    display: inline-block;
    width: 128px;
    height: 75px;
}

.introduce_small_img_border0 {
    border: 6px solid #242424;
}

.introduce_small_img_border1 {
    border: 6px solid rgb(146, 142, 142);
}

.introduce_img .introduce_small_img0 {
    background-size: 100%;
}

.introduce_img .introduce_small_img1 {
    background-size: 100%;
}

.introduce_img .introduce_small_img2 {
    background-size: 100%;
}

.introduce_img .introduce_small_img3 {
    background-size: 100%;
}

.introduce_img .introduce_small_img4 {
    background-size: 100%;
}

.introduce_text {
    position: absolute;
    top: 0;
    left: 780px;
    width: 405px;
    height: 420px;
    background-color: #3a3939;
}

.introduce_text .introduce_text_title {
    line-height: 2em;
    width: 300px;
    height: 40px;
    margin-left: 50px;
    margin-top: 20px;
}

.introduce_text .introduce_text_title h3 {
    text-align: center;
    letter-spacing: 2px;
    font-size: 2em;
    color: rgb(206, 205, 205);
}

.introduce_text .introduce_content {
    width: 300px;
    height: 320px;
    margin-left: 50px;
    margin-top: 10px;
}

.introduce_text .introduce_content p {
    text-indent: 2em;
    font-size: 1.2em;
    color: rgb(206, 205, 205);
}

.storey_2_2 {
    margin-top: 50px;
}

/* 热评栏 */

.hot_article {
    margin-top: 50px;
    top: 680px;
    width: 100%;
    height: 230px;
    border-radius: 30px;
    background-color: #3a3939;
}

.hot_article_top {
    position: relative;
    width: 100%;
    height: 30%;
}

.hot_article_top .hot_article_img {
    position: absolute;
    top: 10px;
    margin-left: 20px;
    width: 5%;
    height: 80%;
    background-image: url(../img/default-avatar.png);
    background-size: 100%;
}

.hot_article_top a {
    position: absolute;
    top: 18px;
    left: 100px;
    font-size: 2em;
    text-decoration: none;
    color: rgb(212, 212, 212);
}

.hot_article_top a:hover {
    color: rgb(146, 142, 142);
}

.hot_article_bottom {
    margin-top: 10px;
    margin-left: 2.5%;
    width: 95%;
    height: 70%;
}

.hot_article_bottom p {
    font-size: 1.5em;
    color: rgb(212, 212, 212);
}

.storey_2_2 {
    margin-top: 50px;
}

/* 热评栏 */

.hot_article {
    margin-top: 50px;
    top: 680px;
    width: 100%;
    height: 250px;
    border-radius: 3px;
    background-color: #3a3939;
}

.hot_article_top {
    position: relative;
    width: 100%;
    height: 30%;
}

.hot_article_top a .hot_article_img {
    position: absolute;
    top: 10px;
    margin-left: 20px;
    width: 5%;
    height: 80%;
    background-size: 100%;
}

.hot_article_top a {
    position: absolute;
    top: 18px;
    left: 100px;
    font-size: 2em;
    text-decoration: none;
    color: rgb(212, 212, 212);
}

.hot_article_top a:hover {
    color: rgb(146, 142, 142);
}

.hot_article_bottom {
    overflow: hidden;
    margin-top: 10px;
    margin-left: 2.5%;
    width: 95%;
    height: 64%;
}

.hot_article_bottom p {
    font-size: 1.5em;
    color: rgb(212, 212, 212);
}

/* 评分栏 */

.score {
    position: relative;
    margin-top: 50px;
    width: 100%;
    height: 200px;
    border-radius: 30px;
    background-color: #3a3939;
}

.score_title {
    position: relative;
    top: 10px;
    margin-left: 20px;
    width: 350px;
    height: 60px;
}

.score_title h3 {
    font-size: 2em;
    color: rgb(212, 212, 212);
}

.score_center {
    position: relative;
    margin-left: 50px;
    width: 200px;
    height: 80px;
}

.score_center span.img {
    display: inline-block;
    width: 80px;
    height: 80px;
    background-image: url(../img/star.png);
    background-size: 100% 100%;
}

.score_center span.text {
    position: absolute;
    top: 0;
    left: 100px;
    display: inline-block;
    font-size: 3.6em;
    color: rgb(206, 205, 205)
}

.score_number {
    margin-left: 55px;
    width: 350px;
    height: 60px;
}

.score_number p {
    line-height: 2em;
    font-size: 1.5em;
    color: rgb(206, 205, 205);
}

.score_content {
    position: absolute;
    top: 20px;
    left: 400px;
    width: 170px;
    height: 150px;
}

.star_content .all_star {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    width: 150px;
    height: 150px;
}

.score_content .all_star .star {
    display: inline-block;
    width: 30px;
    height: 30px;
    background-image: url(../img/star.png);
    background-size: 100% 100%;
}

.score_content .all_star .star2 {
    display: inline-block;
    width: 30px;
    height: 30px;
    background-image: url(../img/star2.png);
    background-size: 100% 100%;
}

.score_content2 {
    position: absolute;
    top: 12px;
    left: 600px;
    width: 500px;
    height: 162px;
}

.score_content2 .score_card {
    margin-top: 10px;
    width: 450px;
    height: 25px;
    border-radius: 10px;
    background-color: rgb(206, 205, 205);
}
