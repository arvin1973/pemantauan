<div class="row">        <div class="col-lg-12">            <div class="card">                <div class="card-header">                    <h5 class="card-title">Struktur dan Pertumbuhan PDRB Sektoral</h5></div>                <div class="card-body">                    <form class="form-inline">                        <div class="input-group">                                    <div class="form-group">                                    <label class="sr-only" for="exampleInputEmail2">Nasional</label>                                    <input type="text" class="form-control" id="inp_pro" name="inp_pro" placeholder="Nasional">                                    <input type="hidden" id="inp_proid" name="inp_proid" >                                    <span class="input-group-prepend">                                                <button type="button" class="btn waves-effect waves-light btn-primary plhpro"><i class="fa fa-search"></i></button>                                    </span>                                    </div>                        </div><!--                                            <button type="submit" class="btn btn-success waves-effect waves-light ml-2">Download PDF</button>-->                    </form>                </div>                <!-- card-body -->            </div>            <!-- card -->        </div>        <!-- col -->    </div><div class="row">    <div class="col-lg-12 ">        <div id="" style="overflow-y:scroll; overflow-x:hidden; height:500px;">            <div class="col-lg-12">                                        <div class="card">                                            <div class="card-header">                                                <h3 class="card-title"> Struktur PDRB</h3></div>                                            <div class="card-body">                                                <form class="form_tk" id="form_tk">                                                <p name="ket_tk" style="font-size: 12px"></p>                                                </form>                                            </div>                                            <!-- card-body -->                                        </div>            </div>            <div class="col-lg-12">                                            <div class="card">                                                <div class="panel-heading">                                                     <h3 class="panel-title">   </h3>                                                 </div>                                                 <div class="panel-body">                                                     <div class="panel-body">                                                    <div id="chart-container-s" style="height: 400px;"></div>                                                    </div>                                                </div>                                             </div>                                        </div>            <div class="col-lg-12">                                            <div class="card">                                                <div class="panel-heading">                                                     <h3 class="panel-title">   </h3>                                                 </div>                                                 <div class="panel-body">                                                     <div class="panel-body">                                                    <div id="chart-container-p" style="height: 400px;"></div>                                                    </div>                                                </div>                                             </div>                                        </div>        <!--     <div class="col-lg-12">                                        <div class="card">                                            <div class="card-header">                                                <h3 class="card-title"> Struktur dan Pertumbuhan PDRB Sektoral</h3></div>                                            <div class="card-body">                                                <form class="" id="form_pdrb">                                                <p name="ket_pdrb"></p>                                                </form>                                            </div>                                             card-body                                         </div>                                    </div>-->            <div class="col-lg-12">                                            <div class="card">                                                <div class="panel-heading">                                                     <h3 class="panel-title">   </h3>                                                 </div>                                                 <div class="panel-body">                                                     <div class="panel-body">                                                    <div id="chart-container-pdrb" style="height: 500px;"></div>                                                    </div>                                                </div>                                             </div>                                        </div>        </div>    </div>                           <!-- end row --></div>                    <!-- end container-fluid -->    <div id="mdlPro" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">                                            <div class="modal-dialog modal-full">                                                <div class="modal-content">                                                    <div class="modal-header">                                                            <h5 class="modal-title">Pilih Propinsi</h5>                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">                                                            <span aria-hidden="true">&times;</span>                                                        </button>                                                    </div>                                                    <div class="modal-body">                                                        <input type="hidden" class="frmTrgt" value=""/>                                    <table id="tblSo" style="width: 100%" class="table table-bordered table-striped">                                    <table id="tblPro" class="table table-small-font table-bordered table-striped" style="width:100%">                                        <thead>                                            <tr>                                                <th class="text-uppercase" title="id">Id</th>                                                <th class="text-uppercase">Nama Provinsi</th>                                                <th class="text-uppercase" title="label">Label</th>                                                <th></th>                                            </tr>                                        </thead>                                        <tbody></tbody>                                    </table>                                                    </div>                                                    <div class="modal-footer">                                                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Batal</button><!--                                                        <button type="button" class="btn btn-info waves-effect waves-light" id="save_popup">Pilih</button>-->                                                        <button type="button" class="btn btn-info waves-effect waves-light" id="save_popup" data-dismiss="modal"><i class="fa fa-save"></i>&nbsp;Pilih</button>                                                    </div>                                                </div>                                            </div>                                        </div>