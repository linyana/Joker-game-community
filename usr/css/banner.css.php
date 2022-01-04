<?php header("Content-type: text/css; charset: UTF-8"); ?>

.banner_left {
    z-index: 50;
    position: absolute;
    top: 70px;
    left: 0px;
    width: 300px;
    height: 180px;
    background-size: 100% 100%;
    border: 1px solid #242424;
    border-radius: 1px;
}

.banner_left_img {
    background-image: url(../img/banner2.jpg);
}

.banner_center {
    z-index: 99;
    position: absolute;
    top: 90px;
    left: 150px;
    width: 520px;
    height: 260px;
    background-size: 100% 100%;
    border: 1px solid #242424;
    border-radius: 1px;
}

.banner_center_img {
    background-image: url(../img/banner-no-shadow.jpg);
}

.banner_right {
    z-index: 50;
    position: absolute;
    top: 70px;
    left: 500px;
    width: 300px;
    height: 180px;
    background-size: 100% 100%;
    border: 1px solid #242424;
    border-radius: 1px;
}

.banner_right_img {
    background-image: url(../img/banner3.jpg);
}

.banner_child {
    transition: all 2s;
    cursor: pointer;
}
