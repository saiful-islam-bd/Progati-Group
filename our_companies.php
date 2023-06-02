<?php include 'header.php' ?>
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
                    $sql = "SELECT * FROM cover_Image WHERE id=2";
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
      Portfolio Section
    ============================-->
    <section id="portfolio" class="section-bg" style="padding: 4rem 0;">
        <div class="container">

            <header class="section-header">
                <style>
                    .customOurCompaniesPage_title {
                        margin-bottom: 2rem;
                    }

                    @media only screen and (max-width: 480px) {
                        .customOurCompaniesPage_title {
                            font-size: 30px !important;
                        }
                    }
                </style>
                <h3 class="section-title customOurCompaniesPage_title">Our Companies</h3>
            </header>

            <div class="row portfolio-container">
                <?php
                $sql = "SELECT * FROM our_companies order by id ASC";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        $id = $row['id'];



                ?>
                        <div class="col-lg-3 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s" style="height: 17rem;">
                            <div class="portfolio-wrap" style="box-shadow: 0px 2px 12px #c1c1c1; border-radius: 7px;">
                                <figure style="height: 11rem; border-radius: 7px 7px 0 0;">
                                    <a href="<?php echo $row['link'] ?>">
                                        <img src="admin/assets/image/<?php echo $row['image'] ?>" class="img-fluid" alt="" style="height: 11rem;width: 100%; background-color: #fff;">
                                    </a>
                                </figure>

                                <div class="portfolio-info" style="padding: 1rem; height: 5rem; border-radius: 7px;">
                                    <h4 style="line-height: normal; text-transform: uppercase;"><a href="<?php echo $row['link'] ?>" style="font-size: 16px;"><?php echo $row['title'] ?></a></h4>
                                </div>
                            </div>
                        </div>
                <?php }
                } ?>




            </div>

        </div>
    </section><!-- #portfolio -->

</main>

<?php include 'footer.php' ?>