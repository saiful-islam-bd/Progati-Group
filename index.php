<!-- ############################## Header Section ############################## -->
<?php
include("header.php");
include("admin/config.php");
//error_reporting(0); 
?>



<!-- ############################## Slider Section ############################## -->
<style>
    .carousel-indicators {
        display: none;
    }
</style>
<section id="intro">
    <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">
                <?php
                $sql = "SELECT * FROM slider order by id ASC limit 1";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        $id = $row['id'];
                ?>
                        <div class="carousel-item active" style="background-image: url('admin/assets/image/<?php echo $row['image'] ?>');">
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <a href="<?php echo $row['link'] ?>">
                                        <h2 style="text-transform: uppercase;"><?php echo $row['title'] ?></h2>
                                    </a>
                                </div>
                            </div>
                        </div>
                <?php }
                } ?>

                <?php
                $sql = "SELECT * FROM slider where id!=$id order by id ASC ";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        $id = $row['id'];
                ?>
                        <div class="carousel-item" style="background-image: url('admin/assets/image/<?php echo $row['image'] ?>');">
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <a href="<?php echo $row['link'] ?>">
                                        <h2 style="text-transform: uppercase;"><?php echo $row['title'] ?></h2>
                                    </a>
                                </div>
                            </div>
                        </div>

                <?php }
                } ?>

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



