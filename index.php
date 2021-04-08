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

    <div class="container" style="margin-top:100px;">
        <div class="row">
            <div class="col-sm">
            </div>
            <div class="col-sm-10">
                <h1>Halaman Admin</h1>
                <br>
                <h5>Obat</h5>
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">Id Obat</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Nama Buku</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Farmasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'dbkoneksi.php';
                        $no = 1;
                        $data = mysqli_query($con, "select * from tb_obat");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['id']; ?></td>
                                <td><?php echo $d['Kategori']; ?></td>
                                <td><?php echo $d['Nama_buku']; ?></td>
                                <td><?php echo $d['Harga']; ?></td>
                                <td><?php echo $d['Stok']; ?></td>
                                <td><?php echo $d['Farmasi']; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>

                <br>
                <h5>Farmasi</h5>
                <!-- Ini data Farmasi -->
                <table class="table" style="margin-top:50px;">
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">Id Farmasi</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Kota</th>
                            <th scope="col">Telepon</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'dbkoneksi.php';
                        $no = 1;
                        $data = mysqli_query($con, "select * from tb_farmasi");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['id']; ?></td>
                                <td><?php echo $d['Nama']; ?></td>
                                <td><?php echo $d['Alamat']; ?></td>
                                <td><?php echo $d['Kota']; ?></td>
                                <td><?php echo $d['Telepon']; ?></td>
                                <td><a href="edit1.php?id=<?php echo $d['id']; ?>">EDIT</a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
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
            $('#myTable1').DataTable({
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