<?php
  $title="Data Desa"; 
?> <!-- Judul Halaman -->

 <?=content_open('Data Desa Berdasarkan Luas Lahan Kering')?><!-- Judul Konten -->
          <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                       <?php
                        include "koneksi.php";
                        $query = mysqli_query($connection,"SELECT * FROM desa ORDER BY id_desa ");
                        ?>
                    <thead>
                    <tr>
                      <th>Desa</th>
                      <th>Bangunan(ha)</th>
                      <th>Kebun(ha)</th>
                      <th>Hutan Negara(ha)</th>
                     
                    </tr>
                    </thead>
                    <tbody>
                      <?php if(mysqli_num_rows($query)>0){ ?>
                                <?php
                                   
                                    while($data = mysqli_fetch_array($query)){
                                ?>
                                <tr>
                                    
                                    <td><?php echo $data["nama_desa"];?></td>
                                  <td><?php echo $data["bangunan"];?></td>
                                  <td><?php echo $data["kebun"];?></td>
                                  <td><?php echo $data["hutan_negara"];?></td>
                                   
                                </tr>
                                <?php  } ?>
                                <?php } ?>
                              </tbody>
                            </table>
                          </div>
 <?=content_close() ?>