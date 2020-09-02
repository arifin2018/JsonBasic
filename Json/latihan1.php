<?php
include "koneksi.php";
// $mahasiswa = [
//         [
//             "nama"  =>  "nur arifin",
//             "npm"   =>  "183112706450001",
//             "Univ"  =>  "Universitas Nasional"
//         ],[
//             "nama"  =>  "adit",
//             "npm"   =>  "183112706450023",
//             "Univ"  =>  "Universitas ahmad yani"
//         ]
//     ];
$db = $dbh->prepare('select * from user');
$db->execute();
// $result = mysqli_query($mysqli, $sql);
$mahasiswa  = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data; 

?>