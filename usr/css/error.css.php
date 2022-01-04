<?php header("Content-type: text/css; charset: UTF-8"); ?>
* {
    padding: 0;
    margin: 0;
    font-family: "arial", klavikaMedium-Italic;
    background-color: rgb(51, 55, 66);
}

.error_img {
    position: absolute;
    top: 80px;
    left: 150px;
    width: 400px;
    height: 600px;
    background-image: url(/usr/img/404.jfif);
    background-size: 100% 100%;
}

.error {
    position: relative;
    width: 300px;
    height: 280px;
    margin: 200px 700px;
}

h1 {
    font-size: 10em;
    color: rgb(125, 143, 175);
}

h3 {
    margin-left: 60px;
    color: rgb(125, 143, 175);
}

.loader {
    position: absolute;
    top: 170px;
    left: -10px;
    animation: rotate 1s infinite;
    height: 50px;
    width: 50px;
}

.loader:before,
.loader:after {
    border-radius: 50%;
    content: '';
    display: block;
    height: 20px;
    width: 20px;
}

.loader:before {
    animation: ball1 1s infinite;
    background-color: #cb2025;
    box-shadow: 30px 0 0 #f8b334;
    margin-bottom: 10px;
}

.loader:after {
    animation: ball2 1s infinite;
    background-color: #00a096;
    box-shadow: 30px 0 0 #97bf0d;
}

@keyframes rotate {
    0% {
        -webkit-transform: rotate(0deg) scale(0.8);
        -moz-transform: rotate(0deg) scale(0.8);
    }

    50% {
        -webkit-transform: rotate(360deg) scale(1.2);
        -moz-transform: rotate(360deg) scale(1.2);
    }

    100% {
        -webkit-transform: rotate(720deg) scale(0.8);
        -moz-transform: rotate(720deg) scale(0.8);
    }
}

@keyframes ball1 {
    0% {
        box-shadow: 30px 0 0 #f8b334;
    }

    50% {
        box-shadow: 0 0 0 #f8b334;
        margin-bottom: 0;
        -webkit-transform: translate(15px, 15px);
        -moz-transform: translate(15px, 15px);
    }

    100% {
        box-shadow: 30px 0 0 #f8b334;
        margin-bottom: 10px;
    }
}

@keyframes ball2 {
    0% {
        box-shadow: 30px 0 0 #97bf0d;
    }

    50% {
        box-shadow: 0 0 0 #97bf0d;
        margin-top: -20px;
        -webkit-transform: translate(15px, 15px);
        -moz-transform: translate(15px, 15px);
    }

    100% {
        box-shadow: 30px 0 0 #97bf0d;
        margin-top: 0;
    }
}

a {
    margin-left: 50px;
    font-size: 2em;
    text-decoration: none;
    color: rgb(125, 143, 175);
}
