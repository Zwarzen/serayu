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
    padding-left: 200px; 
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
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
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
            <a class="nav-link disabled" href="add.php">Add Movies</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="l_update.php">latest update</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="movie.php">movie</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <div class="list-group">
        </div>
      </div>