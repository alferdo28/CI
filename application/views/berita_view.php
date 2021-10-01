<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Berita</title>
</head>

<body>
  <h5><?php echo $judul; ?></h5>
  <ul>
    <li><?php echo $isi; ?></li>
  </ul>

  <table>
    <thead>
      <tr>
        <th>id</th>
        <th>judul</th>
        <th>pembaca</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($berita->result() as $row) {
      ?>
        <tr>
          <th><?php echo $row->id ?></th>
          <th><?php echo $row->judul ?></th>
          <th><?php echo $row->pembaca ?></th>
        </tr>
      <?php }
      ?>
    </tbody>
  </table>
</body>

</html>