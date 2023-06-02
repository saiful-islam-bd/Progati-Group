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
                    $sql = "SELECT * FROM cover_Image WHERE id=3";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {

                    ?>

                            <div class="col-lg-12 col-md-12 wow fadeInUp">
                                <div class="member">
                                    <img src="admin/assets/image/<?php echo $row['image'] ?>" class="img-responsive" alt="" width="100%" height="400px">

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
    <section id="portfolio" class="section-bg">
        <div class="container">

            <header class="section-header">
                <h3 class="section-title">Our Products</h3>
            </header>

            <div class="row">
                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-card">Card</li>
                        <li data-filter=".filter-web">Web</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">
                <?php
                $sql = "SELECT * FROM product order by id desc";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {

                ?>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="admin/assets/image/<?php echo $row['image'] ?>" class="img-fluid" alt="">
                                    <a href="admin/assets/image/<?php echo $row['image'] ?>" data-lightbox="portfolio" data-title="App 1" class="link-preview" style="margin-left: 2rem;" title="Preview"><i class="ion ion-eye"></i></a>
                                </figure>

                                <div class="portfolio-info" style="padding: 1rem 0;height: 8rem;">
                                    <h4 style="line-height: normal;"><a href="#!"><?php echo $row['product_name'] ?></a></h4>
                                    <h4 style="line-height: normal;"><a href="#!">৳ <?php echo $row['price'] ?></a></h4>
                                    <h6><?php echo $row['company_name'] ?> </h6>
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