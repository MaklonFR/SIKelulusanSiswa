<?php
 //print_r($_POST);
 include "includes/conn.php";

          $id  = isset($_POST['nisn']) ? $_POST['nisn'] : NULL;
          $sql="SELECT * FROM tb_hasil WHERE nisn= $id";
          $query = $conn->query($sql);
        
          if($query->num_rows < 1){
                echo'	
                <div class="clearfix pt-3">
                    <h5 class="h5 font100 text-center"> <strong>TERJADI KESALAHAN ! </br>NINS Tidak ditemukan </br>Masukan ulang NISN yang Benar!</strong></h5>
                </div>'
                ;
            } 
            else
            {
                $row = $query->fetch_assoc();
            ?>
            <div class="bg-white  p-3 border1 rounded">
                        <div class="row mb-2">
                            <div class="col-12">
                                <small class="text-muted">Nama Lengkap:</small>
                                    <div class="font500"><?php echo $row["nama"]; ?>
                                    </div>
                            </div>
                        </div>
    
                        <div class="row mb-2">
                            <div class="col-12">
                                <small class="text-muted">Kompetensi Keahlian:</small>
                                    <div class="font500"><?php echo $row["jurusan"]; ?>
                                    </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-12">
                                <small class="text-muted">Angkatan</small>
                                    <div class="font500"><?php echo $row["tahun"]; ?>
                                    </div>
                            </div>
                        </div>
    
                        <div class="w100 d-block text-center">
                                     <a href="index.html" class="avatar avatar60 ml-auto mr-auto bg-success text-success-light rounded-circle">  
                                         <i class="fa fa-check"></i></a>
                                            <div class="clearfix pt-3">
                                                 <h5 class="h5 font100"> <strong>Selamat!</strong> </br> <strong>Anda <?php echo $row["hasil"]; ?></strong></h5>
                                            </div>         
                                </div>
    
                    </div>
            <?php
            }
            ?>

