<?php
	error_reporting(0);
	include 'func.php';
	
	if(isset($_POST['tip'])){
		if($_POST['tip']==='tips')
			output('Do you know the hidden attribute of html lables?', '3');
		else
			output("No flag for you!", '2');
	}
	if(isset($_POST['tip2'])){
		if($_POST['tip2']===md5('xmu')){
			header("location: aschusx7212.html");
			exit; 
		}
		elseif (strlen($_POST['tip2'])<32)
			output('Maybe check the length of you hash num?','3');
		else
			output('Wrong passcode!','2');
	}
	if (isset($_POST['flaaaaag'])) {
		if ($_POST['flaaaaag']=="show_me_flag"){
			output("Fine, flag{al1_ba5ic_and_al1_easy_7zu8s1}.","1000");
		}
		else
			output("POST me with the same parameter and value as the GET",'4');
	}
	if(isset($_GET['flaaaaag'])) {
		output("Do you know POST and GET? Try POST me with the same parameter and value as the GET.",'10');
	}

?>