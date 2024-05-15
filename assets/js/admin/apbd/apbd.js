var main = function(){
    controller = "index.php/Apbd";
    
    var datatable = function(){
        window.history.pushState(null, "", window.location.href);        

        function list_display_apbd(){
            let valueSelectedItem = $('#selectitem').val();
            let valueSelectedYear = $('#selectyear').val();
            let valueSelectedRegion = $('#selectregion').val();
            if ((valueSelectedRegion == '') || (valueSelectedItem == '') || (valueSelectedYear == '')) {
                $(".apbd-initial").show();
                $(".tabel-apbd").hide();
                $(".button-export-tabel-apbd").hide();
                loading.hide();
            }else{
                tabel_apbd();
            }
        }

        $('#selectregion').change(function(){
            loading.show();
            list_display_apbd();
        })
    
        $('#selectitem').change(function(){
            loading.show();
            list_display_apbd();
        })
    
        $('#selectyear').change(function(){
            loading.show();
            list_display_apbd();
        })
    };
   
    return{
        init:function(){datatable();},
       // detail:function(){chart();},
    };
}();

$(document).ready(function() {
    $('.selectpicker').selectpicker({
        style: 'btn btn-custom-selectpicker btn-round',
    });
    
});

$(document).ready(function() {
    $.post(base_url+controller+"/item_list", function(result) {
        var data = JSON.parse(result);
        // console.log(data.data[3].kode);
        var html = '';
        for (let i = 0; i < data.data.length; i++) {
            list = data.data[i].kode+'. '+data.data[i].nama;
            html += '<option value="'+data.data[i].kode+'">'+list.substr(0, 60)+'</option>';
        }
        $('#selectitem').append(html);
        $('#selectitem').selectpicker('refresh');
                
        $('.selectpicker ~ option').hide();
      });
});

$(document).ready(function() {
    $.post(base_url+controller+"/years_list", function(result) {
        var data = JSON.parse(result);
        // console.log(data.data[0].tahun);
        var html = '';
        for (let i = 0; i < data.data.length; i++) {
            html += '<option value="'+data.data[i].tahun+'">'+data.data[i].tahun+'</option>';
        }
        $('#selectyear').append(html);
        $('#selectyear').selectpicker('refresh');
                
        $('.selectpicker ~ option').hide();
      });
});

$(document).ready(function() {
    $.post(base_url+controller+"/daerah_list", function(result) {
        var data = JSON.parse(result);
        var html = '';
        for (let i = 0; i < data.data.length; i++) {
            html += '<option value="'+data.data[i]+'">'+data.data[i]+'</option>';
        }
        $('#selectregion').append(html);
        $('#selectregion').selectpicker('refresh');
                
        $('.selectpicker ~ option').hide();
      });
});

$('#selectregion').change(function(){
    var valueSelectedRegion = $(this).val();
    var valueProvince = [];
    var valueCity = [];
    var valueRegion = [];
    for (let i = 0; i < valueSelectedRegion.length; i++) {
        if (valueSelectedRegion[i].indexOf("Provinsi") != -1) {
            valueProvince.push(valueSelectedRegion[i]);
        }else if(valueSelectedRegion[i].indexOf("Kota") != -1) {
            valueCity.push(valueSelectedRegion[i]);
        }else if(valueSelectedRegion[i].indexOf("Kabupaten") != -1) {
            valueRegion.push(valueSelectedRegion[i]);
        }
        
    }
});

$(document).ready(function(){
    var table = $('#datatables-apbd').DataTable( {
        scrollY:        "300px",
        scrollX:        true,
        scrollCollapse: true,
        fixedColumns:   true,
        fixedHeader: true,
        fixedRowsTop: 4,
        ordering: false,
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
    } );
});

$(document).ready(function(){
    $.get(base_url+controller+"/apbd_tabel", function(response){
        var obj = jQuery.parseJSON(response);
        // console.log("Data: " + obj);
    });
});

