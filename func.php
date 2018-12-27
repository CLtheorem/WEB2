<?php
	function output($content, $return_time){
		$time = $return_time*1000;
		echo "
			<html>
			   <head>
				 <style>
				.center{
						position: absolute;
						top: 50%; left: 50%;
						width: x; height: y;
						transform: translate(-50%, -50%);
					}
				body {  
		            background: #282E33;  
		        	}  
			</style>
			   </head>
			   <body>
			   	<div class='center'>
				 <p><font color='white'>$content Back in $return_time seconds...</font></p>
				</div>
			   </body>
			   <script>setTimeout(function(){history.go(-1)}, $time);</script>
			 </html>";
	 		exit;
	}
	function output2(){
		
	}
?>