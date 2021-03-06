<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Berita</title>
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
</head>

<body>
  <h5><?php echo $judul; ?></h5>
  <ul>
    <li><?php echo $isi; ?></li>
  </ul>
  <div class="container">
    <a class="btn btn-info" href="<?php echo base_url('berita/addBerita'); ?>">Tambah Berita</a>
    <br><br>
    <div class="row">
      <div class="col-md-9">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Id</th>
              <th>Judul</th>
              <th>Pembaca</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($berita->result() as $row) {
            ?>
              <tr>
                <td><?php echo $row->id ?></td>
                <td><?php echo $row->judul ?></td>
                <td><?php echo $row->pembaca ?></td>
                <td>
                  <a href="<?php echo base_url('berita/getBerita/'.$row->id); ?>" class="btn btn-warning">Update</a>
                  <a href="<?php echo base_url('berita/delete/'.$row->id); ?>" class="btn btn-danger">Delete</a>
                </td>
              </tr>
            <?php }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
  <script src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script>
</body>

</html>