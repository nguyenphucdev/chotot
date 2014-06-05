<?php
    if (!isset($_POST['loadimage'])) {
        return;
    }


include('simple_html_dom.php');
function getArrayImage()
	{
		$html = file_get_html('http://www.chotot.vn/');
		$in=0;
		$stack = array();
		foreach($html->find('div[id=show_casing_box] img') as $element) 
	       {
	       	$stack[$in] = $element->src;
			$in++;
	       	//echo $element->src.$i++."<br>";
		   }
	
		   return $stack;
	}
	
	echo json_encode(getArrayImage());
		
	
?>