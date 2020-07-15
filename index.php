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
                <div class="col-md-6 header-img-2 rellax-non-centered" data-rellax-speed="-1">
                    <img src="img/g12.png" class="img-fluid">
                </div> 
                <div class="col-md-6">
                    <div class=" text-1 mb-3 rellax-non-centered" data-rellax-speed="3">Currently Training on how to <b>See In The Dark</b></div>
                    <div class=" text-2 rellax-non-centered" data-rellax-speed="2">We’re near. Wanna be the first to know when we’ve got it? 
                        Leave your email and get notified when we do.
                    </div>  
                    <form action="getemail.php" method="post">
                        <div class="col-md-10 pull-left pt-4 email-div rellax-non-centered" data-rellax-speed="1">
                            <input type="email"
                                class="" id="email" name="email" placeholder="Email Address">
                            <button type="submit"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 header-img">
                    <svg width="592" height="474" viewBox="0 0 592 474" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="g12">
                            <g id="target" class="rellax-non-centered" data-rellax-speed="1">
                                <path id="path22" d="M554.112 338.624C554.112 344.509 526.282 349.28 491.952 349.28C457.622 349.28 429.792 344.509 429.792 338.624C429.792 332.739 457.622 327.968 491.952 327.968C526.282 327.968 554.112 332.739 554.112 338.624Z" fill="#69CBA9"/>
                                <path id="path28" d="M501.424 129.056H489.584V306.656H501.424C527.581 306.656 548.784 266.899 548.784 217.856C548.784 168.813 527.581 129.056 501.424 129.056Z" fill="#E1332D"/>
                                <path id="path30" d="M536.945 217.856C536.945 266.899 515.741 306.656 489.585 306.656C463.429 306.656 442.225 266.899 442.225 217.856C442.225 168.813 463.429 129.056 489.585 129.056C515.741 129.056 536.945 168.813 536.945 217.856Z" fill="#F03A37"/>
                                <path id="path32" d="M525.105 217.856C525.105 257.09 509.202 288.896 489.585 288.896C469.968 288.896 454.065 257.09 454.065 217.856C454.065 178.622 469.968 146.816 489.585 146.816C509.202 146.816 525.105 178.622 525.105 217.856Z" fill="white"/>
                                <path id="path34" d="M513.265 217.856C513.265 244.012 502.663 265.216 489.585 265.216C476.507 265.216 465.905 244.012 465.905 217.856C465.905 191.7 476.507 170.496 489.585 170.496C502.663 170.496 513.265 191.7 513.265 217.856Z" fill="#F03A37"/>
                                <path id="path36" d="M501.425 217.856C501.425 234.204 496.124 247.456 489.585 247.456C483.045 247.456 477.745 234.204 477.745 217.856C477.745 201.509 483.045 188.256 489.585 188.256C496.124 188.256 501.425 201.509 501.425 217.856Z" fill="white"/>
                                <path id="path38" d="M494.32 217.856C494.32 224.395 492.199 229.696 489.584 229.696C486.968 229.696 484.848 224.395 484.848 217.856C484.848 211.317 486.968 206.016 489.584 206.016C492.199 206.016 494.32 211.317 494.32 217.856Z" fill="#F03A37"/>
                                <path id="path40" d="M499.056 342.176H489.584V306.656H499.056V342.176Z" fill="white"/>
                                <path id="path42" d="M495.504 335.072V342.176H467.088V335.072H495.504Z" fill="white"/>
                                <path id="path44" d="M523.92 335.072V342.176H495.504V335.072H523.92Z" fill="#EFEFEE"/>
                                <path id="path46" d="M502.609 342.176H499.057V306.656H502.609V342.176Z" fill="#EFEFEE"/>
                                <path id="path60" d="M405.542 244.063L404.72 248.728L507.329 266.82L508.151 262.156L405.542 244.063Z" fill="#323131"/>
                                <path id="path62" d="M409.9 246.617L401.878 239.811L391 237.893L395.989 244.784L388.944 249.553L399.822 251.471L409.688 247.82L409.9 246.617Z" fill="#F03A37"/>
                            </g>
                            <g id="arrow-4" class="rellax-non-centered" data-rellax-speed="-1">
                                <path id="path18" d="M461.76 412.391C461.76 414.353 456.989 415.943 451.104 415.943C445.219 415.943 440.448 414.353 440.448 412.391C440.448 410.429 445.219 408.839 451.104 408.839C456.989 408.839 461.76 410.429 461.76 412.391Z" fill="#69CBA9"/>
                                <path id="path48" d="M417.981 312.271L413.531 313.89L449.167 411.799L453.617 410.179L417.981 312.271Z" fill="#323131"/>
                                <path id="path50" d="M417.949 317.322L419.833 306.973L416.055 296.592L412.581 304.358L404.928 300.641L408.707 311.022L416.8 317.74L417.949 317.322Z" fill="#F03A37"/>
                            </g>
                            <g id="arrow-1" class="rellax-non-centered" data-rellax-speed="2">
                                <path id="path16" d="M401.377 334.48C401.377 336.442 396.606 338.032 390.721 338.032C384.835 338.032 380.064 336.442 380.064 334.48C380.064 332.518 384.835 330.928 390.721 330.928C396.606 330.928 401.377 332.518 401.377 334.48Z" fill="#69CBA9"/>
                                <path id="path52" d="M326.873 253.242L323.246 256.286L390.219 336.102L393.847 333.058L326.873 253.242Z" fill="#323131"/>
                                <path id="path54" d="M328.571 258.001L326.801 247.63L319.701 239.168L319.093 247.654L310.631 246.779L317.731 255.241L327.635 258.786L328.571 258.001Z" fill="#F03A37"/>
                            </g>
                            <g id="arrow-3" class="rellax-non-centered" data-rellax-speed="0">
                                <path id="path20" d="M533.984 375.92C533.984 377.882 529.213 379.472 523.328 379.472C517.443 379.472 512.672 377.882 512.672 375.92C512.672 373.958 517.443 372.368 523.328 372.368C529.213 372.368 533.984 373.958 533.984 375.92Z" fill="#69CBA9"/>
                                <path id="path56" d="M453.048 300.515L449.699 303.864L523.374 377.539L526.723 374.19L453.048 300.515Z" fill="#323131"/>
                                <path id="path58" d="M455.156 305.107L452.489 294.931L444.677 287.12L444.812 295.626L436.305 295.492L444.117 303.303L454.291 305.972L455.156 305.107Z" fill="#F03A37"/>
                            </g>
                            <g id="man" class="rellax-non-centered" data-rellax-speed="1.5">
                                <path id="path26" d="M181.152 339.216C181.152 345.101 154.647 349.872 121.952 349.872C89.2561 349.872 62.7517 345.101 62.7517 339.216C62.7517 333.331 89.2561 328.56 121.952 328.56C154.647 328.56 181.152 333.331 181.152 339.216Z" fill="#69CBA9"/>
                                <path id="path64" d="M48.1382 227.242L41.4404 220.545C45.0378 220.338 47.5001 218.446 48.1382 213.847L54.8358 220.545C56.6854 222.394 56.6854 225.393 54.8358 227.242C52.9863 229.092 49.9877 229.092 48.1382 227.242Z" fill="#EFEFEE"/>
                                <path id="path66" d="M54.8358 233.772L48.1382 240.469C48.5835 237.398 46.5571 235.1 41.4404 233.772L48.1382 227.074C49.9877 225.224 52.9863 225.224 54.8358 227.074C56.6854 228.923 56.6854 231.922 54.8358 233.772Z" fill="white"/>
                                <path id="path68" d="M79.6105 240.505L79.4394 240.535C62.4685 243.527 51.1372 259.711 54.1295 276.682C54.5234 278.916 56.5889 280.561 58.8343 280.234C61.1578 279.896 62.7266 277.709 62.3217 275.414L62.2915 275.242C60.094 262.78 68.4157 250.895 80.8785 248.697C83.1133 248.303 84.7585 246.237 84.4317 243.992C84.0937 241.669 81.9062 240.1 79.6105 240.505Z" fill="white"/>
                                <path id="path70" d="M114.742 277.763L112.48 290.589L138.715 295.215C142.257 295.84 145.635 293.475 146.259 289.933C146.884 286.391 144.519 283.013 140.978 282.389L114.742 277.763Z" fill="#4B433A"/>
                                <path id="path72" d="M136.112 283.47C133.166 285.533 132.45 289.593 134.513 292.539L152.138 316.89L160.501 306.924L145.182 285.069C143.119 282.123 139.058 281.407 136.112 283.47Z" fill="#4B433A"/>
                                <path id="path74" d="M157.581 321.456L168.997 307.851L167.183 306.329C165.179 304.648 162.192 304.909 160.51 306.913L152.139 316.89L157.581 321.456Z" fill="#323131"/>
                                <path id="path76" d="M82.9109 279.673L95.1494 284.128L86.0378 309.161C84.8077 312.541 81.0709 314.283 77.6912 313.053C74.3115 311.823 72.5692 308.086 73.7994 304.707L82.9109 279.673Z" fill="#4B433A"/>
                                <path id="path78" d="M77.1673 301.034C80.4269 299.515 84.3015 300.925 85.8212 304.184L98.0969 331.623L85.2848 333.882L74.0179 309.689C72.4976 306.429 73.9078 302.554 77.1673 301.034Z" fill="#4B433A"/>
                                <path id="path80" d="M99.3309 338.619L81.8403 341.704L81.4294 339.372C80.9753 336.796 82.6951 334.339 85.2709 333.885L98.0971 331.624L99.3309 338.619Z" fill="#323131"/>
                                <path id="path82" d="M75.1459 283.371L121.787 275.147L116.338 244.249C115.373 238.774 110.153 235.119 104.679 236.085L78.7843 240.651C72.8004 241.706 68.805 247.412 69.8605 253.396L75.1459 283.371Z" fill="white"/>
                                <path id="path84" d="M95.7209 297.778L107.381 295.722C117.041 294.019 123.49 284.807 121.787 275.148L75.1465 283.372C76.8497 293.031 86.0612 299.481 95.7209 297.778Z" fill="#4B433A"/>
                                <path id="path86" d="M89.7952 247.125L95.6252 246.097L96.5179 237.524L86.0242 239.375L89.7952 247.125Z" fill="#447CC3"/>
                                <path id="path88" d="M89.7953 247.125L95.6253 246.098L102.686 272.504L98.0561 276.928L92.1917 274.355L89.7953 247.125Z" fill="#366BBA"/>
                                <path id="path90" d="M51.9151 218.892C57.7301 234.868 75.3949 243.105 91.3712 237.29C107.348 231.476 115.585 213.811 109.77 197.834C103.955 181.858 86.2901 173.621 70.3138 179.435C54.3377 185.25 46.1004 202.915 51.9151 218.892Z" fill="#323131"/>
                                <path id="path92" d="M59.0129 232.134C60.2427 235.514 63.98 237.256 67.3591 236.027C70.7389 234.797 72.4817 231.059 71.2515 227.68C70.0214 224.301 66.2847 222.558 62.9049 223.788C59.5252 225.018 57.7829 228.755 59.0129 232.134Z" fill="#F7D3C2"/>
                                <path id="path94" d="M60.186 223.442C65.3299 237.575 80.9569 244.862 95.0897 239.718C109.223 234.574 116.509 218.947 111.366 204.814C106.222 190.681 90.5947 183.394 76.4619 188.538C62.329 193.682 55.0422 209.309 60.186 223.442Z" fill="#F7D3C2"/>
                                <path id="path96" d="M98.7986 211.484C99.3575 213.021 101.056 213.813 102.592 213.254C104.128 212.694 104.921 210.996 104.362 209.46C103.802 207.924 102.104 207.132 100.568 207.691C99.0313 208.25 98.2392 209.949 98.7986 211.484Z" fill="#323131"/>
                                <path id="path98" d="M74.322 220.394C74.8814 221.93 76.5799 222.722 78.1161 222.163C79.6524 221.604 80.4439 219.905 79.885 218.369C79.3262 216.833 77.6271 216.041 76.0909 216.6C74.5552 217.159 73.7631 218.857 74.322 220.394Z" fill="#323131"/>
                                <path id="path100" d="M52.6218 217.375L88.225 204.416C99.2853 200.39 104.988 188.161 100.962 177.101L98.1279 169.312L70.3128 179.436C54.9511 185.027 47.0306 202.013 52.6218 217.375Z" fill="#323131"/>
                                <path id="path102" d="M104.917 244.072L105.059 244.171C119.175 254.055 138.631 250.625 148.515 236.509C149.816 234.65 149.519 232.026 147.7 230.669C145.819 229.266 143.163 229.703 141.825 231.613L141.726 231.755C134.467 242.122 120.179 244.641 109.813 237.382C107.954 236.08 105.33 236.378 103.974 238.197C102.569 240.079 103.007 242.734 104.917 244.072Z" fill="white"/>
                                <path id="path104" d="M64.8344 275.207L67.2024 279.308L157.435 227.212L155.067 223.11L64.8344 275.207Z" fill="#323131"/>
                                <path id="path106" d="M156.727 233.089L155.748 225.452L149.623 220.785L167.531 218.649L156.727 233.089Z" fill="#F03A37"/>
                                <path id="path108" d="M69.8136 274.361L59.2943 274.303L49.7275 279.826L57.9788 281.898L55.6476 290.08L65.2143 284.557L70.4251 275.419L69.8136 274.361Z" fill="#F03A37"/>
                                <path id="path110" d="M111.871 200.823L52.6708 223.911L55.0388 232.199L113.647 209.111L111.871 200.823Z" fill="white"/>
                                <path id="path112" d="M59.1826 278.376C59.0698 278.376 58.9553 278.359 58.842 278.325C58.2153 278.137 57.8598 277.477 58.0476 276.851L86.4634 182.131C86.6528 181.504 87.3129 181.149 87.938 181.337C88.5644 181.525 88.9202 182.185 88.7319 182.811L60.316 277.531C60.1621 278.044 59.692 278.376 59.1826 278.376Z" fill="#211C1D"/>
                                <path id="path114" d="M140.928 320.276L58.0483 277.652L59.1317 275.546L142.011 318.17L140.928 320.276Z" fill="#211C1D"/>
                                <path id="path116" d="M86.6797 180.458C86.2606 180.694 85.9018 181.042 85.6603 181.484C84.9984 182.693 85.4685 184.143 86.7105 184.721L103.115 192.356C146.095 212.362 164.131 261.802 144.176 304.913L138.467 317.246C137.891 318.492 138.464 319.903 139.748 320.398C141.032 320.894 142.54 320.284 143.116 319.039L148.825 306.706C159.044 284.629 160.227 260.288 152.157 238.166C144.087 216.045 127.521 198.22 105.511 187.976L89.1075 180.341C88.319 179.974 87.4085 180.046 86.6797 180.458Z" fill="#B2927A"/>
                                <path id="path118" d="M56.4825 271.943C53.5845 272.454 51.6496 275.217 52.1604 278.115C52.6715 281.013 55.4347 282.948 58.3328 282.437C61.2308 281.926 63.1655 279.163 62.6546 276.265C62.1437 273.367 59.3802 271.432 56.4825 271.943Z" fill="#F0C4B3"/>
                                <path id="path120" d="M152.045 231.275C151.534 228.376 148.771 226.442 145.873 226.953C142.975 227.464 141.04 230.227 141.551 233.125C142.062 236.023 144.826 237.958 147.723 237.447C150.621 236.936 152.556 234.173 152.045 231.275Z" fill="#F0C4B3"/>
                                <path id="path122" d="M97.6801 230.88C97.6801 232.842 96.3546 234.432 94.7201 234.432C93.0855 234.432 91.76 232.842 91.76 230.88C91.76 228.918 93.0855 227.328 94.7201 227.328C96.3546 227.328 97.6801 228.918 97.6801 230.88Z" fill="#F03A37"/>
                            </g>
                            <g id="arrow-0" class="rellax-non-centered" data-rellax-speed="0">
                                <path id="path24" d="M396.048 361.712C396.048 367.597 373.255 372.368 345.136 372.368C317.018 372.368 294.224 367.597 294.224 361.712C294.224 355.827 317.018 351.056 345.136 351.056C373.255 351.056 396.048 355.827 396.048 361.712Z" fill="#69CBA9"/>
                                <path id="path124" d="M288.272 367.308L289.094 371.972L391.704 353.88L390.881 349.215L288.272 367.308Z" fill="#323131"/>
                                <path id="path126" d="M389.467 360.592L391.159 353.08L387 346.6L404.558 350.717L389.467 360.592Z" fill="#F03A37"/>
                                <path id="path128" d="M293.242 368.217L283.377 364.565L272.498 366.483L279.543 371.252L274.554 378.143L285.433 376.225L293.455 369.42L293.242 368.217Z" fill="#F03A37"/>
                            </g>
                        </g>
                    </svg>

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
                    <img src="img/volunteering-rafiki.png" class="img-fluid volunteer-img rellax" data-rellax-speed="-1">
                </div>
            </div>
            <div class="row row-2">
                <div class="col-md-6 img-show">
                    <img src="img/volunteering-2.png" class="img-fluid volunteer-img-2 rellax" data-rellax-speed="-1">
                </div>
                <div class="col-md-6 volunteer">
                    <div class="text-1">Bye, Bye Fear of Bumping into Things</div>
                    <div class="text-2">With our state of the art Radar Sensors that can scan 25m radius wide, 
                        you feel a vibration when you’re approaching an obstacle. Your mobile device vibrates 
                        in relation to how fast you are approaching the Obstacle
                    </div>
                </div>
                <div class="col-md-6 img-hide">
                    <img src="img/volunteering-2.png" class="img-fluid volunteer-img-2 rellax" data-rellax-speed="-1">
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
                    <img src="img/volunteering-3.png" class="img-fluid volunteer-img rellax" data-rellax-speed="-1">
                </div>
            </div>
        </div>
        <div class="explore">
            <div class="row row-4 justify-content-center">
                <div class="col-md-7 volunteer rellax" data-rellax-speed="1">
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
        <div class="row rellax" data-rellax-speed="1">
            <div class="col-md-5 pb-3 branding">
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

    <script src="./javascripts/rellax.min.js"></script>
    <script>
      var rellax = new Rellax('.rellax', {
        center: true
      });
      var rellaxNonCentered = new Rellax('.rellax-non-centered', {
        center: false
      });
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>