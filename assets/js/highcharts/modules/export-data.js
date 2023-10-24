/*
 Highcharts JS v6.0.5 (2018-01-31)
 Exporting module

 (c) 2010-2017 Torstein Honsi

 License: www.highcharts.com/license
*/
(function(v){"object"===typeof module&&module.exports?module.exports=v:v(Highcharts)})(
        function(v){(
            function(a){
                var v=a.defined,w=a.each,x=a.pick,r=a.win,y=r.document,l=a.seriesTypes,F=void 0!==y.createElement("a").download;a.setOptions(
                        {exporting:{
                                csv:{columnHeaderFormatter:null,dateFormat:"%Y-%m-%d %H:%M:%S",decimalPoint:null,itemDelimiter:null,lineDelimiter:"\n"},
                        showTable:!1,useMultiLevelHeaders:!0,useRowspanHeaders:!0
                    },
                    lang:{
                        //downloadCSV:"Download CSV",
                        //downloadXLS:"Download XLS",
                        //viewData:"View data table"
                        downloadXLS:"Download Excel"
                    }
                });
a.addEvent(a.Chart.prototype,"render",function(){this.options&&this.options.exporting&&this.options.exporting.showTable&&this.viewData()});a.Chart.prototype.setUpKeyToAxis=function(){l.arearange&&(l.arearange.prototype.keyToAxis={low:"y",high:"y"})};a.Chart.prototype.getDataRows=function(d){var z=this.time,e=this.options.exporting&&this.options.exporting.csv||{},g,h=this.xAxis,f={},m=[],n,D=[],k=[],A,t,c,E=function(b,c,f){if(e.columnHeaderFormatter){var q=e.columnHeaderFormatter(b,c,f);if(!1!==q)return q}return b?
b instanceof a.Axis?b.options.title&&b.options.title.text||(b.isDatetimeAxis?"DateTime":"Category"):d?{columnTitle:1<f?c:b.name,topLevelColumnTitle:b.name}:b.name+(1<f?" ("+c+")":""):"Category"},B=[];t=0;this.setUpKeyToAxis();w(this.series,function(b){var c=b.options.keys||b.pointArrayMap||["y"],q=c.length,g=!b.requireSorting&&{},n={},m={},u=a.inArray(b.xAxis,h),p;w(c,function(c){var e=(b.keyToAxis&&b.keyToAxis[c]||c)+"Axis";n[c]=b[e]&&b[e].categories||[];m[c]=b[e]&&b[e].isDatetimeAxis});if(!1!==
b.options.includeInCSVExport&&!1!==b.visible){a.find(B,function(b){return b[0]===u})||B.push([u,t]);for(p=0;p<q;)A=E(b,c[p],c.length),k.push(A.columnTitle||A),d&&D.push(A.topLevelColumnTitle||A),p++;w(b.points,function(d,a){var h=d.x,k;g&&(g[h]&&(h+="|"+a),g[h]=!0);p=0;f[h]||(f[h]=[],f[h].xValues=[]);f[h].x=d.x;f[h].xValues[u]=d.x;b.xAxis&&"name"!==b.exportKey||(f[h].name=d.name);for(;p<q;)a=c[p],k=d[a],f[h][t+p]=x(n[a][k],m[a]?z.dateFormat(e.dateFormat,k):null,k),p++});t+=p}});for(n in f)f.hasOwnProperty(n)&&
m.push(f[n]);var q,u;n=d?[D,k]:[k];for(t=B.length;t--;)q=B[t][0],u=B[t][1],g=h[q],m.sort(function(b,c){return b.xValues[q]-c.xValues[q]}),c=E(g),n[0].splice(u,0,c),d&&n[1]&&n[1].splice(u,0,c),w(m,function(b){var c=b.name;v(c)||(g.isDatetimeAxis?(b.x instanceof Date&&(b.x=b.x.getTime()),c=z.dateFormat(e.dateFormat,b.x)):c=g.categories?x(g.names[b.x],g.categories[b.x],b.x):b.x);b.splice(u,0,c)});return n=n.concat(m)};a.Chart.prototype.getCSV=function(d){var a="",e=this.getDataRows(),g=this.options.exporting.csv,
h=x(g.decimalPoint,d?(1.1).toLocaleString()[1]:"."),f=x(g.itemDelimiter,","===h?";":","),m=g.lineDelimiter;w(e,function(d,g){for(var k,z=d.length;z--;)k=d[z],"string"===typeof k&&(k='"'+k+'"'),"number"===typeof k&&"."!==h&&(k=k.toString().replace(".",h)),d[z]=k;a+=d.join(f);g<e.length-1&&(a+=m)});return a};a.Chart.prototype.getTable=function(d){var a="\x3ctable\x3e",e=this.options,g=d?(1.1).toLocaleString()[1]:".",h=x(e.exporting.useMultiLevelHeaders,!0);d=this.getDataRows(h);var f=0,m=h?d.shift():
null,n=d.shift(),l=function(a,c,d,e){var h=e||"";c="text"+(c?" "+c:"");"number"===typeof h?(h=h.toString(),","===g&&(h=h.replace(".",g)),c="number"):e||(c="empty");return"\x3c"+a+(d?" "+d:"")+' class\x3d"'+c+'"\x3e'+h+"\x3c/"+a+"\x3e"};!1!==e.exporting.tableCaption&&(a+='\x3ccaption class\x3d"highcharts-table-caption"\x3e'+x(e.exporting.tableCaption,e.title.text?e.title.text.replace(/&/g,"\x26amp;").replace(/</g,"\x26lt;").replace(/>/g,"\x26gt;").replace(/"/g,"\x26quot;").replace(/'/g,"\x26#x27;").replace(/\//g,
"\x26#x2F;"):"Chart")+"\x3c/caption\x3e");for(var k=0,r=d.length;k<r;++k)d[k].length>f&&(f=d[k].length);a+=function(a,c,d){var g="\x3cthead\x3e",f=0;d=d||c&&c.length;var k,b,m=0;if(b=h&&a&&c){a:if(b=a.length,c.length===b){for(;b--;)if(a[b]!==c[b]){b=!1;break a}b=!0}else b=!1;b=!b}if(b){for(g+="\x3ctr\x3e";f<d;++f)b=a[f],k=a[f+1],b===k?++m:m?(g+=l("th","highcharts-table-topheading",'scope\x3d"col" colspan\x3d"'+(m+1)+'"',b),m=0):(b===c[f]?e.exporting.useRowspanHeaders?(k=2,delete c[f]):(k=1,c[f]=""):
k=1,g+=l("th","highcharts-table-topheading",'scope\x3d"col"'+(1<k?' valign\x3d"top" rowspan\x3d"'+k+'"':""),b));g+="\x3c/tr\x3e"}if(c){g+="\x3ctr\x3e";f=0;for(d=c.length;f<d;++f)void 0!==c[f]&&(g+=l("th",null,'scope\x3d"col"',c[f]));g+="\x3c/tr\x3e"}return g+"\x3c/thead\x3e"}(m,n,Math.max(f,n.length));a+="\x3ctbody\x3e";w(d,function(d){a+="\x3ctr\x3e";for(var c=0;c<f;c++)a+=l(c?"td":"th",null,c?"":'scope\x3d"row"',d[c]);a+="\x3c/tr\x3e"});return a+="\x3c/tbody\x3e\x3c/table\x3e"};a.Chart.prototype.fileDownload=
function(d,l,e){var g;g=this.options.exporting.filename?this.options.exporting.filename:this.title&&this.title.textStr?this.title.textStr.replace(/ /g,"-").toLowerCase():"chart";r.Blob&&r.navigator.msSaveOrOpenBlob?(d=new r.Blob(["\ufeff"+e],{type:"text/csv"}),r.navigator.msSaveOrOpenBlob(d,g+"."+l)):F?(e=y.createElement("a"),e.href=d,e.download=g+"."+l,this.container.appendChild(e),e.click(),e.remove()):a.error("The browser doesn't support downloading files")};a.Chart.prototype.downloadCSV=function(){var a=
this.getCSV(!0);this.fileDownload("data:text/csv,\ufeff"+encodeURIComponent(a),"csv",a,"text/csv")};a.Chart.prototype.downloadXLS=function(){var a='\x3chtml xmlns:o\x3d"urn:schemas-microsoft-com:office:office" xmlns:x\x3d"urn:schemas-microsoft-com:office:excel" xmlns\x3d"http://www.w3.org/TR/REC-html40"\x3e\x3chead\x3e\x3c!--[if gte mso 9]\x3e\x3cxml\x3e\x3cx:ExcelWorkbook\x3e\x3cx:ExcelWorksheets\x3e\x3cx:ExcelWorksheet\x3e\x3cx:Name\x3eArk1\x3c/x:Name\x3e\x3cx:WorksheetOptions\x3e\x3cx:DisplayGridlines/\x3e\x3c/x:WorksheetOptions\x3e\x3c/x:ExcelWorksheet\x3e\x3c/x:ExcelWorksheets\x3e\x3c/x:ExcelWorkbook\x3e\x3c/xml\x3e\x3c![endif]--\x3e\x3cstyle\x3etd{border:none;font-family: Calibri, sans-serif;} .number{mso-number-format:"0.00";} .text{ mso-number-format:"@";}\x3c/style\x3e\x3cmeta name\x3dProgId content\x3dExcel.Sheet\x3e\x3cmeta charset\x3dUTF-8\x3e\x3c/head\x3e\x3cbody\x3e'+
this.getTable(!0)+"\x3c/body\x3e\x3c/html\x3e";this.fileDownload("data:application/vnd.ms-excel;base64,"+r.btoa(unescape(encodeURIComponent(a))),"xls",a,"application/vnd.ms-excel")};a.Chart.prototype.viewData=function(){this.dataTableDiv||(this.dataTableDiv=y.createElement("div"),this.dataTableDiv.className="highcharts-data-table",this.renderTo.parentNode.insertBefore(this.dataTableDiv,this.renderTo.nextSibling));this.dataTableDiv.innerHTML=this.getTable()};a.Chart.prototype.editInCloud=function(){function d(h){Object.keys(h).forEach(function(f){"function"===
typeof h[f]&&delete h[f];a.isObject(h[f])&&d(h[f])})}function l(a,d){var e=y.createElement("a");e.href="https://cloud.highcharts.com/create?"+(d?"c":"q")+"\x3d"+a;e.target="_blank";y.body.appendChild(e);e.click();y.body.removeChild(e)}var e,g;e=a.merge(this.userOptions);d(e);e={name:e.title&&e.title.text||"Chart title",options:e,settings:{constructor:"Chart",dataProvider:{csv:this.getCSV()}}};g=JSON.stringify(e);g=r.btoa(encodeURIComponent(g));if(2500>g.length)return l(g,!0);a.ajax({url:"https://cloud-api.highcharts.com/openincloud",
type:"post",dataType:"json",data:e,success:function(a){a&&a.ok&&a.id&&l(a.id)}})};var C=a.getOptions().exporting;C&&(a.extend(C.menuItemDefinitions,
{
downloadCSV:{textKey:"downloadCSV",
onclick:function(){this.downloadCSV()}},
downloadXLS:{textKey:"downloadXLS",
onclick:function(){this.downloadXLS()}},
viewData:{textKey:"viewData",
onclick:function(){this.viewData()}}
}
),
//C.buttons.contextButton.menuItems.push("separator","downloadCSV","downloadXLS","viewData"));
C.buttons.contextButton.menuItems.push("downloadXLS"));
l.map&&(l.map.prototype.exportKey="name");
l.mapbubble&&(l.mapbubble.prototype.exportKey="name");
l.treemap&&(l.treemap.prototype.exportKey="name")
}
        )(v)});
