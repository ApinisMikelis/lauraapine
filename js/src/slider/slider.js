jQuery(function($){

    const imgCount = parseInt($('.slider-controls .indicator .last').text());
    const indicator = $('.slider-controls .indicator .current');

    let currentImg = 1;

    $(".slider-controls .control-next").bind('click', function() {
        const newPosition = currentImg == imgCount ? 1 : currentImg + 1;
        setCurrentImg(newPosition);
    });

    $(".slider-controls .control-prev").bind('click', function() {
        const newPosition = currentImg == 1 ? imgCount : currentImg - 1;
        setCurrentImg(newPosition);
    });

    function setCurrentImg(current){
        indicator.text(current);
        recalculateCurrent();
    }

    function recalculateCurrent() {
        currentImg = parseInt(indicator.text());
    }
    
})
    