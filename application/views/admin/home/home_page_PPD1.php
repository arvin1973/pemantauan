<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box" style="padding-bottom: 0px;">
            <!-- <h4 class="page-title">Dashboard Pemantauan Pembangunan Daerah </h4> -->
            <div class="card card-fill"
                style="border: 1px solid #000000; border-radius: 20px; display: inline-block; background-color: white;">
                <h4 class="card-title text-black"
                    style="font-family: 'Montserrat', sans-serif; padding: 0.5rem 0.75rem;">Dashboard Pemantauan
                    Pembangunan Daerah</h4>
            </div>
            <div class="page-title-right">
                <ol class="breadcrumb p-0 m-0">
                    <!-- <li class="breadcrumb-item"><a href="#">PEPPD</a></li>
                    <li class="breadcrumb-item active">Dashboard</li> -->
                </ol>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="card-deck">
    <div class="card col-md-6 card-border">
        <div class="card-body  d-flex">
            <div class="avatar-md bg-info rounded-circle mr-4">
                <i class="fas fa-database avatar-title font-26 text-white"></i>
            </div>
            <div class="col text-right">
                <h4>
                    <?php echo $totaldataindikator[0]['total'] ?>
                </h4>
                <h6>Total data Indikator Makro Pembangunan</h6>
            </div>
        </div>
    </div>
    <div class="card col-md-6 card-border">
        <div class="card-body  d-flex">
            <div class="avatar-md bg-info rounded-circle mr-4">
                <i class="mdi mdi-clipboard-list-outline avatar-title font-26 text-white"></i>
            </div>
            <div class="col text-right">
                <h4>
                    <?php echo $totalindikator[0]['total'] ?>
                </h4>
                <h6>Total Indikator Makro</h6>
            </div>
        </div>
    </div>
    <div class="card col-md-6 card-border">
        <div class="card-body  d-flex">
            <div class="avatar-md bg-info rounded-circle mr-4">
                <i class="far fa-money-bill-alt avatar-title font-26 text-white"></i>
            </div>
            <div class="col text-right">
                <h4>
                    <?php echo $totalapbd[0]['total'] ?>
                </h4>
                <h6>Total APBD</h6>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-7">
        <h3>Grafik</h3>
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="5000">
                    <div id="stackedbar"></div>
                </div>
                <div class="carousel-item" data-interval="3000">
                    <div id="ekonomi"></div>
                </div>
                <div class="carousel-item" data-interval="3000">
                    <div id="kemiskinan"></div>
                </div>
                <div class="carousel-item" data-interval="3000">
                    <div id="tpt"></div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
    <div class="col-md-5">
        <h3>Notifikasi</h3>
        <div class="card card-border">
            <div class="card-body p-4">
                <div class="row">
                    <div class="col-12">
                        <span class="badge badge-primary"
                            style=" float: left; margin-bottom: 10px; margin-right: 2px;">Februari</span>
                        <span class="badge badge-warning"
                            style=" float: left; margin-bottom: 10px; margin-right: 2px;">2023</span>
                        <span class="badge badge-purple"
                            style=" float: left; margin-bottom: 10px; margin-right: 2px;">Provinsi Sumatera
                            Selatan</span>
                        <span class="badge badge-secondary" style="float: right; margin-bottom: 5px;">19 Juli
                            2023</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <i class="fa fa-info-circle" aria-hidden="true"></i> Update Data <strong>Jumlah Penganggur
                            Periode Februari Tahun 2023</strong>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-border">
            <div class="card-body p-4">
                <div class="row">
                    <div class="col-12">
                        <span class="badge badge-warning"
                            style=" float: left; margin-bottom: 10px; margin-right: 2px;">2023</span>
                        <span class="badge badge-purple"
                            style=" float: left; margin-bottom: 10px; margin-right: 2px;">Nasional</span>
                        <span class="badge badge-secondary" style="float: right; margin-bottom: 5px;">19 Juli
                            2023</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <i class="fa fa-info-circle" aria-hidden="true"></i> Update Data <strong>Indeks Pembangunan
                            Manusia Periode Tahun 2023</strong>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-border">
            <div class="card-body p-4">
                <div class="row">
                    <div class="col-12">
                        <span class="badge badge-primary"
                            style=" float: left; margin-bottom: 10px; margin-right: 2px;">Maret</span>
                        <span class="badge badge-warning"
                            style=" float: left; margin-bottom: 10px; margin-right: 2px;">2023</span>
                        <span class="badge badge-purple"
                            style=" float: left; margin-bottom: 10px; margin-right: 2px;">Nusa Tenggara Timur</span>
                        <span class="badge badge-secondary" style="float: right; margin-bottom: 5px;">19 Juli
                            2023</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <i class="fa fa-info-circle" aria-hidden="true"></i> Update Data <strong>Gini Rasio Periode
                            Maret Tahun 2023</strong>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-border">
            <div class="card-body p-4">
                <div class="row">
                    <div class="col-12">
                        <span class="badge badge-warning"
                            style=" float: left; margin-bottom: 10px; margin-right: 2px;">2023</span>
                        <span class="badge badge-purple"
                            style=" float: left; margin-bottom: 10px; margin-right: 2px;">Nasional</span>
                        <span class="badge badge-secondary" style="float: right; margin-bottom: 5px;">19 Juli
                            2023</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <i class="fa fa-info-circle" aria-hidden="true"></i> Update Data <strong>PDRB Per Kapita ADHK
                            Tahun Dasar 2010 Periode Tahun 2023</strong>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-border">
            <div class="card-body p-4">
                <div class="row">
                    <div class="col-12">
                        <span class="badge badge-warning"
                            style=" float: left; margin-bottom: 10px; margin-right: 2px;">2023</span>
                        <span class="badge badge-purple"
                            style=" float: left; margin-bottom: 10px; margin-right: 2px;">Nasional</span>
                        <span class="badge badge-secondary" style="float: right; margin-bottom: 5px;">19 Juli
                            2023</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <i class="fa fa-info-circle" aria-hidden="true"></i> Update Data <strong>Pengeluaran Per Kapita
                            Periode Tahun 2023</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="grafik"></div>