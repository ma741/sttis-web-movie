<?php include "header.php"; ?>


<div id="content-wrapper">
   <div class="container-fluid upload-details">
      <div class="row">
         <div class="col-lg-12">
            <div class="main-title ">
               <h6 class="text-white">Upload Details</h6>
            </div>
         </div>
         <div class="col-lg-2">
            <div class="imgplace"></div>
         </div>

      </div>
      <hr>
      <br>

      <form action="upload_aksi.php" method="post" enctype="multipart/form-data">
         <div class="row">
            <div class="col-lg-12">
               <div class="osahan-form">
                  <div class="row">

                     <input type="hidden" name="email" value="<?php echo $user['id']; ?>">
                     <div class="col-lg-6">
                        <label class="" for="img">Img *</label>
                        <input type="file" name="img" id="img" class="form-control" required="required ">
                     </div>
                     <div class="col-lg-6">
                        <label class="" for="video">Video *</label>
                        <input type="file" name="video" id="" class="form-control" required="required">
                     </div>

                     <div class="col-lg-12 mt-3">
                        <div class="form-group">
                           <label for="cast">Cast *</label>
                           <input type="text" name="cast" id="cast" placeholder="Nathan Drake , Victor Sullivan , Sam Drake , Elena Fisher" class="form-control" required="required" value="Nathan Drake , Victor Sullivan , Sam Drake , Elena Fisher">
                        </div>
                     </div>

                     <div class="col-lg-12 mt-3">
                        <div class="form-group">
                           <label for="title">Video Title *</label>
                           <input type="text" name="title" id="title" placeholder="Kera Sakti" class="form-control" required="required" value="Nathan Drake , Victor Sullivan , Sam Drake , Elena Fisher">
                        </div>
                     </div>



                     <div class="col-lg-12">
                        <div class="form-group">
                           <label for="gendre">Gendre *</label>

                           <select name="gendre" id="gendre" class="form-control" required="required">
                              <option value="">- pilih -</option>
                              <?php
                              $query = mysqli_query($conn, "SELECT * FROM category_name");
                              while ($g = mysqli_fetch_assoc($query)) {
                              ?>
                                 <option value="<?php echo $g['id'] ?>"><?php echo $g['name']; ?></option>
                              <?php } ?>
                           </select>
                        </div>
                     </div>



                     <div class="col-lg-12">
                        <div class="form-group">
                           <label for="visibility">Visibility *</label>
                           <select name="visibility" id="visibility" class="form-control" required="required">
                              <option value="">- pilih -</option>
                              <option value="Dewasa">Dewasa</option>
                              <option value="Semua umur">Semua umur</option>
                           </select>
                        </div>
                     </div>

                     <div class="col-lg-12">
                        <div class="form-group">
                           <label for="about">Description *</label>
                           <textarea rows="10" id="about" name="about" class="form-control" required="required">

Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus dolorem quis atque. Sapiente, sint. Nobis tempore minima eveniet nam inventore fuga ducimus nisi! Quia, delectus dicta maiores consequuntur, incidunt recusandae non in, doloribus vitae repellat dolorum? Possimus laborum fugit vel modi suscipit eligendi maxime asperiores porro molestias voluptas amet praesentium voluptatibus quidem eaque dolor, assumenda cumque aliquam earum omnis inventore? Eligendi possimus saepe corrupti accusantium fuga, sed reprehenderit eaque quod numquam, perferendis incidunt dolor! Quia modi rerum ea libero rem hic debitis, minus maiores, vel quibusdam molestiae fuga dolorem aperiam est laborum blanditiis, iusto incidunt. Nam enim voluptatem quisquam in.
                           </textarea>
                        </div>
                     </div>
                  </div>


               </div>

               <button type="submit" class="btn btn-primary btn-block">Simpan</button>

            </div>
         </div>
      </form>

   </div>
   <!-- /.container-fluid -->
   <!-- Sticky Footer -->

</div>
<!-- /.content-wrapper -->
</div>
<!-- /#wrapper -->
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
   <i class="fas fa-angle-up"></i>
</a>
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
         <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
         </div>
      </div>
   </div>
</div>
<?php include "footer.php"; ?>