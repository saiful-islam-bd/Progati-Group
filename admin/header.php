<?php $header = $_GET['header'];
if ($header == NULL) {
    $header = "Progati";
}
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <title><?php echo $header ?></title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/bundles/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="assets/bundles/codemirror/lib/codemirror.css">
    <link rel="stylesheet" href="assets/bundles/codemirror/theme/duotone-dark.css">
    <link rel="stylesheet" href="assets/bundles/jquery-selectric/selectric.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">

    <!-- Custom style CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />

</head>


<body>

    <!-- <div class="loader"></div> -->


    <div id="app">

        <div class="main-wrapper main-wrapper-1">

            <div class="navbar-bg"></div>


            <nav class="navbar navbar-expand-lg main-navbar sticky">

                <div class="form-inline mr-auto">

                    <ul class="navbar-nav mr-3">

                        <li>
                            <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn">
                                <i data-feather="align-justify"></i>
                            </a>
                        </li>


                        <li>
                            <a href="#" class="nav-link nav-link-lg fullscreen-btn">
                                <i data-feather="maximize"></i>
                            </a>
                        </li>


                        <li>
                            <form class="form-inline mr-auto">
                                <div class="search-element">
                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                                    <button class="btn" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </li>

                    </ul>

                </div>

            </nav>


            <div class="main-sidebar sidebar-style-2">

                <aside id="sidebar-wrapper">

                    <!-- ############################## LOGO ############################## -->
                    <div class="sidebar-brand">
                        <a href="index.php">
                            <img alt="image" src="assets/img/logo.png" class="header-logo" />
                            <span class="logo-name">Admin</span>
                        </a>
                    </div>


                    <!-- ############################## SIDEBAR ############################## -->
                    <ul class="sidebar-menu">

                        <li class="dropdown active">
                            <a href="index.php" class="nav-link">
                                <i data-feather="monitor"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <!-- ############################## HOME ############################## -->
                        <li class="menu-header">HOME</li>

                        <li>
                            <a class="nav-link" href="slider.php?header=Slider">
                                <i class="far fa-file-alt"></i>
                                <span>Slider</span>
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="follow_us.php?header=Follow Us">
                                <i class="far fa-file-alt"></i>
                                <span>Follow Us</span>
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="glance.php?header=Glance">
                                <i class="far fa-file-alt"></i>
                                <span>Glance</span>
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="gallery.php?header=Gallery">
                                <i class="far fa-file-alt"></i>
                                <span>Gallery</span>
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="brand.php?header=Brand">
                                <i class="far fa-file-alt"></i>
                                <span>Brand</span>
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="home_video.php?header=Home Video">
                                <i class="far fa-file-alt"></i>
                                <span>Home Video</span>
                            </a>
                        </li>
                        
                          <li>
                            <a class="nav-link" href="upcomming_projects.php?header=Upcomming Projects">
                                <i class="far fa-file-alt"></i>
                                <span>Upcomming Projects</span>
                            </a>
                        </li>

                        <!-- <li>
                            <a class="nav-link" href="life_at.php?header=Life At">
                                <i class="far fa-file-alt"></i>
                                <span>Life At</span>
                            </a>
                        </li> -->


                        <!-- ############################## ABOUT ############################## -->
                        <li class="menu-header">ABOUT</li>

                        <li>
                            <a class="nav-link" href="about_us.php?header=About Us">
                                <i class="far fa-file-alt"></i>
                                <span>About Us</span>
                            </a>
                        </li>

                        <!-- <li>
                            <a class="nav-link" href="mission_vision_image.php?header=Mission/Vision Image">
                                <i class="far fa-file-alt"></i>
                                <span>Mission/Vision Image</span>
                            </a>
                        </li> -->

                        <li>
                            <a class="nav-link" href="mission.php?header=Mission">
                                <i class="far fa-file-alt"></i>
                                <span>Mission</span>
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="vision.php?header=Vision">
                                <i class="far fa-file-alt"></i>
                                <span>Vision</span>
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="values.php?header=Values">
                                <i class="far fa-file-alt"></i>
                                <span>Values</span>
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="messageCoverImage.php?header=Message Cover Image">
                                <i class="far fa-file-alt"></i>
                                <span>Message Cover Image</span>
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="message.php?header=Message">
                                <i class="far fa-file-alt"></i>
                                <span>Message</span>
                            </a>
                        </li>


                        <!-- ############################## COMPANIES ############################## -->
                        <li class="menu-header">COMPANIES</li>

                        <li>
                            <a class="nav-link" href="companyCoverImage.php?header=Company Cover Image">
                                <i class="far fa-file-alt"></i>
                                <span>Company Cover Image</span>
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="our_companies.php?header=Our Companies">
                                <i class="far fa-file-alt"></i>
                                <span>Our Companies</span>
                            </a>
                        </li>


                        <!-- ############################## PRODUCTS ############################## -->
                        <li class="menu-header">PRODUCTS</li>

                        <li>
                            <a class="nav-link" href="productCoverImage.php?header=Product Cover Image">
                                <i class="far fa-file-alt"></i>
                                <span>Product Cover Image</span>
                            </a>
                        </li>

                        <!-- <li>
                            <a class="nav-link" href="product_banner.php?header=Product Banner">
                                <i class="far fa-file-alt"></i>
                                <span>Product Banner</span>
                            </a>
                        </li> -->

                        <li>
                            <a class="nav-link" href="product.php?header=Product">
                                <i class="far fa-file-alt"></i>
                                <span>Product</span>
                            </a>
                        </li>


                        <!-- ############################## PHOTO ############################## -->
                        <li class="menu-header">PHOTO</li>

                        <li>
                            <a class="nav-link" href="photoCoverImage.php?header=Photo Cover Image">
                                <i class="far fa-file-alt"></i>
                                <span>Photo Cover Image</span>
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="photoGallery_category.php?header=Photo Gallery Category">
                                <i class="far fa-file-alt"></i>
                                <span>Photo Gallery Category</span>
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="photo_gallery.php?header=Photo Gallery">
                                <i class="far fa-file-alt"></i>
                                <span>Photo Gallery</span>
                            </a>
                        </li>


                        <!-- ############################## VIDEO ############################## -->
                        <li class="menu-header">VIDEO</li>

                        <li>
                            <a class="nav-link" href="videoCoverImage.php?header=Video Cover Image">
                                <i class="far fa-file-alt"></i>
                                <span>Video Cover Image</span>
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="videoGallery_category.php?header=Video Gallery Category">
                                <i class="far fa-file-alt"></i>
                                <span>Video Gallery Category</span>
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="media.php?header=Media">
                                <i class="far fa-file-alt"></i>
                                <span>Video Gallery</span>
                            </a>
                        </li>


                        <!-- ############################## CONTACT ############################## -->
                        <li class="menu-header">CONTACT</li>

                        <li>
                            <a class="nav-link" href="contactCoverImage.php?header=Contact Cover Image">
                                <i class="far fa-file-alt"></i>
                                <span>Contact Cover Image</span>
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="contact_us.php?header=Contact Us">
                                <i class="far fa-file-alt"></i>
                                <span>Contact Us</span>
                            </a>
                        </li>


                        <!-- ############################## SIGN OUT ############################## -->
                        <li class="menu-header">SIGN OUT</li>

                        <li>
                            <a class="nav-link" href="logout.php">
                                <i class="far fa-file-alt"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul>

                </aside>

            </div>



            <!-- ############################## Main Content ############################## -->
            <div class="main-content">