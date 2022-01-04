<?php header("Content-type: text/css; charset: UTF-8");?>

a {
    text-decoration: none;
}

/* 下面是导航栏的内容 */

.top_nav {
    position: fixed;
    z-index: 999;
    top: 0;
    left: 0;
    width: 100%;
    height: 60px;
    background-color: #3a3939;
}

.top_nav ul {
    position: relative;
    top: 0;
    left: 250px;
    width: 1230px;
    height: 100%;
}

.top_nav ul li {
    height: 100%;
    float: left;
    list-style: none;
    font-size: 1.5em;
    padding-left: 41px;
    padding-right: 41px;
    line-height: 60px;
    color: rgb(212, 212, 212);
}

.top_nav ul li:hover {
    background-color: #242424;
}

.top_nav .search-input {
    position: absolute;
    top: 12px;
    left: 1050px;
    width: 200px;
    height: 32px;
}

.top_nav .search-input input#search-input {
    padding-left: 10px;
    height: 100%;
    width: 100%;
    font-size: 18px;
}

.top_nav .search-input input#search-input:focus {
    outline: none;
}

.top_nav .search_img {
    position: absolute;
    top: 12px;
    left: 1264px;
    width: 35.8px;
    height: 34px;
    background-image: url(../img/search.png);
    background-size: 100%;
    background-repeat: no-repeat;
    border: 1px solid black;
    background-color: #fff;
}

.top_nav .user {
    position: absolute;
    top: 10px;
    left: 1380px;
    height: 43px;
    width: 43px;
    border-radius: 200px;
    background-size: 90%;
    transition: all 0.6s;
}

.top_nav .user2 {
    z-index: 200;
    position: absolute;
    top: 30px;
    left: 1380px;
    height: 70px;
    width: 70px;
    border-radius: 200px;
    background-size: 90%;
    transition: all 0.6s;
}


.top_nav .user_hover {
    position: absolute;
    top: 100%;
    left: 1308px;
    width: 210px;
    height: 260px;
    transition: all 0.6s;
}

.user_hover_title {
    position: relative;
    text-align: center;
    list-style: none;
    width: 100%;
    height: 100px;
    padding-left: 0;
    padding-right: 0;
    font-size: 1.1em;
    line-height: 240%;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    color: rgb(37, 37, 39);
    background-color: rgb(233, 233, 233);
}

.user_hover_title:hover {
    background-color: rgb(233, 233, 233) !important;
}

#get_border {
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
}

span.user_hover_span {
    position: absolute;
    left: 0;
    top: 40px;
    text-align: center;
    padding-left: 0;
    padding-right: 0;
    width: 210px;
    font-size: 1.5em;
    line-height: 240%;
    color: rgb(37, 37, 39);
    background-color: rgb(233, 233, 233);
}

.top_nav .user_hover a {
    position: relative;
    text-decoration: none;
}

.top_nav .user_hover a div {
    text-align: center;
    list-style: none;
    width: 100%;
    height: 50px;
    padding-left: 0;
    padding-right: 0;
    font-size: 1.3em;
    line-height: 240%;
    color: rgb(37, 37, 39);
    background-color: rgb(233, 233, 233);
}

.top_nav .user_hover div:hover {
    background-color: rgb(206, 205, 205);
}

.none {
    display: none;
}

.block {
    display: block;
}

/* 下面是左导航栏的内容 */
.top_nav .nav {
    cursor: pointer;
    float: left;
    height: 100%;
    width: 5%;
    margin-right: 3%;
    padding: 0;
    transition: all 1s;
}

.left_menu {
    position: absolute;
    top: 0;
    left: 30px;
}

.right_menu {
    position: absolute;
    top: 0;
    left: 120px;
}

.nav span {
    position: absolute;
    left: 30px;
    top: 14px;
    display: inline-block;
    width: 43px;
    height: 33.75px;
    background-size: 100% 100%;
    background-repeat: no-repeat;
}

.demo {
    transition: width 0.5s;
    background-color: #3a3939;
}

.de {
    transition: width 0.5s;
    background-color: #3a3939;
}

.de {
    transition: width 0.5s;
    background-color: #3a3939;
}

.demo_content {
    display: none;
    width: 100%;
    height: 100%;
    font-size: 1.7em;
    text-align: center;
    line-height: 300%;
    color: rgb(212, 212, 212);
}

.demo_content:hover {
    cursor: pointer;
    background-color: #242424;
}

.close {
    width: 0;
    height: 130%;
}

.open {
    width: 153px;
    height: 130%;
}

.big {
    height: 100000px!important;
}