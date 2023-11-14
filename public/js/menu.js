$( document ).ready(function() {
    $('.menu .wrapper').on('click', function(){
        window.location.href = $(this).attr('data-url');
    });
    var position = 0;
    var colors = [ '#FAD02E', '#FFB74D', '#FF8A65', '#AED581', '#81C784', '#4DB6AC', '#4DD0E1', '#4FC3F7', '#64B5F6', '#7986CB', '#9575CD', '#B39DDB', '#FFD54F', '#FFAB91', '#A1887F'];
    $('.bar').each(function(){
        $(this).css({'background-color': colors[position % colors.length],'left': ($('.data .data-1 .wrapper').width() / $('.bar').length) * position + 10 + 'px','height': $(this).attr('data-products') * 10 + 'px', 'width': $('.data .data-1 .wrapper').width() / $('.bar').length - 10 + 'px'});
        position++;
    })

    $( window ).on( "resize", function() {
        var position = 0;
        var colors = [ '#FAD02E', '#FFB74D', '#FF8A65', '#AED581', '#81C784', '#4DB6AC', '#4DD0E1', '#4FC3F7', '#64B5F6', '#7986CB', '#9575CD', '#B39DDB', '#FFD54F', '#FFAB91', '#A1887F'];
        $('.bar').each(function(){
            $(this).css({'background-color': colors[position % colors.length],'left': ($('.data .data-1 .wrapper').width() / $('.bar').length) * position + 10 + 'px','height': $(this).attr('data-products') * 10 + 'px', 'width': $('.data .data-1 .wrapper').width() / $('.bar').length - 10 + 'px'});
            position++;
        })
    });

});
