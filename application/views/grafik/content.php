<div class="container">
    <div class="row" id="tab-search-indikator-makro"
        style="background-color: white; margin-bottom: 20px; margin-left: -39px; margin-right: 0px; position: fixed; z-index: 99; width: -webkit-fill-available">
        <div class="col-lg-12">
            <div class="page-title-box" style="padding-bottom: 0px; margin-left: 0px; margin-right: 0px;">
                <div class="clearfix"></div>
                <div class="card card-fill"
                    style="border: 1px solid #000000; border-radius: 20px; display: inline-block; background-color: white">
                    <h4 class="card-title text-black"
                        style="font-family: 'Montserrat', sans-serif; padding: 0.5rem 0.75rem;">Pencapaian Indikator
                        Makro</h4>
                </div>
                <ol class="breadcrumb p-0 m-0" style="margin-top: 5px !important;">
                    <li class="breadcrumb-item" style="color: black;"><a href="#">Pencapaian</a></li>
                    <li class="breadcrumb-item active" style="color: black;">Pencapaian Indikator Makro</li>
                </ol>
            </div>
            <form class="form" style="display: grid; justify-content: center; margin-bottom: 10px;">
                <div class="input-group">
                    <div class="row">
                        <div class="col-12" style="display: flex;">
                            <div class="form-group mx-2">
                                <p class="text-muted m-t-30 font-13 mb-2" style="justify-self: center;">
                                    Pilih Daerah <span class="badge"
                                        style="background-color: rgba(108, 117, 125, 0.7);">Daerah dapat di pilih lebih
                                        dari satu</span>
                                </p>
                                <select class="selectpicker form-control" id="selectregion" name="region[]"
                                    multiple="multiple" data-actions-box="true" data-live-search="true"
                                    data-dropup-auto="false" data-size="5" data-selected-text-format="count > 3"
                                    data-width="275px">
                                </select>
                            </div>
                            <div class="form-group mx-2">
                                <p class="text-muted m-t-30 font-13 mb-2" style="justify-self: center;">
                                    Pilih Indikator <span class="badge"
                                        style="background-color: rgba(108, 117, 125, 0.7);">Indikator dapat di pilih
                                        lebih dari satu</span>
                                </p>
                                <select class="selectpicker form-control" id="selectindicator" name="indicator[]"
                                    multiple="multiple" data-live-search="true" data-dropup-auto="false" data-size="5"
                                    data-selected-text-format="count > 3" data-max-options="5" data-width="275px">
                                </select>
                            </div>
                            <div class="form-group mx-2">
                                <p class="text-muted m-t-30 font-13 mb-2" style="justify-self: center;">
                                    Pilih Tahun <span class="badge"
                                        style="background-color: rgba(108, 117, 125, 0.7);">Tahun dapat di pilih lebih
                                        dari satu</span>
                                </p>
                                <select class="selectpicker form-control" id="selectyear" name="year[]"
                                    multiple="multiple" data-live-search="true" data-dropup-auto="false" data-size="8"
                                    data-selected-text-format="count > 6" data-max-options="5" data-width="275px">
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-12" style="background-color: #D9D9D9; padding: 0px;">
            <ul class="nav nav-tabs tabs-bordered nav-justified" role="tablist"
                style="box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1rem !important;">
                <li class="nav-item">
                    <a class="nav-link active" id="tabel-b2-tab" data-toggle="tab" href="#tabel-b2" role="tab"
                        aria-controls="tabel-b2" aria-selected="true">
                        <span class="d-block d-sm-none"><i class="mdi mdi-home-variant-outline font-18"></i></span>
                        <span class="d-none d-sm-block">Tabel</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="grafik-b2-tab" data-toggle="tab" href="#grafik-b2" role="tab"
                        aria-controls="grafik-b2" aria-selected="false">
                        <span class="d-block d-sm-none"><i class="mdi mdi-account-outline font-18"></i></span>
                        <span class="d-none d-sm-block">Grafik</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-12">
            <div class="tab-content">
            </div>
        </div>
    </div>
</div>