<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
</head>
<body>
    <div class="container">
        <h1>Form Input User</h1>
        <div class="col-md-12">
            <form action="<?php echo base_url('user/create'); ?>" method="POST">
            <div class="form-group">
                <label>Nama Pengguna</label>
                <input type="text" class="form-control" name="nama">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" name="alamat">
            </div>
            <div class="form-group">
                <label>Nomor HP</label>
                <input type="number" class="form-control" name="nomor_hp">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script>
</body>
</html>