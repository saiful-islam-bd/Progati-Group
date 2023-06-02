<!-- ############################## Header Section ############################## -->
<?php
$id = $_GET['id'];
include("header.php");
include("config.php");
//error_reporting(0); 
?>

<?php
$sql = "SELECT * FROM media where id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $youtube_link   = $row['youtube_link'];
        $video_title    = $row['video_title'];
        // $category       = $row['category'];
    }
}  ?>

<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">

                    <!-- ############################## Form Name ############################## -->
                    <div class="card-header">
                        <h4>Edit: Video Gallery</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="media_update.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">

                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Upload an Video</strong></label>
                                <div class="col-sm-9">
                                    <input type="file" class="default" value="" name="choosefile">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Video Title</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Video Title" value="<?php echo $video_title ?>" name="video_title" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Youtube Link</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Youtube Link" value="<?php echo $youtube_link ?>" name="youtube_link">
                                </div>
                            </div>


                            <!-- <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Category</strong></label>
                                <div class="col-sm-9">
                                    <select class="form-control selectric" name="category">
                                        <option><?php echo $category ?></option>
                                        <?php
                                        $sql = "SELECT * FROM video_gallery_category order by id ASC";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {

                                        ?>
                                                <option><?php echo $row['category'] ?></option>

                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div> -->



                            <!--<div class="form-group row">-->
                            <!--    <label class="col-sm-3 col-form-label"><strong>Description</strong></label>-->
                            <!--    <div class="col-sm-9">-->
                            <!--        <textarea class="summernote" value="" name="description" required></textarea>-->
                            <!--    </div>-->
                            <!--</div>-->

                        </div>


                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" name="uploadfile">Submit</button>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ############################## Footer Section ############################## -->
<?php include("footer.php"); ?>