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
                        $sql = "SELECT * FROM cover_Image WHERE id=1";
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
    </section>


    <main id="main">

        <!-- ############################## Chairman Message Section ############################## -->
        <section id="md" style="background-color: #cccccca1; padding: 3rem 0;">
            <div class="container" style="padding-top:20px">
                <div class="row portfolio-container">

                    <?php
                    $sql = "SELECT * FROM about_us WHERE id=2";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {

                    ?>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                                <div class="portfolio-wrap">
                                    <figure>
                                        <img src="admin/assets/image/<?php echo $row['image'] ?>" style="width: 100%;height: 350px; border-radius: 5px; box-shadow: 0 2px 12px #c1c1c1;">
                                    </figure>
                                </div>
                            </div>

                            <div class="col-lg-1 col-md-6 portfolio-item filter-web wow fadeInUp"></div>

                            <div class="col-lg-7 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                                <div class="portfolio-wrap">
                                    <div class="portfolio-info">
                                        <h3 class="text-center" style="color:black"><strong>Message from the Chairman</strong></h3>
                                        <p><?php echo $row['description'] ?></p>
                                        <p><?php echo $row['name'] ?></p>
                                    </div>
                                </div>
                            </div>

                    <?php }
                    } ?>


                </div>

            </div>
        </section>



        <!-- ############################## MD Message Section ############################## -->
        <section id="md" style="background-color: #cccccc69; padding: 3rem 0;">
            <div class="container" style="padding-top:20px">
                <div class="row portfolio-container">

                    <style>
                        .customDisplay_Mobile {
                            display: none;
                        }

                        .customDisplay_Desktop {
                            display: inline;
                        }

                        @media only screen and (max-width: 480px) {
                            .customDisplay_Desktop {
                                display: none;
                            }

                            .customDisplay_Mobile {
                                display: inline;
                            }
                        }
                    </style>

                    <?php
                    $sql = "SELECT * FROM about_us WHERE id=3";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {

                    ?>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp customDisplay_Mobile">
                                <div class="portfolio-wrap">
                                    <figure>
                                        <img src="admin/assets/image/<?php echo $row['image'] ?>" style="width: 100%;height: 350px; border-radius: 5px; box-shadow: 0 2px 12px #c1c1c1;">
                                    </figure>
                                </div>
                            </div>

                            <div class="col-lg-1 col-md-6 portfolio-item filter-web wow fadeInUp customDisplay_Mobile"></div>

                            <div class="col-lg-7 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                                <div class="portfolio-wrap">
                                    <div class="portfolio-info">
                                        <h3 class="text-center" style="color:black"><strong>Message from the Managing Director</strong></h3>
                                        <p><?php echo $row['description'] ?></p>
                                        <p><?php echo $row['name'] ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-1 col-md-6 portfolio-item filter-web wow fadeInUp customDisplay_Desktop"></div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp customDisplay_Desktop">
                                <div class="portfolio-wrap">
                                    <figure>
                                        <img src="admin/assets/image/<?php echo $row['image'] ?>" style="width: 100%;height: 350px; border-radius: 5px; box-shadow: 0 2px 12px #c1c1c1;">
                                    </figure>
                                </div>
                            </div>

                    <?php }
                    } ?>


                </div>

            </div>
        </section>



        <!-- ############################## CEO Message Section ############################## -->
        <section id="ceo" style="background-color: #cccccc30; padding: 3rem 0;">
            <div class="container" style="padding-top:20px">
                <div class="row portfolio-container">

                    <?php
                    $sql = "SELECT * FROM about_us WHERE id=4";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {

                    ?>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                                <div class="portfolio-wrap">
                                    <figure>
                                        <img src="admin/assets/image/<?php echo $row['image'] ?>" style="width: 100%;height: 350px; border-radius: 5px; box-shadow: 0 2px 12px #c1c1c1;">
                                    </figure>

                                </div>
                            </div>

                            <div class="col-lg-1 col-md-6 portfolio-item filter-web wow fadeInUp"></div>

                            <div class="col-lg-7 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                                <div class="portfolio-wrap">

                                    <div class="portfolio-info">
                                        <h3 class="text-center" style="color:black"><strong>Message from the Chief Executive Officer</strong></h3>
                                        <p><?php echo $row['description'] ?></p>
                                        <p><?php echo $row['name'] ?></p>
                                    </div>
                                </div>
                            </div>

                    <?php }
                    } ?>


                </div>

            </div>
        </section>

    </main>



    <!-- ############################## Footer Section ############################## -->
    <?php include 'footer.php' ?>