<!DOCTYPE html>
<html> 

	<head>
		
		<title>CSS-Highland</title>
        <meta name="description" content="Church Website">
        <meta name="keywords" content="Christian Science, Highland Indiana, Christian Science Society Highland">
        <meta name="author" content="Jason Kincaid">
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="images/bearicon.jpg" >
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,800,600,700,300">
        <link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="styles/normalize.css">
        <link rel="stylesheet" type="text/css" href="styles/main.css">
        <link rel="stylesheet" type="text/css" href="styles/contact.css">
	</head>
	
<body class="main-body">
	
	<header>
	
	</header>
    
    <nav>
        <a href="index.html">Home</a>
        <a href="about.html">About</a>
        <a href="services.html">Services</a>
        <a href="contact.html">Contact</a>
        
    
    </nav>
	
	<section>
        <div class="send">
            <p class="output">
				<?php

				$fullName = $_POST['fullName'];
				$email = $_POST['email'];
				$message = $_POST['message'];
				$to = "jasonkincaid01@gmail.com";
				$subject = "New form message";

				mail ($to, $subject, $message, "From, " . $fullName . " " . $email);
				echo "Thanks for the message, I'll get back to you as soon as I can.";


				?>
			</p>
        </div> 
	</section>		
	
	
	<footer>
		&copy; Copyright 2016, <a href="http://jason-kincaid.com">Jason Kincaid.</a>
	</footer>
</body>
</html>