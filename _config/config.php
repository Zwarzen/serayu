<?php

//setting default timezone dan pemanggil session start
//date_default_timezone_get('Asia/Jakarta');

session_start();


//koneksi
/*
	- Prosedur koneksi untuk menghubungkan website dengan database
	- initial state : $con
	- final state : echo mysqli_connect_error
	- author : risang daniswara
	- ver : 1.0
	- Date Mod : 6 Juni 2020
	*/
$con = mysqli_connect('localhost', 'root', '', 'serayufs_fansubfix');
if (mysqli_connect_error()) {
	echo mysqli_connect_error();
}


//fungsi base_url
/*
	- fungsi base_url untuk menghubungkan laman dengan folder utama agar mudah dalam pengembangan bootstrap atau design editing lainnya
	- initial state : base_url
	- final state : $base_url
	- author : risang daniswara
	- ver : 1.0
	- Date Mod : 24 Juli 2019
	*/
// function base_url($url = null)
// {
// 	$base_url = "https://localhost/serayu";
// 	if ($url != null) {
// 		return $base_url . "/" . $url;
// 	} else {
// 		return $base_url;
// 	}

// 	$title = @$_GET['title'];
// 	$deskripsi = @$_GET['deskripsi'];
// 	$tgl = @$_GET['tgl'];
// 	$link = @$_GET['link'];
// 	$nama_gambar = @$_GET['nama_gambar'];
// 	$act_id = @$_GET['act_id'];

// 	$sql_simpan = mysql_query("INSERT INTO data (title, deskripsi, tgl, link, nama_gambar, act_id) VALUES ('$title', '$deskripsi', '$tgl', '$link', '$nama_gambar', '$act_id')");
// 	if ($sql_simpan) {
// 		echo "Data berhasil disimpan";
// 	} else {
// 		echo "Data gagal disimpan";
// 	}
// }
