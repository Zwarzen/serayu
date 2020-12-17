<?php include("_config/config.php");?>
<?php include("_header.php");?>

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
<h1 class="card-title"><?= $data['title'] ?></h1>
<div class="col-lg-8" style="margin-left: -100px;">
	<div class="carousel-inner" role="listbox">
	    <div class="carousel-item active">
	      <img id="gambar" class="d-block img-fluid" src="<?php echo "gambar/" . $data['nama_gambar']; ?>" alt="First slide">
	    </div>
	</div>
</div>


</div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

<?php include("_footer.php");?>