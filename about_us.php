<!-- ############################## Header Section ############################## -->
<?php include 'header.php' ?>



<!-- ############################## Cover Section ############################## -->
<section id="intro">
    <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <div class="row">

                    <?php
                    $sql = "SELECT * FROM aboutUsImage WHERE id=1";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {

                    ?>

                            <div class="col-lg-12 col-md-12 wow fadeInUp">
                                <div class="member">
                                    <img src="admin/assets/image/<?php echo $row['image'] ?>" class="img-responsive" alt="" width="100%">

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


    <!-- ############################## Committed Section ############################## -->
    <section id="services">
        <div class="container">

            <?php
            $sql = "SELECT * FROM aboutUsImage WHERE id=1";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

            ?>

                    <header class="section-header wow fadeInUp">
                        <h3 class="col-lg-12 col-md-8 box wow bounceInUp"><?php echo $row['title'] ?></h3>
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



    <section id="mission" class="section-bg" style="padding-top: 2rem;padding-bottom: 1rem;">
        <div class="container">

            <div class="row portfolio-container">


                <!-- ############################## Mission Section ############################## -->
                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                    <div class="portfolio-wrap">

                        <?php
                        $sql = "SELECT * FROM mission_vision WHERE id=2";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {

                        ?>

                                <div class="portfolio-info">
                                    <h4 class="text-center"><a href="#">Mission</a></h4>
                                    <p style="text-align: justify;"><?php echo $row['mission'] ?></p>
                                </div>

                        <?php }
                        } ?>

                    </div>
                </div>


                <!-- ############################## Vision Section ############################## -->
                <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-wrap">

                        <?php
                        $sql = "SELECT * FROM mission_vision WHERE id=3";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {

                        ?>

                                <div class="portfolio-info">
                                    <h4 class="text-center"><a href="#">Vision</a></h4>
                                    <p style="text-align: justify;"><?php echo $row['vision'] ?></p>
                                </div>

                        <?php }
                        } ?>

                    </div>
                </div>


                <!-- ############################## Values Section ############################## -->
                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">

                        <?php
                        $sql = "SELECT * FROM mission_vision WHERE id=4";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {

                        ?>

                                <div class="portfolio-info">
                                    <h4 class="text-center"><a href="#">Values</a></h4>
                                    <p style="text-align: justify;"><?php echo $row['values'] ?></p>
                                </div>

                        <?php }
                        } ?>

                    </div>
                </div>


            </div>

        </div>
    </section>



</main>



<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>