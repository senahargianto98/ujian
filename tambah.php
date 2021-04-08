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
				<h3>Tambah Data Obat</h3>
				<form method="post" action="insert.php">
					<table>
						<tr>
							<td>Id Obat</td>
							<td><input type="text" name="id"></td>
						</tr>
						<tr>
							<td>Kategori</td>
							<td><input type="text" name="kategori"></td>
						</tr>
						<tr>
							<td>Nama Buku</td>
							<td><input type="text" name="namabuku"></td>
						</tr>
						<tr>
							<td>Harga </td>
							<td><input type="number" name="harga"></td>
						</tr>
						<tr>
							<td>Stok</td>
							<td><input type="number" name="stok"></td>
						</tr>
						<tr>
							<td>Farmasi</td>
							<td><input type="text" name="farmasi"></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" value="SIMPAN"></td>
						</tr>
					</table>
				</form>
				<div class="mx-auto" style="width: 180px;margin-top:40px;">
					<a href="admin.php" class="btn btn-primary">Kembali</a>
				</div>
				
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