function tabel_apbd() {

    if ((valueSelectedRegion != '') && (valueSelectedItem != '') && (valueSelectedYear != '')) {

        var valueSelectedItem = $('#selectitem').val();
        var valueSelectedYear = $('#selectyear').val();
        var valueSelectedRegion = $('#selectregion').val();
        var valueProvince = [];
        var valueCity = [];
        var valueRegion = [];
        for (let i = 0; i < valueSelectedRegion.length; i++) {
            if (valueSelectedRegion[i].indexOf("Provinsi") != -1) {
                valueProvince.push(valueSelectedRegion[i]);
            }else if(valueSelectedRegion[i].indexOf("Kota") != -1) {
                valueCity.push(valueSelectedRegion[i]);
            }else if(valueSelectedRegion[i].indexOf("Kabupaten") != -1) {
                valueRegion.push(valueSelectedRegion[i]);
            }
            
        }

        // data = "provinsi="+valueProvince+"&kabupaten="+valueRegion+"&kota="+valueCity+"&item="+valueSelectedItem+"&tahun="+valueSelectedYear;
        data = "daerah="+valueSelectedRegion+"&item="+valueSelectedItem+"&tahun="+valueSelectedYear;

        jQuery.ajax({
            type: "POST", // HTTP method POST or GET
            url: base_url+controller+"/apbd_tabel", //Where to make Ajax calls
            dataType:"text", // Data type, HTML, json etc.
            data:data, //Form variables
            success:function(response){
                var data = JSON.parse(response);
                console.log(data);
                if (data.html != '') {
                    $('#judul-tabel-apbd').html('');
                    $('#isi-tabel-apbd').html('');
                    var html_head = '';
                    var html_body = '';

                    html_head += '<tr>';
                    html_head += '<th width="50px" rowspan="3">';
                    html_head += '<center>Kode</center>';
                    html_head += '</th>';
                    html_head += '<th width="350px" rowspan="3">';
                    html_head += '<center>Uraian</center>';
                    html_head += '</th>';
                    
                    for (let g = 0; g < data.data_all_all_nilai_apbd_2[0].data.length; g++) {
                        html_head += '<th colspan="'+data.data_all_all_nilai_apbd_2[0].data[g].value.length+'">';
                        html_head += '<center>'+data.data_all_all_nilai_apbd_2[0].data[g].wilayah+'</center>';
                        html_head += '</th>';
                    }

                    html_head += '</tr>';

                    for (let g = 0; g < data.data_all_all_nilai_apbd_2[0].data.length; g++) {
                        html_head += '<th colspan="'+data.data_all_all_nilai_apbd_2[0].data[g].value.length+'">';
                        html_head += '<center>'+data.data_all_all_nilai_apbd_2[0].data[g].nama_daerah+'</center>';
                        html_head += '</th>';
                    }

                    html_head += '</tr>';

                    for (let g = 0; g < data.data_all_all_nilai_apbd_2[0].data.length; g++) {
                        for (let h = 0; h < data.data_all_all_nilai_apbd_2[0].data[g].value.length; h++) {
                            html_head += '<th>';
                            html_head += '<center>'+data.data_all_all_nilai_apbd_2[0].data[g].value[h].tahun+'</center>';
                            html_head += '</th>';
                            
                        }
                    }

                    html_head += '</tr>';

                    $('#judul-tabel-apbd').append(html_head);

                    //item
                    for (let i = 0; i < data.data_all_all_nilai_apbd_2.length; i++) {
                        html_body += '<tr>';
                        html_body += '<td style="background-color: #74737a; color: white;">'+data.data_all_all_nilai_apbd_2[i].kode+'</td>';
                        html_body += '<td style="background-color: #74737a; color: white;">'+data.data_all_all_nilai_apbd_2[i].nama+'</td>';
                        //daerah
                        for (let j = 0; j < data.data_all_all_nilai_apbd_2[i].data.length; j++) {
                            //value
                            var shading = [];
                            for (let k = 0; k < data.data_all_all_nilai_apbd_2[i].data[j].value.length; k++) {
                                var num_shading = 0;
                                for (let l = 0; l < data.data_all_all_nilai_apbd_2[i].data[j].value.length; l++) {
                                    var value_apbd_kiri = (data.data_all_all_nilai_apbd_2[i].data[j].value[k].jumlah != null ? data.data_all_all_nilai_apbd_2[i].data[j].value[k].jumlah : '0');
                                    var value_apbd_kanan = (data.data_all_all_nilai_apbd_2[i].data[j].value[l].jumlah != null ? data.data_all_all_nilai_apbd_2[i].data[j].value[l].jumlah : '0');
                                    // console.log(typeof(value_apbd_kiri));
                                    if (value_apbd_kiri > value_apbd_kanan) {
                                        num_shading += 1;
                                    }
                                }
                                shading.push(num_shading);   
                            }
                            
                            for (let m = 0; m < data.data_all_all_nilai_apbd_2[i].data[j].value.length; m++) {
                                if (data.data_all_all_nilai_apbd_2[i].data[j].value[m].jumlah != null) {
                                    var number = parseFloat(data.data_all_all_nilai_apbd_2[i].data[j].value[m].jumlah);
                                    var formattedNumber = number.toLocaleString();
                                    var bg_color = (shading[m] / (data.data_all_all_nilai_apbd_2[i].data[j].value.length -1));
                                    if (j%2 != 0){
                                        var rgba = 'rgba(204,204,204,'+bg_color+')';
                                    }else{
                                        var rgba = 'rgba(131,197,190,'+bg_color+')';
                                    }
                                    html_body += '<td style="text-align: right; background-color: '+rgba+'"><center>'+formattedNumber+'</center></td>';
                                }else{
                                    html_body += '<td style="text-align: right;"><center>-</center></td>';
                                } 
                            }
                        }
                        html_body += '</tr>';
                    }

                    $('#isi-tabel-apbd').append(html_body);
                    $('.tabel-apbd').show();
                    $(".button-export-tabel-apbd").show(); 
                    $(".apbd-initial").hide(); 
                    loading.hide();
                }else{
                    loading.hide();
                }
            },
            error:function (xhr, ajaxOptions, thrownError){
                loading.hide(); 
                alert(thrownError);
            }
        });

    }else{
        loading.hide(); 
    }

}tabel_apbd();

