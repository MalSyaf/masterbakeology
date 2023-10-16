<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset("web/css/style.css")}}">
    <title>Masterbakeology</title>
</head>
<body>
    <!-- NAVBAR -->
    <nav class="nav-container">
        <!-- <div class="logo">
            <img src="logo/logo.png" height="50" width="50">
        </div> -->
        <div class="name">
            <h4>Master Bakeology</h4>
        </div>
        <ul class="nav-links">
            <li>
                <a class="active" href="{{ url('/') }}">Home</a>
            </li>
            <li>
                <a href="{{ url('/') }}#menu">Menu</a>
            </li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>

    <!-- CONTACT -->
    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
        </div>
        <div class="contact-container">
            <div class="contact-info">
                <div class="box">
                    <div class="icon"><i class="fa fa-whatsapp" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>+60 12-683 8232 <br> +60 11-2131 2744</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>masterbakeology@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <form action="">
                    <h2>Send Message</h2>
                    <div class="input-box">
                        <input type="text" name="" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="input-box">
                        <input type="text" name="" required="required">
                        <span>Email</span>
                    </div>
                    <div class="input-box">
                        <textarea name="" id="" cols="30" rows="10" required="required"></textarea>
                        <span>Type Your Message</span>
                    </div>
                    <div class="input-box">
                        <input type="submit" name="" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </section>


    <!-- FOOTER -->
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
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="soc-media">
                <h2>Socials</h2>
                <ul class="socials">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.instagram.com/masterbakeology/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></i></a></li>
                </ul>
            </div>
        </div>
        <div class="copy-right">
            <p>Copyright &copy; 2021 Master Bakeology - All Rights Reserved.</p>
        </div>
    </footer>
    
    <!-- SCRIPT -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset("web/js/app.js")}}"></script>
</body>
</html>