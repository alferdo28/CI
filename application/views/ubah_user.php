<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Pengguna</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
</head>

<body>
    <div class="container">
        <h1>Form Update Pengguna</h1>
        <div class="col-md-12">
            <form action="<?php echo base_url('user/update'); ?>" method="POST">
                <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $user_id; ?>">
                    <label>Nama Pengguna</label>
                    <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="<?php echo $alamat; ?>">
                </div>
                <div class="form-group">
                    <label>Nomor Hp</label>
                    <input type="text" class="form-control" name="nomor_hp" value="<?php echo $nomor_hp; ?>">
                </div>
                <input type="hidden" name="password1" value="<?php echo $password; ?>">
                <div class="form-group">
                    <label>Ubah Password</label>
                    <input type="password" class="form-control" name="password" value="">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script>
</body>

</html>