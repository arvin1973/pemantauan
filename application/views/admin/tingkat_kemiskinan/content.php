    <div class="row">                            <div class="col-lg-12">                                <div class="card">                                    <div class="card-header">                                        <h3 class="card-title">Tingkat Kemiskinan</h3></div>                                    <div class="card-body">                                        <form class="form-inline">                                            <div class="input-group">                                                        <div class="form-group">                                                        <label class="sr-only" for="exampleInputEmail2"></label>                                                        <input type="text" class="form-control" id="inp_pro" name="inp_pro" placeholder="Provinsi">                                                        <input type="hidden" id="inp_proid" name="inp_proid" >                                                        <input type="hidden" class="form-control" id="inp_kab" name="inp_kab" placeholder="Kabupaten">                                                        <span class="input-group-prepend">                                                                    <button type="button" class="btn waves-effect waves-light btn-primary plhpro"><i class="fa fa-search"></i></button>                                                        </span>                                                        </div>                                                <!--                                                <div class="form-group ml-2">                                                    <label class="sr-only" for="exampleInputPassword2">Pilih Kabupaten</label>                                                    <input type="text" class="form-control" id="inp_kab" name="inp_kab" placeholder="Kabupaten">                                                    <span class="input-group-prepend">                                                                <button type="button" class="btn waves-effect waves-light btn-primary plhkab"><i class="fa fa-search"></i></button>                                                    </span>                                                </div>-->                                                <div class="form-group ml-2">                                                    <button type="button" class="btn btn-primary waves-effect waves-light nosatu"><i class="fa ion ion-md-desktop "></i></button>                                                                                                    </div>                                                <div class="form-group ml-2">                                                    <button type="button" class="btn btn-primary waves-effect waves-light nodua" title="Graphs"><i class=" ion ion-md-stats "></i></button>                                                </div>                            <div class="form-group ml-2 bg-success btnMenu" data-target="<?php echo site_url("Gis")?>">                                 <button type="button" class="btn btn-primary waves-effect waves-light " >                                <i class="fas fa-arrow-left"></i>&nbsp;Kembali</button>                            </div>                                            </div>                                            <!--                                            <button type="submit" class="btn btn-success waves-effect waves-light ml-2">Download PDF</button>-->                                        </form>                                    </div>                                                                        <!-- card-body -->                                </div>                                <!-- card -->                            </div>                            <!-- col -->    </div><div class="row">        <div class="col-lg-12">        <div id="" style="overflow-y:scroll; overflow-x:hidden; height:800px;">        <div class="col-md-12" id="pe_pro_p">            <div class="row">                <div class="col-lg-12">                     <div class="panel panel-default">                         <div class="panel-heading">                              <h3 class="panel-title"></h3>                          </div>                          <div class="panel-body"> <!--                                 <div class="mapLinkContainer">                                <a href="#" class="" style="margin: -2px;" data-tippy="" data-original-title="Back to Map View"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>                                <a href="#" class="trigger-map link icon-only disp-inline-block layout-tab active hide maptablink" data-tippy="" data-original-title="Map View"><i class="fa fa-globe" aria-hidden="true"></i></a>                                <a href="#" class="trigger-overview link icon-only disp-inline-block layout-tab hide" data-tippy="" data-original-title="Graphs"><i class="fa fa-pie-chart" aria-hidden="true"></i></a>                                <a href="#" class="trigger-trendchart link icon-only disp-inline-block layout-tab hide" data-tippy="" data-original-title="Trend"><i class="fa fa-area-chart" aria-hidden="true"></i></a>                                <a href="#" class="trigger-rank link icon-only disp-inline-block layout-tab hide" data-tippy="" data-original-title="Locations"><i class="fa fa-map-marker" aria-hidden="true"></i></a>                                <a href="#" class="link icon-only layout-tab trigger-districtProfile hide" data-tippy="" data-original-title="District Profile"><i class="fa fa-file-text-o" aria-hidden="true" style="margin-left: -5px !important;"></i></a>                              </div>-->                             <div id="map" class="gmaps">                             </div>                             <div id="state-legend" class="legend" style="">                                <h4 style="font-size: 14px";>Tingkat Kemiskinan</h4>                                <div><span style="background-color: #fb030f"></span>12.50 - 17.60</div>                                <div><span style="background-color: #f5da4b"></span>7.30  - 12.40</div>                                <div><span style="background-color: #4bd712"></span>2.00  - 7.20</div>                                <div><span style="background-color: #ffd4d7"></span>0.00  - 2.00</div>                               </div>                                                             <div class="map-overlay-container" id="form_nsl">                                        <div class="map-overlay"><!--                                            <div><a>Tahun : </a><a name="n_thn"></a> </div>-->                                            <h4 style="font-size: 12px"; id="location-title">Tahun          : <a name="n_thn"> </a></h4>                                            <h4 style="font-size: 12px"; id="location-title">Angka   <a name="n_nsl"> </a>%</h4><!--                                            <p id="location-description"></p>-->                                                                                    </div>                                    </div>                         </div>                      </div>                </div>             </div>        </div>                <div class="col-lg-12" style="display: none;" id="pe_pro_d">                                     <div class="col-lg-12" >                <div class="card">                    <div class="card-header">                     <h3 class="card-title"> Tingkat Kemiskinan</h3></div>                 <div class="card-body">                     <form class="form_ch" id="form_ch">                         <p name="ket" style="font-size: 12px"></p>                     </form>                     <form class="" id="form_pe">                        <p name="maxpep" style="font-size: 12px"></p>                        <p name="perkpdrkp" style="font-size: 12px"></p>                    </form>                 </div>                </div>            </div>                        <div class="col-lg-12"style="display: none;" id="pe_pro_g">                <div class="card">                    <div class="panel-heading">                         <h3 class="panel-title">   </h3>                     </div>                    <div class="panel-body">                         <div class="panel-body">                        <div id="chart-container-1" style="height: 300px;"></div>                        </div>                    </div>                </div>            </div>                         <div class="col-lg-12" style="display: none;" id="pe_pro">                <div class="card">                    <div class="panel-heading">                         <h3 class="panel-title">   </h3>                     </div>                    <div  class="pepro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >                    <div class="card-body">                        <form class="" id="form_pe_per">                            <p name="per_pro" style="font-size: 12px"></p>                        </form>                        <p></p>                    </div>                    <div class="panel-body">                         <div class="panel-body">                            <div id="chart-container-1-pro" style="height: 300px;"></div>                        </div>                    </div>                    </div>                            </div>            </div>                        <div class="col-lg-12"  id="pe_rad" style="display: none;">                <div class="card">                    <div class="panel-heading">                         <h3 class="panel-title">   </h3>                     </div>                    <div  class="pepro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >                    <div class="card-body">                        <form class="" id="form_pe_rad">                            <p name="per_rad" style="font-size: 12px"></p>                        </form>                        <p></p>                    </div>                    <div class="panel-body">                         <div class="panel-body">                        <div id="container-1-rad" style="height: 600px;"></div>                        </div>                    </div>                    </div>                            </div>            </div>            <div class="col-lg-12"  id="pe_kab" style="display: none;">                <div class="card">                    <div class="panel-heading">                         <h3 class="panel-title">   </h3>                     </div>                    <div  class="pepro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >                    <div class="card-body">                        <form class="" id="form_pe_perk">                            <p name="per_kab" style="font-size: 12px"></p>                        </form>                        <p></p>                    </div>                    <div class="panel-body">                         <div class="panel-body">                        <div id="chart-container-1-kab" style="height: 300px;"></div>                        </div>                    </div>                    </div>                            </div>            </div>         </div>        </div>    </div>     </div>    <div id="mdlPro" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">                                <div class="modal-dialog modal-full">                                                <div class="modal-content">                                                    <div class="modal-header">                                                            <h5 class="modal-title">Pilih Propinsi</h5>                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">                                                            <span aria-hidden="true">&times;</span>                                                        </button>                                                    </div>                                                    <div class="modal-body">                                                        <input type="hidden" class="frmTrgt" value=""/>                                    <table id="tblSo" style="width: 100%" class="table table-bordered table-striped">                                    <table id="tblPro" class="table table-small-font table-bordered table-striped" style="width:100%">                                        <thead>                                            <tr>                                                <th class="text-uppercase" title="id">Id</th>                                                <th class="text-uppercase">Nama Provinsi</th>                                                <th class="text-uppercase" title="label">Label</th>                                                <th></th>                                            </tr>                                        </thead>                                        <tbody></tbody>                                    </table>                                                    </div>                                                    <div class="modal-footer">                                                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Batal</button><!--                                                        <button type="button" class="btn btn-info waves-effect waves-light" id="save_popup">Pilih</button>-->                                                        <button type="button" class="btn btn-info waves-effect waves-light" id="save_popup" data-dismiss="modal"><i class="fa fa-save"></i>&nbsp;Pilih</button>                                                    </div>                                                </div>                                            </div>    </div><div id="mdlKab" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">                                <div class="modal-dialog modal-full">                                                <div class="modal-content">                                                    <div class="modal-header">                                                            <h5 class="modal-title">Pilih Kabupaten</h5>                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">                                                            <span aria-hidden="true">&times;</span>                                                        </button>                                                    </div>                                                    <div class="modal-body">                                                        <input type="hidden" class="frmTrgt" value=""/>                                    <table id="tblkab" class="table table-small-font table-bordered table-striped" style="width:100%">                                        <thead>                                            <tr>                                                <th class="text-uppercase" title="id">Id</th>                                                <th class="text-uppercase">Nama Kabupaten</th>                                                <th></th>                                            </tr>                                        </thead>                                        <tbody></tbody>                                    </table>                                                    </div>                                                    <div class="modal-footer">                                                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Batal</button><!--                                                        <button type="button" class="btn btn-info waves-effect waves-light" id="save_popup">Pilih</button>-->                                                        <button type="button" class="btn btn-info waves-effect waves-light" id="save_popup" data-dismiss="modal"><i class="fa fa-save"></i>&nbsp;Pilih</button>                                                    </div>                                                </div>                                </div>    </div>