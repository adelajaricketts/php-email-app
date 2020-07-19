<?php
      $result['street']['children'][0]['label'] = 'Streetname' . '<span style="color:#e02b27; font-size: 1.2rem; margin: 0 0 0 5px">*</span>';
      $result['street']['children'][1]['label'] = 'Housenumber' . '<span style="color:#e02b27; font-size: 1.2rem; margin: 0 0 0 5px">*</span>';
		echo $result['street']['children'][0]['label'];
		echo "<br>";
		echo $result['street']['children'][1]['label'];
  
  
		function printMe($param = NULL) {
            print $param;
        }
         printMe("This is test");
         printMe("<span style='color:#e02b27; font-size: 1.2rem; margin: 0 0 0 5px'>*</span>");  
		 
		 
		function text() {
			return '<html><body><h1>Hello</h1></body></html>';
		}
		echo text();
?>