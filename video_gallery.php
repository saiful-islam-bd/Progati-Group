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
                    $sql = "SELECT * FROM cover_Image WHERE id=5";
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
                <h3 class="section-title">Video Gallery</h3>
            </header>

            <div class="row portfolio-container">
                <?php
                $sql = "SELECT * FROM 	media  order by id desc";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        $youtube_link = $row['youtube_link'];
                        $uploaded_video = $row['uploaded_video'];

                ?>
                        <?php
                        if ($youtube_link != null) {
                        ?>
                            <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                                <div class="portfolio-wrap">
                                    <figure>
                                        <iframe width="100%" height="100%" src="<?php echo $row['youtube_link'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </figure>

                                    <div class="portfolio-info" style="padding: 1rem;">
                                        <h4 style="line-height: normal;"><a href="#!"><?php echo $row['video_title'] ?></a></h4>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <?php
                        if ($youtube_link == null) {
                        ?>
                            <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                                <video width="400" height="100%" controls style="width: 100%;height: 13rem;" controls autoplay muted>
                                    <source src="admin/assets/video/<?php echo $row['uploaded_video'] ?>" type="video/mp4">
                                    <source src="admin/assets/video/<?php echo $row['uploaded_video'] ?>" type="video/ogg">

                                </video>
                                <div class="portfolio-info" style="padding: 1rem;">
                                    <h4 style="line-height: normal;"><a href="#!">Chris Brown - Under The Influence (Audio)</a></h4>
                                </div>
                            </div>
                <?php }
                    }
                } ?>

            </div>

        </div>
    </section><!-- #portfolio -->

</main>

<?php include 'footer.php' ?>