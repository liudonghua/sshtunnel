<?php
if($_SERVER['REQUEST_URI']){
	$port = intval(str_replace("/app.php/","",$_SERVER['REQUEST_URI']));
	if($port>9999){
		setcookie("port",$port,time()+38400*365,"/");
		header("Location: http://113.108.88.121:8888/"); 
	}

}
exit("no port!");

?>
