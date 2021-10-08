<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Kategori Berita</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
</head>
<body>
    <div class="container">
        <h1>Form Update Kategori</h1>
        <div class="col-md-12">
            <form action="<?php echo base_url('kategori/update'); ?>" method="POST">
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $kategori_id; ?>">
                <label>Nama Deskripsi</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>">
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <input type="text" class="form-control" name="deskripsi" value="<?php echo $deskripsi; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script>
</body>
</html>