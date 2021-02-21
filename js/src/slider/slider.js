jQuery(function($){

    $('.bootstrap-slider').each(function() {
        let currentImg = 1;

        const imgCount = parseInt($('.slider-controls .indicator .last', this).text());
        const indicator = $('.slider-controls .indicator .current', this);


        $(".slider-controls .control-next", this).bind('click', function() {
            const newPosition = currentImg == imgCount ? 1 : currentImg + 1;
            setCurrentImg(newPosition);
        });
    
        $(".slider-controls .control-prev", this).bind('click', function() {
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
    });
    
})
    