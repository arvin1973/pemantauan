<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title text-center text-secondary">Upload Data Indikator</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb p-0 m-0">
                    </ol>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="btn-toolbar" role="toolbar">

                <div class="btn-group mr-2">
                    <button type="button" class="btn btn-warning waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Contoh Template
                        <i class="mdi mdi-chevron-down"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="https://peppd.bappenas.go.id/pemantauan/attachments/contohtemplate/contoh_template.xlsx" target='_blank' class="dropdown-item">Template Indikator</a></li>
                        <li><a href="https://peppd.bappenas.go.id/pemantauan/attachments/contohtemplate/contoh_Struktur_dan_Pertumbuhan_PDRB_Sektoral.xlsx" target='_blank' class="dropdown-item">Template Struktur & Pertumbuhan PDRB Sektoral</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" style='font-size: 12px'></h3>
                </div>
                <div class="card-body">

                    <form id="form_cari" role="form">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-6 col-xs-12 col-lg-12">
                                    <div class="form-group">
                                        <label>File indikator</label>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-6 col-xs-12 col-lg-12">
                                    <div class="form-group">
                                        <input type="file" name="attch" />

                                    </div>
                                </div>
                            </div>
                            <!--                            <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6 custom-file">
                                <input type="file" class="custom-file-input" id="validatedCustomFile" name="attch" required>
                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                              </div>-->

                            <div class="form-group ml-2">

                            </div>

                            <div class="panel-footer">
                                <button type="submit" class="btn btn-primary "><i class="fa fa-check"></i> Simpan</button>
                                <!--                                <button type="button" class="btn btn-primary waves-effect waves-light nodua" ><i class=" ion ion-md-stats "></i></button>-->
                                <!--                                                    <button type="button" class="btn btn-primary waves-effect waves-light"><i class="far fa-trash-alt"></i></button>-->
                            </div>
                        </div>


                        <!--                                            <button type="submit" class="btn btn-success waves-effect waves-light ml-2">Download PDF</button>-->
                    </form>

                </div>

                <!-- card-body -->
            </div>
            <!-- card -->
        </div>
        <!-- col -->
    </div>

</div>



<div class="row listdata" style="display: none;">
    <div class="col-12">
        <form class="" id="form_download">
            <input type="hidden" id="inp_wl" name="inp_wl">
            <input type="hidden" id="inp_in" name="inp_in">
            <div class="form-group ml-2">
                <button type="submit" class="btn btn-success waves-effect waves-light ml-2 btnBack">Excel</button>
            </div>
        </form>
        <div class="table-responsive">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th class="center" style="font-size: 12px">Tahun</th>
                        <th style="font-size: 12px">Periode</th>
                        <th style="font-size: 12px">Nilai</th>
                        <th style="font-size: 12px">Nasional</th>
                        <th style="font-size: 12px">Target</th>
                        <th class="center" style="font-size: 12px">Target Makro RPJMN</th>
                        <th style="font-size: 12px">Target RKPD</th>
                        <th class="center" style="font-size: 12px">Target Kewilayahan RKP</th>
                        <th style="font-size: 12px">Satuan</th>
                        <th style="font-size: 12px">Versi</th>
                    </tr>
                </thead>
                <tbody class="table_data">

                </tbody>
            </table>
        </div>

    </div>
</div>

<div id="mdlPro" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pilih Wilayah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" class="frmTrgt" value="" />
                <table id="tblSo" style="width: 100%" class="table table-bordered table-striped">
                    <table id="tblPro" class="table table-small-font table-bordered table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th class="text-uppercase" title="id">Id</th>
                                <th class="text-uppercase">Nama </th>
                                <th class="text-uppercase" title="label"></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Batal</button>
                <!--                                                        <button type="button" class="btn btn-info waves-effect waves-light" id="save_popup">Pilih</button>-->
                <button type="button" class="btn btn-info waves-effect waves-light" id="save_popup" data-dismiss="modal"><i class="fa fa-save"></i>&nbsp;Pilih</button>
            </div>
        </div>
    </div>
</div>

<div id="mdlind" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Pilih Indikator</h4>
            </div>
            <div class="modal-body">
                <input type="hidden" class="frmTrgt" value="" />
                <table id="tblInd" class="table table-small-font table-bordered table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-uppercase" title="id">Id</th>
                            <th class="text-uppercase">Nama </th>
                            <th class="text-uppercase" title="label"></th>
                            <!--                                                <th></th>-->
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-info waves-effect waves-light" id="save_popup" data-dismiss="modal"><i class="fa fa-save"></i>&nbsp;Pilih</button>
            </div>
        </div>
    </div>
</div>