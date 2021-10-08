<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Berita</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
</head>
<body>
    <div class="container">
        <h1>Form Input Berita</h1>
        <div class="col-md-12">
            <form action="<?php echo base_url('berita/create'); ?>" method="POST">
            <div class="form-group">
                <label>Judul</label>
                <input type="text" class="form-control" name="judul">
            </div>
            <div class="form-group">
                <label>Pembaca</label>
                <input type="text" class="form-control" name="pembaca">
            </div>
            <button type="submit" class="btn btn-primary"> Submit</button>
            </form>
        </div>
    </div>
    <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script>
</body>
</html>