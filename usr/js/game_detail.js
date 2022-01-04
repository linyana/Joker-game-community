var game_detail_img_list = ['url(/usr/img/banner4.png)', 'url(/usr/img/banner5.png)', 'url(/usr/img/banner7.jpg)', 'url(/usr/img/banner8.jpg)', 'url(/usr/img/banner2.jpg)']
var introduce_change_right = document.querySelector('.introduce_change_right')
var introduce_change_left = document.querySelector('.introduce_change_left')
var introduce_big_img = document.querySelector('.introduce_big_img')
var introduce_small_imgs = document.querySelectorAll('.introduce_small_img')
var detail_img_i = 0

introduce_change_left.addEventListener('click', function () {
    detail_img_i -= 1
    if (detail_img_i === -1) {
        detail_img_i = 4
    }
    introduce_big_img.style.backgroundImage = game_detail_img_list[detail_img_i]
    for (var i = 0; i < 5; i++) {
        introduce_small_imgs[i].className = "introduce_small_img" + " " + "introduce_small_img" + i + " " + "introduce_small_img_border0"
    }
    introduce_small_imgs[detail_img_i].className = "introduce_small_img" + " " + "introduce_small_img" + detail_img_i + " " + "introduce_small_img_border1"
})

introduce_change_right.addEventListener('click', function () {
    detail_img_i += 1
    if (detail_img_i === 5) {
        detail_img_i = 0
    }
    introduce_big_img.style.backgroundImage = game_detail_img_list[detail_img_i]
    for (var i = 0; i < 5; i++) {
        introduce_small_imgs[i].className = "introduce_small_img" + " " + "introduce_small_img" + i + " " + "introduce_small_img_border0"
    }
    introduce_small_imgs[detail_img_i].className = "introduce_small_img" + " " + "introduce_small_img" + detail_img_i + " " + "introduce_small_img_border1"
})