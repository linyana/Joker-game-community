<?php header("Content-type: text/css; charset: UTF-8"); ?>

.main {
    position: relative;
    margin-top: 100px;
    margin-bottom: 50px;
    width: 100%;
    height: 400px;
}

.content0 .banner {
    display: inline-block;
    width: 700px;
    height: 366px;
}

.content0 .banner img {
    width: 100%;
    height: 100%;
}

.content0 .banner img:hover {
    cursor: pointer;
}

/* 资讯列表 */

.content0 .information {
    position: absolute;
    top: 0;
    right: 0;
    display: inline-block;
    width: 350px;
    height: 362px;
    border: 5px solid #202020;
    background-color: #3a3939;
}

.information .information_nav {
    width: 100%;
    height: 10%;
    border-bottom: 3px solid #202020;
}

.information .information_nav ul {
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.information .information_nav ul li {
    list-style: none;
    font-size: 1em;
    margin-left: 3px;
    margin-right: 3px;
}

.information .information_nav ul li a {
    text-decoration: none;
    color: rgb(212, 212, 212);
}

.information .information_nav ul li a:hover {
    color: rgb(146, 142, 142);
}

.information .information_nav ul ins {
    width: 0.5%;
    height: 50%;
    background-color: #202020;
}

.information .information_content ul li {
    margin-top: 5%;
    margin-bottom: 5%;
    margin-left: 5%;
    list-style: none;
}

.information .information_content ul li a {
    font-size: 1.2em;
    text-decoration: none;
    color: rgb(206, 205, 205);
}

.information .information_content ul li a:hover {
    color: rgb(146, 142, 142);
}

/* 提示栏 */

.card_list {
    position: relative;
    width: 100%;
    height: 850px;
}

.card {
    width: 243px;
    height: 361px;
}

.card .card_img {
    width: 100%;
    height: 88%;
    background-size: 100%;
}

.card .card_img:hover {
    cursor: pointer;
}

.card .card_text {
    margin-top: 5%;
    width: 100%;
    height: 12%;
    text-align: center;
}

.card .card_text a {
    font-weight: 600;
    font-size: 1.2em;
    text-decoration: none;
    color: rgb(212, 212, 212);
}

.card .card_text a:hover {
    color: rgb(146, 142, 142);
}

.card0 {
    position: absolute;
    top: 50px;
    left: 0;
}

.card1 {
    position: absolute;
    top: 50px;
    left: 313px;
}

.card2 {
    position: absolute;
    top: 50px;
    left: 630px;
}
.card3 {
    position: absolute;
    top: 50px;
    left: 940px;
}

.card4 {
    position: absolute;
    top: 470px;
    left: 0;
}

.card5 {
    position: absolute;
    top: 470px;
    left: 313px;
}

.card6 {
    position: absolute;
    top: 470px;
    left: 630px;
}

.card7 {
    position: absolute;
    top: 470px;
    left: 940px;
}

.article {
    margin-top: 50px;
    display: flex;
    justify-content: space-around;
    align-items: center;
    width: 100%;
    height: 250px;
    background-color: #3a3939;
}

.article_img {
    width: 28%;
    height: 78%;
}

.article0 .article_img {
    background-size: 100%;
}

.article1 .article_img {
    background-size: 100%;
}

.article2 .article_img {
    background-size: 100%;
}

.article .article_content {
    height: 78%;
    width: 58%;
}

.article .article_content .article_title {
    display: flex;
    align-items: center;
    height: 25%;
    width: 100%;
    background-color: #242424;
}

.article .article_content .article_title a {
    margin-left: 5%;
    font-size: 1.5em;
    text-decoration: none;
    color: rgb(212, 212, 212);
}

.article .article_content .article_title a:hover {
    color: rgb(146, 142, 142);
}

.article .article_content .article_text {
    margin-top: 2%;
    text-indent: 2em;
    font-size: 1em;
}

.article .article_content .article_text a {
    text-decoration: none;
    color: rgb(212, 212, 212);
}

.article .article_content .article_text a:hover {
    color: rgb(146, 142, 142);
}

