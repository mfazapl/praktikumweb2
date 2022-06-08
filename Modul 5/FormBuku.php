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
<p><b>DATA MEMBER </p></b>
<?php
require_once("Controller.php");
require_once("Koneksi.php");

?>
<table border = "1">
<p><a href='FunctionBuku.php?form=tambah'>Tambah Data </a></p>
         <tr>
         <td><b>Judul Buku<b></td>
         <td><b>Penulis<b></td>
         <td><b>Penerbit<b></td>
         <td><b>Tahun Terbit<b></td> 
         </tr>
         <?php foreach (GetAllDataBuku($con) as $row) : ?>
            <tr>
                <td><?= $row ["judul_buku"]; ?></td>
                <td><?= $row ["penulis"]; ?></td>
                <td><?= $row ["penerbit"]; ?></td>
                <td><?= $row ["tahun_terbit"]; ?></td>
                <td>
                <a href='FunctionBuku.php?id_member=<?= $row->id_member ?>&form=update'>update</a>
                <a onclick="return confirm('Yakin hapus data yang dipilih?')" href='FunctionBuku.php?id_buku=<?= $row->id_member ?>&form=delete'>Delete</a>
                </td>
            </tr>
            </tr>
        <?php endforeach; ?>
</body>
</html>