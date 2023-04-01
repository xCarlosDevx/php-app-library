var swiperContainer = document.querySelector('.card__container');
var isDown = false;
var startX;
var scrollLeft;
swiperContainer.addEventListener('mousedown', function (e) {
    isDown = true;
    swiperContainer.classList.add('active');
    startX = e.pageX - swiperContainer.offsetLeft;
    scrollLeft = swiperContainer.scrollLeft;
});
swiperContainer.addEventListener('mouseleave', function () {
    isDown = false;
    swiperContainer.classList.remove('active');
});
swiperContainer.addEventListener('mouseup', function () {
    isDown = false;
    swiperContainer.classList.remove('active');
});
swiperContainer.addEventListener('mousemove', function (e) {
    if (!isDown) return;
    e.preventDefault();
    var x = e.pageX - swiperContainer.offsetLeft;
    var walk = (x - startX) * 1;
    swiperContainer.scrollLeft = scrollLeft - walk;
});