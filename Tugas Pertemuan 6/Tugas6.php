<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Tugas 6- PWD</title>
  <style>
    table {
      border-collapse: collapse;
    }

    th,
    td {
      border: 1px solid #555;
      padding: 4px 8px;
      text-align: left;
      min-width: 24px;
    }

    .header-bg {
      background-color: lime;
    }

    .genap {
      background-color: skyblue;
    }

    .ganjil {
      background-color: yellow;
    }
  </style>
</head>

<body>
  <?php
  for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
      echo $i . " ";
    }
  }
  ?>

  <table>
    <tr>
      <th>bilangan</th>
      <?php for ($kolom = 1; $kolom <= 10; $kolom++): ?>
        <th class="header-bg"><?= $kolom; ?></th>
      <?php endfor; ?>
    </tr>

    <?php for ($baris = 1; $baris <= 10; $baris++): ?>
      <tr>
        <th class="header-bg"><?= $baris; ?></th>
        <?php for ($kolom = 1; $kolom <= 10; $kolom++): ?>
          <?php
          $hasil = $baris * $kolom;
          $kelasWarna = ($hasil % 2 == 0) ? "genap" : "ganjil";
          ?>
          <td class="<?= $kelasWarna; ?>"><?= $hasil; ?></td>
        <?php endfor; ?>
      </tr>
    <?php endfor; ?>
  </table>

</body>

</html>