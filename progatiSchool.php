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
    <link rel="stylesheet" href="customCSS/style.css">

    <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

    <!--==========================
    Header
  ============================-->
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

                    <li><a href="index.php">Home</a></li>


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


                    <!--<li><a href="product.php">Product</a></li>-->


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

    </header><!-- #header -->



    <!-- ############################## Slider Section ############################## -->
    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                <style>
                    #intro .carousel-item::before {
                        display: none;
                    }
                </style>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active" style="background-image: url('img/slider01.jpg'); height: 550px;"></div>

                    <div class="carousel-item" style="background-image: url('img/slider02.jpg'); height: 550px;"></div>

                    <div class="carousel-item" style="background-image: url('img/slider03.jpg'); height: 550px;"></div>

                    <div class="carousel-item" style="background-image: url('img/slider04.jpg'); height: 550px;"></div>

                    <div class="carousel-item" style="background-image: url('img/slider05.jpg'); height: 550px;"></div>

                    <div class="carousel-item" style="background-image: url('img/slider06.jpg'); height: 550px;"></div>

                    <div class="carousel-item" style="background-image: url('img/slider07.jpg'); height: 550px;"></div>

                    <div class="carousel-item" style="background-image: url('img/slider08.jpg'); height: 550px;"></div>

                    <div class="carousel-item" style="background-image: url('img/slider09.jpg'); height: 550px;"></div>

                </div>

                <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
    </section>

    <section>
        <div class="rt-container">
            <div class="col-rt-12">
                <div class="Scriptcontent">

                    <div class="ticker-wrap">
                        <div class="ticker">
                            <div class="ticker__item">Letterpress chambray brunch.</div>
                            <div class="ticker__item">Vice mlkshk crucifix beard chillwave meditation hoodie asymmetrical Helvetica.</div>
                            <div class="ticker__item">Ugh PBR&B kale chips Echo Park.</div>
                            <div class="ticker__item">Gluten-free mumblecore chambray mixtape food truck. </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <main id="main">

        <main id="main">

            <style>
                @media only screen and (max-width: 600px) {
                    .customHeader_title {
                        font-size: 25px !important;
                    }
                }
            </style>

            <!-- ############################## Countable Section ############################## -->
            <style>
                .customCountableSchool {
                    background-color: #a61e46 !important;
                    height: 6rem !important;
                }

                @media only screen and (max-width: 600px) {
                    .customCountableSchool {
                        height: 8rem !important;
                    }

                    .customCountableSchoolDisplayNone {
                        display: none !important;
                    }
                }
            </style>
            <section id="featured-services" class="customCountableSchool">
                <div class="container">
                    <div class="row">

                        <div class="col-4 col-sm-4 col-md-2 col-lg-2" style="text-align: center; background: none; padding: 0; border-left: 1px solid #6e6e6e; border-right: 1px solid #6e6e6e; margin-top: 10px;">
                            <h4 class="title" style="font-weight: bold; color: #fff;">250</h4>
                            <p class="description" style="color: #fff;">STUDENTS</p>
                        </div>

                        <div class="col-4 col-sm-4 col-md-2 col-lg-2" style="text-align: center; background: none; padding: 0; border-left: 1px solid #6e6e6e; border-right: 1px solid #6e6e6e; margin-top: 10px;">
                            <h4 class="title" style="font-weight: bold; color: #fff;">20</h4>
                            <p class="description" style="color: #fff;">TEACHERS</p>
                        </div>

                        <div class="col-4 col-sm-4 col-md-2 col-lg-2" style="text-align: center; background: none; padding: 0; border-left: 1px solid #6e6e6e; border-right: 1px solid #6e6e6e; margin-top: 10px;">
                            <h4 class="title" style="font-weight: bold; color: #fff;">08</h4>
                            <p class="description" style="color: #fff;">SMART CLASS ROOM</p>
                        </div>

                        <div class="col-md-2 col-lg-2 customCountableSchoolDisplayNone" style="text-align: center; background: none; padding: 0; border-left: 1px solid #6e6e6e; border-right: 1px solid #6e6e6e; margin-top: 10px;">
                            <h4 class="title" style="font-weight: bold; color: #fff;">01</h4>
                            <p class="description" style="color: #fff;">LIBRARY</p>
                        </div>

                        <div class="col-md-2 col-lg-2 customCountableSchoolDisplayNone" style="text-align: center; background: none; padding: 0; border-left: 1px solid #6e6e6e; border-right: 1px solid #6e6e6e; margin-top: 10px;">
                            <h4 class="title" style="font-weight: bold; color: #fff;">01</h4>
                            <p class="description" style="color: #fff;">HALL ROOM</p>
                        </div>

                        <div class="col-md-2 col-lg-2 customCountableSchoolDisplayNone" style="text-align: center; background: none; padding: 0; border-left: 1px solid #6e6e6e; border-right: 1px solid #6e6e6e; margin-top: 10px;">
                            <h4 class="title" style="font-weight: bold; color: #fff;">03</h4>
                            <p class="description" style="color: #fff;">SCHOOL VAN</p>
                        </div>

                    </div>
                </div>
            </section>


            <!-- ############################## About / Google Map Section ############################## -->
            <section id="services" style="background-color: #fff;">

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

                        <div class="row about-cols" style="margin: 3rem 0;">

                            <div class="col-12 col-sm-12 col-md-5 col-lg-5 wow fadeInUp">
                                <header class="section-header wow fadeInUp">
                                    <h3 class="box wow bounceInUp customHeader_title" style="color: #a61e46;">ABOUT RESMA INTERNATIONAL SCHOOL</h3>
                                </header>
                                <div class="about-col">
                                    <p style="text-align:justify; margin-top: 0rem; color:#000;">
                                        <strong>RESMA INTERNATIONAL SCHOOL</strong> is the only international standard school in gopalganj since 2015. Fully equipped with air-conditioned classrooms and with a capacity of 250 students, the school priority is to offer top class education and thus has the best teachers who take care of each and every need of the students. RESMA International School provides pupils with the greatest education possible so that they can take on the challenges of the outside world heads-on. It strives for the greatest educational standards while respecting each person's uniqueness and offering a dynamic and supportive atmosphere.
                                    </p>
                                </div>
                                <div class="about-col" data-wow-duration="2.4s" style="display: block ruby;">
                                    <h4 style="color: #000;">FOLLOW US : </h4>
                                    <style>
                                        #footer .footer-top .social-links a {
                                            background: #4267B2;
                                            color: #fff;
                                        }

                                        #footer .footer-top .social-links a:hover {
                                            background: #fff;
                                            color: #a61e46;
                                        }
                                    </style>
                                    <footer id="footer" style="background: transparent; margin-left: 10px;">
                                        <div class="footer-top" style="background: transparent;padding: 0;">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="footer-contact">
                                                        <div class="social-links">
                                                            <a href="https://www.facebook.com/Resma.International.School" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </footer>
                                </div>
                            </div>

                            <div class="col-md-1 col-lg-1"></div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                <header class="section-header wow fadeInUp">
                                    <h3 class="box wow bounceInUp customHeader_title" style="color: #a61e46;">Find Our School</h3>
                                </header>
                                <div>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.5351324236403!2d89.83323531437404!3d23.004115822791544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ffc2a120a15ad3%3A0xe62ce4f56149d435!2sResma%20International%20School%20%26%20College!5e0!3m2!1sen!2sbd!4v1673948225165!5m2!1sen!2sbd" width="100%" height="390" style="border:0; border-radius: 5px; box-shadow: 0 2px 12px #c1c1c1;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </section>



            <!-- ############################## Message From Head Section ############################## -->
            <section id="services" style="background-color: #ededed;">

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
                                <h3 class="box wow bounceInUp customHeader_title" style="color: #a61e46;">A MESSAGE FROM OUR HEAD OF SCHOOL</h3>
                            </header>

                            <div class="row mb-3">

                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                    <img src="img/headOfSchool.png" class="testimonial-img" alt="" style="width: 100%; height: 350px;border-radius: 5px; margin-bottom: 2rem;">
                                </div>

                                <div class="col-md-2 col-lg-2"></div>

                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <p style="text-align: justify; color: #000;">
                                        I feel honored and proud to be the Head of the school. I always wish to see this institution at the summit of its success. I will pay my utmost effort and life long experience for the well-being and the better future of RESMA International School.
                                        <br><br>
                                        At RESMA International School, we are very proud to be a part of a supportive learning community with our students and parents, as well as our partners in the town of Gopalgonj. The faculty and staff at RESMA strive to create an environment where students fulfill their academic and have opportunities to participate and find success in co-curricular and extra-curricular activities. Our students are challenged to achieve at high levels in their academic pursuits and are prepared to pursue their post education opportunities at the most highly selective schools in the nation.
                                    </p>
                                    <!-- <p id="demo" style="text-align: justify; color: #000;"></p>
                                <script>
                                    function myFunction() {
                                        document.getElementById("demo").innerHTML = "At RESMA International School, we are very proud to be a part of a supportive learning community with our students and parents, as well as our partners in the town of Gopalgonj. The faculty and staff at RESMA strive to create an environment where students fulfill their academic and have opportunities to participate and find success in co-curricular and extra-curricular activities. Our students are challenged to achieve at high levels in their academic pursuits and are prepared to pursue their post education opportunities at the most highly selective schools in the nation.";
                                    }
                                </script> -->
                                    <p style="text-align: right; color: #000; margin-top: 1rem;">
                                        - Resma Akhter
                                        <br>
                                        Chairman
                                    </p>
                                    <!-- <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-right">
                                        <a href="#!" onclick="myFunction()" class="btn" style="background-color: #a61e46; color:#fff;">Read More</a>
                                    </div>
                                </div> -->
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </section>



            <!-- ############################## Curriculum Section ############################## -->
            <section id="services" style="background-color: #a61e46;">

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
                                <h3 class="box wow bounceInUp customHeader_title" style="color: #fff;">CURRICULUM</h3>
                            </header>

                            <p style="text-align:justify; color: #fff;">
                                Student’s active involvement in solving their own problems and challenges motivates and encourage them to learn best. Therefore our curriculum focuses on student-centered learning using proper teaching and learning strategies such as group and cooperative learning. Problem solving tactics and higher level thinking skills are steadily accentuated during the student’s learning experience. That is why we apply unified learning approach at the Primary level with a gradual focus on individual subjects at the Secondary level.
                            </p>
                        </div>


                    </div>

                </div>

            </section>



            <!-- ############################## Activities Section ############################## -->
            <section id="services" style="background-color: #ededed;">

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
                                <h3 class="box wow bounceInUp customHeader_title" style="color: #a61e46; margin: 0;">EXTRA-CURRICULAR ACTIVITIES</h3>
                            </header>

                            <div class="row mb-3">

                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                                    <img src="img/extraCur01.jpg" class="testimonial-img" alt="" style="width: 100%; height: 16rem; border-radius: 5px; box-shadow: 0 2px 12px #c1c1c1;">
                                </div>

                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                                    <img src="img/extraCur02.jpg" class="testimonial-img" alt="" style="width: 100%; height: 16rem; border-radius: 5px; box-shadow: 0 2px 12px #c1c1c1;">
                                </div>

                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                                    <img src="img/extraCur03.jpg" class="testimonial-img" alt="" style="width: 100%; height: 16rem; border-radius: 5px; box-shadow: 0 2px 12px #c1c1c1;">
                                </div>

                            </div>

                            <p style="text-align:justify; color: #000;">
                                RESMA International School attempts to create a harmonious balance between academic demands, sporting, cultural activities and community life.
                            </p>
                        </div>


                    </div>

                </div>

            </section>



            <!-- ############################## Academic Section ############################## -->
            <section id="services" style="background-color: #a61e46;">

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

                        <div class="col-lg-6 col-md-12 box wow bounceInUp" data-wow-duration="2.4s">
                            <header class="section-header wow fadeInUp">
                                <h3 class="box wow bounceInUp customHeader_title" style="color: #fff; text-align: left; text-decoration: 3px underline; text-underline-offset: 8px;">FACILITIES</h3>
                            </header>

                            <p style="text-align:justify; color: #fff;">
                                Facilities include a library, science and computer laboratories, as well as playgrounds for football, basketball, volleyball and for physical education classes
                            </p>
                        </div>


                        <div class="col-lg-6 col-md-12 box wow bounceInUp" data-wow-duration="2.4s">
                            <header class="section-header wow fadeInUp">
                                <h3 class="box wow bounceInUp customHeader_title" style="color: #fff; text-align: left; text-decoration: 3px underline; text-underline-offset: 8px; font-size: 21px !important;">COMPUTER LABORATORY</h3>
                            </header>

                            <p style="text-align:justify; color: #fff;">
                                The School has one computer labs in the secondary school.
                            </p>
                        </div>


                        <div class="col-lg-6 col-md-12 box wow bounceInUp" data-wow-duration="2.4s">
                            <header class="section-header wow fadeInUp">
                                <h3 class="box wow bounceInUp customHeader_title" style="color: #fff; text-align: left; text-decoration: 3px underline; text-underline-offset: 8px;">CANTEEN</h3>
                            </header>

                            <p style="text-align:justify; color: #fff;">
                                The School features canteens in the School where students and staff may purchase tiffin snacks and drinks.
                            </p>
                        </div>


                        <div class="col-lg-6 col-md-12 box wow bounceInUp" data-wow-duration="2.4s">
                            <header class="section-header wow fadeInUp">
                                <h3 class="box wow bounceInUp customHeader_title" style="color: #fff; text-align: left; text-decoration: 3px underline; text-underline-offset: 8px;">ADMISSIONS</h3>
                            </header>

                            <p style="text-align:justify; color: #fff;">
                                RESMA International School, Gopalgonj is no longer accepting any admissions applications.
                                <br><br>
                                <strong>Our regular admission session:</strong> November-December
                            </p>
                        </div>


                    </div>

                </div>

            </section>



            <!-- ############################## Contact Us Section ############################## -->
            <section id="contact" class="section-bg wow fadeInUp" style="background-color: #ededed;">
                <div class="container">

                    <header class="section-header wow fadeInUp">
                        <h3 class="box wow bounceInUp customHeader_title" style="color: #a61e46;">CONTACT US</h3>
                    </header>

                    <div class="row contact-info">

                        <!-- <div class="col-md-12">
                        <header class="section-header wow fadeInUp">
                            <h3 class="box wow bounceInUp" style="color: #000;">RESMA INTERNATIONAL SCHOOL</h3>
                        </header>
                    </div> -->

                        <div class="col-md-4">
                            <div class="contact-address">
                                <i class="ion-ios-location-outline"></i>
                                <h3>Address</h3>
                                <address style="color:#000;">217, Ghullibari Moar 8100 Gopalganj, Dhaka Division, Bangladesh</address>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="contact-phone">
                                <i class="ion-ios-telephone-outline"></i>
                                <h3>Phone Number</h3>
                                <p><a href="tel:+880248959722" style="color:#000;">+880 2 48959722</p>
                                <p><a href="tel:+88027914538" style="color:#000;">+880 2 7914538</a></p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="contact-email">
                                <i class="ion-ios-email-outline"></i>
                                <h3>Email</h3>
                                <p><a href="mailto:resmaintlschool@gmail.com">resmaintlschool@gmail.com</a></p>
                            </div>
                        </div>

                    </div>

                </div>

            </section>

        </main>

        <!--==========================
    Footer
  ============================-->
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
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about_us.php">About Progati</a></li>
                                <li><a href="our_companies.php">Our Companies</a></li>

                            </ul>
                        </div>


                        <div class="col-lg-3 col-md-6 footer-links">
                            <ul>
                                <li><a href="photo_gallery.php">Photo Gallery</a></li>
                                <li><a href="video_gallery.php">Media Center</a></li>
                                <li><a href="contact_us.php">Contact Us</a></li>

                            </ul>
                        </div>


                        <div class="col-lg-3 col-md-6 footer-contact">
                            <div class="social-links" style="display: grid;">
                                <a href="https://www.facebook.com/profile.php?id=100064669796050"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="https://www.linkedin.com/company/progati-group/"><i class="fa-brands fa-linkedin-in"></i></a>
                                <!-- <a href="#"><i class="fa-brands fa-youtube"></i></a> -->
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