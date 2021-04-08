<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

	<title>Hello, world!</title>
</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-sm">
			</div>
			<div class="col-sm">
				<br />
				<a href="admin.php">KEMBALI</a>
				<br />
				<br />
				<h3>Edit data Obat</h3>

				<?php
				include 'dbkoneksi.php';
				$id = $_GET['id'];
				$data = mysqli_query($con, "select * from tb_obat where id='$id'");
				while ($d = mysqli_fetch_array($data)) {
				?>
					<form method="post" action="update.php">
						<table>
							<tr>
								<td>Id Obat</td>
								<td><input type="text" name="id" value="<?php echo $d['id']; ?>"></td>
							</tr>
							<tr>
								<td>Kategori</td>
								<td><input type="text" name="kategori" value="<?php echo $d['Kategori']; ?>"></td>
							</tr>
							<tr>
								<td>Nama Buku</td>
								<td><input type="text" name="namabuku" value="<?php echo $d['Nama_buku']; ?>"></td>
							</tr>
							<tr>
								<td>Harga </td>
								<td><input type="number" name="harga" value="<?php echo $d['Harga']; ?>"></td>
							</tr>
							<tr>
								<td>Stok</td>
								<td><input type="number" name="stok" value="<?php echo $d['Stok']; ?>"></td>
							</tr>
							<tr>
								<td>Farmasi</td>
								<td><input type="text" name="farmasi" value="<?php echo $d['Farmasi']; ?>"></td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" value="SIMPAN"></td>
							</tr>
						</table>
					</form>
				<?php
				}
				?>
			</div>
			<div class="col-sm">
			</div>
		</div>
	</div>



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

	<script>
		$(document).ready(function() {
			$('#myTable').DataTable({
				pageLength: 5,
			});
			$('#exampleModal').on('show.bs.modal', function(event) {
				var button = $(event.relatedTarget) // Button that triggered the modal
				var id = button.data('id')
				var nama = button.data('nama')
				var email = button.data('email')
				var pesan = button.data('pesan')
				// var recipient = button.data('whatever') // Extract info from data-* attributes
				// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
				// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
				var modal = $(this)
				modal.find('.modal-body .edit-id').val(id)
				modal.find('.modal-body .edit-nama').val(nama)
				modal.find('.modal-body .edit-email').val(email)
				modal.find('.modal-body .edit-pesan').val(pesan)
			})
			$('.alert').delay(500).fadeOut(2000);
		});
	</script>
</body>

</html>