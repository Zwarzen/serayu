<?php include("_config/config.php"); ?>
<?php include("_header.php"); ?>
<!-- /.col-lg-3 -->


<div class="genre" id="judul">
  <h2>Latest Update</h2>
</div>

<div class="col-lg-8" style="width: 50%; padding: 0px; ">
  <div class="row">
    <?php
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    //looping mengambil data dan membuat pagination
    /*
                - $batas untuk mengambil batas data yang ditampilkan
                - $hal untuk menampilkan halaman yang dibuka
                */
    $batas = 6;
    $posisi = 0;
    
    
      $query = "SELECT * FROM data ORDER BY `id_title` DESC LIMIT $posisi, $batas";
      $no = $posisi + 1;
    
    $sql_data = mysqli_query($con, $query) or die(mysqli_error($con));
    if (mysqli_num_rows($sql_data) > 0) {
      while ($data = mysqli_fetch_array($sql_data)) { ?>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="<?php echo "gambar/" . $data['nama_gambar']; ?>" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <h5 class="card-title"><?= $data['title'] ?></h5>
                <p id="pl" style="width: 100%;"> <?= $data['deskripsi'] ?></p>
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
    } else {
      echo "<tr><td colspan=\"4\" align=\"center\">Data Tidak Ditemukan</td></tr>";
    }
    ?>
    </tbody>
    </table>
  </div>

  


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