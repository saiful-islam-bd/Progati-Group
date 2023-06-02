<!-- ############################## Footer Section ############################## -->
<?php include 'header.php' ?>



<!-- ############################## Cover Section ############################## -->
<section id="intro">
    <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <div class="row">

                    <?php
                    $sql = "SELECT * FROM cover_Image WHERE id=4";
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

    <!-- ############################## Photo Gallery Section ############################## -->
    <section id="portfolio" class="section-bg">

        <div class="container">

            <header class="section-header">
                <h3 class="section-title">Photo Gallery</h3>
            </header>


            <div class="row">
                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <?php
                        $sql = "SELECT * FROM photo_gallery_category order by id ASC";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {

                        ?>
                                <li data-filter=".<?php echo $row['category'] ?>"><?php echo $row['title'] ?></li>
                        <?php }
                        } ?>
                    </ul>
                </div>
            </div>


            <div class="row portfolio-container">

                <?php
                $sql = "SELECT * FROM photo_gallery order by id desc";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {

                ?>

                        <div class="col-lg-4 col-md-6 portfolio-item <?php echo $row['category'] ?> wow fadeInUp">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="admin/assets/image/<?php echo $row['image'] ?>" class="img-fluid" alt="" style="width: 100%;height: 100%;">
                                    <a href="admin/assets/image/<?php echo $row['image'] ?>" data-lightbox="portfolio" data-title="<?php echo $row['title'] ?>" class="link-preview" style="margin-left: 2rem;" title="Preview"><i class="ion ion-eye"></i></a>
                                </figure>

                                <div class="portfolio-info" style="padding: 1rem;">
                                    <h4 style="line-height: normal; font-size: 1rem; margin: 0;"><?php echo $row['title'] ?></h4>
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