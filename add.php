<?php include_once("_header.php");?>
      <!-- /.col-lg-3 -->

      <div class="col-lg-8" style="margin-left: 90px;">

        <div class="box">
            <h1>Add Movie</h1>
            <h4>
                <div class="pull-right" style="padding-top: 10px;">
                    <a href="index.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Back</a>
                </div>
            </h4>
            <!---form input--->
            <div class="row" style="padding-top: 0px;">
                <div class="col-lg-6 col-lg-offset-3">
                    <form action="proses.php" method="post">
                        
                        <div class="form-group">
                            <label for="title"> Title </label>
                            <input type="text" name="title" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="description"> Description </label>
                            <textarea name="description" id="description" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="date"> Date </label>
                            <input type="date" name="date" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="link"> Link </label>
                            <input type="text" name="link" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="file"> Pictures </label>
                            <br>
                            <form action="aksi.php" method="post" enctype="multipart/form-data">
                                <input type="file" name="file">
                            </form>
                        </div>

                        <div class="form-group pull-right">
                            <input type="submit" name="add" value="Save" class="btn btn-success">
                        </div>
                    </form>
                </div>  
            </div>
    </div>

    </div>
    <!-- /.row -->
    
    </div>
    <!-- /.container -->

</div>
  
  <!-- Footer -->
  <?php include_once("_footer.php");?>
