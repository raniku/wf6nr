<?= $this->extend('layout') ?>

<?= $this->section('bodycontent') ?>

    <div class="container px-5 mb-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <!-- Project Card 1-->
                <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center">
                            <div class="p-5">
                                <h2 class="fw-bolder">Aparatur Sipil Negara</h2>
                                <p>Dinas Kependudukan dan Pencatatan Sipil Kabupaten Sukabumi</p>
                            </div>
                            <img class="img-fluid" src="assets/profile.png" alt="..." width="300" height="400"/>
                        </div>
                    </div>
                </div>
                <!-- Project Card 2-->
                <div class="card overflow-hidden shadow rounded-4 border-0">
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center">
                            <div class="p-5">
                                <h2 class="fw-bolder">SiCentil</h2>
                                <p>Sistem Informasi Cermat Ekonomi Terintegrasi Lengkap pada Bidang Ekonomi Bappeda Kota Sukabumi. Alamat URL : http://sicentil.sukabumikota.go.id/</p>
                            </div>
                            <img class="img-fluid" src="assets/projects.jpg" alt="..." width="300" height="400"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection()?>