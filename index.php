<!doctype html>
<html lang="en">
  <head>
    <title>WhatsNear</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/target.png" type="image/x-icon">

    <link rel="stylesheet" href="style.css">
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-light this-nav">
        <a class="navbar-brand" href="#"><img src="img/target.png" class="logo" alt="logo"/><span class="brand-text"> WhatsNear</span> </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid main">
        <div class="row justify-content-center" id="alert">
            <div class="overlay"></div>
            <div id="popup" class=" shadow bg-light">
                <span class="display-4">Thanks for your Subcribtion!</span> <br>
                <p class="message-2">
                    <?php 
                        if(!empty($_GET['message'])) {
                            $email = $_GET['email'];
                            echo "Your email is". " " . "<b>" . $email . "</b>";
                        }
                    ?>
                </p>
            </div> 
        </div>
        <div class="header">
            <div class="row">
                <div class="col-md-6 header-img-2">
                    <img src="img/g12.png" class="img-fluid" alt="" srcset="">
                </div> 
                <div class="col-md-6">
                    <div class=" text-1 mb-3">Currently Training on how to <b>See In The Dark</b></div>
                    <div class=" text-2">We’re near. Wanna be the first to know when we’ve got it? 
                        Leave your email and get notified when we do.
                    </div>  
                    <form action="getemail.php" method="post">
                        <div class="col-md-10 pull-left pt-4 email-div">
                            <input type="email"
                                class="" id="email" name="email" placeholder="Email Address">
                            <button type="submit"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 header-img">
                    <img src="img/g12.png" class="img-fluid" alt="" srcset="">
                </div>  
            </div>
            
        </div>
        <div class="features">
            <div class="row">
                <div class="col-md-6 volunteer">
                    <div class="text-1">Help you get around more easily</div>
                    <div class="text-2">With GPS and Navigation features, Just like the Volunteers that 
                        help you close the street, WhatsNear can help you move around from place to place. 
                        It’s good to have a system that you can trust to help you around.
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="img/volunteering-rafiki.png" class="img-fluid volunteer-img" alt="" srcset="">
                </div>
            </div>
            <div class="row row-2">
                <div class="col-md-6 img-show">
                    <img src="img/volunteering-2.png" class="img-fluid volunteer-img-2" alt="" srcset="">
                </div>
                <div class="col-md-6 volunteer">
                    <div class="text-1">Bye, Bye Fear of Bumping into Things</div>
                    <div class="text-2">With our state of the art Radar Sensors that can scan 25m radius wide, 
                        you feel a vibration when you’re approaching an obstacle. Your mobile device vibrates 
                        in relation to how fast you are approaching the Obstacle
                    </div>
                </div>
                <div class="col-md-6 img-hide">
                    <img src="img/volunteering-2.png" class="img-fluid volunteer-img-2" alt="" srcset="">
                </div>
            </div>
            <div class="row row-3">
                <div class="col-md-6 volunteer">
                    <div class="text-1">Audio Alerts!!</div>
                    <div class="text-2">Using Artificial Intelligence technology, When you’re connected to an 
                        audio device, you get Audio Alerts to guide your path and keep you from bumping into 
                        obstacles
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="img/volunteering-3.png" class="img-fluid volunteer-img" alt="" srcset="">
                </div>
            </div>
        </div>
        <div class="explore">
            <div class="row row-4 justify-content-center">
                <div class="col-md-7 volunteer">
                    <div class="text-1">Want to explore more?</div>
                    <div class="text-2">Sign up for a trialog account or ask to see 
                        our platform in action and discover the functionalities.
                    </div>
                    <a class="btn button" href="#email" role="button">Get Started</a>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="row">
            <div class="col-md-5 pb-3">
                <img src="img/target.png" alt="logo" class="logo">
                <span class="brand-text">WhatsNear</span>
            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="text-3">Quick Links</div>
                        <ul class="footer-ul">
                            <li class="footer-link">About Us</li>
                            <li class="footer-link">Blog</li>
                            <li class="footer-link">Contact</li>
                            <li class="footer-link">FAQ</li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="text-3">Legal Stuff</div>
                        <ul class="footer-ul">
                            <li class="footer-link">Disclaimer</li>
                            <li class="footer-link">Financing</li>
                            <li class="footer-link">Privacy Policy</li>
                            <li class="footer-link">Terms of Service</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <div class="text-3">Social</div>
                        <ul class="footer-ul">
                            <li class="footer-link"><i class="fa fa-facebook" aria-hidden="true"></i> <span class="social"> &nbsp;Facebook</span></li>
                            <li class="footer-link"><i class="fa fa-twitter" aria-hidden="true"></i> <span class="social">Twitter</span></li>
                            <li class="footer-link"><i class="fa fa-instagram" aria-hidden="true"></i><span class="social"> Instagram</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
        if(!empty($_GET['message'])) {
            $message = $_GET['message'];
            echo '
            <script type="text/javascript">
                function hideMsg(){
                    document.getElementById("alert").style.visibility = "hidden";
                }
                document.getElementById("alert").style.visibility = "visible";
                window.setTimeout("hideMsg()", 4000);
            </script>';
        }
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>