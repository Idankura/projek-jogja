<?php
    include 'header_soal.php';
    
?>



<!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Buat Soal </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <!-- <li class="breadcrumb-item"><a href="#">Forms</a></li> -->
                  <!-- <li class="breadcrumb-item active" aria-current="page">Form elements</li> -->
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-10 col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Pilih Tipe Soal</h4>
                    <p class="card-description">Pilih salah satu saja</p>
                    <p class="card-description">Soal soal</p>
                    <form>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" id="pilgan"> PILIHAN GANDA</label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" id="essay"> ESSAY </label>
                            </div>
                            <div class="form-check">
                              <input type="text" class="form-control" id="jumlah-soal" placeholder="Jumlah Soal" aria-label="Jumlah Soal" aria-describedby="basic-addon2">
                            </div>
                       
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                          
                        </div>
                      </div>
                    
                  </div>
                </div>
              </div>
          </div>
          <!-- list buat soal dan jawaban -->
          <div class="row">
           <div class="col-md-10 col-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
               <p class="card-description">Soal</p>
                <div class="container-fluid">
                          <div class="form-group">
                            <!-- pilihan ganda -->
                            <form action="">
                            <div class="form-check form-check-primary" id="pilgan-form" style="display: none;">             
                                <h2 class="pb-2 border-bottom">Soal</h2>
                                <textarea name="" id="" class="textareapg p-5"></textarea>
                                <br>
                                <h2 class="pb-2 border-bottom">List Pilihan Ganda</h2>
                                
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                                    <!-- opsi A -->
                                    <div class="col hapus" id="0">
                                        <div class="card shadow-sm">
                                            <div class="row">
                                                  <div class="col p-3">
                                                      <label class="form-check-label position-absolute top-0 start-0">
                                                          <input type="checkbox" class="form-check-input text-start" id="essay">
                                                          A
                                                      </label>
                                                  </div>
                                                  <div class="col p-3">
                                                      <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0">Close</button>
                                                  </div>
                                            </div>
                                            <textarea name="" id="" class="textareajwb p-5" placeholder="Jawaban A"></textarea>  
                                        </div>
                                    </div>
                                    <!-- ./opsi A -->
                                
                                    <!-- opsi Tambah -->
                                    <div class="col" id="customButton">
                                        <div class="container justify-content-center">
                                            <p class="btn-like">+</p>
                                        </div>
                                    </div>
                                    <!-- ./opsi Tambah -->
                                </div>
                                
                                       <!-- tombol submit -->
                                       <div class="container m-5">
                                        <div class="row">
                                          
                                            <div class="col">
                                              <button type="submit" name="tambahpilgan" id="tambahpilgan" class="btn btn-success">Tambah Soal</button>
                                            </div>
                                            <div class="col">
                                              <button type="submit" name="hapussoalpilgan" id="hapuspilgan" class="btn btn-danger">Hapus Soal</button>
                                            </div>
                                        </div>
                                       </div>
                                        
                            </div>
                            
                          <!-- form essay -->
                        
                            <div class="form-check form-check-primary" id="essay-form" style="display: none;">
                              <label class="form-check-label">
                              <!-- <textarea placeholder="Masukkan jawaban essay di sini"></textarea> -->
                              <textarea name="" id="" class="textareapg p-5"></textarea>
                              
                            </div>
                            
                          </div>
                        </div>
                        <p class="card-description">Form Waktu Sesi Quizz</p>
                                      <!-- form deadline pengerjaan -->
                                      <div class="cs-form">
                                          <input type="time" class="form-control" value="10:05 AM" />
                                      </div>                                   
                                      <!-- ./form deadline pengerjaan -->
                                       <br><br>
                              <div class="container" id="simpan-form">
                                <button name="simpanpilgan" class="btn btn-primary">Simpan Perubahan</button>
                              </div>
                      </form>
               </div>
            </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial: partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between fixed-bottom">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024 <a href="https://www.bootstrapdash.com/" target="_blank">InterQuizz</a>. All rights reserved.</span>
              <span class="text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center"> <span class="text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span> <i class="mdi mdi-heart text-danger"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <?php include 'footer_soal.php'; ?>
  </body>
</html>