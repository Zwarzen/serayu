<?php 
include_once('../_header.php');
?>

    <div class="box">
            <h1>Guru</h1>
            <h4>
            <small>Edit Data Guru</small>
                <div class="pull-right">
                    <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
                </div>
            </h4>
        
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <?php 
                        $id = $_GET['id'];
                        $sql_serayu = mysqli_query($con, "SELECT * FROM data WHERE id_title = '$id'") or die (mysqli_error($con));
                        $data = mysqli_fetch_array($sql_serayu);
                    ?>
                    <form action="proses.php" method="post">
                        <div class="form-group">
                            <label for="title"> Title </label>
                            <textarea name="title" id="title" class="form-control"><?=$data['title']?></textarea>
                            <label for="description"> Description </label>
                            <textarea name="description" id="description" class="form-control"><?=$data['description']?></textarea>
                            <input type="hidden" name="id" value="<?php echo $data['id'];?>" />
                        </div>
                        <div class="form-group pull-right">
                            <input type="submit" name="edit" value="Simpan" class="btn btn-success">
                        </div>
                    </form>
                </div>  
            </div>
    </div>

<?php 
include_once('../_footer.php');
?>