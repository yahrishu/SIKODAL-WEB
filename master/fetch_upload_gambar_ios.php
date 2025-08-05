<?php
include "koneksi.php";
    $id = $_POST['id'];
    $sql = mysqli_query($koneksi, "SELECT * from ios where id='$id'");
    $row = mysqli_fetch_array($sql);    
?>

            <!-- Modal -->
              <form action="upload_gambar_ios.php" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                            <div class="col-sm-8">
                            <input type="hidden" class="form-control" value="<?php echo $row['id'];?>" name="id">
                            </div>
                            </div>
                <div class="form-group row">
                            <label class="col-sm-4 col-form-label">NCAGE</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $row['NCAGE'];?>" name="NCAGE" readonly><br>
                            </div>
                            </div>
                <div class="form-group row">
                            <label class="col-sm-4 col-form-label">NSN</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $row['N_S_N'];?>" name="N_S_N" readonly><br>
                            </div>
                            </div>
                <div class="form-group row">
                            <label class="col-sm-4 col-form-label">MANUFACTURE NAME</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $row['NCAGE_Name'];?>" name="NCAGE_Name" readonly><br>
                            </div>
                            </div>
                <div class="form-group row">
                            <label class="col-sm-4 col-form-label">GAMBAR</label>
                            <div class="col-sm-8">
                                <input type="file" multiple class="form-control" value="<?php echo $row['GAMBAR'];?> " name="GAMBAR"><br>
                                <input type="text" multiple class="form-control" value="<?php echo $row['GAMBAR'] != "" ? $row['GAMBAR'] : "Belum ada data"; ?>" readonly>
                                <?php if (!empty($row['GAMBAR'])): ?>
                                    <a href="uploads/<?php echo htmlspecialchars($row['GAMBAR']); ?>" target="_blank">Lihat Gambar</a>
                                <?php else: ?>
                                    <span style="color: gray;">Belum ada gambar</span>
                                <?php endif; ?>
                            </div>
                            </div>
                  <div class="modal-footer">
                  <button type="submit" class="btn btn-primary pull-right">Save</a></button>
                  </div>            
            </form>
        <?php 
?> 