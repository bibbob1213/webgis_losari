<?php
  $title="Data Desa"; 
?> <!-- Judul Halaman -->

 <?=content_open('Data Desa Berdasarkan Ketinggian Diatas Permukaan Laut')?><!-- Judul Konten -->
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
                      <th>Ketinggian(mdpl)</th>
                     
                     
                    </tr>
                    </thead>
                    <tbody>
                      <?php if(mysqli_num_rows($query)>0){ ?>
                                <?php
                                   
                                    while($data = mysqli_fetch_array($query)){
                                ?>
                                <tr>
                                    
                                    <td><?php echo $data["nama_desa"];?></td>
                                  <td><?php echo $data["mdpl"];?> mdpl</td>
                                  
                                   
                                </tr>
                                <?php  } ?>
                                <?php } ?>
                              </tbody>
                            </table>
                          </div>
 <?=content_close() ?>