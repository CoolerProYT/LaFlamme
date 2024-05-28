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
