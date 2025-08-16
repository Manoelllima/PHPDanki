$(document).ready(() => {
    $('.menu-mobile i').click(() => {
        //console.log($('.sidebar').width());
        if ($('.sidebar').width() == 0) {
            $('.sidebar').css({ 'width': '250px', 'overflow': 'visible' });
            $('.main-content').css({ 'width': $('.main-content').width() - $('.sidebar').width() });
        } else {
            $('.sidebar').css({ 'width': '0px', 'overflow': 'hidden' });
            $('.main-content').css({ 'overflow': 'hidden' });
            $('.main-content').css({ 'width': $('.main-content').width() + 250})
            
        }

    })
})