<?php header("Content-type: text/css; charset: UTF-8"); ?>
.big_search {
    display: flex;
    justify-content: center;
    align-content: space-between;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -200px;
    margin-left: -300px;
    width: 600px;
    height: 300px;
}

.big_search .search_img {
    margin-left: 50px;
    margin-bottom: 10px;
    width: 400px;
    height: 200px;
    background-image: url(../img/logo3.png);
    background-size: 100%;
}

.big_search .search_input {
    position: relative;
    margin-left: 20px;
    display: inline-block;
    width: 600px;
    height: 40px;
    border-radius: 10px;
}

.big_search .search_input input {
    padding-left: 20px;
    width: 450px;
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
    top: 211px;
    width: 100px;
    height: 44px;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    border-left: none;
    font-size: 20px;
    font-family: 微软雅黑, serif;
    color: white;
    background-color: rgb(96, 96, 99);
}
