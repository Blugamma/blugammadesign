$(document).scroll(function () {
    var y = $(this).scrollTop();
    if (y > 83) {
        $('#scrollBackUp').fadeIn();
    } 
    
    else{
        $('#scrollBackUp').fadeOut();
    }

});