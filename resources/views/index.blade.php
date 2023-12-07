<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset("web/css/style.css")}}">
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
                <a class="#home" href="#home">Home</a>
            </li>
            <li>
                <a href="#menu">Menu</a>
            </li>
            <li>
                <a href="{{url('login')}}">Login</a>
            </li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>

    <!-- HOME -->
    <div class="home" id="home">
        <div class="content">
            <h1>Welcome <span>Pastry</span> Lovers</h1>
            <p>At Masterbakeology, we believe that every delightful morsel we bake tells a unique story, crafted with love, passion, and the finest ingredients. As you step into our virtual bakery, you embark on a journey through the world of artisanal baked goods that is as indulgent as it is heartwarming.</p>
            <a href="{{url('login')}}"><button class="btn">ORDER NOW</button></a>
        </div>
        <div class="shape"></div>
    </div>

    <!-- MENU -->
    <div class="menu" id="menu">
        <h1 class="heading"><span> Menu </span></h1>
        <ul class="control">
            <li class="buttons button-active" data-filter="all">All</li>
            <li class="buttons" data-filter="cakes">Cakes</li>
            <li class="buttons" data-filter="breads">Breads</li>
            <li class="buttons" data-filter="pies">Pies</li>
            <li class="buttons" data-filter="meringues">Meringues</li>
        </ul>
        <div class="image-container">

            <div class="image cakes">
                <img src="web/images/cakesample.jpg" alt="">
                <a href="#">Cake</a>
            </div>
            <div class="image cakes">
                <img src="web/images/cakesample.jpg" alt="">
                <a href="#">Cake 2</a>
            </div>
            <div class="image cakes">
                <img src="web/images/cakesample.jpg" alt="">
                <a href="#">Cake 3</a>
            </div>

            <div class="image breads">
                <img src="web/images/cakesample.jpg" alt="">
                <a href="#">Bread</a>
            </div>
            <div class="image breads">
                <img src="web/images/cakesample.jpg" alt="">
                <a href="#">Bread 2</a>
            </div>
            <div class="image breads">
                <img src="web/images/cakesample.jpg" alt="">
                <a href="#">Bread 3</a>
            </div>

            <div class="image pies">
                <img src="web/images/cakesample.jpg" alt="">
                <a href="#">Pie</a>
            </div>
            <div class="image pies">
                <img src="web/images/cakesample.jpg" alt="">
                <a href="#">Pie 2</a>
            </div>
            
            <div class="image meringues">
                <img src="web/images/cakesample.jpg" alt="">
                <a href="#">Meringue</a>
            </div>
            <div class="image meringues">
                <img src="web/images/cakesample.jpg" alt="">
                <a href="#">Meringue 2</a>
            </div>
            <div class="image meringues">
                <img src="web/images/cakesample.jpg" alt="">
                <a href="#">Meringue 3</a>
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
            <p>Copyright &copy; 2021 Master Bakeology - All Rights Reserved.</p>
        </div>
    </footer>

    <!-- SCRIPT -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset("web/js/app.js")}}"></script>
</body>
</html>