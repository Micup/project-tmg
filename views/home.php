<?php
    $this->load->view('header');
?>

<section class="hero-section">
        <div class="container text-center text-wrapper">
            <h2>Selamat Datang Kreator & Inovator Kabupaten Temanggung</h2>
            <h1>
                <span class="primary-text">Bersama</span>
                <span class="typed"></span> <br>
                <span class="sub-primary-text">Kabupaten Temanggung</span> <br>
                <a href="<?php echo site_url('user/register');?>" class="btn btn-lg btn-primary" data-step="1" data-intro="Daftar Menjadi Peserta Krenova" data-position='left'>Daftar Sekarang</a>
            </h1>
        </div>
    </section>

    <section class="container-fluid kategori" id="kategori">
        <h1 class="text-center"><span data-step="2" data-intro="Pilih kategori sesuai kemampuan anda" data-position='left'>Kategori</span></h1>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 kategori-item text-center hvr-bounce-to-top">
                    <h3><i class="fa fa-briefcase fa-5x text-primary"></i></h3>
                    <h4>Agrobisnis & Pangan</h4>
                </div>
                <div class="col-lg-4 kategori-item text-center hvr-bounce-to-top">
                    <h3><i class="fa fa-flash fa-5x text-primary"></i></h3>
                    <h4>Energi</h4>
                </div>
                <div class="col-lg-4 kategori-item text-center hvr-bounce-to-top">
                    <h3><i class="fa fa-tree fa-5x text-primary"></i></h3>
                    <h4>Kehutanan & Lingkungan Hidup</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 kategori-item text-center hvr-bounce-to-top">
                    <h3><i class="fa fa-firefox fa-5x text-primary"></i></h3>
                    <h4>Kelautan & Perikanan</h4>
                </div>
                <div class="col-lg-4 kategori-item text-center hvr-bounce-to-top">
                    <h3><i class="fa fa-medkit fa-5x text-primary"></i></h3>
                    <h4>Kesehatan, Obat & Kosmetika</h4>
                </div>
                <div class="col-lg-4 kategori-item text-center hvr-bounce-to-top">
                    <h3><i class="fa fa-university fa-5x text-primary"></i></h3>
                    <h4>Pendidikan</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 kategori-item text-center hvr-bounce-to-top">
                    <h3><i class="fa fa-android fa-5x text-primary"></i></h3>
                    <h4>Rekayasa & Manufaktur</h4>
                </div>
                <div class="col-lg-4 kategori-item text-center hvr-bounce-to-top">
                    <h3><i class="fa fa-asl-interpreting fa-5x text-primary"></i></h3>
                    <h4>Kerajinan & Industri Rumah Tangga</h4>
                </div>
                <div class="col-lg-4 kategori-item text-center hvr-bounce-to-top">
                    <h3><i class="fa fa-bullhorn fa-5x text-primary"></i></h3>
                    <h4>Sosial</h4>
                </div>
            </div>
        </div>
        <hr>
    </section>

    <section class="container-fluid alur-section" id="alur">
        <h1 class="text-center"><span data-step="3" data-intro="Perhatikan Alur Pendaftaran" data-position='right'>ALUR PENDAFTARAN</span></h1>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="timeline-centered">

                    <article class="timeline-entry">

                        <div class="timeline-entry-inner">
                            <time class="timeline-time" datetime="2014-01-10T03:45"><span>Pendaftaran</span> <span>Krenova</span></time>

                            <div class="timeline-icon bg-success">
                                <i class="entypo-feather"></i>
                            </div>

                            <div class="timeline-label">
                                <h2><a href="#">Pendaftaran</a> <span>Peserta Krenova</span></h2>
                                <p>Daftarkan Penelitian Anda, Melalui Portal KRENOVA BALITBANG.</p>
                            </div>
                        </div>

                    </article>


                    <article class="timeline-entry left-aligned">

                        <div class="timeline-entry-inner">
                            <time class="timeline-time" datetime="2014-01-10T03:45"><span>Seleksi</span> <span>Administrasi</span></time>

                            <div class="timeline-icon bg-secondary">
                                <i class="entypo-suitcase"></i>
                            </div>

                            <div class="timeline-label">
                                <h2><a href="#">SELEKSI ADMINISTRASI</a></h2>
                                <p>Tim BALITBANG akan menyeleksi persyaratan administratif anda, pastikan kelengkapan syarat administratif</p>
                            </div>
                        </div>

                    </article>


                    <article class="timeline-entry">

                        <div class="timeline-entry-inner">
                            <time class="timeline-time" datetime="2014-01-10T03:45"><span>Seleksi</span> <span>Substansi</span></time>

                            <div class="timeline-icon bg-warning">
                                <i class="entypo-camera"></i>
                            </div>

                            <div class="timeline-label">
                                <h2><a href="#">Seleksi Substansi</a></h2>

                                <p>Di tahapan ini, akan ditentukan peserta mana saja yang materi temuannya memenuhi persyaratan kriteria & bidang.</p>
                            </div>
                        </div>

                    </article>

                    <article class="timeline-entry left-aligned">

                        <div class="timeline-entry-inner">
                            <time class="timeline-time" datetime="2014-01-10T03:45"><span>Pemaparan</span> <span>Peserta</span></time>

                            <div class="timeline-icon bg-secondary">
                                <i class="entypo-suitcase"></i>
                            </div>

                            <div class="timeline-label">
                                <h2><a href="#">PEMAPARAN</a></h2>
                                <p>Tim BALITBANG akan menyeleksi persyaratan administratif anda, pastikan kelengkapan syarat administratif</p>
                            </div>
                        </div>

                    </article>


                    <article class="timeline-entry">

                        <div class="timeline-entry-inner">
                            <time class="timeline-time" datetime="2014-01-10T03:45"><span>Tinjau</span> <span>Lokasi</span></time>

                            <div class="timeline-icon bg-warning">
                                <i class="entypo-camera"></i>
                            </div>

                            <div class="timeline-label">
                                <h2><a href="#">PENINJAUAN LOKASI</a></h2>

                                <p>Bilamana perlu, Panitia & Tim Penilai dapat mendatangi peserta yang lolos tahap 2 & 3.</p>
                            </div>
                        </div>

                    </article>

                    <article class="timeline-entry left-aligned">

                        <div class="timeline-entry-inner">
                            <time class="timeline-time" datetime="2014-01-10T03:45"><span>Pemberian</span> <span>Penghargaan</span></time>

                            <div class="timeline-icon bg-secondary">
                                <i class="entypo-suitcase"></i>
                            </div>

                            <div class="timeline-label">
                                <h2><a href="#">PENETAPAN PENERIMA PENGHARGAAN</a></h2>
                                <p>Berdasar hasil dari Tim Penilai, Panitia menetapkan penerima penghargaan.</p>
                            </div>
                        </div>

                    </article>


                    <article class="timeline-entry begin">

                        <div class="timeline-entry-inner">

                            <div class="timeline-icon" style="-webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg);">
                                <i class="entypo-flight"></i>
                            </div>

                        </div>

                    </article>

                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid peraturan-section">
        <div class="container">
            <h1 class="text-center"><span data-step="4" data-intro="Peraturan Krenova" data-position='left'>PERATURAN DAN LANGKAH PENDAFTARAN</span></h1>
            <p class="text-center">Tata cara pengusulan calon penerima penghargaan KRENOVA Kabupaten Temanggung Tahun 2017 adalah sebagai berikut:</p>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="board">
                            <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
                            <div class="board-inner">
                                <ul class="nav nav-tabs" id="myTab">
                                    <div class="liner"></div>
                                    <li class="active">
                                        <a href="#home" data-toggle="tab" title="welcome">
                                            <span class="round-tabs one">
                                                <i class="glyphicon glyphicon-home"></i>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#profile" data-toggle="tab" title="profile">
                                            <span class="round-tabs two">
                                                <i class="glyphicon glyphicon-user"></i>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#messages" data-toggle="tab" title="bootsnipp goodies">
                                            <span class="round-tabs three">
                                                <i class="glyphicon glyphicon-file"></i>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#settings" data-toggle="tab" title="blah blah">
                                            <span class="round-tabs four">
                                                <i class="glyphicon glyphicon-send"></i>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#doner" data-toggle="tab" title="completed">
                                            <span class="round-tabs five">
                                               <i class="glyphicon glyphicon-ok"></i>
                                            </span>
                                        </a>
                                    </li>

                                </ul>
                            </div>

                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home">

                                    <h3 class="head text-center">Selamat Datang di KRENOVA <br> Kabupaten Temanggung Tahun 2017</h3>
                                    <p class="narrow text-center">
                                        Salurkan ide kreatif dan inovatif masyarakat dalam Seminar Krenova Kabupaten Temanggung
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <h3 class="head text-center">Diusulkan Oleh Kelurahan Atau Instansi</h3>
                                    <p class="narrow text-center">
                                        Calon Penerima Penghargaan diusulkan oleh Kelurahan dimana dia bertempat tinggal, atau Instansi dimana dia bekerja (Formulir 1a/1b).
                                    </p>

                                </div>
                                <div class="tab-pane fade" id="messages">
                                    <h3 class="head text-center">Mengisi Surat Pernyataan Peserta Krenova Kabupaten Temanggung</h3>
                                    <p class="narrow text-center">
                                        Mengisi Surat Pernyataan Peserta Krenova Kabupaten Temanggung Tahun 2017 (Formulir 2a/2b) dan Halaman Pernyataan (Formulir 3).
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="settings">
                                    <h3 class="head text-center">Mengirim Berkas Ke Panitia / Sekretariat KRENOVA</h3>
                                    <p class="narrow text-center">
                                        Mengirimkan kepada Panitia / Sekretariat KRENOVA berupa:
                                        <ol style="color: #fff;">
                                            <li>Daftar riwayat hidup.</li>
                                            <li>Nama, alamat, nomor telepon (rumah / genggam), dan alamat email (jika punya) yang bisa dihubungi (Formulir 1, 2, dan 3).</li>
                                            <li>Proposal usulan temuan KRENOVA dengan sistematika penulisan seperti yang telah ditulis di Bab IV Buku Panduan ini, Formulir 1, Formulir 2, dan Formulir 3. Dibuat rangkap 3.</li>
                                            <li>Softcopy Formulir 1, Formulir 2, dan Formulir 3, dan Proposal usulan temuan KRENOVA. Untuk Formulir 1, Formulir 2, dan Formulir 3 berupa hasil scan, sedangkan Proposal berupa file. Softcopy dapat pula dikirim
                                                melalui email. Disarankan sudah dalam format PDF.</li>
                                            <li>Pengiriman ditujukan kepada Panitia KRENOVA:</li>
                                            Badan Penelitian dan Pengembangan Kabupaten Temanggung
                                            <ul>
                                                <li>Alamat : Jalan S. Kadar Maron No. 12, Sidorejo, Gilingsari, Kec. Temanggung, Kabupaten Temanggung, Jawa Tengah 56221</li>
                                                <li>Email: litbangtamanggungkab@yahoo.co.id</li>
                                                <li>Telepon 0293-360800, Fax 0293-312603</li>
                                                <li>Facebook : Litbang Kabupaten Temanggung</li>
                                                <li>Web : http://bappeda.temanggungkab.go.id/</li>
                                                <li>Twitter: @litbangtmgkab</li>
                                                <li>Contact Person:</li>
                                                <ol>
                                                    <li>MISRUN (085643437115)</li>
                                                    <li>BURHAN (0812-2610- 1890)</li>
                                                </ol>
                                            </ul>
                                        </ol>
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="doner">
                                    <div class="text-center">
                                        <i class="img-intro icon-checkmark-circle"></i>
                                    </div>
                                    <h3 class="head text-center">Terimakasih <span style="color:#f48260;">♥</span></h3>

                                    <p class="text-center">
                                        <a href="#modal-register" data-toggle="modal" class="btn btn-success btn-outline-rounded green"> Daftar Sekarang <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></a>
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <section class="container-fluid news-section" id="news">
        <h1 class="text-center"><span data-step="5" data-intro="Simak Berita dan Pengumuman Terbaru Krenova 2017" data-position='right'>Berita & Pengumuman Event</span></h1>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="owl-carousel">
                        <div class="post-slide">
                            <div class="post-img">
                                <img class="img-responsive" src="http://lorempixel.com/400/200" alt="loraim">
                                <div class="over-layer">
                                    <ul class="post-link">
                                        <li>
                                            <a href="#" class="fa fa-link"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="post-date">
                                    <span class="date">25.</span>
                                    <span class="month">8.</span>
                                </div>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="#">Lorem ipsum dolor sit amet.</a>
                                </h3>
                                <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis perspiciatis nobis voluptate et laudantium amet ipsum numquam omnis ullam placeat.</p>
                                <a href="#" class="read-more">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="owl-carousel">
                        <div class="post-slide">
                            <div class="post-img">
                                <img class="img-responsive" src="http://lorempixel.com/400/200" alt="loraim">
                                <div class="over-layer">
                                    <ul class="post-link">
                                        <li>
                                            <a href="#" class="fa fa-link"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="post-date">
                                    <span class="date">25.</span>
                                    <span class="month">8.</span>
                                </div>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="#">Lorem ipsum dolor sit amet.</a>
                                </h3>
                                <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis perspiciatis nobis voluptate et laudantium amet ipsum numquam omnis ullam placeat.</p>
                                <a href="#" class="read-more">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="owl-carousel">
                        <div class="post-slide">
                            <div class="post-img">
                                <img class="img-responsive" src="http://lorempixel.com/400/200" alt="loraim">
                                <div class="over-layer">
                                    <ul class="post-link">
                                        <li>
                                            <a href="#" class="fa fa-link"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="post-date">
                                    <span class="date">25.</span>
                                    <span class="month">8.</span>
                                </div>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="#">Lorem ipsum dolor sit amet.</a>
                                </h3>
                                <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis perspiciatis nobis voluptate et laudantium amet ipsum numquam omnis ullam placeat.</p>
                                <a href="#" class="read-more">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <p class="text-center">
                <a href="<?php echo site_url('news');?>" class="btn btn-info btn-lg">Lihat Selengkapnya</a>
            </p>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Krenova 2017 Kabupaten Temanggung</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <div class="modal fade" id="modal-login">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center">Login Member</h4>
                </div>
                <div class="modal-body">
                <?php echo form_open('login');?>
                    <form class="form-horizontal" action="form-signin">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                            
                                <input type="text" class="form-control" name="username" autofocus="autofocus">
                            
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                            
                                <input type="password" class="form-control" name="password" >
                            
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
                <?php echo $this->session->flashdata('msg'); ?>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <div class="modal fade" id="modal-register">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center">Register Member</h4>
                </div>
                <div class="modal-body">
                <?php echo form_open('register');?>
                    <form class="form-horizontal" action="form-signin">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
                                <input type="text" class="form-control" name="name" value="<?php echo set_value('name'); ?>"/>
                                <p> <?php echo form_error('name'); ?> </p>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                <input type="text" class="form-control" name="email" value="<?php echo set_value('enail'); ?>"/>
                                <p> <?php echo form_error('email'); ?> </p>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                                <input type="text" class="form-control" name="username" value="<?php echo set_value('username'); ?>"/>
                                <p> <?php echo form_error('username'); ?> </p>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                                <input type="password" class="form-control" name="password" value="<?php echo set_value('password'); ?>"/>
                                <p> <?php echo form_error('password'); ?> </p>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Confirmasi Password</label>
                                <input type="password" class="form-control" name="password_conf" value="<?php echo set_value('password_conf'); ?>"/>
                                <p> <?php echo form_error('password_conf'); ?> </p>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


    
<?php
    $this->load->view('footer');
?>