//стрелка вверх в футере
function ScrollUp() {
    $("html, body").animate({
        scrollTop: 0
    }, 1000);
    return false;
}

//закрпление хедера
window.onscroll = function () { myFunction() };
var header = document.getElementById("myHeader");
var sticky = header.offsetTop;
function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}