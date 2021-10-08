<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Kategori Berita</title>
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
</head>

<body>
  <div class="container" style="margin-top: 50px;">
    <a class="btn btn-info" href="<?php echo base_url('kategori/addKategori'); ?>">Tambah Kategori Berita</a>
    <br><br>
    <div class="row">
      <div class="col-md-12">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nama Kategori</th>
              <th>Deskripsi</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($kategori->result() as $row) {
            ?>
              <tr>
                <td><?php echo $row->id ?></td>
                <td><?php echo $row->nama_kategori ?></td>
                <td><?php echo $row->deskripsi_kategori ?></td>
                <td>
                  <a href="<?php echo base_url('kategori/getKategori/'.$row->id); ?>" class="btn btn-warning">Update</a>
                  <a href="<?php echo base_url('kategori/delete/'.$row->id); ?>" class="btn btn-danger">Delete</a>
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