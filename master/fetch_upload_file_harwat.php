<?php
include "koneksi.php";
    $id = $_POST['id'];
    $sql = mysqli_query($koneksi, "SELECT * from harwat where id='$id'");
    $row = mysqli_fetch_array($sql);    
?>

            <!-- Modal -->
            <form action="upload_file_harwat.php" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                            <div class="col-sm-8">
                            <input type="hidden" class="form-control" value="<?php echo $row['id'];?>" name="id">
                            </div>
                            </div><br>
                  <div class="form-group row">
                            <label class="col-sm-4 col-form-label">NOMOR KONTRAK</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $row['NOMOR_KONTRAK'];?>" name="NOMOR_KONTRAK" readonly>
                            </div>
                            </div><br>
                   <div class="form-group row">
                            <label class="col-sm-4 col-form-label">DOKUMEN HARWAT</label>
                            <div class="col-sm-8">
                                <input type="file" multiple class="form-control" value="<?php echo $row['file'];?> " name="file"> Ukuran File Max 40 mb<br>
                                <input type="text" multiple class="form-control" value="<?php echo $row['file'] != "" ? $row['file'] : "Belum ada data"; ?>" readonly>
                                <a href="uploads/<?php echo$row['file']?>" target="_blank">Lihat Dokumen</a>
                            </div>
                            </div>
                  <div class="modal-footer">
                  <button type="submit" class="btn btn-primary pull-right">Save</a></button>
                  </div>            
            </form>
        <?php 
?> 