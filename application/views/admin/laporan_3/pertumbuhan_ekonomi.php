<!DOCTYPE html><html lang="en"> <head>        <meta charset="utf-8" />        <title><?php echo $tag_title?></title>        <meta http-equiv="X-UA-Compatible" content="IE=edge">        <meta content="width=device-width, initial-scale=1" name="viewport" />        <meta content="" name="description" />        <meta content="" name="author" />        <!-- BEGIN GLOBAL MANDATORY STYLES -->         </head> <style type="text/css">   .p1 { line-height:18px; font-size:10pt; text-align: justify;}   .p2 { font-size:16px; line-height: 20px;}   .p3 { font-size:16px; line-height: 1.5em;}   .p4 { font-size:16px; line-height: 2;}</style><body style="background-image: url(<?php echo base_url("assets")?>/images/putih1.png);             background-position: top left;             background-repeat: no-repeat;             background-image-resize: 4;             background-image-resolution: from-image;">    <div class="hl">        <?php $no=1;?>        <br/>        <div id="">            <div class="">                <div class="">                    <FONT FACE="DejaVuSerifCondensed">                        <FONT SIZE=2 STYLE="font-size: 12pt"><b>Pertumbuhan Ekonomi</b></FONT>                    </FONT>                </div>                <div class="">                    <p class="p1"><?php echo $desc_peek; ?>                        <br/><?php echo $capaian_n_pe; ?>                        <br/><?php echo $capaian_p_pe; ?>                        <br/><?php echo $capaian_k_pe;?>                             <?php echo $pe_rkpd_rkp;?>                    </p>                    <div class="polaroid" style="text-align: center;">                        <blockquote class="">                            <center><small>Gambar <?php echo $no++;?>. <cite title="">Perkembangan Pertumbuhan Ekonomi tahun <?php echo $tahun_pe_g1 ?> (%)</cite> </small></center>                        </blockquote>                        <img src="<?php echo $halaman_PE;?>" class="" alt="">                    </div>                    <div class="">                        <blockquote class="">                            <small>Sumber Data : <cite title=""><?php echo $sumber_pe;?></cite> </small>                        </blockquote>                    </div>                    <p class="p1"></br><?php echo $pe_perbandingan_pro; ?> </p>                                        <div class="polaroid" style="text-align: center;">                        <blockquote class="">                            <center><small>Gambar <?php echo $no++;?>. <cite title="">Perbandingan Pertumbuhan Ekonomi <?php echo $tahun_max_pe ?> (%)</cite> </small></center>                        </blockquote>                        <img src="<?php echo $perbandingan_PE;?>" class="" alt="">                    </div>                    <div class="">                        <blockquote class="">                            <small>Sumber Data : <cite title=""><?php echo $sumber_pe;?></cite> </small>                        </blockquote>                    </div>                </div>            </div>        </div>                               </div>  </body></html>