<main id="main">

    <!-- ############################## Committed Section ############################## -->
    <section id="services">

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
                <?php
                $sql = "SELECT * FROM follow_us order by id desc";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {

                ?>
                        <div class="col-lg-7 col-md-8 box wow bounceInUp" data-wow-duration="2.4s">
                            <header class="section-header wow fadeInUp">
                                <h3 class="box wow bounceInUp" style="text-align: left; font-size: 30px;"> <?php echo $row['title'] ?></h3>
                            </header>
                            <p style="text-align:justify;"><?php echo $row['description'] ?></p>
                        </div>
                <?php }
                } ?>

                <div class="col-lg-1"></div>

                <style>
                    .custom_follow {
                        margin-top: 8rem;
                    }

                    @media only screen and (max-width: 480px) {
                        .custom_follow {
                            margin-top: 0;
                        }
                    }
                </style>
                <div class="col-lg-4 col-md-6 box wow bounceInUp custom_follow" data-wow-duration="1.4s">
                    <h4>FOLLOW US</h4>
                    <footer id="footer" style="background: transparent;">
                        <div class="footer-top" style="background: transparent;padding: 0;">
                            <div class="container">
                                <div class="row">
                                    <div class="footer-contact">
                                        <div class="social-links">
                                            <a href="https://www.facebook.com/profile.php?id=100064669796050" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                                            <a href="https://www.linkedin.com/company/progati-group/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
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



    <!-- ############################## Countable Section ############################## -->
    <section id="facts" class="wow fadeIn" style="padding: 0;">
        <div class="container">

            <div class="row counters">

                <div class="col-lg-4 col-12 text-center">
                    <span data-toggle="counter-up">11</span>
                    <p>TOTAL BUSINESS</p>
                </div>

                <div class="col-lg-4 col-12 text-center">
                    <span data-toggle="counter-up">500</span>
                    <p>TOTAL NUMBER OF EMPLOYEES</p>
                </div>

                <div class="col-lg-4 col-12 text-center">
                    <span data-toggle="counter-up">47</span>
                    <p>TOTAL YEARS OF EXPERIENCE</p>
                </div>

            </div>

        </div>
    </section>



    <!-- ############################## Our Companies Section ############################## -->
    <section id="team" style="background-color: #3d3168; padding: 25px 0;">

        <div class="container" style="padding-top: 1rem;background-color: #3d3168;">
            <div class="col-lg-4">
                <style>
                    .ourCompaniesHeader {
                        font-size: 40px;
                        line-height: 60px;
                        font-weight: 400;
                        font-family: "Barlow", sans-serif;
                        padding-bottom: 25px;
                    }

                    @media only screen and (max-width: 480px) {
                        .ourCompaniesHeader {
                            font-size: 30px;
                        }
                    }
                </style>
                <h2 class="display-5 text-uppercase text-white mb-0 ourCompaniesHeader">OUR COMPANIES</h2>
            </div>
            <div class="row">

                <div class="col-lg-3 col-md-6 wow fadeInUp">

                    <div class="member" style="border-radius: 5%;">
                        <a href="greenAutoRiceMill.php">
                            <img src="img/riceLogo.png" class="img-fluid" alt="" style="border-radius: 5%; height: 12rem;width: 100%; background-color: #fff;">
                            <div class="member-info" style="align-items: end; border-radius: 5%;">
                                <div class="member-info-content">
                                    <h4 style="margin-bottom: 3rem; padding: 1rem; text-transform: uppercase;">Progati Green Auto Rice Mills LTD.</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="member" style="border-radius: 5%;">
                        <a href="company_details.php?id=5">
                            <img src="img/shippingLogo.png" class="img-fluid" alt="" style="border-radius: 5%; height: 12rem;width: 100%; background-color: #fff;">
                            <div class="member-info" style="align-items: end; border-radius: 5%;">
                                <div class="member-info-content">
                                    <h4 style="margin-bottom: 3rem; padding: 1rem; text-transform: uppercase;">PROGATI GREEN SHIPPING LINES LTD.</h4>
                                </div>
                            </div>
                        </a>
                    </div>




                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">

                    <div class="member" style="border-radius: 5%;">
                        <a href="greenAutoBricks.php">
                            <img src="img/brickLogo.png" class="img-fluid" alt="" style="border-radius: 5%; height: 12rem;width: 100%; background-color: #fff;">
                            <div class="member-info" style="align-items: end; border-radius: 5%;">
                                <div class="member-info-content">
                                    <h4 style="margin-bottom: 3rem; padding: 1rem; text-transform: uppercase;">PROGATI GREEN BRICKS LTD.</h4>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="member" style="border-radius: 5%;">
                        <a href="company_details.php?id=6">
                            <img src="img/sunrisersLogo.png" class="img-fluid" alt="" style="border-radius: 5%; height: 12rem;width: 100%; background-color: #fff;">
                            <div class="member-info" style="align-items: end; border-radius: 5%;">
                                <div class="member-info-content">
                                    <h4 style="margin-bottom: 3rem; padding: 1rem; text-transform: uppercase;">Sylhet Sunrisers</h4>
                                </div>
                            </div>
                        </a>
                    </div>



                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="member" style="border-radius: 5%;">
                        <a href="cafeandcuisine.php">
                            <img src="img/cafeLogo.png" class="img-fluid" alt="" style="border-radius: 5%; height: 12rem;width: 100%; background-color: #fff;">
                            <div class="member-info" style="align-items: end; border-radius: 5%;">
                                <div class="member-info-content">
                                    <h4 style="margin-bottom: 3rem; padding: 1rem; text-transform: uppercase;">PROGATI CAFÉ & MULTI CUISINE</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="member" style="border-radius: 5%;">
                        <a href="company_details.php?id=7">
                            <img src="img/rrLogo.png" class="img-fluid" alt="" style="border-radius: 5%; height: 12rem;width: 100%; background-color: #fff;">
                            <div class="member-info" style="align-items: end; border-radius: 5%;">
                                <div class="member-info-content">
                                    <h4 style="margin-bottom: 3rem; padding: 1rem; text-transform: uppercase;">R R Builders</h4>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="member" style="border-radius: 5%;">
                        <a href="progatiSchool.php">
                            <img src="img/schoolLogo.png" class="img-fluid" alt="" style="border-radius: 5%; height: 12rem;width: 100%; background-color: #fff;">
                            <div class="member-info" style="align-items: end; border-radius: 5%;">
                                <div class="member-info-content">
                                    <h4 style="margin-bottom: 3rem; padding: 1rem; text-transform: uppercase;">RESMA INTERNATIONAL SCHOOL</h4>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="member" style="border-radius: 5%;">
                        <a href="company_details.php?id=8">
                            <img src="img/distributionLogo.png" class="img-fluid" alt="" style="border-radius: 5%; height: 12rem;width: 100%; background-color: #fff;">
                            <div class="member-info" style="align-items: end; border-radius: 5%;">
                                <div class="member-info-content">
                                    <h4 style="margin-bottom: 3rem; padding: 1rem; text-transform: uppercase;">PROGATI DISTRIBUTION</h4>
                                </div>
                            </div>
                        </a>
                    </div>



                </div>

            </div>

        </div>

    </section>



    <!-- ############################## Home Video Section ############################## -->
    <?php
    $sql = "SELECT * FROM home_video order by id desc";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

    ?>

            <div class="container-fluid bg-primary py-5" style="background-image: url('admin/assets/image/<?php echo $row['background_image'] ?>');background-repeat: no-repeat;background-size: cover;background-position: bottom; height: 27rem;">

                <div class="container" style="margin-top: 13rem;">

                    <div class="row justify-content-start">

                        <div class="col-lg-8 text-center text-lg-start">

                            <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                                <a href="#!" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa-regular fa-circle-play" style="font-size: 4rem;margin-right: 1rem; color:#fff;"></i></a>
                                <h5 class="font-weight-normal text-white m-0 ms-4 d-none d-sm-block" style="color: #fff !important;font-weight: bold !important;font-size: 25px;">WATCH OUR VIDEO</h5>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

    <?php }
    } ?>


    <?php
    $sql = "SELECT * FROM home_video order by id desc";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

    ?>
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="ratio ratio-16x9">
                                <iframe width="760" height="315" src="<?php echo $row['video_link'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php }
    } ?>



    <!-- ############################## Upcoming Projection Section ############################## -->
    <section id="about">
        <div class="container">

            <header class="section-header">
                <h3>Upcoming Projects</h3>
            </header>

            <div class="row about-cols">

                <div class="col-md-4 wow fadeInUp">
                    <div class="about-col">
                        <div class="img">
                            <img src="img/project01.jpg" alt="" class="img-fluid" style="width: 350px;height: 200px;">
                        </div>
                        <h2 class="title"><a href="#" style="font-size: 17px;">PROGATI ESSENTIALS LIMITED</a></h2>
                        <p style="text-align: justify;">
                            Progati Essentials Ltd is the new venture of Progati Group planning to launch by early 2023. The company will enter into toiletries industry especially in personal care, home care, toilet care, fabric care, skincare, pest control and color cosmetics categories.
                        </p>
                    </div>
                </div>

                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="about-col">
                        <div class="img">
                            <img src="img/project02.jpg" alt="" class="img-fluid" style="width: 350px;height: 200px;">
                        </div>
                        <h2 class="title"><a href="#" style="font-size: 17px;">PROGATI GREEN AUTO BRICKS LTD</a></h2>
                        <p style="text-align: justify;">
                            Progati Green Auto Bricks Ltd is going to be another venture of Progati Group planning to inaugurate in 2023. We will use china machine technology where we will ensure air space free proper Moldings of clay by our fully automatic machine.
                        </p>
                    </div>
                </div>

                <!-- <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="about-col">
                        <div class="img">
                            <img src="img/about-vision.jpg" alt="" class="img-fluid" style="width: 350px;height: 200px;">
                        </div>
                        <h2 class="title"><a href="#" style="font-size: 17px;">PROJECT 3 UPDATING</a></h2>
                        <p style="text-align: justify;">
                            Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
                            <br><br>
                        </p>
                    </div>
                </div> -->

            </div>

        </div>
    </section>

</main>




<!-- ############################## Footer Section ############################## -->
<?php include("footer.php"); ?>