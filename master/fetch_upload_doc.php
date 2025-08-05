<?php
include "koneksi.php";
    $id = $_POST['id'];
    $sql = mysqli_query($koneksi, "SELECT * from entitas where id='$id'");
    $row = mysqli_fetch_array($sql);    
?>

            <!-- Modal -->
              <form action="upload_file_entitas.php" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                            <div class="col-sm-8">
                            <input type="hidden" class="form-control" value="<?php echo $row['id'];?>" name="id">
                            </div>
                            </div><br>
                  <div class="form-group row">
                            <label class="col-sm-4 col-form-label">NCAGE</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $row['NCAGE'];?>" name="NCAGE" readonly>
                            </div>
                            </div><br>
                   <div class="form-group row">
                            <label class="col-sm-4 col-form-label">DOKUMEN SERTIFIKAT</label>
                            <div class="col-sm-8">
                                <input type="file" multiple class="form-control" value="<?php echo $row['Dok_Sertifikat'];?> " name="Dok_Sertifikat"> Ukuran File Max 40 mb<br>
                                <input type="text" multiple class="form-control" value="<?php echo $row['Dok_Sertifikat'] != "" ? $row['Dok_Sertifikat'] : "Belum ada data"; ?>" readonly>
                                <!-- <a href="uploads/<?php echo$row['Dok_Sertifikat']?>" target="_blank">Lihat Dokumen</a> -->
                            </div>
                            </div>
                    <div class="form-group row">
                            <label class="col-sm-4 col-form-label">DOKUMEN SERTIFIKAT NSPA</label>
                            <div class="col-sm-8">
                                <input type="file" multiple class="form-control" value="<?php echo $row['Dok_NCAGE_NSPA'];?> " name="Dok_NCAGE_NSPA"> Ukuran File Max 40 mb<br>
                                <input type="text" multiple class="form-control" value="<?php echo $row['Dok_NCAGE_NSPA'] != "" ? $row['Dok_NCAGE_NSPA'] : "Belum ada data"; ?>" readonly>
                                <!-- <a href="uploads/<?php echo$row['Dok_NCAGE_NSPA']?>" target="_blank">Lihat Dokumen</a> -->
                            </div>
                            </div>
                  <div class="modal-footer">
                  <button type="submit" class="btn btn-primary pull-right">Save</a></button>
                  </div>            
            </form>
        <?php 
?> 