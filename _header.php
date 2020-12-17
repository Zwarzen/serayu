<?php
require_once "_config/config.php";
/*
    - fungsi looping login adalah untuk membuat laman agar tidak semua orang bisa mengakses laman admin yang bersifat private
    - author : risang daniswara
    - ver : 1.0
    - Date Mod : 24 Juli 2019
    */
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SerayuFansub</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<style type="text/css">
  .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 150px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    padding: 12px 16px;
    z-index: 1;
  }

  .dropdown:hover .dropdown-content {
    display: block;
  }


  .search-container {
    float: right;
    margin-top: 0px;
  }

  .search-container button {
    float: right;
    padding: 2px;
    margin-right: 0px;
    background: #ddd;
    font-size: 17px;
    border: none;
    cursor: pointer;
  }

  .search-container button:hover {
    background: #ccc;
  }

  #pl{
    overflow-y: scroll;
    height: 140px;
  width: 160px;
  }

  #judul{
    position: relative; 
    margin: auto; 
    width: 50%; 
    padding-left: 0px; 
    padding-top: 20px; 
    padding-bottom: 20px;
  }
</style>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php" style="color: white;">SeraYu Fansub</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <a class="nav-link" href="#">Genres</a>
              <div class="dropdown-content">
                <a href="g_action.php">Action</a><br>
                <a href="g_adventure.php">Adventure</a><br>
                <a href="g_drama.php">Drama</a><br>
                <a href="g_sol.php">Slice of Life</a><br>
                <a href="g_fantasy.php">Fantasy</a><br>
                <a href="g_mecha.php">Mecha</a><br>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="l_update.php">latest update</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="movie.php">Movies</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="searchbar" style="position: sticky; margin-top: 0px; width: 30%;">
        <div class="search-container" style="padding-right: 0px; ">
          <form method="post" action="index.php">
          <input type="text" placeholder="Search.." name="pencarian">
            <input type="submit" value="Search" >
          </form>
        </div>
      </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-0">

        <div class="list-group">
        </div>
      </div>
      <div class="w3-main" style="margin-left: 65%; float: right; position: absolute; padding-right: 30px; padding-top: 23px; width: 28%;">
        <div class="w3-teal">
          <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
          <div class="w3-container">
            <h1>Visual Novel</h1>
          </div>
        </div>

        <div class="w3-container" style="height: 200px; background: #c0c0c0;">
          <h3 style="color: white;">Cuming Soon</h3>
        </div>

        <div class="discord" style="margin-top: 10px; padding-left: 10px; padding-top: 5px;padding-bottom: 5px; background-color: #aaaaaa; border-radius: 10px;">
          <img src="gambar/discord.png" style="width: 15%;">  <h3 style="display: inline-block; color: white; text-decoration: none; margin-left: 40px;"><a href="https://discord.gg/hjM2bncGme"> Join Our Discord!</a></h3>
        </div>
      </div>
