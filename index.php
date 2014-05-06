<?php
    
    $email = $_POST['email']; 
    $from = 'From: contactpage@betwinsouls.com'; 
    $to = 'joaquin_guardado@icloud.com'; 
    $subject = 'Let me know!';
  
			
    $body = "From: E-Mail: $email\n";
				
    if ($_POST['submit']) {
			if ($email != '') {
			if (mail ($to, $subject, $body, $from)) {
				echo '<p>Your message has been sent!</p>';
			} else {
				echo '<p>Something went wrong, go back and try again!<p>';
			}
			
			} else {
				echo '<p>You need to fill in all required fields</p>';
		
		}
    
	}
?>

<!doctype html>

<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Digital Media Design</title>

	<meta name="description" content="">
	<meta name="author" content="">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
    
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/webfont.css"/>
	
    <link rel="stylesheet" href="styles.css" />
    
</head>

<body>
	
    <div class="container">

		<!-- Start of Kokoro top bar -->
        <div class="top-bar">
        	<a href="http://www.betwinsouls.com/contact.php">
            <strong>Contact Us: </strong>(719) 433-5279
            </a>
            <span class="right">
			<a href="#">Go To Our Homepage</a>
			<a href="http://www.betwinsouls.com/blog" target="new">Read Our Blog</a>
            <a href="https://www.facebook.com/betwinsouls" target="new">
            <strong>Follow us on Facebook</strong>
            </a>
            </span>
         <div class="clr"></div>
         
         
    	</div><!--/ End of Kokoro top bar -->
	<div class="content">	
    <div class="logo">
    	
		<a href="#"><h1 class="webfont">Betwinsouls<span> Digital Media Design</span></h1></a>
    </div>
   
    
    </div>

	</div>



    
    <form method="post" action="index.php">
    	<ul>
        	<li>
            	<label for="email">Get notified when we launch!</label>
                <input name="email" type="email" placeholder="Give us your email!"/>
            </li>
         
         	<li>
            	<input name="submit" type="submit" id="button" value="submit"/>
            </li>
         </ul>
    
    </form>
    

    
	<p class="footer">
		&copy; betwinsouls 2013
	</p>
    
</body>
</html>
