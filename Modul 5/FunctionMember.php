<html>

<?php
include_once("Koneksi.php");
include_once("Controller.php");
?>

<?php
$form = $_GET['form'];
if($form != 'tambah');
$id = $_GET['id_member'];
?>

<?php if ($form == 'tambah'){ ?>
<?php
   if(isset($_POST['tambah'])){
    {
        $nama_member = $_POST['nama_member'];
        $nomor_member = $_POST['nomor_member'];
        $alamat = $_POST['alamat'];
        $tgl_mendaftar = $_POST['tgl_mendaftar'];
        $tgl_terakhir_bayar = $_POST['tgl_terakhir_bayar'];
        AddMember($con , $nama_member, $nomor_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar);
    }
}
?>
    <form method="POST">
 <div>
     <label for="nama_member">Nama : </label>
     <input type="text" name="nama_member" id="nama_member"><br>
     <label for="nomor_member">Nomor : <label>
     <input type="text" name="nomor_member" id="nomor_member"><br>
     <label for="alamat">Alamat : </label>
     <input type="text" name="alamat" id="alamat"><br>
     <label for="tgl_mendaftar">Tanggal Mendaftar : </label>
     <input type="date" name="tgl_mendaftar" id="tgl_mendaftar"><br>
     <label for="tg_terakhir_bayar">Tanggal Terakhir Mendaftar: </label>
     <input type="date" name="tgl_terakhir_bayar" id="tgl_terakhir_bayar"><br>
     <input type="submit" name="tambah" value="submit">
     </div>
     </form>
<?php } ?>

<?php if($form == 'delete') { ?>
    <?php
      DeleteMember($con , $id);
    ?>
<?php
}
?>
</html>
