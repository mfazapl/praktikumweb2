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
<p><a href='FunctionMember.php?form=tambah'>Tambah Data </a></p>
         <tr>
         <td><b>Nama Member<b></td>
         <td><b>Nomor Member<b></td>
         <td><b>Alamat<b></td>
         <td><b>Tgl Mendaftar<b></td>
         <td><b>Tgl Terakhir bayar<b></td> 
         </tr>
         <?php foreach (GetAllDataMember($con) as $row) : ?>
            <tr>
                <td><?= $row ["nama_member"]; ?></td>
                <td><?= $row ["nomor_member"]; ?></td>
                <td><?= $row ["alamat"]; ?></td>
                <td><?= $row ["tgl_mendaftar"]; ?></td>
                <td><?= $row ["tgl_terakhir_bayar"]; ?></td>
                <td>
                <a onclick="return confirm('Yakin hapus data yang dipilih?')" href='FunctionMember.php?id_member=<?= $row->id_member ?>&form=delete'>Delete</a>
                </td>
            </tr>
            </tr>
        <?php endforeach; ?>
</body>
</html>