function resizeVideo(){
    $(".upper-layer").css('width',$("video").width() + 'px')
    // $(".upper-layer").css('height',$("video").height() + 'px')
}

$(document).ready(function(){
    resizeVideo()
    $(window).resize(function(){
        resizeVideo()
    })
})

function backToTop(){
    $('.landing-page-container').stop().animate({
        scrollTop: 0
    }, 1);
}
