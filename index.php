<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Test</title>
    	<link rel="stylesheet" type="text/css" href="css/style.css"/>
        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/scripts.js"></script>
<script type="text/javascript">
    var loadspeed=100;
	var scrolltop=500;
	var imageArr=new Array();
	var inval=0;
	$(document).ready(function () {
		$('#loading-image').show();
		$.ajax({
    		type: "POST",
   			url: 'function.php',
    		dataType: 'json',
    		data: { loadimage: "true"},
    		success: function (data) {
             imageArr = data;  
             $('#loading-image').hide(500);
             jqueryfall_down();
         	}
		});
	});
</script>
</head>
<body>   	
<div id="root" class="background">
<div id="loading-image"></div>
<div id="image_wrapper"></div>
</div>
</body>
</html>