<?php 

$_POST["lname"] = filter_var($_POST["lname"],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_LOW);
//if (!preg_match("/^[a-zA-Z ]$/", $_POST["lname"]))
//{ $_POST["lname"] = ""; } 

$_POST["fname"] = filter_var($_POST["fname"],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_LOW);
//if (!preg_match("/^[a-zA-Z ]$/", $_POST["fname"])) 
//{ $_POST["fname"] = "error";} 

$_POST["mail"] = filter_var($_POST["mail"], FILTER_SANITIZE_EMAIL); 
if (!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL))
{ $_POST["mail"] = ""; } 

//$_POST["message"] = preg_replace("/<script(?:.*?)</script>/", "", $_POST["message"]);

$Fname = $_POST["fname"]; 
$Lname = $_POST["lname"];
$Mail = $_POST["mail"];
$Country = $_POST["country"];
$Gender = $_POST["gender"];
$Subject = $_POST["subject"];
$Message = $_POST["message"];

?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
            
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>hackers_poulette</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="./assets/css/style.css">
            
    </head>

    <body>
        
        <div class="container-fluid">
            <header class="row justify-content-center">
                <figure>
                    <img src="./assets/images/hackers-poulette-logo.png" alt="logo hackers poulette" id="logo">
                </figure>
            </header>

            <div class="row justify-content-center">

            <article class="col-xs-12 col-lg-10" id="form">
                <div class="row justify-content-center" id="content">
                    <p id="result">Your complaint has been received!
                    </p> 
                    
                </div>

                <div class="row justify-content-center" id="content">
                    <p id="mailsent"> A confirmation email has been sent to: <?php print_r ($Mail); ?></p>
                </div>
            </article>

            </div>
        </div>

    </body>
</html>