<?php header("Content-type: text/css; charset: UTF-8"); ?>

.publish {
    position: relative;
    margin-top: 35px;
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

.publish textarea {
    resize: none;
    margin-top: 8px;
    margin-left: 5%;
    width: 90%;
    height: 90px;
    font-size: 1.2em;
    border: none;
    text-indent: 1em;
    background-color: #3a3939;
    color: rgb(206, 205, 205);
}

.publish textarea:focus {
    outline: none;
}

.publish .expression {
    position: absolute;
    bottom: 10px;
    left: 30px;
    width: 25px;
    height: 25px;
    background-image: url(../img/emoji.png);
    background-size: 100% 100%;
}

.publish .image {
    position: absolute;
    bottom: 10px;
    left: 80px;
    width: 25px;
    height: 25px;
    background-image: url(../img/pic.png);
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