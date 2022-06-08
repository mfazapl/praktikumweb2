<?php
    
    
    function GetAllDataMember($pdo) {
        $con ="SELECT * FROM member";
        $statement = $pdo->prepare($con);
        $statement->execute();
        $members = $statement->fetchAll(PDO::FETCH_ASSOC);
        $pdo = null;
        return $members;
    }

    function GetDataMemberById($pdo, $id) {
        $sql = "SELECT * FROM member WHERE id_member = $id";
        $statement = $pdo->prepare($sql);
        $statement->execute();
        $members = $statement->fetch(PDO::FETCH_OBJ);
        $pdo = null;
        return $members;
    }

    function AddMember($pdo, $nama_member, $nomor_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar) {
        $sql = "INSERT INTO member ( nama_member,nomor_member, alamat, tgl_mendaftar, tgl_terakhir_bayar) VALUES (?,?,?,?,?)";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([$nama_member, $nomor_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar]);
        $pdo = null;
        header('Location: FormMember.php');
        exit();
    }

    function UpdateMember($pdo, $nama, $nomor, $alamat, $id) {
        $sql = "UPDATE member SET nama_member=?, nomor_member=?,alamat=?, tgl_mendaftar=?, tgl_terakhir_daftar=? WHERE id=?";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([ $nama, $alamat, $id]);
        $pdo = null;
        header('Location: FormMember.php');
        exit();
    }

    function DeleteMember($pdo, $id) {
        $sql = "DELETE FROM member WHERE id_member=?";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([$id]);
        $pdo = null;
        header('Location: FormMember.php');
        exit();
    }

 function GetAllDataBuku($pdo) {
        $con ="SELECT * FROM buku";
        $statement = $pdo->prepare($con);
        $statement->execute();
        $bukus = $statement->fetchAll(PDO::FETCH_ASSOC);
        $pdo = null;
        return $bukus;
    }

    function GetDataBukuById($pdo, $id) {
        $sql = "SELECT * FROM buku WHERE id_buku =$id";
        $statement = $pdo ->prepare($sql);
        $statement -> execute();
        $bukus = $statement->fetchAll(PDO::FETCH_ASSOC);
        $pdo = null;
        return $bukus;

    }

    function UpdateBuku($con, $judul_buku, $penulis, $penerbit, $tahun_terbit, $id) {
        $sql = "UPDATE buku SET judul_buku=?, penulis=?,penerbit=?, tahun_terbit=?, WHERE id=?";
        $stmt= $con->prepare($sql);
        $stmt->execute([ $judul_buku, $penulis, $penerbit, $tahun_terbit, $id]);
        header('Location: FormBuku.php');
        exit();
    }
    function AddBuku($pdo, $judul_buku, $penulis, $penerbit, $tahun_terbit){
        $sql = "INSERT INTO buku ( judu_buku, penulis, penerbit, tahun_terbit) VALUE (?,?,?,?) ";
        $stmt = $pdo ->prepare($sql);
        $stmt ->execute([$judul_buku, $penulis, $penerbit, $tahun_terbit]);
        $pdo = null;
        header("FormBuku.php");
        exit();
    }

    function DeleteBuku($con, $id) {
        $sql = "DELETE FROM buku WHERE id_buku=?";
        $stmt= $con->prepare($sql);
        $stmt->execute([$id]);
        header('Location: FormBuku.php');
        exit();
    }

    function GetAllDataPinjam($pdo) {
        $con ="SELECT * FROM pinjaman";
        $statement = $pdo->prepare($con);
        $statement->execute();
        $pinjams = $statement->fetchAll(PDO::FETCH_ASSOC);
        $pdo = null;
        return $pinjams;
    }

    function GetDataPinjamById($pdo, $id) {
        $sql = "SELECT * FROM pinjaman WHERE id_pinjaman =$id";
        $statement = $pdo ->prepare($sql);
        $statement -> execute();
        $bukus = $statement->fetchAll(PDO::FETCH_ASSOC);
        $pdo = null;
        return $bukus;

    }

    function GetDataPinjam($pdo, $id) {
        $sql = "SELECT * FROM pinjaman WHERE id_pinjaman =$id";
        $statement = $pdo ->prepare($sql);
        $statement -> execute();
        $pinjams= $statement->fetchAll(PDO::FETCH_ASSOC);
        $pdo = null;
        return $pinjams;

    }
    function UpdatePinjam($con, $tgl_pinjam, $tgl_kembali, $id) {
        $sql = "UPDATE pinjaman SET tgl_pinjam=?, tgl_kembali=?, WHERE id=?";
        $stmt= $con->prepare($sql);
        $stmt->execute([ $tgl_pinjam, $tgl_kembali, $id]);
        header('Location: FormPinjaman.php');
        exit();
    }

    function AddPinjam($pdo, $tgl_pinjam, $tgl_kembali){
        $sql = "INSERT INTO pinjaman ( tgl_pinjam, tgl_kembali) VALUE (?,?) ";
        $stmt = $pdo ->prepare($sql);
        $stmt ->execute([$tgl_pinjam, $tgl_kembali]);
        $pdo = null;
        header("FormPinjaman.php");
        exit();
    }

    function DeletePinjam($con, $id) {
        $sql = "DELETE FROM pinjaman WHERE id_pinjam=?";
        $stmt= $con->prepare($sql);
        $stmt->execute([$id]);
        header('Location: FormPinjaman.php');
        exit();
    }

?>
