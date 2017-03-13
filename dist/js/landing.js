var clock;
		
$(document).ready(function() {
	var clock;

	clock = $('.clock').FlipClock({
        autoStart: false,
        language:'ru',
        callbacks: {
        	stop: function() {
        		$('.message').html('Акция окончена!')
        	}
        }
    });
		    
    clock.setTime(905);
    clock.setCountdown(true);
    clock.start();


    $('body').on('click','#payment-btn-group button',function(){
	  	$('#payment-btn-group button').each(function(key,value){
	  		$(this).removeClass('btn-warning');
	  	})
    	$(this).addClass('btn-warning');
    })

    $('body').on('click','.goods-images-little img',function(){
    	var this_img_container = $(this).closest('.goods-images-block').eq(0),
    		main_img = this_img_container.find('.goods-images-main').eq(0).find('img').eq(0),
    		this_src = $(this).attr('src');

    	main_img.attr('src',this_src);
    })

    $('body').on('click','.add-to-order',function(){
    	var data_good_id = $(this).data('good-id');
    	$(this).removeClass('btn-warning').addClass('btn-success').html('Товар добавлен').prop('disabled',true);

    	alert('Событие добавления товара №' + data_good_id);
    });

});