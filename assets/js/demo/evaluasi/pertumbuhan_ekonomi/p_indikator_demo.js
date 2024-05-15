    var main = function(){
        controller = "index.php/P_indikator";
        var datatable = function(){
            mapboxgl.accessToken = 'pk.eyJ1IjoiZnJhbnNhbGFtb25kYSIsImEiOiJja2NlZ2xtMjkwMzgxMzJubm9paGJ5dmMyIn0.QJc2VJF6md9CaTilCmgYag';
            $(".nosatu").click(function(e){  
                $('#pe_pro_p').show('');
                $('#pe_pro_d').hide('');
                //$('#pe_pro_g').hide('');
            });
            
            $(".nodua").click(function(e){  
                $('#pe_pro_p').hide('');
                $('#pe_pro_d').show('');
                //$('#pe_pro_g').show('');
            });
            
            $("a.link-back").click(function(e){
                var link_target     = $(this).data("target");
                var content_wrapper = $("#content_wrapper");
                var tag_js_path     = $("script#js_path");
                var tag_js_init     = $("script#js_initial");
                var data            = csrf_name+"="+$("#csrf").val();
                var this_tag        = $(this);
                $("a.bold").removeClass("bold");
                $(this).addClass("bold");
                var tag_bfr_id = $("a.asolole").attr("id");
                $(".se-pre-con").show();    
                loading.show();
                jQuery.ajax({
                    type: "POST", // HTTP method POST or GET
                    url: link_target, //Where to make Ajax calls
                    dataType:"text", // Data type, HTML, json etc.
                    data:data, //Form variables
                    success:function(response){
                        var obj = null;
                        try{
                            obj = $.parseJSON(response);  
                        }catch(e)
                        {}
                        if(obj)//if json data
                        {
                            //success msg
                            if(obj.status === 1){
                                //update csrf token value
                                $("input#csrf").val(obj.csrf_hash);
                                //load string into content
                                content_wrapper.html(obj.str);
                                //change general title
                                $(".general_title > span").html(obj.general_title);

                                //re-insert new script DOM - s
                                $(".js_path").remove();
                                $(".js_initial").remove();

                                var str_script = '<script type="text/javascript" src="'+obj.js_path+'" class="js_path">';
                                str_script+="</script>";
                                $("body").append(str_script);

                                str_script = '<script type="text/javascript" class="js_initial">'+obj.js_initial;
                                str_script+="</script>";
                                $("body").append(str_script);
                                //re-insert new script DOM - e

                                $(".se-pre-con").fadeOut("slow");
                            }

                            //error msg
                            else if(obj.status === 0){
                                sweetAlert("Error", obj.msg, "error");
                                //update csrf token value
                                $("input#csrf").val(obj.csrf_hash);
                                $(".se-pre-con").fadeOut("slow");
                            }
                            else if(obj.status === 2){
                                sweetAlert("Error", obj.msg, "warning");
                                //update csrf token value
                                $("input#csrf").val(obj.csrf_hash);
                                //window.location.href = base_url+default_controller; //redirect ke login page
                                window.setTimeout(function(){
                                  //  window.location.href = ajax_url; //redirect ke login page
                                    //ajax_url
                                    window.location.href = base_url+default_controller; //redirect ke login page
                                }, 2000);
                            }

                            loading.hide();
                        }
                        else
                        {
                            sweetAlert("Error", response, "error");loading.hide();
                        }
                    },
                    error:function (xhr, ajaxOptions, thrownError){
                        loading.hide(); 
                        sweetAlert("Error", thrownError, "warning");
                        window.setTimeout(function(){
            //                window.location.href = base_url+"home";
                        }, 2000);

                    }
                });

            });
            
            var table = $("#tblPro");
            var datatable = table.DataTable({
                 "processing": true,
                 "serverSide": true,
                 "ajax":{
                     url :base_url+controller+"/pro_datatable", // json datasource
                     type: "post",  // method  , by default get
                     error: function(){  // error handling
                             $(".employee-grid-error").html("");
                             $("#employee-grid").append('<tbody class="employee-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
                             $("#employee-grid_processing").css("display","none");
                     },
                     data: function(d){},
                     "dataSrc": function ( json ) { return json.data;}
                 },
                 "columnDefs": [                  
                     { "targets": 3, "orderable": false },
                     { "width": "8px", "targets": 3}
                 ],
                 "lengthMenu": [[5, 20, 25, 50, -1], [5, 20, 25, 34]],
                 "initComplete": function(settings, json) {
     //                console.log(settings);
                 },
                 paging: true,

            });
            
            $(".plhpro").click(function(e){  $('#mdlPro').modal('show'); });
            
            $("#mdlPro").on('click', '#save_popup', function(e){
                var pro_id="";
                var idpro = $('.checkbox:checked').data("id");  
                $("#inp_proid").val(idpro);
                var   pro_list = "";
                console.log(pro_list=$('.checkbox:checked').map(function() {
                    return this.value;
                }).get().join('|'));
                $("#inp_pro").val(pro_list);
                $("p#inp_pro_text").html(pro_list);
//                $("#nav-map").show('');
                $("#map").val("");
                $('#pe_pro').show('');
                $('#pe_kab').show('');
                $('#pe_pro_p').show('');
                $('#pe_rad').show('');
                $('#pe_pro_d').hide('');
                //$('#pe_pro_g').hide('');
                peta();
                satu();
            });
            
            function peta(){
                url = controller+"/peta";
                var provinsi = $("#inp_pro");
//                var kabupaten = $("#inp_kab");
//                data1 = "provinsi="+$("#inp_pro").val()+"&kabupaten="+$("#inp_kab").val();
                data1 = "provinsi="+$("#inp_pro").val();
                jQuery.ajax({
                    type: "POST", // HTTP method POST or GET
                    url: base_url+url, //Where to make Ajax calls
                    dataType:"text", // Data type, HTML, json etc.
                    data:data1, //Form variables
                    success:function(response){
                        var obj = jQuery.parseJSON(response);
                        var zoomThreshold = 4;
                        var map = new mapboxgl.Map({
                            container: 'map',
                            //style: 'mapbox://styles/mapbox/streets-v11',
                            style: 'mapbox://styles/mapbox/light-v10',
                            center: obj.js_tengah,
                            //center: [119.206479, -0.320152],
                            zoom: obj.js_zoom
                        });
                        
                        map.addControl(new mapboxgl.NavigationControl());
                            map.on('load', function () {
                                map.addSource('maine', {
                                    'type': 'geojson',
                                    //'data': obj.js_geo
                                    'data': obj.peta
        //                                    'data': 'http://localhost/peppd/assets/js/geojson/indonesia-1100.geojson'
                                });
                                map.addLayer({
                                    'id': 'states-layer',
                                    'type': 'fill',
                                    'source': 'maine',
                                    'paint': {
                                            'fill-color': [
                                               'interpolate',
                                               ['linear'],
                                               ['get', 'population'],
                                                -2.29,
                                                '#ba0618',
                                                    -0.30,
                                                    '#fafa07',
                                                    0.20,
                                                    '#0af545'
                                            ],
                                            'fill-opacity': [
                                                'case',
                                                ['boolean', ['feature-state', 'hover'], false],1,2
                                            ]
                                    }
                                    });
                                // Add a black outline around the polygon.
                                map.addLayer({
                                    'id': 'outline',
                                    'type': 'line',
                                    'source': 'maine',
                                    'layout': {},
                                    'paint': {
                                        'line-color': '#000',
                                        'line-width': 1.3
                                    }
                                });    

                                map.on('click', 'states-layer', function (e) {
                                    new mapboxgl.Popup()
                                    .setLngLat(e.lngLat)
                                    .setHTML(e.features[0].properties.description)
                                    .addTo(map);
                                });

//                                var stateLegendEl = document.getElementById('state-legend');
//                                var countyLegendEl = document.getElementById('county-legend');
       
                            });

                        $('div#div_header h3[name="judul').html(obj.judul);    
                        $('div#form_nsl a[name="n_nsl"]').html(obj.nasional);
                        $('div#form_nsl a[name="n_thn"]').html(obj.tahun_a);
                        
                    },
                    error:function (xhr, ajaxOptions, thrownError){
                         loading.hide(); 
                         alert(thrownError);
                     }
                });
            }peta();
            
            function satu(){
                url = controller+"/pertumbuhan_ekomomi";
                var provinsi = $("#inp_pro");
                var kabupaten = $("#inp_kab");
                data = "provinsi="+$("#inp_pro").val()+"&kabupaten="+$("#inp_kab").val();
                jQuery.ajax({
                    type: "POST", // HTTP method POST or GET
                    url: base_url+url, //Where to make Ajax calls
                    dataType:"text", // Data type, HTML, json etc.
                    data:data, //Form variables
                    success:function(response){
                        var obj = jQuery.parseJSON(response);
                        var mm = Highcharts.chart('chart-container-1', {
                            chart: { type: 'line' },
                            title: { "text":obj.text, },
                            subtitle: { "text": obj.sumber, },
                            xAxis: { "categories":obj.categories, },
                            yAxis: { title: { "text": obj.text2, } },
                            plotOptions: {
                                line: {
                                    dataLabels: {
                                        enabled: true
                                    },
                                    enableMouseTracking: false
                                }
                            },
                            series:  obj.series
                        });
                        var pro = Highcharts.chart('chart-container-1-pro', {
                            chart: { type: 'column'},
                            title: { "text":obj.text_pro,},
                            xAxis: { "categories":obj.categories_pro,},
                            credits: {enabled: false },
                            yAxis: { title: { "text":obj.text_pro, }},
                            series:  obj.series_pro
                        });
                        var rad = Highcharts.chart('chart-container-rad', {
                            //chart: {polar: true},
                            //title: { "text":obj.text_radar,},
                            chart: { polar: true,type: 'line'},
                            accessibility: {
                                description: 'A spiderweb chart compares the allocated budget against actual spending within an organization. The spider chart has six spokes. Each spoke represents one of the 6 departments within the organization: sales, marketing, development, customer support, information technology and administration. The chart is interactive, and each data point is displayed upon hovering. The chart clearly shows that 4 of the 6 departments have overspent their budget with Marketing responsible for the greatest overspend of $20,000. The allocated budget and actual spending data points for each department are as follows: Sales. Budget equals $43,000; spending equals $50,000. Marketing. Budget equals $19,000; spending equals $39,000. Development. Budget equals $60,000; spending equals $42,000. Customer support. Budget equals $35,000; spending equals $31,000. Information technology. Budget equals $17,000; spending equals $26,000. Administration. Budget equals $10,000; spending equals $14,000.'
                            },
                            title: {
                                "text":obj.text_radar,
                                x: -80
                            },

                            pane: {
                                size: '80%'
                            },

                            xAxis: {
                                "categories":obj.categories_pro,
                                tickmarkPlacement: 'on',
                                lineWidth: 0
                            },

                            yAxis: {
                                gridLineInterpolation: 'polygon',
                                lineWidth: 0,
                                min: 0
                            },

                            tooltip: {
                                shared: true,
                                pointFormat: '<span style="color:{series.color}">{series.name}: <b>{point.y:,.2f}%</b><br/>'
                            },

                            legend: {
                                align: 'right',
                                verticalAlign: 'middle',
                                layout: 'vertical'
                            },

                            series:  obj.data_radar,

                            responsive: {
                                rules: [{
                                    condition: {
                                        maxWidth: 500
                                    },
                                    chartOptions: {
                                        legend: {
                                            align: 'center',
                                            verticalAlign: 'bottom',
                                            layout: 'horizontal'
                                        },
                                        pane: {
                                            size: '70%'
                                        }
                                    }
                                }]
                            }
                        });
                        var kab = Highcharts.chart('chart-container-1-kab', {
                            chart: { type: 'column' },
                            title: { "text":obj.text_kab, },
                            //subtitle: { "text":obj.sumber, },
                            xAxis: { "categories":obj.categories_kab,
                                crosshair: true

                               },
                            yAxis: {
                                //min: 0,
                                title: { "text":obj.text_kab, }
                            },
                            tooltip: {
                                headerFormat:'<span style="font-size:10px">{point.key}</span><table>',
                                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                                             '<td style="padding:0"><b>{"Pertumbuhan Ekonomi":.2f}%</b></td></tr>',
                                footerFormat: '</table>',
                                shared: true,
                                useHTML: true
                            },
                            plotOptions: {
                                column: {
                                    pointPadding: 0.2,
                                    borderWidth: 0
                                }
                            },
                            series:  obj.series_kab
                        });
                       
                       $('form#form_pe p[name="ket"]').html(obj.ket);
                       $('form#form_pe p[name="maxpep"]').html(obj.max_pe_p);
                       $('form#form_pe p[name="perkpdrkp"]').html(obj.pe_rkpd_rkp);
                       $('form#form_pe p[name="maxpep"]').html(obj.max_pe_p);
                       $('form#form_pe p[name="per_pro"]').html(obj.pe_perbandingan_pro);
                       $('form#form_pe_perk p[name="per_kab"]').html(obj.pe_perbandingan_kab);
                       
                    },
                    error:function (xhr, ajaxOptions, thrownError){
                         loading.hide(); 
                         alert(thrownError);
                     }
                });
            }satu();
            
        };

   
    return{
        init:function(){datatable();},
       // detail:function(){chart();},
    };
    }();