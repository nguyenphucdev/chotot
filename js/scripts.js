
function jqueryfall_down() {
	$('#loading-image').show(); // show loading process bar
	$.ajax({
    		type: "POST",
   			url: 'function.php',
    		dataType: 'json',
    		data: { loadimage: "true"},
    		success: function (data) {
       		 	imageArr = data;  
				var body = $(window);
				var maincontent = $("#main-content");
				var item = $("<div class='item'> </div>");
				maincontent.prepend(item);
				add_item(imageArr,0,item,maincontent.offset().top-60,maincontent.offset().left);
				$('#loading-image').hide();
       		 }
       		 
});

}

function add_item(arrayImage,index,parentItem,top,left){
	
	if(index == arrayImage.length ){
		jqueryfall_down();
	}else{
	var src = arrayImage[index];
	var item = $('<img class="fake_item" src="'+src+'" style="top:0px; position:absolute; left:'+left+'px "/>');
	console.log(speed);
	$("#body").append(item);
	item.animate({
		top: top+"px",
		left:left+"px",
	}, speed ,function(){
		item.remove();// remove animation item
		parentItem.append( '<img class="real_item" id="'+index+'" src="'+src+'"/>' );
		if(state)
		{
			return; // stop 
			
		}
		add_item(arrayImage,index+1,parentItem,top,left+82);
		 parentItem.dragsort({dragBetween: false,dragSelectorExclude:".fake_item"});	
	});
	
	}
}
