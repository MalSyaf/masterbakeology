<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset("web/css/style.css")}}">
    <title>Masterbakeology</title>
</head>
<body>
    <!-- NAVBAR -->
    <nav class="nav-container">
        <div class="name">
            <h4>Masterbakeology</h4>
        </div>
        <ul class="nav-links">
            <li>
                <a class="#home" href="{{url('/')}}">Home</a>
            </li>
            <li>
                <a href="{{url('/#menu')}}">Menu</a>
            </li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>

    <!-- LOGIN FORM -->
    <div class="login">
        <div class="login-image">
            <img src="{{ asset("web/images/login.jpg")}} "alt="">
        </div>
        <div class="login-content">
            <div class="login-form">
                <h2>Login</h2>
                <form action="">
                    <div class="login-input">
                        <input type="text" placeholder="Email">
                        <input type="text" placeholder="Password">
                        <p><a href="">Forgot Password</a></p>
                    </div>
                    <div class="inner">
                        <div class="sign-up">
                            <p>Don't have an account? <a href="register">Sign Up</a></p>
                        </div>
                        <div class="sign-in">
                            <a href="/"><input type="submit" value="Sign in" name=""></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer>
        <div class="footer-container">
            <div class="sec about-us">
                <h2>About Us</h2>
                <p>Our journey began with a simple, yet profound, love for baking. Established in 2013, we've dedicated ourselves to the art of creating exceptional baked goods that tell stories, evoke memories, and bring people together through the magic of indulgence.</p>
            </div>
            <div class="sec contact-us">
                <h2>Contact Us</h2>
                <ul>
                    <p>Mobile: +60 12-693 8232</p>
                    <p>Email: masterbakeology@gmail.com</p>
                </ul>
            </div>
            <div class="soc-media">
                <h2>Socials</h2>
                <ul class="socials">
                    <li><a href="https://www.facebook.com/masterbakeology/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.instagram.com/masterbakeology/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></i></a></li>
                </ul>
            </div>
        </div>
        <div class="copy-right">
            <p>Copyright &copy; 2024 Master Bakeology - All Rights Reserved.</p>
        </div>
    </footer>

     <!-- SCRIPT -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset("web/js/app.js")}}"></script>
</body>
</html>