<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Contact Us</title>
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link href="assets/css/main.css" rel="stylesheet">
        <link href="assets/css/res-main.css" rel="stylesheet">
    </head>

    <body>
    <?php include('includes/header.php');?>     
     <div style="clear: both"></div>  
        <div class="content">
            <div class="how_cont">
                <h2>how to reach us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            </div>
            <div class="our_loc">
                <div class="g_map" id="g_map"></div>
            </div>

            <div class="cont_form">
                <form action="contact-messages.php" method="post"> 
                    <h2>drop your message</h2>
                    <input type="text" placeholder="Name" name="name" class="input_s" required ><br>
                    <input type="email" placeholder="E-Mail" name="email" class="input_s" required><br>
                    <input type="tele" placeholder="Phone" name="phone" class="input_s" required><br>
                    <input type="text" placeholder="Company Name" name="company" class="input_s" required><br>
                    <input type="text" placeholder="Message" id="mess" name="message" required> <br>
                    <button>Send</button>
                </form>
                <div class="cont_info">
                    <h2>contact us</h2> <br>
                    <i class="fas fa-map-marker-alt"></i><span> 1537 Flint Street Tumon , MP 96911 </span> <br>
                    <i class="fas fa-mobile-alt"></i><span> +200123456789 - +200198765432</span> <br>
                    <i class="fas fa-envelope"></i><span>info@webline.com</span> <br>
                 
                </div>
            </div>
        </div> 
        <div style="clear: both"></div> 
        <?php include('includes/footer.php');?>
  </div>
        
    </body>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js\main.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANtildCzfa0SFfcMhH15sl-AyQ934tqOg&callback=myMap"></script>
    
</html>