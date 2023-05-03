<!DOCTYPE html>
<html><head>
<title></title>
</head><body>
    <div>
      <table>
        <tr>
          <th>Nama Peminjam</th>
          <th>Jumlah Pinjam</th>
        </tr>

        <?php 
          $name_peminjam = 1; 
          foreach ($data as $d1):
        ?>
        <tr>
          <td><?php echo $d1->name_peminjam ?></td>
          <td><?php echo $d1->jml ?></td>
        </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </body></html>





