$(document).ready(function () {
  loadData();
  function loadData(search) {
    $.ajax({
      url: "transaksi-kasir-server.php",
      type: "POST",
      cache: false,
      dataType: "json",
      data: { search: search },
      success: function (data) {
        $(".window-kasir2").html(data.res);
        let grosir = data.grosir;
        let umum = data.umum;
        console.log(grosir);
        console.log(umum);
      },
    });
  }
  $(document).on("change", "#barcode", function (e) {
    let barcode = $(this).val();
    if (barcode != "") {
      loadData(barcode);
    } else {
      loadData();
    }
  });
});
document.querySelector(".tambah").addEventListener("click", function () {
  console.log("hello world");
});
