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
        let data_barang = data.res;
        console.log(data_barang['barcode']);
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
  $(document).on("click", ".tambah", function () {
    console.log("hello world");
  });
});
