<hmtl>
<head>
    <style>
      table, tr, td{
         border-collapse: collapse;
      }

        tr, td{
            width: 127px;
            height: 25px;
        }

        p{
            font-size: 25px;
        }

        label{
            font-size: 18px;
        }
    </style>
</head>
<body>
<p><b>DATA PINJAMAN </p></b>
<?php
require_once("Controller.php");
require_once("Koneksi.php");

?>
<table border = "1">
<p><a href='FunctionPinjaman.php?form=tambah'>Tambah Data </a></p>
         <tr>
         <td><b>Tanggal Pinjam<b></td>
         <td><b>Tanggal kembali<b></td>
         </tr>
         <?php foreach (GetAllDataMember($con) as $row) : ?>
            <tr>
                <td><?= $row ["tgl_pinjam"]; ?></td>
                <td><?= $row ["tgl_kembali"]; ?></td>
                <td>
                <a href='FunctionBuku.php?id_peminjaman=<?= $row->id_member ?>&form=update'>update</a>
                <a onclick="return confirm('Yakin hapus data yang dipilih?')" href='FunctionBuku.php?id_peminjaman=<?= $row->id_member ?>&form=delete'>Delete</a>
                </td>
            </tr>
            </tr>
        <?php endforeach; ?>
</body>
</html>