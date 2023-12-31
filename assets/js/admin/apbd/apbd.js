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

                    var kode_wilayah = '';
                    
                    for (let j = 0; j < data.data_all_all_nilai_apbd.length; j++) {

                        if ((data.list_selected_item[0].kode == data.data_all_all_nilai_apbd[j].kode_item) && (kode_wilayah != data.data_all_all_nilai_apbd[j].wilayah)) {

                            kode_wilayah = data.data_all_all_nilai_apbd[j].wilayah;

                            html_head += '<th width="150px" colspan="'+data.selected_year.length+'">';
                            html_head += '<center>'+data.data_all_all_nilai_apbd[j].wilayah+'</center>';
                            html_head += '</th>';

                        }
                    }
                    html_head += '</tr>';
                    html_head += '<tr>';

                    var nama_daerah = '';

                    for (let j = 0; j < data.data_all_all_nilai_apbd.length; j++) {

                        if ((data.list_selected_item[0].kode == data.data_all_all_nilai_apbd[j].kode_item) && (nama_daerah != data.data_all_all_nilai_apbd[j].nama_daerah)) {

                            nama_daerah = data.data_all_all_nilai_apbd[j].nama_daerah;
                            
                            html_head += '<th colspan="'+data.selected_year.length+'">';
                            html_head += '<center>'+data.data_all_all_nilai_apbd[j].nama_daerah+'</center>';
                            html_head += '</th>';
                        
                        }
                    }
                    html_head += '</tr>';
                    html_head += '<tr>';

                    var nama_daerah_2 = '';

                    for (let j = 0; j < data.data_all_all_nilai_apbd.length; j++) {

                        if ((data.list_selected_item[0].kode == data.data_all_all_nilai_apbd[j].kode_item) && (nama_daerah_2 != data.data_all_all_nilai_apbd[j].nama_daerah)) {

                            nama_daerah_2 = data.data_all_all_nilai_apbd[j].nama_daerah;
                            
                            for (let k = 0; k < data.selected_year.length; k++) {
                                html_head += '<th>';
                                html_head += '<center>'+data.selected_year[k]+'</center>';
                                html_head += '</th>';
                                
                            }
                            
                        }
                    }
                    html_head += '</tr>';

                    $('#judul-tabel-apbd').append(html_head);

                    var num_tabel = 1;
                    for (let i = 0; i < data.list_selected_item.length; i++) {
                        html_body += '<tr>';
                        html_body += '<td style="background-color: #74737a; color: white;">'+data.list_selected_item[i].kode+'</td>';
                        html_body += '<td style="background-color: #74737a; color: white;">'+data.list_selected_item[i].nama+'</td>';
                        for (let j = 0; j < data.data_all_all_nilai_apbd.length; j++) {
                            if(data.data_all_all_nilai_apbd[j].kode_item == data.list_selected_item[i].kode) {
                                if (data.data_all_all_nilai_apbd[j].jumlah != null) {
                                    var number = parseFloat(data.data_all_all_nilai_apbd[j].jumlah);
                                    var formattedNumber = number.toLocaleString();
                                    html_body += '<td style="text-align: right;" class="num-'+num_tabel+'"><center>'+formattedNumber+'</center></td>';
                                    num_tabel++;
                                }else{
                                    html_body += '<td style="text-align: right;" class="num-'+num_tabel+'"><center>-</center></td>';
                                    num_tabel++;
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