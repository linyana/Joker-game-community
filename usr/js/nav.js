var nav = document.querySelector('.nav');
var demos = document.querySelectorAll('.demo');
var demo_big = document.querySelector('.demo_big')
var demo_content = document.querySelectorAll(".demo_content")
var user = document.querySelector(".top_nav .user");
var user_hover = document.querySelector(".top_nav .user_hover");
var flag = true;
/* 左侧边栏的出现和消失 */
nav.addEventListener('click', function () {
    if (flag === true) {
        nav.className = "left_menu" + " " + "nav";
        demos[0].className = "open" + " " + "demo";
        setTimeout(function () {
            demos[1].className = "open" + " " + "demo";
        }, 80)
        setTimeout(function () {
            demos[2].className = "open" + " " + "demo";
        }, 160)
        setTimeout(function () {
            demos[3].className = "open" + " " + "demo";
        }, 240)
        setTimeout(function () {
            demos[4].className = "open" + " " + "demo";
        }, 320)
        setTimeout(function () {
            demos[5].className = "open" + " " + "demo";
        }, 400)
        setTimeout(function () {
            demos[6].className = "open" + " " + "demo";
        }, 480)
        setTimeout(function () {
            demos[7].className = "open" + " " + "demo";
        }, 560)
        setTimeout(function () {
            demos[8].className = "open" + " " + "demo";
        }, 640)
        setTimeout(function () {
            demos[9].className = "open" + " " + "demo" + " " + "big";
        }, 800)
        /* 左侧边栏文字显示 */
        setTimeout(function () {
            demo_content[0].style.display = "block";
        }, 200)
        setTimeout(function () {
            demo_content[1].style.display = "block";
        }, 360)
        setTimeout(function () {
            flag = false;
        }, 800)
    }
    if (flag == false) {
        nav.className = "right_menu" + " " + "nav";
        demos[8].className = "close" + " " + "demo";
        setTimeout(function () {
            demos[7].className = "close" + " " + "demo";
        }, 80)
        setTimeout(function () {
            demos[6].className = "close" + " " + "demo";
        }, 160)
        setTimeout(function () {
            demos[5].className = "close" + " " + "demo";
        }, 240)
        setTimeout(function () {
            demos[4].className = "close" + " " + "demo";
        }, 320)
        setTimeout(function () {
            demos[3].className = "close" + " " + "demo";
        }, 400)
        setTimeout(function () {
            demos[2].className = "close" + " " + "demo";
        }, 480)
        setTimeout(function () {
            demos[1].className = "close" + " " + "demo";
        }, 560)
        setTimeout(function () {
            demos[0].className = "close" + " " + "demo";
        }, 640)
        setTimeout(function () {
            demos[9].className = "close" + " " + "demo" + " " + "big";
        }, 0)
        setTimeout(function () {
            demo_content[0].style.display = "none";
        }, 700)
        setTimeout(function () {
            demo_content[1].style.display = "none";
        }, 600)
        setTimeout(function () {
            flag = true;
        }, 800)
    }
})

user.addEventListener('mouseover', function () {
    user.className = "user2";
    user_hover.className = "user_hover" + " " + "block"
})


user.addEventListener('mouseout', function () {
    user.className = "user";
    user_hover.className = "user_hover" + " " + "none"
})

user_hover.addEventListener('mouseout', function () {
    user.className = "user";
    user_hover.className = "user_hover" + " " + "none"
})

user_hover.addEventListener('mouseover', function () {
    user.className = "user2";
    user_hover.className = "user_hover" + " " + "block"
})


var search_img = document.querySelector('.search_img')
var searchInput = document.querySelector('input#search-input')
search_img.addEventListener('click',function (){
    var a = "/" + searchInput.value
    window.open("/search" + a, "blank")
})

var search_input = document.querySelector('input.search-input')
var search_button = document.querySelector('button#search_button')
search_button.addEventListener('click',function (){
    var b = "/" + search_input.value
    window.open("/search" + b, "blank")
})


