<!--

   SIM-K 
    -> Luis Costa
    -> Patrick Simard
   
   
   Description: front_page

-->



<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		
		<script src="../js/language.js"></script>
		
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="../css/front_page.css" />
        <link rel="stylesheet" type="text/css" href="../css/navbar.css" />
        <link rel="stylesheet" type="text/css" href="../css/footer.css" />
        <link rel="stylesheet" type="text/css" href="../css/social_media.css" />

        <title>Simulated Kinematics</title>
    </head>
   
    <body>
        <!-- Container -->
        <div class="container">
           
            <!-- Navigation bar -->
            <div class="navbar">
               
                <div class="logo-wrapper">
                    <img class="logo" src="../pictures/logos/banner.png" />
                </div> 
               
                <div class="services-wrapper">
                    <ul>
                        <li>
                            <a lang="fr" href="display/front_page.php">Acceuil</a>
						    <a lang="en" href="display/front_page.php">Home</a>
                        </li>
                        <li>
                            <a lang="fr" href="display/front_page.php">&Eacute;quipe de course</a>
						    <a lang="en" href="display/front_page.php">Race team</a>
                        </li>
                        <li>
                            <a lang="fr" href="display/front_page.php">Boutique</a>
						    <a lang="en" href="display/front_page.php">Store</a>
                        </li>
                        <li>
                            <a lang="fr" href="display/front_page.php">Autres services</a>
						    <a lang="en" href="display/front_page.php">Other services</a>
                        </li>
					</ul>
				</div>
				
				<div class="language-wrapper">
					<ul>	
						<li>
						    <a href="#" onclick="set_lang('en')">EN</a>
						</li>
						<li>
						    <a href="#" onclick="set_lang('fr')">FR</a>
						</li>
                    </ul>
                </div>

                <div class="account-wrapper">
        	        <ul>
                        <li>
                            <a lang="fr" href="display/front_page.php">Compte</a>
							<a lang="en" href="display/front_page.php">Account</a>
                        </li>
            	        <li>
                            <a lang="fr" href="display/front_page.php">Panier</a>
							<a lang="en" href="display/front_page.php">Cart</a>
                        </li>
                    </ul>
                </div>            
            </div>

            <!-- Content area -->
            <div class="content-wrapper">
               
                <!-- Left banner -->
                <div class="banner"></div>

                <!-- Main content -->
                <div class="content"></div>

                <!-- Right banner -->
                <div class="banner"></div> 
            </div> 

            <!-- Footer area -->
            <div class="footer">
             
                <div class="logo_footer-wrapper">
                    <img class="logo_footer" src="../pictures/logos/banner_text_logo.png" />
                </div>

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
        </div>
    </body>
</html>

<script>
    $(document).ready(function() {
	    // DO the language check and display here
        lang_select();		
	});
</script>