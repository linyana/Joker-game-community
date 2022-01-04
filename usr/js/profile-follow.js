var button_attentions = document.querySelectorAll("button.attention")

for (let button_attention of button_attentions) {
    button_attention.addEventListener('mouseover', function () {
        button_attention.innerHTML = "不再关注"
    })
    button_attention.addEventListener('mouseleave', function () {
        button_attention.innerHTML = "已关注"
    })
}
