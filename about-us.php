<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>About Us</title>
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link href="assets/css/main.css" rel="stylesheet">
        <link href="assets/css/res-main.css" rel="stylesheet">
    </head>

    <body>
    <?php include('includes/header.php');?>    
<div style="clear: both"></div>  
        <div class="content">
            <div class="about_webline">
                <h2>about webline</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br>
                 et dolore magna aliqua. Ut enim ad minim veniam</p>
                 <img src="assets/images/team.jpg" alt="">
            </div>
            <div class="our_work">
            <?php
            require_once("includes/connect.php");
            $ra=mysqli_query($r,"select * from works");
            echo "<div class='who'>recent work</div>";
            while($row=mysqli_fetch_array($ra))
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
            <div class="our_team">
            <?php
                require_once("includes/connect.php");
                $r=mysqli_query($r,"select * from team");
                echo "<div class='who'>our team</div>";
                echo"<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>";
                while($row=mysqli_fetch_array($r))
                {    
                    echo"
                    <div class='member'>
                        <img src='assets/images/".$row['image']."' alt='Avatar' class='image'>
                        <div class='member_info'>
                        <span class='member_name'>".$row['name']."</span>
                        <p>".$row['jop']."</p>
                        <p>".$row['email']."</p>
                        <a href='".$row['facebook']."'><i class='fa fa-facebook'></i></a>
                        <a href='".$row['twitter']."'><i class='fa fa-twitter' ></i></a>
                        <a href='".$row['linkedin']."'><i class='fa fa-linkedin' ></i></a>
                        </div>    
                    </div>";  
                }
            ?>                                      
            </div>
        </div> 
        <div style="clear: both"></div> 
        <?php include('includes/footer.php');?>
  </div>
  <script src="assets/js/jquery-3.2.1.min.js"></script>
  <script src="assets/js/main.js" type="text/javascript"></script>
    </body>
</html>