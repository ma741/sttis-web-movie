<?php include "header.php";?>
	
	<br />
	<br />
	<div class="container mt-5">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-11">
		<a href="category_add.php" class="btn btn-primary btn-sm mt-5 mb-3"><i class="fa fa-plus"></i> Tambah Category</a>
		<div class="table-responsive">
		<table class="table table-striped table-bordered data text-white">
			<thead>
				<tr>
					<th scope="row" width=1%;>NO</th>
					<th scope="row">Nama</th>
					<th scope="row" width=20%;>Opsi</th>


				</tr>
				
			</thead>

			<tbody>
				<?php
				include "../../config.php";
				$no = 1;
				$category = mysqli_query($conn, "SELECT * FROM category_name");
				while ($c = mysqli_fetch_assoc($category)) {

				?>

					<tr>
						<td><?= $no++; ?></td>
						<td><?= $c['name']; ?></td>
						<td>
							<a href="category_edit.php?id=<?= $c['id']; ?>" class="btn "><i class="text-white fa fa-wrench"></i></a>
							<a href="category_delete.php?id=<?= $c['id']; ?>" class="btn "><i class="text-white fa fa-trash"></i></a>
						</td>
					</tr>

				<?php } ?>
			</tbody>
		</table>

		</div>
		
	</div>

		</div>
	</div>
	
</body>

<?php include "footer.php";?>

