//стрелка вверх в футере
function ScrollUp() {
    $("html, body").animate({
        scrollTop: 0
    }, 1000);
    return false;
}