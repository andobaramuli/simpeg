$(document).ready(function() {
    var ukid;
    var sukid;
    var ssukid;

    $("#unitkerja").on('change', function(e){
      e.preventDefault();

      ukid = $(this).val();

      $.ajax({
        url: siteurl + 'nominatif/getsuk',
        dataType: "json",
        type: "POST",
        data: { 'ukid' : ukid },
        success : function(r) {
          var html = '<option value="0">-- pilih subunit kerja --</option>';

          for(var i=0; i < r.length; i++){
            html = html + '<option value="'+r[i].kode+'">'+r[i].subunitkerja+'</option>';
          }

          $('#subunitkerja').html(html);
        }
      });

      $('#bootstrap-data-table').DataTable({
          "bDestroy" : true,
          "ajax": {
              "url": siteurl + 'nominatif/getnominatif',
              "data": { "uk": ukid, "suk": 0, "ssuk": 0 },
              "type": "POST",
          },
          "language": {
              "emptyTable": "No data available"
          },
          "columns" : [
              { data: "i" },
              { data: "namalengkap" },
              { data: "jabatan" },
              { data: "kode",
                render : function (data, type, row) {
                  return '\
                  <div class="dropdown table-action text-center">\
                      <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog"></i>\
                      </a>\
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">\
                          <a class="dropdown-item" href="'+siteurl+'biodata/detailbiodata/'+data+'">Detail</a>\
                      </div>\
                  </div>';
                }
              },
          ]
      });

    });

    $("#subunitkerja").on('change', function(e){
      e.preventDefault();

      sukid = $(this).val();

      $.ajax({
        url: siteurl + 'nominatif/getssuk',
        dataType: "json",
        type: "POST",
        data: { 'sukid' : sukid },
        success : function(r) {
          var html = '<option value="0">-- pilih sub subunit kerja --</option>';

          for(var i=0; i < r.length; i++){
            html = html + '<option value="'+r[i].kode+'">'+r[i].subsubunitkerja+'</option>';
          }

          $('#subsubunitkerja').html(html);
        }
      });

      $('#bootstrap-data-table').DataTable({
          "bDestroy" : true,
          "ajax": {
              "url": siteurl + 'nominatif/getnominatif',
              "data": { "uk": ukid, "suk": sukid, "ssuk": 0 },
              "type": "POST",
          },
          "language": {
              "emptyTable": "No data available"
          },
          "columns" : [
              { data: "i" },
              { data: "namalengkap" },
              { data: "jabatan" },
              { data: "kode",
                render : function (data, type, row) {
                  return '\
                  <div class="dropdown table-action text-center">\
                      <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog"></i>\
                      </a>\
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">\
                          <a class="dropdown-item" href="'+siteurl+'biodata/detailbiodata/'+data+'">Detail</a>\
                      </div>\
                  </div>';
                }
              },
          ]
      });

    });

    $("#subsubunitkerja").on('change', function(e){
      e.preventDefault();

      ssukid = $(this).val();

      $('#bootstrap-data-table').DataTable({
          "bDestroy" : true,
          "ajax": {
              "url": siteurl + 'nominatif/getnominatif',
              "data": { "uk": ukid, "suk": sukid, "ssuk": ssukid },
              "type": "POST",
          },
          "language": {
              "emptyTable": "No data available"
          },
          "columns" : [
              { data: "i" },
              { data: "namalengkap" },
              { data: "jabatan" },
              { data: "kode",
                render : function (data, type, row) {
                  return '\
                  <div class="dropdown table-action text-center">\
                      <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog"></i>\
                      </a>\
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">\
                          <a class="dropdown-item" href="'+siteurl+'biodata/detailbiodata/'+data+'">Detail</a>\
                      </div>\
                  </div>';
                }
              },
          ]
      });

    });
});
