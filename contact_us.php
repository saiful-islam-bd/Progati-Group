<!-- ############################## Header Section ############################## -->
<?php
include("header.php");
include("admin/config.php");
//error_reporting(0); 
?>


<!--==========================
    Intro Section
  ============================-->
<section id="intro">
    <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <div class="row">

                    <?php
                    $sql = "SELECT * FROM cover_Image WHERE id=6";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {

                    ?>

                            <div class="col-lg-12 col-md-12 wow fadeInUp">
                                <div class="member">
                                    <img src="admin/assets/image/<?php echo $row['image'] ?>" class="img-responsive" alt="" width="100%" height="500px">
                                </div>
                            </div>

                    <?php }
                    } ?>

                </div>
            </div>
        </div>
    </div>
</section><!-- #intro -->

<main id="main">




    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
        <div class="container">

            <div class="section-header">
                <h3>Contact Us</h3>
            </div>

            <div class="row contact-info">

                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        
                        <h3>Gopalgonj Office</h3>
                        <address>Progati Plaza(1st Floor ,115,Chowrangi) Gopalganj -8100</address>

                        <h3 style="margin-top: 2rem;">Dhaka Office</h3>
                        <address>House 75, Road 4 Block C, Banani 1213</address>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>Phone Number</h3>
                        <p><a href="tel:+88026685351">+88 026685351</a></p>
                        <p><a href="tel:+88026681606">+88 026681606</a></p>
                        <p><a href="tel:+8802668616607">+88 02668616607</a></p>
                        <p><a href="tel:+8801944559999">+880 1944 559999</a></p>
                        <p><a href="tel:+8801671100107">+880 1671 100107</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:info@progatigroup.com">info@progatigroup.com</a></p>
                    </div>
                </div>

            </div>
            

            <div class="form">


                <form action="admin/contact_us_store.php" method="post" role="form">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validation"></div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

        </div>
    </section><!-- #contact -->

</main>


<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>