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
?>