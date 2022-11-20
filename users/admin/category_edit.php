<?php
include 'header.php';
?>

<div class="container mt-5">

    <div class="row">
        <div class="col-md-7 mx-auto">

            <div class="card">
                <div class="card-body">

                    <h3>Edit Category</h3>
                    <hr>

                    <form action="category_update.php" method="post">
                        <?php
                        include "../../config.php";
                        $id = $_GET['id'];

                        $query = mysqli_query($conn, "SELECT * FROM category_name WHERE id='$id'");
                        while ($q = mysqli_fetch_assoc($query)) {

                        ?>
                        <div class="form-group">
                            <label for="name">Name :</label>
                            <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control">
                            <input type="text" name="name" value="<?= $q['name'] ?>" class="form-control">
                        </div>

                        <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                            
                        <?php } ?>
                    </form>


                </div>
            </div>

        </div>
    </div>

</div>

<?php
include 'footer.php';
?>