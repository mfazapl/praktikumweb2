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
   if(isset($_POST['submit'])){
    {
        $judul_buku = $_POST['judul_buku'];
        $penulis = $_POST['penulis'];
        $penerbit = $_POST['penerbit'];
        $tahun_terbit= $_POST['tahun_terbit'];
        AddBuku($con , $judul_buku, $penulis, $penerbit, $tahun_terbit);
    }
}
?>
    <form method="POST">
 <div>
     <label for="judul_buku">Judul Buku : </label>
     <input type="text" name="judul_buku" id="judul_buku"><br>
     <label for="penulis">Penulis : <label>
     <input type="text" name="penulis" id="penulis"><br>
     <label for="penerbit">penerbit : </label>
     <input type="text" name="penerbit" id="penerbit"><br>
     <label for="tahun_terbit">Tahun_terbit : </label>
     <input type="date" name="tahun_terbit" id="tahun_terbit"><br>
     <input type="submit" name="submit" value="submit">
     </div>
     </form>
<?php } ?>

<?php if($form == 'update') {
 $member = GetDataBukuById($pdo, $id);
 if(isset($_POST['submit'])){
         $judul_buku = $_POST['judul_buku'];
         $penulis = $_POST['penulis'];
         $penerbit = $_POST['penerbit'];
         $tahun_terbit = $_POST['tahun_terbit'];
         UpdateBuku($con ,$judul_buku,$penulis, $penerbit, $tahun_terbit ,$id);
      }
?>
<form method="POST">
    <label>Judul Buku: </label>
    <input type="text" value="<?php $buku->judul_buku; echo"$buku->judul_buku"?>" name="judul_buku" id="judul_buku">
    <label>Penulis: </label>
    <input type="text" value="<?php $buku->penulis; echo"$buku->penulis"?>" name="penulis" id="penulis">
    <label>Penerbit : </label>
    <input type="text" value="<?php $buku->penerbit; echo"$buku->penerbit"?>" name="penerbit" id="penerbit">
    <label>Tahun Terbit: </label>
    <input type="text" value="<?php $buku->tahun_terbit; echo"$buku->tahun_terbit"?>" name="tahun_terbit" id="tahun_terbit">
    <input type="submit" name="submit" value="submit">
</form>
<?php
  }
?>


<?php if($form == 'delete') { ?>
    <?php
      DeleteBuku($con , $id);
    ?>
<?php
}
?>
</html>