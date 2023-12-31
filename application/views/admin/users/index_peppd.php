<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title text-center text-secondary" style="font-family: inherit" >Manajemen User Tim PEPPD</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb p-0 m-0">
                    </ol>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="row _list_user">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title" style="font-size: 12px"></h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive isitable">
                                  <table id="dataUser" class="table table-small-font table-bordered table-striped" style="width:100%">                          
                                    <thead>
                                        <tr>
                                            <th style="font-size: 13px">Id </th>
                                            <th style="font-size: 13px">Nama</th>
<!--                                            <th style="font-size: 13px">Email</th>-->
                                            <th style="font-size: 13px">Group User</th>
                                            <th style="font-size: 13px">Status</th>
                                            <th style="font-size: 13px">Last Access</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>

                            </div>
                            <div class="panel-footer">
                                <a href="#" id="modal_add_show" class="btn btn-primary waves-effect waves-light"><i class="fa fa-plus"></i> User Baru</a>
<!--                                <a href="#" class="btn btn-primary waves-effect waves-light"><i class="fa fa-refresh"></i> Muat Ulang</a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>    
    
    <div class="row _edituser" style="display: none;">
    
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Profil</h3>
                </div>
                <div class="card-body">
                    <form id="form_edit">
                        <div class="row">
                        <div class="col-md-12 col-sm-6 col-xs-12 col-lg-6">
                            <div class="form-group">
                                <label>Id User</label>
                                <input type="hidden" class="form-control" id="iduser" name="iduser" placeholder="">
                                <input type="text" class="form-control input-sm" id="userid" name="userid" placeholder="" readonly="">
                            </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12 col-sm-6 col-xs-12 col-lg-6">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control input-sm" id="nama" name="nama" placeholder="">
                            </div>

                        </div>
                       <div class="col-md-12 col-sm-12 col-xs-12 col-lg-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control input-sm" id="email" name="email" placeholder="">
                            </div>    
                        </div> 
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-6 col-xs-12 col-lg-6">    
                                <div class="form-group">
                               <label>Status </label>
                                <select class="form-control" id="stts" name="stts">
                                    <option value=""> - Pilih - </option>
                                    <option value="Y"> Active </option>
                                    <option value="N"> Not Active </option>

                                </select>
                                </div>
                            </div>

                        </div>
                        

                        <div class="modal-footer">
                            <!-- <button class="btn btn-warning btnShwHd"  data-show="._list_user" data-hide="._edituser" data-hdrhide=".lbl_hdr_indi,.lbl_hdr_krit"><i class="fas fa-arrow-left"></i>&nbsp;Kembali</button> -->
                            <a class="btn btn-warning btnShwHd"  data-show="._list_user"  data-hide="._edituser" data-hdrhide=".lbl_hdr_nmwlyh"  data-reload="DUser"><i class="fas fa-arrow-left"></i>&nbsp;Kembali</a>
                            <button type="submit" class="btn btn-info waves-effect waves-light">Edit</button>
                        </div>
                    </form>
                </div>
                <!-- card-body -->
            </div>
        </div>

    </div>
    
    
</div>

<form id="form_add">
    <div id="modal_add" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title">Tambah Data User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
<!--                    <div class="row">-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-3" class="control-label">User Id</label>
                                <input type="text" class="form-control" id="field-1" name="code" placeholder="" required="">
                            </div>
                        </div>
<!--                    </div>-->
<!--                    <div class="row">-->
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="field-4" class="control-label">Nama</label>
                                <input type="text" class="form-control" id="field-2" placeholder="" required="" name="name">
                            </div>
                        </div>
<!--                    </div>-->
<!--                    <div class="row">-->
                       <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-4" class="control-label">Email</label>
                                <input type="email" class="form-control" id="field-3" placeholder="Email" required="" name="email">
                            </div>
                        </div>
<!--                    </div>-->
                    
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal"><i class="fas fa-times"></i>&nbsp;Batal</button> -->
                    <a class="btn btn-warning btnShwHd"  data-show="._list_user"  data-hide="._edituser" data-hdrhide=".lbl_hdr_nmwlyh"  data-reload="DUser"><i class="fas fa-arrow-left"></i>&nbsp;Kembali</a>
                    <button type="submit" class="btn btn-info waves-effect waves-light"><i class="fas fa-save"></i>&nbsp;Simpan</button>
                </div>
            </div>
        </div>
    </div><!-- /.modal -->
</form>
            
<form id="form_wil">
    <div id="modal_wil" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                        <h5 class="modal-title">Pilih Provinsi yang Akan Dinilai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                            <div class="form-group">
                                                <input type="" class="form-control" name="iduserr" placeholder=''>
                                                <label>Provinsi</label>
                                                <select class="form-control" name="prov">
                                                    <option value=""> - Pilih - </option>
                                                    <?php
                                                  //  foreach ($list_prov->result() as $v) {
                                                        ?>
                                                    <option value="<?php //echo encrypt_text($v->id);?>"><?php //echo $v->id_kode?>-<?php //echo $v->nama_provinsi?></option>
                                                            <?php
                                                   // }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>   
                    </div>
                
            </div>
            <div class="modal-footer">
                
                <button class="btn btn-info waves-effect waves-light pull-left" type="submit">Simpan</button>    
            </div>
        </div>
    </div>
</div>
</form>

    






<!--//list kabupaten-->
<div id="list_kab" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                    <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive isitable">
                              <table id="dataKab" class="table table-small-font table-bordered table-striped" style="width:100%">                          
                                <thead>
                                    <tr>
                                        <th style="font-size: 13px">No </th>
                                        <th style="font-size: 13px">Kabupaten</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>

                        </div>
                    </div>
                </div>
             </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-info waves-effect waves-light" id="save_popup">Simpan</button>
                </div>
        </div>
    </div>
</div>

