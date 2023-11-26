@extends('admin.layout.app')
@section('content')
<section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
     
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-10 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-chart-pie mr-1"></i>
                Sales
              </h3>
              <div class="card-tools">
                <ul class="nav nav-pills ml-auto">
                  <li class="nav-item">
                    <a class="nav-link active" href="#datadiri" data-toggle="tab">Data Diri</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#galleries" data-toggle="tab">Galleries</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#ttw" data-toggle="tab">TTW</a>
                  </li>
                </ul>
              </div>
            </div><!-- /.card-header -->
            <div class="card-body">
           <form method="post" action="{{ route('admin.blueocean.store') }}" enctype="multipart/form-data">
            @csrf
              <div class="tab-content p-0">
             
              
            

              <div class="card card-warning tab-pane active" id="datadiri">
                <div class="card-header">
                    <h3 class="card-title " >Data Diri Mempelai</h3>
                  </div>
                  
                <!-- /.card-header -->
                <div class="card-body">
                 
                    <div class="row">
                      
                    <div class="col">
                        <div class="col-sm-12">
                    <!-- text input -->
                    <div class="col-sm-6 mb-3">
                      <a href="{{asset('admin/img/noimage.jpg')}}" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery" >
                        <img src="{{asset('admin/img/noimage.jpg')}}" class="img-fluid mb-2 groom preview" alt="white sample"/>
                      </a>
                      <button type="button" class="btn btn-block btn-secondary" onclick="document.getElementById('file-input-groom').click();">Gambar</button>
                      <input type="file" id="file-input-groom" data-preview=".groom" style="display: none;" name="groom_image" >
                    </div>
                     
                    <div class="form-group">
                      <label>Nama Lengkap Pria</label>

                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><ion-icon name="male-outline"></ion-icon></span>
                        </div>
                        <input type="text" class="form-control float-right" name="groom_name">
                      
                      </div>
                      <!-- /.input group -->
                    </div> 
                    <div class="form-group">
                      <label>Nama Panggilan</label>

                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><ion-icon name="ear-outline"></ion-icon></span>
                        </div>
                        <input type="text" class="form-control float-right" name="groom_nick_name">
                      
                      </div>
                      <!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <label>Social Media</label>

                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><ion-icon name="link-outline"></ion-icon></span>
                        </div>
                        <input type="text" class="form-control float-right" name="groom_socmed">
                      
                      </div>
                      <!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <label>Nomor Rekening </label>

                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><ion-icon name="card-outline"></ion-icon></span>
                        </div>
                        <input type="text" class="form-control float-right" name="groom_account_number">
                      
                      </div>
                      <!-- /.input group -->
                    </div>
                      <div class="form-group">
                        <label>Deskripsi Pria</label>
                        <textarea id="summernote1" name="groom_desc">
                         
                        </textarea>
                      </div>
                  </div>
                </div>

                    <div class="col">
                        <div class="col-sm-12">
                    <!-- text input -->
                    <div class="col-sm-6 mb-3">
                      <a href="{{asset('admin/img/noimage.jpg')}}" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery" >
                        <img src="{{asset('admin/img/noimage.jpg')}}" class="img-fluid mb-2 bride preview" alt="white sample"/>
                      </a>
                      <button type="button" class="btn btn-block btn-secondary" onclick="document.getElementById('file-input-bride').click();">Gambar</button>
                      <input type="file" id="file-input-bride" data-preview=".bride" style="display: none;" name="bride_image">
                    </div>
                    <div class="form-group">
                      <label>Nama Lengkap Wanita</label>

                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><ion-icon name="female-outline"></ion-icon></span>
                        </div>
                        <input type="text" class="form-control float-right" name="bride_name">
                      
                      </div>
                      <!-- /.input group -->
                    </div> 
                    <div class="form-group">
                      <label>Nama Panggilan</label>

                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><ion-icon name="ear-outline"></ion-icon></span>
                        </div>
                        <input type="text" class="form-control float-right" name="bride_nick_name">
                      
                      </div>
                      <!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <label>Social Media</label>

                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><ion-icon name="link-outline"></ion-icon></span>
                        </div>
                        <input type="text" class="form-control float-right" name="bride_socmed">
                      
                      </div>
                      <!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <label>Nomor Rekening </label>

                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><ion-icon name="card-outline"></ion-icon></span>
                        </div>
                        <input type="text" class="form-control float-right" name="bride_account_number">
                      
                      </div>
                      <!-- /.input group -->
                    </div>
                      <div class="form-group">
                        <label>Deskripsi Wanita</label>
                        <textarea id="summernote2" name="bride_desc">
                          
                        </textarea>
                      </div>
                  </div>
                 
                </div>
                <div class="col-md-12">
                    <div class="card card-outline card-info">
                      <div class="card-header">
                        <h3 class="card-title">
                          Our Story
                        </h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <textarea id="summernote3" name="stories">
                          
                        </textarea>
                      </div>
                      
                    </div>
                  </div>

                    </div>
                    <!-- input states -->
                   
                  
                </div>
                <!-- /.card-body -->
              </div>

              <div class="card card-primary tab-pane " id="galleries">
                
                <div class="col-12">
                    <div class="card card-primary">
                      <div class="card-header">
                        <h4 class="card-title">Galleries</h4>
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-sm-2">
                            <a href="{{asset('admin/img/noimage.jpg')}}" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery" >
                              <img src="{{asset('admin/img/noimage.jpg')}}" class="img-fluid mb-2 galleri1 preview" alt="white sample"/>
                            </a>
                            <button type="button" class="btn btn-block btn-secondary" onclick="document.getElementById('file-input-galleri1').click();">Tambah</button>
                            <input type="file" id="file-input-galleri1" data-preview=".galleri1" style="display: none;" name="galleries[]">
                          </div>
                          
                          <div class="col-sm-2">
                            <a href="{{asset('admin/img/noimage.jpg')}}" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery" >
                              <img src="{{asset('admin/img/noimage.jpg')}}" class="img-fluid mb-2 galleri2 preview" alt="white sample"/>
                            </a>
                            <button type="button" class="btn btn-block btn-secondary" onclick="document.getElementById('file-input-galleri2').click();">Tambah</button>
                            <input type="file" id="file-input-galleri2" data-preview=".galleri2" style="display: none;" name="galleries[]">
                          </div>
                          <div class="col-sm-2">
                            <a href="{{asset('admin/img/noimage.jpg')}}" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery" >
                              <img src="{{asset('admin/img/noimage.jpg')}}" class="img-fluid mb-2 galleri3 preview" alt="white sample"/>
                            </a>
                            <button type="button" class="btn btn-block btn-secondary" onclick="document.getElementById('file-input-galleri3').click();">Tambah</button>
                            <input type="file" id="file-input-galleri3" data-preview=".galleri3" style="display: none;" name="galleries[]">
                          </div>
                          <div class="col-sm-2">
                            <a href="{{asset('admin/img/noimage.jpg')}}" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery" >
                              <img src="{{asset('admin/img/noimage.jpg')}}" class="img-fluid mb-2 galleri4 preview" alt="white sample"/>
                            </a>
                            <button type="button" class="btn btn-block btn-secondary" onclick="document.getElementById('file-input-galleri4').click();">Tambah</button>
                            <input type="file" id="file-input-galleri4" data-preview=".galleri4" style="display: none;" name="galleries[]">
                          </div>
                          <div class="col-sm-2">
                            <a href="{{asset('admin/img/noimage.jpg')}}" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery" >
                              <img src="{{asset('admin/img/noimage.jpg')}}" class="img-fluid mb-2 galleri5 preview" alt="white sample"/>
                            </a>
                            <button type="button" class="btn btn-block btn-secondary" onclick="document.getElementById('file-input-galleri5').click();">Tambah</button>
                            <input type="file" id="file-input-galleri5" data-preview=".galleri5" style="display: none;" name="galleries[]">
                          </div>
                          <div class="col-sm-2">
                            <a href="{{asset('admin/img/noimage.jpg')}}" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery" >
                              <img src="{{asset('admin/img/noimage.jpg')}}" class="img-fluid mb-2 galleri6 preview" alt="white sample"/>
                            </a>
                            <button type="button" class="btn btn-block btn-secondary" onclick="document.getElementById('file-input-galleri6').click();">Tambah</button>
                            <input type="file" id="file-input-galleri6" data-preview=".galleri6" style="display: none;" name="galleries[]">
                          </div>
                          <div class="col-sm-2">
                            <a href="{{asset('admin/img/noimage.jpg')}}" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery" >
                              <img src="{{asset('admin/img/noimage.jpg')}}" class="img-fluid mb-2 galleri7 preview" alt="white sample"/>
                            </a>
                            <button type="button" class="btn btn-block btn-secondary" onclick="document.getElementById('file-input-galleri7').click();">Tambah</button>
                            <input type="file" id="file-input-galleri7" data-preview=".galleri7" style="display: none;" name="galleries[]">
                          </div>
                          <div class="col-sm-2">
                            <a href="{{asset('admin/img/noimage.jpg')}}" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery" >
                              <img src="{{asset('admin/img/noimage.jpg')}}" class="img-fluid mb-2 galleri8 preview" alt="white sample"/>
                            </a>
                            <button type="button" class="btn btn-block btn-secondary" onclick="document.getElementById('file-input-galleri8').click();">Tambah</button>
                            <input type="file" id="file-input-galleri8" data-preview=".galleri8" style="display: none;" name="galleries[]">
                          </div>
                          <div class="col-sm-2">
                            <a href="{{asset('admin/img/noimage.jpg')}}" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery" >
                              <img src="{{asset('admin/img/noimage.jpg')}}" class="img-fluid mb-2 galleri9 preview" alt="white sample"/>
                            </a>
                            <button type="button" class="btn btn-block btn-secondary" onclick="document.getElementById('file-input-galleri9').click();">Tambah</button>
                            <input type="file" id="file-input-galleri9" data-preview=".galleri9" style="display: none;" name="galleries[]">
                          </div>
                          <div class="col-sm-2">
                            <a href="{{asset('admin/img/noimage.jpg')}}" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery" >
                              <img src="{{asset('admin/img/noimage.jpg')}}" class="img-fluid mb-2 galleri10 preview" alt="white sample"/>
                            </a>
                            <button type="button" class="btn btn-block btn-secondary" onclick="document.getElementById('file-input-galleri10').click();">Tambah</button>
                            <input type="file" id="file-input-galleri10" data-preview=".galleri10" style="display: none;" name="galleries[]">
                          </div>
                          <div class="col-sm-2">
                            <a href="{{asset('admin/img/noimage.jpg')}}" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery" >
                              <img src="{{asset('admin/img/noimage.jpg')}}" class="img-fluid mb-2 galleri11 preview" alt="white sample"/>
                            </a>
                            <button type="button" class="btn btn-block btn-secondary" onclick="document.getElementById('file-input-galleri11').click();">Tambah</button>
                            <input type="file" id="file-input-galleri11" data-preview=".galleri11" style="display: none;" name="galleries[]">
                          </div>
                          <div class="col-sm-2">
                            <a href="{{asset('admin/img/noimage.jpg')}}" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery" >
                              <img src="{{asset('admin/img/noimage.jpg')}}" class="img-fluid mb-2 galleri12 preview" alt="white sample"/>
                            </a>
                            <button type="button" class="btn btn-block btn-secondary" onclick="document.getElementById('file-input-galleri12').click();">Tambah</button>
                            <input type="file" id="file-input-galleri12" data-preview=".galleri12" style="display: none;" name="galleries[]">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="card card-primary">
                      <div class="card-header">
                        <div class="card-title">
                          Background
                        </div>
                        
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-sm-4">
                            <a href="{{asset('admin/img/noimage.jpg')}}" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery" >
                              <img src="{{asset('admin/img/noimage.jpg')}}" class="img-fluid mb-2 bg1 preview" alt="white sample"/>
                            </a>
                            <button type="button" class="btn btn-block btn-secondary" onclick="document.getElementById('file-input-bg1').click();">Tambah</button>
                            <input type="file" id="file-input-bg1" data-preview=".bg1" style="display: none;" name="bg_opening">
                          </div>
                          <div class="col-sm-4">
                            <a href="{{asset('admin/img/noimage.jpg')}}" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery" >
                              <img src="{{asset('admin/img/noimage.jpg')}}" class="img-fluid mb-2 bg2 preview" alt="white sample"/>
                            </a>
                            <button type="button" class="btn btn-block btn-secondary" onclick="document.getElementById('file-input-bg2').click();">Tambah</button>
                            <input type="file" id="file-input-bg2" data-preview=".bg2" style="display: none;" name="bg_section1">
                          </div>
                          <div class="col-sm-4">
                            <a href="{{asset('admin/img/noimage.jpg')}}" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery" >
                              <img src="{{asset('admin/img/noimage.jpg')}}" class="img-fluid mb-2 bg3 preview" alt="white sample"/>
                            </a>
                            <button type="button" class="btn btn-block btn-secondary" onclick="document.getElementById('file-input-bg3').click();">Tambah</button>
                            <input type="file" id="file-input-bg3" data-preview=".bg3" style="display: none;" name="bg_countdown_timer">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
  
                  
              </div>

              <div class="card card-danger tab-pane" id="ttw">
                <div class="card-header">
                  <h3 class="card-title">Tanggal, Tempat & Waktu</h3>
                </div>
                <div class="card-body">
                  <div class="row">
                  <div class="col-6">
                   <!-- Date and time range -->
                      <div class="form-group">
                        <label>Date and time Akad:</label>

                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-clock"></i></span>
                          </div>
                          <input type="text" class="form-control float-right" id="reservationtime1" name="akad_date">
                        
                        </div>
                        <!-- /.input group -->
                      </div>  
                      
                      <div class="form-group">
                        <label>Latitude & Longitude Akad:</label>
      
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><ion-icon name="location-outline"></ion-icon></span>
                          </div>
                          <input type="text" class="form-control float-right" name="latlong_akad_location">
                        
                        </div>
                        <!-- /.input group -->
                      </div>
                      <div class="form-group">
                        <label>Deskripsi Lokasi</label>
                        <textarea id="summernote4" name="akad_location">
                          
                        </textarea>
                      </div>
                </div>

              <div class="col-6">
                <div class="form-group">
                  <label>Date and time Resepsi:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-clock"></i></span>
                    </div>
                    <input type="text" class="form-control float-right" id="reservationtime2" name="resepsi_date">
                  
                  </div>
                  <!-- /.input group -->
                </div>

                <div class="form-group">
                  <label>Latitude & Longitude Resepsi:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><ion-icon name="location-outline"></ion-icon></span>
                    </div>
                    <input type="text" class="form-control float-right" name="latlong_resepsi_location">
                  
                  </div>
                  <!-- /.input group -->
                </div>

                <div class="form-group">
                  <label>Deskripsi Lokasi</label>
                  <textarea id="summernote5" name="resepsi_location">
                    
                  </textarea>
                </div>
              </div>
            </div>
                </div>
              </div>

            </div>
            <div class="card-footer" style="display: grid; place-items: center;">
              <button type="submit" class="btn btn-success btn-lg">Submit</button>
            </div>
          </form>
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->

        
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  @endsection