<?php
if (!defined('IN_ADMIN')) die("Hacking attempt");
 
define('D_S',DIRECTORY_SEPARATOR);
define('ROOT_DIR', realpath(dirname(__FILE__)) .D_S);
define('INCLUDE_DIR', ROOT_DIR .'include'.D_S);

define('VERSION','1.0');

$theme_path = 'assets/';

require(INCLUDE_DIR.'application.php');

$lang = INCLUDE_DIR.'lang_en.php';

require_once($lang);

?>

<!DOCTYPE html>

<html>

    <head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	

      <base href="/" />      

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <meta http-equiv="Content-Language" content="en" />

        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Skeniranje Portova</title>

              
        <meta name="description" content="opis" />

<meta name="keywords" content="keywords" />


		<link href="<?php echo $theme_path; ?>css/bootstrap.min.css" rel="stylesheet">
		
		
		<link href="<?php echo $theme_path; ?>css/font-awesome.min.css" rel="stylesheet" />

		<script type="text/javascript" src="<?php echo $theme_path; ?>js/bootstrap.min.js"></script>
		
				<link href="<?php echo $theme_path; ?>css/style.css" rel="stylesheet">


        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script src="<?php echo $theme_path; ?>js/script.js" type="text/javascript"></script>



</head>



<body>   

<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">

</header>
