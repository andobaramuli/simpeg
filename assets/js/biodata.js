$(document).ready(function() {
    $("#unitkerja").on('change', function(e){
      e.preventDefault();

      $.ajax({
        url: siteurl + 'biodata/getsuk',
        dataType: "json",
        type: "POST",
        data: { 'ukid' : $(this).val() },
        success : function(r) {
          var html = '<option value=""></option>';

          for(var i=0; i < r.length; i++){
            html = html + '<option value="'+r[i].id+'">'+r[i].subunitkerja+'</option>';
          }

          $('#subunitkerja').html(html);
        }
      });
    });

    $("#subunitkerja").on('change', function(e){
      e.preventDefault();

      $.ajax({
        url: siteurl + 'biodata/getssuk',
        dataType: "json",
        type: "POST",
        data: { 'sukid' : $(this).val() },
        success : function(r) {
          var html = '<option value=""></option>';

          for(var i=0; i < r.length; i++){
            html = html + '<option value="'+r[i].id+'">'+r[i].subsubunitkerja+'</option>';
          }

          $('#subsubunitkerja').html(html);
        }
      });
    });
});
