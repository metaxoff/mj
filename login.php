<?php 
session_start();
if($_SESSION['isLogged']) {
 	header('Location: ./index.php');		
	exit;	
}
if(trim($_POST['password']) == 'Hilton2014') { 
 	$_SESSION['isLogged'] = true;
 	header('Location: ./index.php');		
 	exit;
} 
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Fullscreen Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel="stylesheet" href="assets/css/reset.css">
        <link rel="stylesheet" href="assets/css/supersized.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="page-container">
            <h1>Login</h1>
            <form action="" method="post">
                <input type="password" name="password" class="password" placeholder="Password">
                <button type="submit">Sign me in</button>
                <div class="error"><span>+</span></div>
            </form>
        </div>
        <!-- Javascript -->
        <script src="./assets/js/jquery-1.8.2.min.js"></script>
        <script src="./assets/js/supersized.3.2.7.min.js"></script>
        <script src="./assets/js/supersized-init.js"></script>
        <script src="./assets/js/scripts.js"></script>
    </body>
</html>


