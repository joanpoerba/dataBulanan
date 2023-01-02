<?php 
require_once "dataBulanan.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
  <div class="base container-fluid d-flex flex-column justify-content-center">
    <!-- data bulanan section -->
    <header class="text-center my-5">
      <h2>data bulanan</h2>
    </header>
    <main class="d-flex justify-content-center">
      <table class="table">
        <thead class="table-secondary">
          <tr>
            <th>#tanggal</th>
            <th>pengeluaran</th>
            <th>pemasukan</th>
            <th class="text-danger">sisa</th>
          </tr>
        </thead>
        <?php foreach($dataBulanan as $data) : ?>
        <tbody>
          <tr>
            <td><?= $data['tanggal']; ?></td>
            <td><?= $data['pendapatan']; ?></td>
            <td><?= $data['pengeluaran']; ?></td>
            <td class="text-danger"><?= $data["sisa"]; ?></td>
          </tr>
        </tbody>
        <?php endforeach ; ?>
      </table>
    </main>
    <!-- data tahunan section -->
    <header class="text-center my-5">
      <h2>data tahunan</h2>
    </header>
    <main class="d-flex justify-content-center">
      <table class="table">
        <thead class="table-secondary">
          <tr>
            <th>#tanggal</th>
            <th>pengeluaran</th>
            <th>pemasukan</th>
            <th class="text-danger">sisa</th>
          </tr>
        </thead>
        <?php if(isset($dataTahunan)) : ?>
        <?php foreach($dataTahunan as $data) : ?>
        <tbody>
          <tr>
            <td><?= $data['tanggal']; ?></td>
            <td><?= $data['pendapatan']; ?></td>
            <td><?= $data['pengeluaran']; ?></td>
            <td class="text-danger"><?= $data['sisa']; ?></td>
          </tr>
        </tbody>
        <?php endforeach ; ?>
        <?php endif; ?>
      </table>
    </main>
  </div>
</body>
</html>