<html>

<?php
include_once("Koneksi.php");
include_once("Controller.php");
?>

<?php
$form = $_GET['form'];
if($form != 'tambah');
$id = $_GET['id_pinjaman'];
?>

<?php if ($form == 'tambah'){ ?>
<?php
   if(isset($_POST['submit'])){
    {
        $tgl_pinjam = $_POST['tgl_pinjam'];
        $tgl_kembali = $_POST['tgl_kembali'];

    }
}
?>
    <form method="POST">
 <div>
     <label for="tgl_pinjam">Nama : </label>
     <input type="text" name="tgl_pinjam" id="tgl_pinjam"><br>
     <label for="tgl_kembali">Nomor : <label>
     <input type="text" name="tgl_kembali" id="tgl_kembali"><br>
     </div>
     </form>
<?php } ?>

<?php if($form == 'update') {
 $member = GetDataPinjamById($pdo, $id);
 if(isset($_POST['submit'])){
         $tgl_pinjam = $_POST['tgl_pinjam'];
         $tgl_kembali = $_POST['tgl_kembali'];
         UpdatePinjam($con , $tgl_pinjam, $tgl_kembali, $id);
      }
?>
<form method="POST">
    <label>Nama Member: </label>
    <input type="text" value="<?php $member->nama_member; echo"$member->nama_member"?>" name="nama_member" id="nama_member">
    <label>Nomor Member: </label>
    <input type="text" value="<?php $member->nomor_member; echo"$member->nomor_member"?>" name="nomor_member" id="nomor_member">
</form>
<?php
  }
?>


<?php if($form == 'delete') { ?>
    <?php
      DeletePinjam($con , $id);
    ?>
<?php
}
?>
</html>