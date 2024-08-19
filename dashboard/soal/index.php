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
                       
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                          
                        </div>
                      </div>
                    </form>
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
                          <form action="">
                            <div class="form-check form-check-primary" id="pilgan-form" style="display: none;">             
                                  <h2 class="pb-2 border-bottom">Soal</h2>
                                  <textarea name="" id="" class="textareapg p-5"></textarea>
                                  <br>
                                  <h2 class="pb-2 border-bottom">List Pilihan Ganda</h2>
                                  <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                                    <div class="feature col">

                                    <!-- pilihan ganda A -->
                                    <div class="form-check">
                                      <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" id="essay">A</label>
                                    </div>
                                    <textarea name="" id="" class="textareajwb p-5"></textarea>                                    <div class="feature col">
                                      <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                                        <svg class="bi" width="1em" height="1em"><use xlink:href="#people-circle"/></svg>
                                      </div>
                                      <!-- <h3 class="fs-2 text-body-emphasis">Featured title</h3>
                                      <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p> -->
                                      <!-- <a href="#" class="icon-link">
                                        Call to action
                                        <svg class="bi"><use xlink:href="#chevron-right"/></svg>
                                      </a> -->
                                    </div>
                                    <div class="feature col">
                                      <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                                        <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"/></svg>
                                      </div>
                                      <h3 class="fs-2 text-body-emphasis">Featured title</h3>
                                      <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                                      <a href="#" class="icon-link">
                                        Call to action
                                        <svg class="bi"><use xlink:href="#chevron-right"/></svg>
                                      </a>
                                    </div>
                                  </div>
                              
                            </div>
                        </form>
                          <!-- form essay -->
                        <form action="">
                            <div class="form-check form-check-primary" id="essay-form" style="display: none;">
                              <label class="form-check-label">
                              <textarea placeholder="Masukkan jawaban essay di sini"></textarea>
                            </div>
                          </div>
                        </div>
                      </form>
               </div>
            </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial: partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
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