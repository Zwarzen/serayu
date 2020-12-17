<?php include("_config/config.php"); ?>
<?php include("_header.php"); ?>
<!-- /.col-lg-3 -->



<div class="col-lg-8" style="width: 50%; padding: 0px; ">

<?php
$querypht = "SELECT * FROM data LIMIT 3";
?>


  <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <div class="row">
    <?php
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    //looping mengambil data dan membuat pagination
    /*
                - $batas untuk mengambil batas data yang ditampilkan
                - $hal untuk menampilkan halaman yang dibuka
                */

    $batas = 6;
    $hal = $_GET['hal']; //? (int)$_GET['hal']:1;
    if (empty($hal)) {
      $posisi = 0;
      $hal = 1;
    } else {
      $posisi = ($hal - 1) * $batas;
    }
    //===================================================//


    //===================================================//
    $no = 1;
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $pencarian = trim(mysqli_real_escape_string($con, $_POST['pencarian']));
      if ($pencarian != '') {
        $sql = "SELECT * FROM data WHERE title LIKE '%$pencarian%'";
        $query = $sql;
        $queryJml = $sql;
      }
    } else {
      $query = "SELECT * FROM data LIMIT $posisi, $batas";
      $queryJml = "SELECT * FROM data";
      $no = $posisi + 1;
    }
    //==================================================//

    //==================================================//
    $sql_data = mysqli_query($con, $query) or die(mysqli_error($con));
    if (mysqli_num_rows($sql_data) > 0) {
      while ($data = mysqli_fetch_array($sql_data)) { ?>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top h-100" src="<?php echo "gambar/" . $data['nama_gambar']; ?>" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <h5 class="card-title"><?= $data['title'] ?></h5>
                <?php 
                if ($data['movie']!=0){
                  
                  echo "<h6 >(Movie)</h6>";
                  }
                else{
                  echo "<h6>(Tv series)</h6>";

                }
                
                ?>
                <p id="pl" style="width: 100%"> <?= $data['deskripsi'] ?></p>
                <small class="text-muted">Post on <?= $data['tgl'] ?></small>
                <!----<p class="card-text"><?= $data['description'] ?></p>----->
            </div>
             <form method="post" action="unduh.php?id_title=<?=$data['id_title']?>">
              <button type="submit" class="btn btn-success" style="padding-left: 78px;padding-right: 78px" ;>Download</button>
            </form>
             
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>
    <?php
      }
    }else {
      echo "<tr><td colspan=\"4\" align=\"center\">Data Tidak Ditemukan</td></tr>";
    }
    ?>
    </tbody>
    </table>
  </div>

  <?php
  //looping pencarian
  /*
        - untuk mencari seluruh data yang sesuai dengan pencarian hingga looping selesai
        */
  if (isset($_POST['pencarian']) == '') { ?>
    <div style="float: left;">
      <?php
      $jml = mysqli_num_rows(mysqli_query($con, $queryJml));

      //echo "  Jumlah Data : <b>$jml</b>";

      ?>
    </div>
    <div class="pagination" style="margin: auto; width: 50%; padding-left: 150px; ">
      <ul class="pagination pagination-sm" style="margin:0; padding: 10px;">

        <?php
        $jml_hal = ceil($jml / $batas);
        for ($i = 1; $i <= $jml_hal; $i++) {
          if ($i != $hal) {
            echo "<li><a href=\"?hal=$i\" style=\"margin:0; padding-left: 10px; padding-right: 10px;\">$i</a></li>";
          }else {


            echo "<li class=\"active\" style=\"margin:0; padding-left: 10px; padding-right: 10px;\"><a>$i</a></li>";
          }
        }
        ?>

      </ul>
    </div>
  <?php
    //looping pagination
    /*
            melakukan looping hingga data habis dan membuat laman pagination
            */
  }else {
    echo "<div style=\"float:left;\">";
    $jml = mysqli_num_rows(mysqli_query($con, $queryJml));
    echo "</div>";
  }
  ?>


</div>


<!-- /.row -->
<!---this row is got to be a comment section--->

</div>
<!-- /.col-lg-9 -->
<!---this ---->

</div>
<!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<?php include_once("_footer.php"); ?>