$(document).on('click', '.button-excel-tabel-apbd', function(){
    
    var valueSelectedItem = $('#selectitem').val();
    var valueSelectedYear = $('#selectyear').val();
    var valueSelectedRegion = $('#selectregion').val();
    var valueProvince = [];
    var valueCity = [];
    var valueRegion = [];
    for (let i = 0; i < valueSelectedRegion.length; i++) {
        if (valueSelectedRegion[i].indexOf("Provinsi") != -1) {
            valueProvince.push(valueSelectedRegion[i]);
        }else if(valueSelectedRegion[i].indexOf("Kota") != -1) {
            valueCity.push(valueSelectedRegion[i]);
        }else if(valueSelectedRegion[i].indexOf("Kabupaten") != -1) {
            valueRegion.push(valueSelectedRegion[i]);
        }
        
    }

    // data = "provinsi="+valueProvince+"&kabupaten="+valueRegion+"&kota="+valueCity+"&item="+valueSelectedItem+"&tahun="+valueSelectedYear;
    data = "daerah="+valueSelectedRegion+"&item="+valueSelectedItem+"&tahun="+valueSelectedYear;

    window.open(base_url+controller+"/export_apbd_tabel?"+data); 
});

var scrollTop = 0;
$(document).ready(function() {
    $(window).on('scroll', function(){
        scrollTop = $(window).scrollTop();
        // console.log(scrollTop);
        if (scrollTop >= '35') {
            $(".button-export-tabel-apbd").css("position", "fixed");
            $(".button-export-tabel-apbd").css("margin-top", "-25px");
        }else{
            // $(".button-export-tabel-apbd").css("position", "inherit");
            $(".button-export-tabel-apbd").css("position", "fixed");
            $(".button-export-tabel-apbd").css("margin-top", "0px");

        }
    });

    //use scrollTop here...
});


var slider = document.querySelector('#tabel-apbd');
var mouseDown = false;
var startX, scrollLeft;

var startDragging = function (e) {
  mouseDown = true;
  startX = e.pageX - slider.offsetLeft;
  scrollLeft = slider.scrollLeft;
};
var stopDragging = function (event) {
  mouseDown = false;
};

slider.addEventListener('mousemove', (e) => {
  e.preventDefault();
  if(!mouseDown) { return; }
  var x = e.pageX - slider.offsetLeft;
  var scroll = x - startX;
  slider.scrollLeft = scrollLeft - scroll;
});

// Add the event listeners
slider.addEventListener('mousedown', startDragging, false);
slider.addEventListener('mouseup', stopDragging, false);
slider.addEventListener('mouseleave', stopDragging, false);