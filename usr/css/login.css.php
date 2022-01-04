<?php header("Content-type: text/css; charset: UTF-8"); ?>
body {
    position: relative;
    background-image: url();
    background-size: 100%;
    background-color: rgb(37,37,39);
    color: rgb(206, 205, 206);
}

.action {
    margin: 250px auto;
    width: 250px;
    height: 200px;
}

h1 {
    text-align: center;
}

a#cancel,
a#logon{
    text-decoration: none;
    color: rgb(206,205,205)
}

input#text,
input#password{
    position: absolute;
    top: 3px;
    left: 30px;
    height: 30px;
    width: 150px;
    margin-left: 20px;
    background: none;
    border: none;
    font-size: 18px;
    color: rgb(206, 205, 206);
}

input:focus {
    outline: none;
}

label {
    font-size: 18px;
}

.login-input1 {
    position: relative;
    width: 250px;
    height: 38px;
    border-radius: 35px;
    margin-left: 5px;
    border: 2px solid rgb(206, 205, 206);
}

.login-input2 {
    position: relative;
    width: 250px;
    height: 38px;
    border-radius: 35px;
    margin-left: 5px;
    border: 2px solid rgb(206, 205, 206);
}

.login-input1 img {
    margin-left: 10px;
    margin-top: 2px;
    width: 35px;
    height: 35px;
}

.login-input2 img {
    margin-left: 12px;
    margin-top: 3px;
    width: 30px;
    height: 30px;
}

button {
    cursor: pointer;
    border-radius: 10px;
    margin-top: 15px;
    margin-left: 20px;
    width: 100px;
    height: 30px;
    background: none;
    border: 2px solid rgb(206, 205, 206);
    color: rgb(206, 205, 206);
}

span {
    position: absolute;
    left: 900px;
    top: 65px;
    font-size: 25px;
}

.login-div {
    width: 270px;
    height: 294px;
    padding-left: 5px;
    border: 5px solid #3a3939;
}

.error-hint {
    text-align: center;
    width: 270px;
    height: 30px;
    margin-top: 8px;
    color: #cb2025;
}