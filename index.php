<!--

   SIM-K 
    -> Luis Costa
    -> Patrick Simard
   
   
   Description: welcome_page

-->

<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		
		<script src="js/language.js"></script>
		
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 

        <link rel="stylesheet" type="text/css" href="css/social_media.css" />
        <link rel="stylesheet" type="text/css" href="css/welcome_page.css" />

        <title>Simulated Kinematics</title>
    </head>
   
    <body>
        <!-- Container & Background Image -->
        <div class="container">
		
            <!-- Logo -->
            <img class="logo" src="pictures/logos/logo_b&w.png" />
           
            <!-- Language selecction -->
            <div class="language">
                <a href="display/front_page.php" onclick="set_lang('fr')">FRAN&Ccedil;AIS</a>
                
                &nbsp;&nbsp;
                
                <a href="display/front_page.php" onclick="set_lang('en')">ENGLISH</a>
            </div>
           
            <!-- Social media -->
            <div class="media">
                <a href="https://www.w3schools.com">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </a>
               
                &nbsp;&nbsp;
               
                <a href="https://www.w3schools.com">
                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </a>
               
                &nbsp;&nbsp;
               
                <a href="https://www.w3schools.com">
                   <i class="fa fa-facebook-official" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </body>
</html>