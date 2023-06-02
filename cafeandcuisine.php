<?php include 'config.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Progati Group</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body style="background-color: black;">

    <!-- ############################## Header Section ############################## -->
    <header id="header">

        <div class="container-fluid">

            <div id="logo" class="pull-left">
                <style>
                    .custom_header_logo {
                        width: 7rem;
                        height: 60px;
                        margin-top: -1rem !important;
                        margin-left: -4rem !important;
                    }

                    @media only screen and (max-width: 480px) {
                        .custom_header_logo {
                            width: 6rem;
                            margin-top: -23px !important;
                            max-height: 5rem !important;
                            margin-left: -1rem !important;
                        }
                    }
                </style>
                <a href="index.php"><img src="img/logo.png" alt="" title="" class="custom_header_logo" /></a>
            </div>


            <nav id="nav-menu-container">

                <ul class="nav-menu">

                    <li class="menu-active"><a href="/">Home</a></li>


                    <li class="menu-has-children"><a href="#!">About Progati</a>
                        <ul>
                            <li><a href="about_us.php">About Us</a></li>
                            <li><a href="message.php#chairman">Chairman's Message</a></li>
                            <li><a href="message.php#md">MD's Message</a></li>
                            <li><a href="message.php#ceo">CEO's Message</a></li>
                            <!--<li><a href="about_us.php#mission">Mission & Vission</a></li>-->
                        </ul>
                    </li>


                    <li><a href="our_companies.php">Our Companies</a></li>


                    <li><a href="product.php">Product</a></li>


                    <li class="menu-has-children"><a href="#!">Media</a>
                        <ul>
                            <li><a href="photo_gallery.php">Photo Gallery</a></li>
                            <li><a href="video_gallery.php">Video Gallery</a></li>

                        </ul>
                    </li>


                    <li><a href="contact_us.php">Contact</a></li>

                </ul>

            </nav><!-- #nav-menu-container -->

        </div>

    </header>



    <!-- ############################## Cover Section ############################## -->
    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <div class="row">

                        <div class="col-lg-12 col-md-12 wow fadeInUp">
                            <div class="member">
                                <img src="img/cafe_details.jpg" class="img-responsive" alt="" width="100%" height="500px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <main id="main" style="background: black;">

        <style>

            @media only screen and (max-width: 480px) {
                hr {
                margin-left: 3rem !important;
            }
            }
        </style>

        <!-- ############################## About Section ############################## -->
        <section id="services" style="background-color: #000; padding-bottom: 0;">

            <div class="container">

                <div class="row">

                    <style>
                        .section-header h3::before {
                            display: none;
                        }

                        .section-header h3::after {
                            display: none;
                        }
                    </style>

                    <div class="col-lg-12 col-md-12 box wow bounceInUp" data-wow-duration="2.4s">
                        <header class="section-header wow fadeInUp">
                            <h3 class="box wow bounceInUp" style="color: #fff;">About Progati Café & Multi Cuisine</h3>
                        </header>

                        <div class="row mb-3">

                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                                <img src="img/cafee01.jpg" class="testimonial-img" alt="" style="width: 100%; height: 16rem; border-radius: 5px;">
                            </div>

                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                                <img src="img/cafee02.jpg" class="testimonial-img" alt="" style="width: 100%; height: 16rem; border-radius: 5px;">
                            </div>

                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                                <img src="img/cafee03.jpg" class="testimonial-img" alt="" style="width: 100%; height: 16rem; border-radius: 5px;">
                            </div>

                        </div>

                        <p style="text-align:justify; color: #fff; margin-top: 2rem;">
                            The journey of Pragati Cafe started in 2020. Progati Café and Multi Cuisine serves the best multi cuisine and is the only café in town Gopalgonj. It has the best chef in the business and the café gained traction soon after it opened. Pragati Cafe procures the best quality ingredients from the market. Providing fresh and very tasty food to the guests with best execution. The exceptional service of our staff has kept us up to date as one of the most prominent fine dining restaurants in Gopalganj. Our goal was and always is to satisfy the taste of customers. We want to launch it as an elite cafe across the country.
                        </p>
                    </div>


                </div>

            </div>

        </section>



        <!-- ############################## Appetizer Section ############################## -->
        <section style="background-color: black;">

            <div class="container">

                <div class="col-md-12 wow fadeInUp">
                    <header class="section-header wow fadeInUp" style="margin-top: 3rem;">
                        <h4 style="text-align:center;font-size: 2rem;font-weight: 500;text-transform: uppercase;color: white;">
                            Appetizer</h4>
                    </header>
                </div>


                <div class="row about-cols" style="margin: 3rem 0;">

                    <div class="col-md-6 wow fadeInUp">
                        <div class="about-col">
                            <div style="padding-top: 1rem;">
                                <div class="row">
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2" style="padding: 0;">
                                        <h1 style="padding-left: 2rem;">01.</h1>
                                    </div>
                                    <div class="col-5 col-sm-5 col-md-5 col-lg-5" style="padding: 0;">
                                        <hr style="border: 1px solid;">
                                    </div>
                                </div>
                            </div>
                            <header class="section-header wow fadeInUp">
                                <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem;"><span style="color: orange;">Fried</span> <br> Calamari</h5>
                            </header>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.
                            </p>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        ৳ 545
                                    </h5>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        Serving 2 Persons
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1 wow fadeInUp"></div>

                    <div class="col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                        <img src="img/p-calamari-2.jpg" alt="" width="100%" height="350px" style="border-radius: 5px;">
                    </div>

                </div>


                <div class="row about-cols" style="margin: 3rem 0;">

                    <div class="col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                        <img src="img/p-shrimp.jpeg" alt="" width="100%" height="350px" style="border-radius: 5px;">
                    </div>

                    <div class="col-md-1 wow fadeInUp"></div>

                    <div class="col-md-6 wow fadeInUp">
                        <div class="about-col">
                            <div style="padding-top: 1rem;">
                                <div class="row">
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2" style="padding: 0;">
                                        <h1 style="padding-left: 2rem;">02.</h1>
                                    </div>
                                    <div class="col-5 col-sm-5 col-md-5 col-lg-5" style="padding: 0;">
                                        <hr style="border: 1px solid;">
                                    </div>
                                </div>
                            </div>
                            <header class="section-header wow fadeInUp">
                                <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem;"><span style="color: orange;">Golden</span> <br> Shrimp</h5>
                            </header>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.
                            </p>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        ৳ 445
                                    </h5>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        Serving 2 Persons
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>



        <!-- ############################## Salad Section ############################## -->
        <section style="background-color: black;">

            <div class="container">

                <div class="col-md-12 wow fadeInUp">
                    <header class="section-header wow fadeInUp" style="margin-top: 3rem;">
                        <h4 style="text-align:center;font-size: 2rem;font-weight: 500;text-transform: uppercase;color: white;">
                            Salad</h4>
                    </header>
                </div>


                <div class="row about-cols" style="margin: 3rem 0;">

                    <div class="col-md-6 wow fadeInUp">
                        <div class="about-col">
                            <div style="padding-top: 1rem;">
                                <div class="row">
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2" style="padding: 0;">
                                        <h1 style="padding-left: 2rem;">01.</h1>
                                    </div>
                                    <div class="col-5 col-sm-5 col-md-5 col-lg-5" style="padding: 0;">
                                        <hr style="border: 1px solid;">
                                    </div>
                                </div>
                            </div>
                            <header class="section-header wow fadeInUp">
                                <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem;"><span style="color: orange;">Green</span> <br> Salad</h5>
                            </header>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.
                            </p>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        ৳ 545
                                    </h5>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        Serving 3 Persons
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1 wow fadeInUp"></div>

                    <div class="col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                        <img src="img/p-salad.jpg" alt="" width="100%" height="350px" style="border-radius: 5px;">
                    </div>

                </div>


                <div class="row about-cols" style="margin: 3rem 0;">

                    <div class="col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                        <img src="img/p-raita.jpg" alt="" width="100%" height="350px" style="border-radius: 5px;">
                    </div>

                    <div class="col-md-1 wow fadeInUp"></div>

                    <div class="col-md-6 wow fadeInUp">
                        <div class="about-col">
                            <div style="padding-top: 1rem;">
                                <div class="row">
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2" style="padding: 0;">
                                        <h1 style="padding-left: 2rem;">02.</h1>
                                    </div>
                                    <div class="col-5 col-sm-5 col-md-5 col-lg-5" style="padding: 0;">
                                        <hr style="border: 1px solid;">
                                    </div>
                                </div>
                            </div>
                            <header class="section-header wow fadeInUp">
                                <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem;"><span style="color: orange;">Raita</span> <br> </h5>
                            </header>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.
                            </p>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        ৳ 545
                                    </h5>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        Serving 3 Persons
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>



        <!-- ############################## Soup Section ############################## -->
        <section style="background-color: black;">

            <div class="container">

                <div class="col-md-12 wow fadeInUp">
                    <header class="section-header wow fadeInUp" style="margin-top: 3rem;">
                        <h4 style="text-align:center;font-size: 2rem;font-weight: 500;text-transform: uppercase;color: white;">
                            Soup</h4>
                    </header>
                </div>


                <div class="row about-cols" style="margin: 3rem 0;">

                    <div class="col-md-6 wow fadeInUp">
                        <div class="about-col">
                            <div style="padding-top: 1rem;">
                                <div class="row">
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2" style="padding: 0;">
                                        <h1 style="padding-left: 2rem;">01.</h1>
                                    </div>
                                    <div class="col-5 col-sm-5 col-md-5 col-lg-5" style="padding: 0;">
                                        <hr style="border: 1px solid;">
                                    </div>
                                </div>
                            </div>
                            <header class="section-header wow fadeInUp">
                                <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem;"><span style="color: orange;">Thai</span> <br> Thick Soup</h5>
                            </header>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.
                            </p>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        ৳ 445
                                    </h5>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        Serving 3 Persons
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1 wow fadeInUp"></div>

                    <div class="col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                        <img src="img/p-Thai.jpg" alt="" width="100%" height="350px" style="border-radius: 5px;">
                    </div>

                </div>


                <div class="row about-cols" style="margin: 3rem 0;">

                    <div class="col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                        <img src="img/p-chiken-soup.jpg" alt="" width="100%" height="350px" style="border-radius: 5px;">
                    </div>

                    <div class="col-md-1 wow fadeInUp"></div>

                    <div class="col-md-6 wow fadeInUp">
                        <div class="about-col">
                            <div style="padding-top: 1rem;">
                                <div class="row">
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2" style="padding: 0;">
                                        <h1 style="padding-left: 2rem;">02.</h1>
                                    </div>
                                    <div class="col-5 col-sm-5 col-md-5 col-lg-5" style="padding: 0;">
                                        <hr style="border: 1px solid;">
                                    </div>
                                </div>
                            </div>
                            <header class="section-header wow fadeInUp">
                                <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem;"><span style="color: orange;">Chicken</span> <br> Soup</h5>
                            </header>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.
                            </p>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        ৳ 295
                                    </h5>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        Serving 3 Persons
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>



        <!-- ############################## Chicken Section ############################## -->
        <section style="background-color: black;">

            <div class="container">

                <div class="col-md-12 wow fadeInUp">
                    <header class="section-header wow fadeInUp" style="margin-top: 3rem;">
                        <h4 style="text-align:center;font-size: 2rem;font-weight: 500;text-transform: uppercase;color: white;">
                            Chicken</h4>
                    </header>
                </div>


                <div class="row about-cols" style="margin: 3rem 0;">

                    <div class="col-md-6 wow fadeInUp">
                        <div class="about-col">
                            <div style="padding-top: 1rem;">
                                <div class="row">
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2" style="padding: 0;">
                                        <h1 style="padding-left: 2rem;">01.</h1>
                                    </div>
                                    <div class="col-5 col-sm-5 col-md-5 col-lg-5" style="padding: 0;">
                                        <hr style="border: 1px solid;">
                                    </div>
                                </div>
                            </div>
                            <header class="section-header wow fadeInUp">
                                <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem;"><span style="color: orange;">Chicken </span> <br> Lolipop</h5>
                            </header>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.
                            </p>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        ৳ 195
                                    </h5>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        Serving 3 Persons
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1 wow fadeInUp"></div>

                    <div class="col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                        <img src="img/cafe_01.jpg" alt="" width="100%" height="350px" style="border-radius: 5px;">
                    </div>

                </div>


                <div class="row about-cols" style="margin: 3rem 0;">

                    <div class="col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                        <img src="img/cafe_03.jpg" alt="" width="100%" height="350px" style="border-radius: 5px;">
                    </div>

                    <div class="col-md-1 wow fadeInUp"></div>

                    <div class="col-md-6 wow fadeInUp">
                        <div class="about-col">
                            <div style="padding-top: 1rem;">
                                <div class="row">
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2" style="padding: 0;">
                                        <h1 style="padding-left: 2rem;">02.</h1>
                                    </div>
                                    <div class="col-5 col-sm-5 col-md-5 col-lg-5" style="padding: 0;">
                                        <hr style="border: 1px solid;">
                                    </div>
                                </div>
                            </div>
                            <header class="section-header wow fadeInUp">
                                <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem;"><span style="color: orange;">Chicken</span> <br> Burger</h5>
                            </header>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.
                            </p>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        ৳ 149
                                    </h5>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        Serving 1 Persons
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>



        <!-- ############################## Beef Section ############################## -->
        <section style="background-color: black;">

            <div class="container">

                <div class="col-md-12 wow fadeInUp">
                    <header class="section-header wow fadeInUp" style="margin-top: 3rem;">
                        <h4 style="text-align:center;font-size: 2rem;font-weight: 500;text-transform: uppercase;color: white;">
                            Beef</h4>
                    </header>
                </div>


                <div class="row about-cols" style="margin: 3rem 0;">

                    <div class="col-md-6 wow fadeInUp">
                        <div class="about-col">
                            <div style="padding-top: 1rem;">
                                <div class="row">
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2" style="padding: 0;">
                                        <h1 style="padding-left: 2rem;">01.</h1>
                                    </div>
                                    <div class="col-5 col-sm-5 col-md-5 col-lg-5" style="padding: 0;">
                                        <hr style="border: 1px solid;">
                                    </div>
                                </div>
                            </div>
                            <header class="section-header wow fadeInUp">
                                <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem;"><span style="color: orange;">Beef</span> <br> Chilli Onion</h5>
                            </header>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.
                            </p>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        ৳ 595
                                    </h5>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        Serving 3 Persons
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1 wow fadeInUp"></div>

                    <div class="col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                        <img src="img/p-beef.jpg" alt="" width="100%" height="350px" style="border-radius: 5px;">
                    </div>

                </div>


                <div class="row about-cols" style="margin: 3rem 0;">

                    <div class="col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                        <img src="img/p-Sizzling-Beef-Recipe.jpg" alt="" width="100%" height="350px" style="border-radius: 5px;">
                    </div>

                    <div class="col-md-1 wow fadeInUp"></div>

                    <div class="col-md-6 wow fadeInUp">
                        <div class="about-col">
                            <div style="padding-top: 1rem;">
                                <div class="row">
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2" style="padding: 0;">
                                        <h1 style="padding-left: 2rem;">02.</h1>
                                    </div>
                                    <div class="col-5 col-sm-5 col-md-5 col-lg-5" style="padding: 0;">
                                        <hr style="border: 1px solid;">
                                    </div>
                                </div>
                            </div>
                            <header class="section-header wow fadeInUp">
                                <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem;"><span style="color: orange;">Beef</span> <br> Szilling</h5>
                            </header>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.
                            </p>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        ৳ 545
                                    </h5>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        Serving 3 Persons
                                    </h5>
                                </div>
                            </div>>
                        </div>
                    </div>

                </div>

            </div>

        </section>



        <!-- ############################## Fish / Prawn Section ############################## -->
        <section style="background-color: black;">

            <div class="container">

                <div class="col-md-12 wow fadeInUp">
                    <header class="section-header wow fadeInUp" style="margin-top: 3rem;">
                        <h4 style="text-align:center;font-size: 2rem;font-weight: 500;text-transform: uppercase;color: white;">
                            Fish / Prawn</h4>
                    </header>
                </div>


                <div class="row about-cols" style="margin: 3rem 0;">

                    <div class="col-md-6 wow fadeInUp">
                        <div class="about-col">
                            <div style="padding-top: 1rem;">
                                <div class="row">
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2" style="padding: 0;">
                                        <h1 style="padding-left: 2rem;">01.</h1>
                                    </div>
                                    <div class="col-5 col-sm-5 col-md-5 col-lg-5" style="padding: 0;">
                                        <hr style="border: 1px solid;">
                                    </div>
                                </div>
                            </div>
                            <header class="section-header wow fadeInUp">
                                <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem;"><span style="color: orange;">Fish </span> <br> fry red chilli</h5>
                            </header>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.
                            </p>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        ৳ 445
                                    </h5>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        Serving 3 Persons
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1 wow fadeInUp"></div>

                    <div class="col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                        <img src="img/p-fish-dry.jpg" alt="" width="100%" height="350px" style="border-radius: 5px;">
                    </div>

                </div>


                <div class="row about-cols" style="margin: 3rem 0;">

                    <div class="col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                        <img src="img/p-prawn.png" alt="" width="100%" height="350px" style="border-radius: 5px;">
                    </div>

                    <div class="col-md-1 wow fadeInUp"></div>

                    <div class="col-md-6 wow fadeInUp">
                        <div class="about-col">
                            <div style="padding-top: 1rem;">
                                <div class="row">
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2" style="padding: 0;">
                                        <h1 style="padding-left: 2rem;">02.</h1>
                                    </div>
                                    <div class="col-5 col-sm-5 col-md-5 col-lg-5" style="padding: 0;">
                                        <hr style="border: 1px solid;">
                                    </div>
                                </div>
                            </div>
                            <header class="section-header wow fadeInUp">
                                <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem;"><span style="color: orange;">Greenn</span> <br> Garlic Praw</h5>
                            </header>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.
                            </p>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        ৳ 545
                                    </h5>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        Serving 3 Persons
                                    </h5>
                                </div>
                            </div>>
                        </div>
                    </div>

                </div>

            </div>

        </section>



        <!-- ############################## Vegetable Section ############################## -->
        <section style="background-color: black;">

            <div class="container">

                <div class="col-md-12 wow fadeInUp">
                    <header class="section-header wow fadeInUp" style="margin-top: 3rem;">
                        <h4 style="text-align:center;font-size: 2rem;font-weight: 500;text-transform: uppercase;color: white;">
                            Vegetable</h4>
                    </header>
                </div>


                <div class="row about-cols" style="margin: 3rem 0;">

                    <div class="col-md-6 wow fadeInUp">
                        <div class="about-col">
                            <div style="padding-top: 1rem;">
                                <div class="row">
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2" style="padding: 0;">
                                        <h1 style="padding-left: 2rem;">01.</h1>
                                    </div>
                                    <div class="col-5 col-sm-5 col-md-5 col-lg-5" style="padding: 0;">
                                        <hr style="border: 1px solid;">
                                    </div>
                                </div>
                            </div>
                            <header class="section-header wow fadeInUp">
                                <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem;"><span style="color: orange;">Bankok</span> <br> gstyle vegetables</h5>
                            </header>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.
                            </p>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        ৳ 395
                                    </h5>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        Serving 3 Persons
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1 wow fadeInUp"></div>

                    <div class="col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                        <img src="img/p-bankok-veg.jpg" alt="" width="100%" height="350px" style="border-radius: 5px;">
                    </div>

                </div>


                <div class="row about-cols" style="margin: 3rem 0;">

                    <div class="col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                        <img src="img/p-thai-veg.jpg" alt="" width="100%" height="350px" style="border-radius: 5px;">
                    </div>

                    <div class="col-md-1 wow fadeInUp"></div>

                    <div class="col-md-6 wow fadeInUp">
                        <div class="about-col">
                            <div style="padding-top: 1rem;">
                                <div class="row">
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2" style="padding: 0;">
                                        <h1 style="padding-left: 2rem;">02.</h1>
                                    </div>
                                    <div class="col-5 col-sm-5 col-md-5 col-lg-5" style="padding: 0;">
                                        <hr style="border: 1px solid;">
                                    </div>
                                </div>
                            </div>
                            <header class="section-header wow fadeInUp">
                                <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem;"><span style="color: orange;">Thai</span> <br> Chicken Vegetables</h5>
                            </header>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.
                            </p>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        ৳ 395
                                    </h5>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        Serving 3 Persons
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>



        <!-- ############################## Rice Section ############################## -->
        <section style="background-color: black;">

            <div class="container">

                <div class="col-md-12 wow fadeInUp">
                    <header class="section-header wow fadeInUp" style="margin-top: 3rem;">
                        <h4 style="text-align:center;font-size: 2rem;font-weight: 500;text-transform: uppercase;color: white;">
                            Rice</h4>
                    </header>
                </div>


                <div class="row about-cols" style="margin: 3rem 0;">

                    <div class="col-md-6 wow fadeInUp">
                        <div class="about-col">
                            <div style="padding-top: 1rem;">
                                <div class="row">
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2" style="padding: 0;">
                                        <h1 style="padding-left: 2rem;">01.</h1>
                                    </div>
                                    <div class="col-5 col-sm-5 col-md-5 col-lg-5" style="padding: 0;">
                                        <hr style="border: 1px solid;">
                                    </div>
                                </div>
                            </div>
                            <header class="section-header wow fadeInUp">
                                <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem;"><span style="color: orange;">Progati </span> <br> Special Fried Rice</h5>
                            </header>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.
                            </p>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        ৳ 425
                                    </h5>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        Serving 3 Persons
                                    </h5>
                                </div>
                            </div>>
                        </div>
                    </div>

                    <div class="col-md-1 wow fadeInUp"></div>

                    <div class="col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                        <img src="img/p-sp-rice.jpg" alt="" width="100%" height="350px" style="border-radius: 5px;">
                    </div>

                </div>


                <div class="row about-cols" style="margin: 3rem 0;">

                    <div class="col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                        <img src="img/p-chi-rice.jpg" alt="" width="100%" height="350px" style="border-radius: 5px;">
                    </div>

                    <div class="col-md-1 wow fadeInUp"></div>

                    <div class="col-md-6 wow fadeInUp">
                        <div class="about-col">
                            <div style="padding-top: 1rem;">
                                <div class="row">
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2" style="padding: 0;">
                                        <h1 style="padding-left: 2rem;">02.</h1>
                                    </div>
                                    <div class="col-5 col-sm-5 col-md-5 col-lg-5" style="padding: 0;">
                                        <hr style="border: 1px solid;">
                                    </div>
                                </div>
                            </div>
                            <header class="section-header wow fadeInUp">
                                <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem;"><span style="color: orange;">Chicken</span> <br> Fried Rice</h5>
                            </header>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.
                            </p>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        ৳ 395
                                    </h5>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        Serving 3 Persons
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>


        <!--<section style="background-color: black;">-->

        <!--    <div class="container">-->

        <!--        <div class="col-md-12 wow fadeInUp">-->
        <!--            <header class="section-header wow fadeInUp" style="margin-top: 3rem;">-->
        <!--                <h4 style="text-align:center;font-size: 2rem;font-weight: 500;text-transform: uppercase;color: white;">-->
        <!--                    Noodles</h4>-->
        <!--            </header>-->
        <!--        </div>-->


        <!--        <div class="row about-cols" style="margin: 3rem 0;">-->

        <!--            <div class="col-md-6 wow fadeInUp">-->
        <!--                <div class="about-col">-->
        <!--                    <div style="padding-top: 1rem;">-->
        <!--                        <div class="row">-->
        <!--                            <div class="col-2 col-sm-2 col-md-2 col-lg-2" style="padding: 0;">-->
        <!--                                <h1 style="padding-left: 2rem;">01.</h1>-->
        <!--                            </div>-->
        <!--                            <div class="col-5 col-sm-5 col-md-5 col-lg-5" style="padding: 0;">-->
        <!--                                <hr style="border: 1px solid;">-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <header class="section-header wow fadeInUp">-->
        <!--                        <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem;"><span style="color: orange;">Garlic</span> <br> green beans</h5>-->
        <!--                    </header>-->
        <!--                    <p>-->
        <!--                        Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore-->
        <!--                        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut-->
        <!--                        aliquip ex ea commodo consequat.-->
        <!--                    </p>-->
        <!--                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">-->
        <!--                        $ 12.00</h5>-->
        <!--                    <div id="call-to-action" style="background: none;padding: 0 0 2rem 1rem;">-->
        <!--                        <a class="cta-btn" href="#" style="color: #fff;border: 1px solid #fff;border-radius: 0px;background: black;">SEE-->
        <!--                            OUR SELECTION</a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->

        <!--            <div class="col-md-1 wow fadeInUp"></div>-->

        <!--            <div class="col-md-5 wow fadeInUp" data-wow-delay="0.1s">-->
        <!--                <img src="img/download2.jpeg" alt="" width="100%" height="350px" style="border-radius: 5px;">-->
        <!--            </div>-->

        <!--        </div>-->


        <!--        <div class="row about-cols" style="margin: 3rem 0;">-->

        <!--            <div class="col-md-5 wow fadeInUp" data-wow-delay="0.1s">-->
        <!--                <img src="img/download3.jpeg" alt="" width="100%" height="350px" style="border-radius: 5px;">-->
        <!--            </div>-->

        <!--            <div class="col-md-1 wow fadeInUp"></div>-->

        <!--            <div class="col-md-6 wow fadeInUp">-->
        <!--                <div class="about-col">-->
        <!--                    <div style="padding-top: 1rem;">-->
        <!--                        <div class="row">-->
        <!--                            <div class="col-2 col-sm-2 col-md-2 col-lg-2" style="padding: 0;">-->
        <!--                                <h1 style="padding-left: 2rem;">02.</h1>-->
        <!--                            </div>-->
        <!--                            <div class="col-5 col-sm-5 col-md-5 col-lg-5" style="padding: 0;">-->
        <!--                                <hr style="border: 1px solid;">-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <header class="section-header wow fadeInUp">-->
        <!--                        <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem;"><span style="color: orange;">Garlic</span> <br> green beans</h5>-->
        <!--                    </header>-->
        <!--                    <p>-->
        <!--                        Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore-->
        <!--                        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut-->
        <!--                        aliquip ex ea commodo consequat.-->
        <!--                    </p>-->
        <!--                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">-->
        <!--                        $ 12.00</h5>-->
        <!--                    <div id="call-to-action" style="background: none;padding: 0 0 2rem 1rem;">-->
        <!--                        <a class="cta-btn" href="#" style="color: #fff;border: 1px solid #fff;border-radius: 0px;background: black;">SEE-->
        <!--                            OUR SELECTION</a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->

        <!--        </div>-->

        <!--    </div>-->

        <!--</section>-->



        <!-- ############################## Steak Section ############################## -->
        <section style="background-color: black;">

            <div class="container">

                <div class="col-md-12 wow fadeInUp">
                    <header class="section-header wow fadeInUp" style="margin-top: 3rem;">
                        <h4 style="text-align:center;font-size: 2rem;font-weight: 500;text-transform: uppercase;color: white;">
                            Steak</h4>
                    </header>
                </div>


                <div class="row about-cols" style="margin: 3rem 0;">

                    <div class="col-md-6 wow fadeInUp">
                        <div class="about-col">
                            <div style="padding-top: 1rem;">
                                <div class="row">
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2" style="padding: 0;">
                                        <h1 style="padding-left: 2rem;">01.</h1>
                                    </div>
                                    <div class="col-5 col-sm-5 col-md-5 col-lg-5" style="padding: 0;">
                                        <hr style="border: 1px solid;">
                                    </div>
                                </div>
                            </div>
                            <header class="section-header wow fadeInUp">
                                <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem;"><span style="color: orange;">T-Bone</span> <br> Steak</h5>
                            </header>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.
                            </p>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        ৳ 1595
                                    </h5>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        Serving 4 Persons
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1 wow fadeInUp"></div>

                    <div class="col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                        <img src="img/p-t-bone.jpeg" alt="" width="100%" height="350px" style="border-radius: 5px;">
                    </div>

                </div>


                <div class="row about-cols" style="margin: 3rem 0;">

                    <div class="col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                        <img src="img/p-lamp-chop.JPG" alt="" width="100%" height="350px" style="border-radius: 5px;">
                    </div>

                    <div class="col-md-1 wow fadeInUp"></div>

                    <div class="col-md-6 wow fadeInUp">
                        <div class="about-col">
                            <div style="padding-top: 1rem;">
                                <div class="row">
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2" style="padding: 0;">
                                        <h1 style="padding-left: 2rem;">02.</h1>
                                    </div>
                                    <div class="col-5 col-sm-5 col-md-5 col-lg-5" style="padding: 0;">
                                        <hr style="border: 1px solid;">
                                    </div>
                                </div>
                            </div>
                            <header class="section-header wow fadeInUp">
                                <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem;"><span style="color: orange;">Lamb</span> <br> Chop</h5>
                            </header>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.
                            </p>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        ৳ 1395
                                    </h5>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        Serving 4 Persons
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>



        <!-- ############################## Kabab Section ############################## -->
        <section style="background-color: black;">

            <div class="container">

                <div class="col-md-12 wow fadeInUp">
                    <header class="section-header wow fadeInUp" style="margin-top: 3rem;">
                        <h4 style="text-align:center;font-size: 2rem;font-weight: 500;text-transform: uppercase;color: white;">
                            Kabab</h4>
                    </header>
                </div>


                <div class="row about-cols" style="margin: 3rem 0;">

                    <div class="col-md-6 wow fadeInUp">
                        <div class="about-col">
                            <div style="padding-top: 1rem;">
                                <div class="row">
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2" style="padding: 0;">
                                        <h1 style="padding-left: 2rem;">01.</h1>
                                    </div>
                                    <div class="col-5 col-sm-5 col-md-5 col-lg-5" style="padding: 0;">
                                        <hr style="border: 1px solid;">
                                    </div>
                                </div>
                            </div>
                            <header class="section-header wow fadeInUp">
                                <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem;"><span style="color: orange;">Chicken</span> <br> Tikka Kabab</h5>
                            </header>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.
                            </p>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        ৳ 225
                                    </h5>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        Serving 2 Persons
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1 wow fadeInUp"></div>

                    <div class="col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                        <img src="img/p-chi-kabab.jpg" alt="" width="100%" height="350px" style="border-radius: 5px;">
                    </div>

                </div>


                <div class="row about-cols" style="margin: 3rem 0;">

                    <div class="col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                        <img src="img/p-Chicken-Boti-Kabab-6.jpeg" alt="" width="100%" height="350px" style="border-radius: 5px;">
                    </div>

                    <div class="col-md-1 wow fadeInUp"></div>

                    <div class="col-md-6 wow fadeInUp">
                        <div class="about-col">
                            <div style="padding-top: 1rem;">
                                <div class="row">
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2" style="padding: 0;">
                                        <h1 style="padding-left: 2rem;">02.</h1>
                                    </div>
                                    <div class="col-5 col-sm-5 col-md-5 col-lg-5" style="padding: 0;">
                                        <hr style="border: 1px solid;">
                                    </div>
                                </div>
                            </div>
                            <header class="section-header wow fadeInUp">
                                <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem;"><span style="color: orange;">Chicken</span> <br> Boti Kabab</h5>
                            </header>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.
                            </p>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        ৳ 295
                                    </h5>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        Serving 2 Persons
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>



        <!-- ##############################  Naan / Paratha Section ############################## -->
        <section style="background-color: black;">

            <div class="container">

                <div class="col-md-12 wow fadeInUp">
                    <header class="section-header wow fadeInUp" style="margin-top: 3rem;">
                        <h4 style="text-align:center;font-size: 2rem;font-weight: 500;text-transform: uppercase;color: white;">
                            Naan / Paratha</h4>
                    </header>
                </div>


                <div class="row about-cols" style="margin: 3rem 0;">

                    <div class="col-md-6 wow fadeInUp">
                        <div class="about-col">
                            <div style="padding-top: 1rem;">
                                <div class="row">
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2" style="padding: 0;">
                                        <h1 style="padding-left: 2rem;">01.</h1>
                                    </div>
                                    <div class="col-5 col-sm-5 col-md-5 col-lg-5" style="padding: 0;">
                                        <hr style="border: 1px solid;">
                                    </div>
                                </div>
                            </div>
                            <header class="section-header wow fadeInUp">
                                <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem;"><span style="color: orange;">Garlic</span> <br> Naan</h5>
                            </header>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.
                            </p>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        ৳ 55
                                    </h5>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        Serving 1 Persons
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1 wow fadeInUp"></div>

                    <div class="col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                        <img src="img/p-Garlic-naan-bread-5.jpg" alt="" width="100%" height="350px" style="border-radius: 5px;">
                    </div>

                </div>


                <div class="row about-cols" style="margin: 3rem 0;">

                    <div class="col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                        <img src="img/p-butter-nun.jpg" alt="" width="100%" height="350px" style="border-radius: 5px;">
                    </div>

                    <div class="col-md-1 wow fadeInUp"></div>

                    <div class="col-md-6 wow fadeInUp">
                        <div class="about-col">
                            <div style="padding-top: 1rem;">
                                <div class="row">
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2" style="padding: 0;">
                                        <h1 style="padding-left: 2rem;">02.</h1>
                                    </div>
                                    <div class="col-5 col-sm-5 col-md-5 col-lg-5" style="padding: 0;">
                                        <hr style="border: 1px solid;">
                                    </div>
                                </div>
                            </div>
                            <header class="section-header wow fadeInUp">
                                <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem;"><span style="color: orange;">Butter</span> <br> Naan</h5>
                            </header>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.
                            </p>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        ৳ 55
                                    </h5>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        Serving 1 Persons
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>



        <!-- ############################## Pizza / Pasta Section ############################## -->
        <section style="background-color: black;">

            <div class="container">

                <div class="col-md-12 wow fadeInUp">
                    <header class="section-header wow fadeInUp" style="margin-top: 3rem;">
                        <h4 style="text-align:center;font-size: 2rem;font-weight: 500;text-transform: uppercase;color: white;">
                            Pizza / Pasta</h4>
                    </header>
                </div>


                <div class="row about-cols" style="margin: 3rem 0;">

                    <div class="col-md-6 wow fadeInUp">
                        <div class="about-col">
                            <div style="padding-top: 1rem;">
                                <div class="row">
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2" style="padding: 0;">
                                        <h1 style="padding-left: 2rem;">01.</h1>
                                    </div>
                                    <div class="col-5 col-sm-5 col-md-5 col-lg-5" style="padding: 0;">
                                        <hr style="border: 1px solid;">
                                    </div>
                                </div>
                            </div>
                            <header class="section-header wow fadeInUp">
                                <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem;"><span style="color: orange;">Chicken</span> <br> Exotica</h5>
                            </header>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.
                            </p>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        ৳ 395/595/745
                                    </h5>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        Serving 2/4/6 Persons
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1 wow fadeInUp"></div>

                    <div class="col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                        <img src="img/p-pizza.jpg" alt="" width="100%" height="350px" style="border-radius: 5px;">
                    </div>

                </div>


                <div class="row about-cols" style="margin: 3rem 0;">

                    <div class="col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                        <img src="img/p-pizza.jpg" alt="" width="100%" height="350px" style="border-radius: 5px;">
                    </div>

                    <div class="col-md-1 wow fadeInUp"></div>

                    <div class="col-md-6 wow fadeInUp">
                        <div class="about-col">
                            <div style="padding-top: 1rem;">
                                <div class="row">
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2" style="padding: 0;">
                                        <h1 style="padding-left: 2rem;">02.</h1>
                                    </div>
                                    <div class="col-5 col-sm-5 col-md-5 col-lg-5" style="padding: 0;">
                                        <hr style="border: 1px solid;">
                                    </div>
                                </div>
                            </div>
                            <header class="section-header wow fadeInUp">
                                <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem;"><span style="color: orange;">Chicken</span> <br> Hawaiian</h5>
                            </header>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.
                            </p>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        ৳ 395/595/745
                                    </h5>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        Serving 2/4/6 Persons
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>



        <!-- ############################## Beverage / Fresh Juice Section ############################## -->
        <section style="background-color: black;">

            <div class="container">

                <div class="col-md-12 wow fadeInUp">
                    <header class="section-header wow fadeInUp" style="margin-top: 3rem;">
                        <h4 style="text-align:center;font-size: 2rem;font-weight: 500;text-transform: uppercase;color: white;">
                            Beverage / Fresh Juice</h4>
                    </header>
                </div>


                <div class="row about-cols" style="margin: 3rem 0;">

                    <div class="col-md-6 wow fadeInUp">
                        <div class="about-col">
                            <div style="padding-top: 1rem;">
                                <div class="row">
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2" style="padding: 0;">
                                        <h1 style="padding-left: 2rem;">01.</h1>
                                    </div>
                                    <div class="col-5 col-sm-5 col-md-5 col-lg-5" style="padding: 0;">
                                        <hr style="border: 1px solid;">
                                    </div>
                                </div>
                            </div>
                            <header class="section-header wow fadeInUp">
                                <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem;"><span style="color: orange;">Virgin</span> <br> Mojito</h5>
                            </header>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.
                            </p>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        ৳ 195
                                    </h5>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        Serving 1 Person
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1 wow fadeInUp"></div>

                    <div class="col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                        <img src="img/p-juice-1.jpg" alt="" width="100%" height="350px" style="border-radius: 5px;">
                    </div>

                </div>


                <div class="row about-cols" style="margin: 3rem 0;">

                    <div class="col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                        <img src="img/p-ice.jpg" alt="" width="100%" height="350px" style="border-radius: 5px;">
                    </div>

                    <div class="col-md-1 wow fadeInUp"></div>

                    <div class="col-md-6 wow fadeInUp">
                        <div class="about-col">
                            <div style="padding-top: 1rem;">
                                <div class="row">
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2" style="padding: 0;">
                                        <h1 style="padding-left: 2rem;">02.</h1>
                                    </div>
                                    <div class="col-5 col-sm-5 col-md-5 col-lg-5" style="padding: 0;">
                                        <hr style="border: 1px solid;">
                                    </div>
                                </div>
                            </div>
                            <header class="section-header wow fadeInUp">
                                <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem;"><span style="color: orange;">Ice</span> <br> Mocha</h5>
                            </header>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.
                            </p>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        ৳ 195
                                    </h5>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        Serving 1 Person
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>



        <!-- ############################## Breakfast Section ############################## -->
        <section style="background-color: black;">

            <div class="container">

                <div class="col-md-12 wow fadeInUp">
                    <header class="section-header wow fadeInUp" style="margin-top: 3rem;">
                        <h4 style="text-align:center;font-size: 2rem;font-weight: 500;text-transform: uppercase;color: white;">
                            Breakfast</h4>
                    </header>
                </div>


                <div class="row about-cols" style="margin: 3rem 0;">

                    <div class="col-md-6 wow fadeInUp">
                        <div class="about-col">
                            <div style="padding-top: 1rem;">
                                <div class="row">
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2" style="padding: 0;">
                                        <h1 style="padding-left: 2rem;">01.</h1>
                                    </div>
                                    <div class="col-5 col-sm-5 col-md-5 col-lg-5" style="padding: 0;">
                                        <hr style="border: 1px solid;">
                                    </div>
                                </div>
                            </div>
                            <header class="section-header wow fadeInUp">
                                <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem;"><span style="color: orange;">American</span> <br> chopsuey</h5>
                            </header>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.
                            </p>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        ৳ 185
                                    </h5>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        Serving 2 Persons
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1 wow fadeInUp"></div>

                    <div class="col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                        <img src="img/cafe_02.jpg" alt="" width="100%" height="350px" style="border-radius: 5px;">
                    </div>

                </div>


                <div class="row about-cols" style="margin: 3rem 0;">

                    <div class="col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                        <img src="img/p-Fried-Chicken-Sausage.jpg" alt="" width="100%" height="350px" style="border-radius: 5px;">
                    </div>

                    <div class="col-md-1 wow fadeInUp"></div>

                    <div class="col-md-6 wow fadeInUp">
                        <div class="about-col">
                            <div style="padding-top: 1rem;">
                                <div class="row">
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2" style="padding: 0;">
                                        <h1 style="padding-left: 2rem;">02.</h1>
                                    </div>
                                    <div class="col-5 col-sm-5 col-md-5 col-lg-5" style="padding: 0;">
                                        <hr style="border: 1px solid;">
                                    </div>
                                </div>
                            </div>
                            <header class="section-header wow fadeInUp">
                                <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem;"><span style="color: orange;">Chicken</span> <br> Sausage</h5>
                            </header>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.
                            </p>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        ৳ 195
                                    </h5>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        Serving 2 Persons
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>



        <!-- ############################## Platter Section ############################## -->
        <section style="background-color: black;">

            <div class="container">

                <div class="col-md-12 wow fadeInUp">
                    <header class="section-header wow fadeInUp" style="margin-top: 3rem;">
                        <h4 style="text-align:center;font-size: 2rem;font-weight: 500;text-transform: uppercase;color: white;">
                            Platter</h4>
                    </header>
                </div>


                <div class="row about-cols" style="margin: 3rem 0;">

                    <div class="col-md-6 wow fadeInUp">
                        <div class="about-col">
                            <div style="padding-top: 1rem;">
                                <div class="row">
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2" style="padding: 0;">
                                        <h1 style="padding-left: 2rem;">01.</h1>
                                    </div>
                                    <div class="col-5 col-sm-5 col-md-5 col-lg-5" style="padding: 0;">
                                        <hr style="border: 1px solid;">
                                    </div>
                                </div>
                            </div>
                            <header class="section-header wow fadeInUp">
                                <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem;"><span style="color: orange;">Garlic</span> <br> green beans</h5>
                            </header>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.
                            </p>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        ৳ 200
                                    </h5>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        Serving 1 Persons
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1 wow fadeInUp"></div>

                    <div class="col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                        <img src="img/p-platter-1.jpg" alt="" width="100%" height="350px" style="border-radius: 5px;">
                    </div>

                </div>


                <div class="row about-cols" style="margin: 3rem 0;">

                    <div class="col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                        <img src="img/p-platter-2.jpg" alt="" width="100%" height="350px" style="border-radius: 5px;">
                    </div>

                    <div class="col-md-1 wow fadeInUp"></div>

                    <div class="col-md-6 wow fadeInUp">
                        <div class="about-col">
                            <div style="padding-top: 1rem;">
                                <div class="row">
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2" style="padding: 0;">
                                        <h1 style="padding-left: 2rem;">02.</h1>
                                    </div>
                                    <div class="col-5 col-sm-5 col-md-5 col-lg-5" style="padding: 0;">
                                        <hr style="border: 1px solid;">
                                    </div>
                                </div>
                            </div>
                            <header class="section-header wow fadeInUp">
                                <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem;"><span style="color: orange;">Garlic</span> <br> green beans</h5>
                            </header>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.
                            </p>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        ৳ 220
                                    </h5>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5 style="margin-left:20px;font-size: 23px;font-weight: bold;padding-top: 1rem; color: orange;">
                                        Serving 1 Persons
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>



        <!-- ############################## Google Map & Follow Us Section ############################## -->
        <section id="services" style="background-color: #000;">

            <div class="container">

                <div class="row">

                    <style>
                        .section-header h3::before {
                            display: none;
                        }

                        .section-header h3::after {
                            display: none;
                        }
                    </style>

                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <header class="section-header wow fadeInUp">
                            <h3 class="box wow bounceInUp" style="color: #fff; font-size: 30px;">Find Our Café & Multi Cuisine</h3>
                        </header>
                        <div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.4507030713316!2d89.8286863143741!3d23.007218122676502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ffc318dfdbc8cb%3A0xad1b75817c2ea7e7!2sProgati%20Cafe!5e0!3m2!1sen!2sbd!4v1674365395371!5m2!1sen!2sbd" width="100%" height="350" style="border:0; border-radius: 5px; box-shadow: 0 2px 12px #c1c1c1;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <div class="col-md-1 wow fadeInUp" data-wow-delay="0.1s"></div>

                    <style>
                        .custom_follow {
                            margin-top: 8rem;
                        }
                    </style>
                    <div class="col-md-5 box wow bounceInUp custom_follow" data-wow-duration="1.4s" style="margin-top: 12rem;">
                        <h4 style="color: #fff;">FOLLOW US</h4>
                        <style>
                            #footer .footer-top .social-links a {
                                background: #4267B2;
                                color: #fff;
                            }

                            #footer .footer-top .social-links a:hover {
                                background: #fff;
                                color: #000;
                            }
                        </style>
                        <footer id="footer" style="background: transparent;">
                            <div class="footer-top" style="background: transparent;padding: 0;">
                                <div class="container">
                                    <div class="row">
                                        <div class="footer-contact">
                                            <div class="social-links">
                                                <a href="https://www.facebook.com/ProgatiCafe/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                                                <!-- <a href="https://www.linkedin.com/company/progati-group/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>

                </div>

            </div>

        </section>


    </main>



    <!-- ############################## Footer Section ############################## -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">

                        <a href="index.php"><img src="img/progotitt.png" alt="" title="" style="width: 10rem;height: 9rem;margin-top: -1rem;margin-left: -36px;margin-bottom: -2rem;" /></a>

                        <div class="copyright">
                            &copy; Copyright <strong>Progati</strong>
                        </div>
                        <div class="credits">
                            Developed By <a href="https://srsoftbd.xyz/" target="_blank">SR Soft Bangladesh</a>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 footer-links">
                        <ul>
                            <li><a href="about_us.php">About Progati</a></li>
                            <li><a href="video_gallery.php">Media Center</a></li>
                            <li><a href="contact_us.php">Contact us</a></li>

                        </ul>
                    </div>


                    <div class="col-lg-3 col-md-6 footer-links">
                        <ul>
                            <li><a href="contact_us.php">Contact us</a></li>
                            <li><a href="our_companies.php">Our Companies</a></li>
                            <li><a href="product.php">Products</a></li>

                        </ul>
                    </div>


                    <div class="col-lg-3 col-md-6 footer-contact">
                        <div class="social-links" style="display: grid;">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>

</body>

</html>