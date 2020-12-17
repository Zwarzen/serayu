<?php include("_config/config.php");?>
<?php include("_header.php");?>

<style type="text/css">
    .button {
      border: none;
      color: white;
      padding: 16px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      transition-duration: 0.4s;
      cursor: pointer;
    }

    .button1 {
      background-color: white; 
      color: black; 
      border: 2px solid #4CAF50;
    }

    .button1:hover {
      background-color: #4CAF50;
      color: white;
    }

</style>


<?php
    if(isset($_GET['id_title'])){
        $id_title    =$_GET['id_title'];
    }
    else {
        die ("Error. No ID Selected!");    
    }
    $query    =mysqli_query($con, "SELECT * FROM data WHERE id_title='$id_title'");
    $data    =mysqli_fetch_array($query);
?>
<style type="text/css">
#gambar{
	width: 300px;
	
}
</style>
<h1 class="card-title" style="position: absolute;"><?= $data['title'] ?></h1>
<div class="col-lg-8" style="padding-left: 0px; padding-top: 70px;">
	<div class="carousel-inner" role="listbox">
	    <div class="carousel-item active">
	      <img id="gambar" class="d-block img-fluid" src="<?php echo "gambar/" . $data['nama_gambar']; ?>" alt="First slide">
	    </div>
        <div class="description">
            <p id="pl" style="margin-left: 45%; width: 57.5%; height: 100%;"> <?= $data['deskripsi'] ?></p>
        </div>
	</div>
</div>


</div>
<button class="button button1" style="margin-left: 28.5%; width: 40%;">Download</button>
    <!-- /.row -->

  </div>
  <!-- /.container -->

<?php include("_footer.php");?>