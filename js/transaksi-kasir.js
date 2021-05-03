$(document).ready(function () {
  $("#barcode").keyup(function () {
    let barcode = $(this).val();
    if (barcode != "") {
      $.ajax({
        url: "transaksi-kasir-server.php",
        method: "post",
        data: { search: barcode },
        success: function (data) {
          $("script").html(data);
        },
      });
    } else {
    }
  });
});
