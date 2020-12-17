<?php

require_once"_config/config.php"; 

//boolean untuk menambah data
if(isset($_POST['add'])) {
    $title = trim(mysqli_real_escape_string($con,$_POST['title']));
    $description = trim(mysqli_real_escape_string($con,$_POST['description']));
    mysqli_query($con, "INSERT INTO data (id, title, description) VALUES ('$id', '$title', '$description')") or die (mysqli_error($con));
    echo "<script>window.location='index.php';</script>";
}

//boolean untuk mengedit data
else if(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $title = trim(mysqli_real_escape_string($con,$_POST['title']));
    $description = trim(mysqli_real_escape_string($con,$_POST['description']));
    mysqli_query($con, "UPDATE data SET title = '$title', description = '$description' WHERE id = '$id' ") or die (mysqli_error($con));
    
    //echo "UPDATE tb_guru SET nama_guru = '$nama', ket_guru = '$ket' WHERE id_guru = '$id'";
    //var_dump($_POST);
    echo "<script>window.location='index.php';</script>";

}

?> 