




<?php 
              $query = "SELECT * FROM data ORDER BY id_title ASC";
              $dewan1 = $con->prepare($query);
              $dewan1->execute();
              $res1 = $dewan1->get_result();
              while ($row = $res1->fetch_assoc()) {
                $id = $row["id_title"];
                $title = $row["title"];
                $date = $row["date"];
                $link = $row["link"];
                if (strlen($title) > 60) {
                  $judul = substr($title, 0, 60) . "...";
                }
                $description = $row["description"];
                if (strlen($description) > 100) {
                  $description = substr($description, 0, 100) . "...";
                }
          ?>
          
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <h5 class="card-title"><?php echo $title; ?></h5>
                  <small class="text-muted">Post on <?php echo $date; ?></small>
              <p class="card-text"><?php echo $description; ?></p>
              </div>
                <form method="post" action="unduh.php">
                  <button type="submit" class="btn btn-success" style="padding-left: 54px;padding-right: 54px";>Download</button>
                </form>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
          
        <?php } ?>

        $batas = 6;
                $hal = $_GET['hal'];
                if (empty($hal)){
                    $posisi = 0;
                    $hal = 1;
                } else {
                    $posisi = ($hal - 1) * $batas;
                }

                <!-------Space----->
                <?php
        //looping pencarian
        /*
        - untuk mencari seluruh data yang sesuai dengan pencarian hingga looping selesai
        */
        if($_POST['pencarian'] == ''){ ?>
        <div style="float: left;">
                <?php 
                $jml = mysqli_num_rows(mysqli_query($con, $queryJml));
                
                //echo "  Jumlah Data : <b>$jml</b>";

                ?>
            </div>
            <div style="float:right">
                <ul class="pagination pagination-sm" style="margin:0">
                    <?php 
                    $jml_hal = ceil($jml / $batas);
                    for ($i=1; $i <= $jml_hal; $i++){
                        if($i != $hal) {
                            echo "<li><a href=\"?hal=$i\">$i</a></li>"; 
                        } else {
                            echo "<li class=\"active\"><a>$i</a></li>"; 
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
            } else {
                echo "<div style=\"float:left;\">";
                $jml = mysqli_num_rows(mysqli_query($con, $queryJml));
                echo "Data Hasil Pencarian : <b>$jml</b>";
                echo "</div>";    
            }
            ?>