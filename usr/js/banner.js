//新增轮播图
var banner_img_list = ['url(/usr/img/banner2.jpg)', 'url(/usr/img/banner-no-shadow.jpg)', 'url(/usr/img/banner3.jpg)', 'url(/usr/img/banner7.jpg)', 'url(/usr/img/banner8.jpg)']
var banner_children = document.querySelectorAll('.banner_child')
var banner_left = document.querySelector('.banner_left')
var banner_center = document.querySelector('.banner_center')
var banner_right = document.querySelector('.banner_right')
var banner_left_img = document.querySelector('.banner_left_img')
var banner_center_img = document.querySelector('.banner_center_img')
var banner_right_img = document.querySelector('.banner_right_img')
var banner_img_list_left = 0
var banner_img_list_center = 1
var banner_img_list_right = 2
var getBannerImg = function () {
    banner_left_img.style.backgroundImage = banner_img_list[banner_img_list_left]
    banner_center_img.style.backgroundImage = banner_img_list[banner_img_list_center]
    banner_right_img.style.backgroundImage = banner_img_list[banner_img_list_right]
}

var getPlus = function (i) {
    i += 1
    if (i === 5) {
        i = 0
    }
    return i
}

var getMinus = function (i) {
    i -= 1
    if (i === -1) {
        i = 4
    }
    return i
}


var imgLeftLeft = function () {
    banner_children[0].className = "banner_child" + " " + "banner_center" + " " + " banner_left_img"
    banner_children[1].className = "banner_child" + " " + "banner_right" + " " + " banner_center_img"
    banner_children[2].className = "banner_child" + " " + "banner_left" + " " + " banner_right_img"
    banner_img_list_right = getPlus(banner_img_list_right)
    getBannerImg()
}

var imgLeftRight = function () {
    banner_children[0].className = "banner_child" + " " + "banner_center" + " " + " banner_left_img"
    banner_children[1].className = "banner_child" + " " + "banner_right" + " " + " banner_center_img"
    banner_children[2].className = "banner_child" + " " + "banner_left" + " " + " banner_right_img"
    banner_img_list_center = getMinus(banner_img_list_center)
    getBannerImg()
}

var imgCenterLeft = function () {
    banner_children[0].className = "banner_child" + " " + "banner_left" + " " + " banner_left_img"
    banner_children[1].className = "banner_child" + " " + "banner_center" + " " + " banner_center_img"
    banner_children[2].className = "banner_child" + " " + "banner_right" + " " + " banner_right_img"
    banner_img_list_left = getPlus(banner_img_list_left)
    getBannerImg()
}

var imgCenterRight = function () {
    banner_children[0].className = "banner_child" + " " + "banner_left" + " " + " banner_left_img"
    banner_children[1].className = "banner_child" + " " + "banner_center" + " " + " banner_center_img"
    banner_children[2].className = "banner_child" + " " + "banner_right" + " " + " banner_right_img"
    banner_img_list_right = getMinus(banner_img_list_right)
    getBannerImg()
}

var imgRightLeft = function () {
    banner_children[0].className = "banner_child" + " " + "banner_right" + " " + " banner_left_img"
    banner_children[1].className = "banner_child" + " " + "banner_left" + " " + " banner_center_img"
    banner_children[2].className = "banner_child" + " " + "banner_center" + " " + " banner_right_img"
    banner_img_list_center = getPlus(banner_img_list_center)
    getBannerImg()
}

var imgRightRight = function () {
    banner_children[0].className = "banner_child" + " " + "banner_right" + " " + " banner_left_img"
    banner_children[1].className = "banner_child" + " " + "banner_left" + " " + " banner_center_img"
    banner_children[2].className = "banner_child" + " " + "banner_center" + " " + " banner_right_img"
    banner_img_list_left = getMinus(banner_img_list_left)
    getBannerImg()
}

var left_i = 0

banner_left.addEventListener('click', function () {
    if (left_i === 0) {
        imgLeftLeft()
        left_i = 1
    } else if (left_i === 1) {
        window.open("game/2", "blank")
    } else if (left_i === 2) {
        imgLeftRight()
        left_i = 1
    }
})

banner_center.addEventListener('click', function () {
    if (left_i === 0) {
        window.open("game/2", "blank")
    } else if (left_i === 1) {
        imgCenterRight()
        left_i = 0
    } else if (left_i === 2) {
        imgCenterLeft()
        left_i = 0
    }
})

banner_right.addEventListener('click', function () {
    if (left_i === 0) {
        imgRightRight()
        left_i = 2
    } else if (left_i === 1) {
        imgRightLeft()
        left_i = 2
    } else if (left_i === 2) {
        window.open("game/2", "blank")
    }
})

var information_content_lis = document.querySelectorAll(".information_content ul li a")
var information_content_list = ["金铲铲之战上线", "lol手游上线", "s11全球总决赛开赛", "lol手游上线", "最后的生还者2跳票至明年", "lol手游上线", "lol手游上线",]
var information_content_list1 = ["12.10更新公告", "本站维护公告", "玩家补偿", "玩家补偿", "玩家补偿", "玩家补偿", "玩家补偿",]
var information_content_list2 = ["虎牙杯", "s11总决赛", "lol手游上线", "斗鱼表演赛", "lol手游上线", "lol手游上线", "lol手游上线",]
var information_content_list3 = ["2042卡墙攻略", "lol手游上线", "云顶之弈最强攻略", "lol手游上线", "lol手游上线", "lol手游上线", "lol手游上线",]
var information_content_list4 = ["英雄联盟手游首款定制机", "lol手游上线", "执事系列皮肤与执事通行证", "lol手游上线", "lol手游上线", "lol手游上线", "lol手游上线",]
var information_navs = document.querySelectorAll('.information_nav ul li a')

information_navs[0].addEventListener('click', function () {
    for (var i = 0; i <= 7; i++) {
        information_content_lis[i].innerHTML = information_content_list[i]
    }
})
information_navs[1].addEventListener('click', function () {
    for (var i = 0; i <= 7; i++) {
        information_content_lis[i].innerHTML = information_content_list1[i]
    }
})
information_navs[2].addEventListener('click', function () {
    for (var i = 0; i <= 7; i++) {
        information_content_lis[i].innerHTML = information_content_list2[i]
    }
})
information_navs[3].addEventListener('click', function () {
    for (var i = 0; i <= 7; i++) {
        information_content_lis[i].innerHTML = information_content_list3[i]
    }
})
information_navs[4].addEventListener('click', function () {
    for (var i = 0; i <= 7; i++) {
        information_content_lis[i].innerHTML = information_content_list4[i]
    }
})


