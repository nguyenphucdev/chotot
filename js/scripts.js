
function jqueryfall_down() {

    //fall_downCount = 20;
    	
       var fall_down = $('<div class="image_item"></div>');
        $('#image_wrapper').prepend(fall_down);
        fall_downX = $('.image_item').width()*inval;
        fall_down.css({'left':fall_downX+'px'});
   		 fall_down.html('<img class="pro_image" src="'+imageArr[inval]+'"/>');
        fall_down.animate({
            top: scrolltop+"px",
            opacity : "1",
        }, loadspeed, function(){   
        	jqueryfall_down();      
            while (inval>=imageArr.length)
            {
            	$.ajax({
    				type: "POST",
   				 	url: 'function.php',
    				dataType: 'json',
    				data: { loadimage: "true"},
    				success: function (data) {
                      imageArr = data;  
                      console.log(data);  
            	}
				});
            	scrolltop=scrolltop-65;
            	inval=0;
            	return;
            }
        });
	inval++;

}