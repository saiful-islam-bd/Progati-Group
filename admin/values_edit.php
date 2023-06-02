<!-- ############################## Header Section ############################## -->
<?php include("header.php");
include("config.php");
//error_reporting(0);

$id = $_GET['id'];

$sql = "SELECT * FROM mission_vision where id = $id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $values = $row['values'];
    }
}
?>




<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">

                    <!-- ############################## Form Name ############################## -->
                    <div class="card-header">
                        <h4>Edit: Values</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="values_update.php?id=<?php echo $id ?>" method="post">

                        <div class="card-body">


                            <div class="card-body">

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><strong>Values</strong></label>
                                    <div class="col-sm-9">
                                        <textarea class="summernote" name="values" required><?php echo $values ?></textarea>
                                    </div>
                                </div>

                            </div>


                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>