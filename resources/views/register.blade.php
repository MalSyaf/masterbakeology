<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="icon" href="logo/logo.png" type="image/icon type"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset("web/css/style.css")}}">

    <title>Masterbakeology</title>
</head>

<body>

    <nav class="nav-container">
        <!-- <div class="logo">
            <img src="logo/logo.png" height="50" width="50">
        </div> -->
        <div class="name">
            <h4>Masterbakeology</h4>
        </div>
        <ul class="nav-links">
            <li>
                <a class="active" href="index.html">Home</a>
            </li>
            <li>
                <a href="index.html#menu">Menu</a>
            </li>
            <li>
                <a href="contact.html">Contact</a>
            </li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>

    <section class="register">
        <div class="register-container">
            <div class="register-form">
                <div class="register-heading">
                    <h1>Register Now</h1>
                </div>
                <!--<div class="wrap">
                    
                </div>-->
                <div class="wrap2">
                    <label for="">Full Name</label>
                    <input type="text" />
                    <span class="focus-input"></span>
                </div>
                <div class="wrap2">
                    <label for="">Username</label>
                    <input type="text">
                    <span class="focus-input"></span>
                </div>
                <div class="wrap2">
                    <label for="">E-Mail</label>
                    <input type="text">
                    <span class="focus-input"></span>
                </div>
                <div class="wrap2">
                    <label for="">Phone Number</label>
                    <input type="number">
                    <span class="focus-input"></span>
                </div>
        
                <button class="register-btn">Register</button>
            </div>
            <div class="register-image">
            <img src="{{ asset("web/images/register.jpg")}} "alt="">
            class="register-img" alt="" height="300px" width="200px">
            </div>
        </div>
    </section>
    
    <footer>
        <div class="footer-container">
            <div class="sec about-us">
                <h2>About Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, commodi! Repellat nam minus eum commodi
                    deserunt sequi porro nisi, assumenda quidem sit repudiandae amet nihil provident impedit dolores
                    fugiat tempore!</p>
            </div>
            <div class="sec quick-links">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
            <div class="soc-media">
                <h2>Socials</h2>
                <ul class="socials">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.instagram.com/masterbakeology/?hl=en"><i class="fa fa-instagram"
                                aria-hidden="true"></i></i></a></li>
                </ul>
            </div>
        </div>
        <div class="copy-right">
            <p>Copyright &copy; 2021 Master Bakeology - All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset("web/js/app.js")"></script>

</body>

</html>