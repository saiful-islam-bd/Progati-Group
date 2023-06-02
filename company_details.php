<!-- ############################## Header Section ############################## -->
<?php
include 'header.php';
$id = $_GET['id'];
?>



<!-- ############################## Cover Section ############################## -->
<section id="intro">
    <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <div class="row">

                    <?php
                    $sql = "SELECT * FROM our_companies_cover where compnay_id='$id'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                        
                    ?>

                            <div class="col-lg-12 col-md-12 wow fadeInUp">
                               <?php if($id!=6){ ?> 
                               <div class="member">
                                    <img src="img/<?php echo $row['image'] ?>" class="img-responsive" alt="" width="100%">
                                </div>
                                <?php }else{?>
                                <div class="member">
                                    <video width="100%" height="100%" controls loop autoplay muted>
                                    <source src="admin/assets/video/SYLHET SUNRISERS LOGO ANIMATION 2.mp4" type="video/mp4">
                                    <source src="admin/assets/video/SYLHET SUNRISERS LOGO ANIMATION 2.mp4" type="video/ogg">

                                </video>
                                </div>
                                <?php }?>
                            </div>
                            

                    <?php }
                    } ?>

                </div>
            </div>
        </div>
    </div>
</section>



<main id=" main">

                                    <!-- ############################## Our Company Details Section ############################## -->
                                    <section id="services">

                                        <div class="container">

                                            <?php
                                            $sql = "SELECT * FROM our_companies where id='$id'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $result->fetch_assoc()) {

                                            ?>

                                                    <header class="section-header wow fadeInUp">
                                                        <style>
                                                            @media only screen and (max-width: 600px) {
                                                                .customOurCompanyDetails_header {
                                                                    font-size: 20px !important;
                                                                }
                                                            }
                                                        </style>
                                                        <h3 class="col-lg-12 col-md-8 box wow bounceInUp customOurCompanyDetails_header"><?php echo $row['title'] ?></h3>
                                                    </header>

                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-8 box wow bounceInUp" data-wow-duration="2.4s">
                                                            <p style="text-align:justify"><?php echo $row['description'] ?></p>
                                                        </div>
                                                    </div>

                                            <?php }
                                            } ?>

                                        </div>

                                    </section>


                                    </main>



                                    <!-- ############################## Footer Section ############################## -->
                                    <?php include 'footer.php' ?>