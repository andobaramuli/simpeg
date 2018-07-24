$(document).ready(function() {
  $("#CutiStatus").on("click", ".batal, .setuju, .tolak", function (e) {
    e.preventDefault();
    var kode = $(this).attr("kode");
    var value = $(this).attr("value");
    var status = $(this).attr("status");

    $.ajax({
      url: siteurl + '/cuti/updatestatus',
      dataType: "json",
      type: "POST",
      data: {
        'kodecuti' : kode,
        'value'  : value,
        'status' : status
      },
      success : function(r) {
        var s;
        if(status == 'batal'){
          s = 'Dibatalkan';
        }else if(status == 'setuju'){
          s = 'Disetujui';
        }else if(status == 'tolak'){
          s = 'Ditolak';
        }

        $('#status'+kode).html(s);
        $('#aksi'+kode).html('');
      }
    });
  })
});
