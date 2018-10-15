<!DOCTYPE html>
<html lang="en">
    <head>
          <title>Bootstrap Example</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--Font links-->
            <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
            <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
         <button onclick="topFunction()" id="myBtn" title="Go to top"><span class="glyphicon glyphicon-chevron-up"></span></button>
        <!-- navigation and nav container -->
        
            <div class="container"  id="img1" >
                <nav class="navbar" >
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navibar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                  </button>
                    <a class="navbar-brand" href="#"><i class="fa fa-laptop fa-lg"> </i>LUBSTA</a>
                </div>
                
                <div class="collapse navbar-collapse" id="navibar">
                    <ul class="nav navbar-nav navbar-right ">
                        <li><a href="#img1" class="active">HOME</a></li>
                        <li><a href="#about">ABOUT</a></li>
                        <li><a href="#services">SERVICES</a></li>
                        <li><a href="#contact">CONTACT</a></li>
                    
                    </ul>
                </div>
                </nav>
                
                        <div class="welcome">
                            <h1 class="text-center">WELCOME TO LUBSTA</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
            </div>
        
        
        
            <!-- content -->
                
                
         <!-- about section -->
            <div class="container-fluid" id="about">
                <h2>ABOUT US</h2>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit,<br> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p><br></p>
              
                
                <!-- about image section -->
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-3">
                     
                      <img src="imgs/Lebza%2020180728_220158.jpg" class="img-responsive margin img-rounded" style="width:100%" alt="Image">
                        <h4>Technical Analyst</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> 
                    
                    </div>
                    <div class="col-sm-2"> 
                     
                      <img src="imgs/luba.jpg" class="img-responsive margin img-rounded " style="width:100%" alt="Image">
                        <h4>CEO and Founder</h4>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="col-sm-3"> 
                      
                      <img src="imgs/Natasha%2020180728_220142.jpg" class="img-responsive margin img-rounded " style="width:100%" alt="Image">
                        <h4>Administrator</h4>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                     <div class="col-sm-2"></div>
                  </div>          
        </div>
        
       
         <!-- services section -->
         <div class="container-fluid" id="services">
             <h2>SERVICES</h2>
             <p style="font-size:20px">Lorem ipsum dolor sit amet.</p>
             
             <div class="row" >
                 <div class="col-md-6 col-sm-6 " id="hv">
                    <i class="fa fa-diamond fa-5x"></i>
                    <p>Design</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                 </div>
                 
                 <div class="col-md-6 col-sm-6" id="hv">
                    <i class="fa fa-heart fa-5x"></i>
                    <p>Work</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                 </div>
             </div>
             
             <div class="row">
                 <div class="col-md-12 col-sm-12" id="hv">
                    <i class="fa fa-desktop fa-5x"></i>
                    <p>Support</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit<br>, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                 </div>
                    
             </div>
             
         </div>
             <!-- contact section -->
        <div class="container-fluid" id="contact">
            <h2 class="text-center">CONTACT</h2>
 
              <p>Contact us</p>
              <p><span class="glyphicon glyphicon-map-marker"></span> Centurion, SA</p>
              <p><span class="glyphicon glyphicon-phone"></span> +277 62 163 8950</p>
              <p><span class="glyphicon glyphicon-envelope"></span> iamlubsta@gmail.com</p>
            
                    <ul >
                        <li><a href="#"><i class="fa fa-facebook" arial-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" arial-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube" arial-hidden="true"></i></a></li>
                      
                    
                    </ul>
              
        </div>
       
        <script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>

        
    </body>
</html>