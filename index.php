<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Test</title>
    	<link rel="stylesheet" type="text/css" href="css/style.css"/>
      	<script src="js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.dragsort.js"></script>
        <script src="js/scripts.js"></script>
<script type="text/javascript">
	var speed=500;
	var state = false;
	$('#loading-image').show();
	$(document).ready(function () {		
		jqueryfall_down();	
	});
								
</script>
</head>

<body id="body">
		

	<div id="control-section">
		<div id='loading-image'></div>
			 <span style="font-size: 0.5em;">&copy; nguyenphucdev@gmail.com</span>
			 
			 <button id="stopbtn">STOP</button>
			  <button id="runbtn">RUN</button>
		</div>
	<div id="main-content">
	
	</div>
<script type="text/javascript">
$( "#runbtn" ).toggle();
$( "#stopbtn" ).on( "click", function() {
	$( "#stopbtn" ).hide();
	$( "#runbtn" ).show();
  	state=true;
 
  	
});

$( "#runbtn" ).on( "click", function() {
	$( "#stopbtn" ).show();
	$( "#runbtn" ).hide();
  	state=false;
  	var speed=$("select[name=speed]").val();
  	jqueryfall_down();	
  	
});


</script>


</body>
</html>