<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <!-- animation css files -->
    <link rel="stylesheet" href="/static/admin/css/animation-aos.css">
    <link href='/static/admin/css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
    <!-- //animation css files -->

    <!-- css files -->
    <link href="/static/admin/css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="/static/admin/css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="/static/admin/css/fontawesome-all.css" rel="stylesheet"><!-- fontawesome css -->
    <!-- //css files -->

    <!-- google fonts -->
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <!-- //google fonts -->

</head>
<body>

<!-- header -->
<header class="index-banner">
    <!-- nav -->
    <nav class="main-header">
        <div id="brand" data-aos="zoom-in-up">
            <div id="logo">
                <a href="index.html">
                    <i class="fab fa-blackberry"></i>
                </a>
            </div>
            <div id="word-mark">
                <h1>
                    <a href="">Landing</a>
                </h1>
            </div>
        </div>
        <div id="menu">
            <div id="menu-toggle">
                <div id="menu-icon">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>

    </nav>
    <!-- //nav -->
    <!-- banner -->
    <div class="banner layer" id="home">
        <div class="container">
            <div class="row banner-text">
                <div class="slider-info col-lg-8">
                    <div class="agileinfo-logo mt-5">
                        <h2 data-aos="fade-down">
                            <span class="fab fa-blackberry text-center"></span> Modern Solution -
                        </h2>
                    </div>
                    <h3 class="txt-w3_agile" data-aos="fade-down">Professional Landing Page </h3>
                    <a class="btn mt-4 mr-2 text-capitalize" data-aos="fade-up" href="#" data-toggle="modal" data-target="#exampleModalCenter1" role="button">read more</a>
                    <a class="btn mt-4 text-capitalize" data-aos="fade-up" href="#" data-toggle="modal" data-target="#exampleModal" role="button">watch video <i class="fas fa-play-circle"></i></a>
                </div>
                <div class="col-lg-4 col-md-8 mt-lg-0 mt-5 banner-form" data-aos="fade-left">
                    <h5><i class="fas mr-2 fa-laptop"></i> Register Now</h5>
                    <form action="#" class="mt-4" method="post">
                        <input class="form-control" type="text" name="Name" placeholder="Name" required="" />
                        <input class="form-control" type="password" name="Number" placeholder="Password" required="" />
                        <input class="form-control text-capitalize" type="submit" value="登录">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- //banner -->
</header>
<!-- //header -->

<!--//Login-->

<!-- js -->
<script src="/static/admin/js/jquery-2.2.3.min.js"></script>
<script src="/static/admin/js/bootstrap.js"></script>
<!-- //js -->

<!-- animation js -->
<script src='/static/admin/js/aos.js'></script>
<script>
    AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    });

</script>
<!-- //animation js -->

<!-- testimonials  Responsiveslides -->
<script src="/static/admin/js/responsiveslides.min.js"></script>
<script>
    // You can also use"$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider3").responsiveSlides({
            auto: true,
            pager: true,
            nav: false,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<!-- //testimonials  Responsiveslides -->

<!-- sticky nav bar-->
<script>
    $(() => {

        //On Scroll Functionality
        $(window).scroll(() => {
            var windowTop = $(window).scrollTop();
            windowTop > 100 ? $('nav').addClass('navShadow') : $('nav').removeClass('navShadow');
            windowTop > 100 ? $('ul.nav-agile').css('top', '50px') : $('ul.nav-agile').css('top', '160px');
        });

        //Click Logo To Scroll To Top
        $('#logo').on('click', () => {
            $('html,body').animate({
                scrollTop: 0
            }, 500);
        });

        /*
         //Smooth Scrolling Using Navigation Menu
         $('a[href*="#"]').on('click', function (e) {
           $('html,body').animate({
             scrollTop: $($(this).attr('href')).offset().top - 100
           }, 500);
           e.preventDefault();
         });
        */

        //Toggle Menu
        $('#menu-toggle').on('click', () => {
            $('#menu-toggle').toggleClass('closeMenu');
            $('ul').toggleClass('showMenu');

            $('li').on('click', () => {
                $('ul').removeClass('showMenu');
                $('#menu-toggle').removeClass('closeMenu');
            });
        });

    });
</script>
<!-- //sticky nav bar -->

<script src="/static/admin/js/smoothscroll.js"></script><!-- Smooth scrolling -->

<!-- start-smoth-scrolling -->
<script src="/static/admin/js/move-top.js"></script>
<script src="/static/admin/js/easing.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });
</script>
<script>
    $(document).ready(function () {
        /*
        var defaults = {
              containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
         };
        */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!-- //end-smoth-scrolling -->

</body>
</html>
