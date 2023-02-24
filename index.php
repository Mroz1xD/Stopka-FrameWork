<?php
include("./conf/db.php");
require_once('./src/func.php');

if( isset($_GET['a']))
	$a = $_GET['a'];	
else
	$a = '';

require_once("./src/skelet/header.php");
require_once("./src/skelet/menu.php");

switch($a){
	case '':
		require_once("./src/skelet/main.php");
	break;
	case ''://<-in write what will be in GET
		require_once("");//<-link to the file
	break;
}
require_once("./src/skelet/footer.php");

?>