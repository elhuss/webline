<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
      <!--  <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Marketing Web</title>
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link href="assets/css/main.css" rel="stylesheet">
        <link href="assets/css/res-main.css" rel="stylesheet">
    </head>

    <body>
        <div class="page">
        <?php include('includes/header.php');?>   
        <div class="content">
            <!-- Slideshow container -->
            <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                <img  src="assets/images/001.jpg">
                <div class="slide_text">
                <h1 style="color:#fff;">welcome to webline</h1>
                <h4 style="color:#fff;">Improve everyarea of your <br>
                digitalmarketing from oneeasy
                <br> to accessplace</h4>
                <a href="services.php"><input type="button" value="enroll now" class="btn_input"> </a>
                </div>
                </div>

                <div class="mySlides fade">
                <img  src="assets/images/002.jpg">
                <div class="slide_text"><h1 style="color:#fff;">There’s a better way to grow</h1>
                <h4 style="color:#fff;">Marketing, sales, and service software that helps your <br>
                 business grow without compromise. Because “good for <br>
                the business” should also mean “good for the customer.”</h4></div>
                </div>

                <div class="mySlides fade">
                <img  src="assets/images/004.jpg">
                <div class="slide_text"><h1 style="color:#fff;">Get better results</h1>
                <h4 style="color:#fff;">An integrated,actionable and overlapping <br>
                approach you can start using to <br>
                improve results today</h4></div>
                </div>
            </div>
            <div style="clear: both"></div>
            <div class="features"> 
                <div class="who">features</div>
                <div class="div-left">
                    <div class="icondiv">
                    <i class="fas fa-cogs"></i>
                    <h4>web design</h4>
                    <p>Professional Logic Designs Is A Leading Web Design  Company In Egypt In This Field,We Take Pride In Our Work.</p> 
                    </div> 
                    <div class="icondiv"><i class="fas fa-cogs"></i>  
                    <h4>seo Marketing</h4>
                    <p>Improving A Website Ranking In Search Engines Organic Placement,Especially On Google.Com</p>
                    </div> 
                </div>
                <div class="div-right">
                    <div class="icondiv"><i class="fas fa-cogs"></i> 
                    <h4>social marketing</h4>
                    <p>We Help Brands To Listen,Understand And Engage In Conversations In Social Media.</p> 
                    </div> 
                    <div class="icondiv"><i class="fas fa-cogs"></i> 
                    <h4>Web Development</h4>
                    <p>Our Programming Team Has Developed A Many Of Applications Which We Can Provide To Our Clients.</p> 
                    </div> 
                </div>
            </div>
            <div style="clear: both"></div>
            <div class="skills">
            <div class="who">about us</div>
                <div class="skill-left">
                    <h3>our skills</h3> 
                    <br><br><br><br><br><br><br>
                    <br><br><br><br><br><br><br>
                    <h4 style="opacity:0.7;">html5</h4><br>
                    <div id="myProgress">
                        <div id="myBar"></div>
                    </div>
                    <br>
                    <h4 style="opacity:0.7;">css3</h4><br>
                    <div id="myProgress">
                        <div id="myBar2"></div>
                    </div>
                    <h4 style="opacity:0.7;">js</h4> <br>
                    <div id="myProgress">
                        <div id="myBar3"></div>
                    </div>
                    <h4 style="opacity:0.7;">php</h4><br>
                    <div id="myProgress">
                        <div id="myBar4"></div>
                    </div>
                    <h4 style="opacity:0.7;">wordpress</h4><br>
                    <div id="myProgress">
                        <div id="myBar5"></div>
                    </div>
                    <h4 style="opacity:0.7;">photoshop</h4> <br>
                    <div id="myProgress">
                        <div id="myBar6"></div>
                    </div>
                </div>
                <div class="skill-right">
                    <h3>why choosing us</h3><br><br><br> <br>
                    <ul>
                        <li><h4 style="opacity:0.7;">Full-service digital web agency since 2003</h4></li>
                        <li><h4 style="opacity:0.7;">Offers web design &amp; development in Egypt and the Middle East</h4></li>
                        <li><h4 style="opacity:0.7;">Committed to helping our clients reach their goals</h4></li>
                        <li><h4 style="opacity:0.7;">ِِAffordable web designers and expert web developers</h4></li>
                        <li><h4 style="opacity:0.7;">24 Hours / 7 days a week customer service support</h4></li>
                        <li><h4 style="opacity:0.7;">High performance and affordable pricing</h4></li>
                        <li><h4 style="opacity:0.7;">We always meet our deadlines</h4></li>
                        <li><h4 style="opacity:0.7;">Our agile methodology of working process is proven and effective</h4></li>
                        <li><h4 style="opacity:0.7;">Domain name registration, hosting and business email included</h4></li>
                        <li><h4 style="opacity:0.7;">We love what we do and put our hearts into every project</h4></li>
                        <li><h4 style="opacity:0.7;">Finally, Dot IT the best web design company whose care <br> <br> about your business</h4></li>
                    </ul>
                </div>
            </div>
            <div style="clear: both"></div>
            <div class="our-work">
            <?php
            require_once("includes/connect.php");
            $r=mysqli_query($r,"select * from works");
            echo "<div class='who'>recent work</div>";
            while($row=mysqli_fetch_array($r))
            {
            echo "
            <div class='gallery'>
                <img src='assets/images/".$row['image']."' class='image'/>
                <div class='overlay'>
                <div class='text'>".$row['name']."</div>
                </div>
            </div>";
            }
            ?>
            </div>

            <?php include('includes/our_client.php');?>
</div>
            <div style="clear: both"></div>
            <?php include('includes/footer.php');?>
</div>
        <script src="assets/js/jquery-3.2.1.min.js"></script>
        <script src="assets/js/main.js" type="text/javascript"></script>        
    </body>
</html>