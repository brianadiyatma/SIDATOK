function load_data(search) {
  $.ajax({
    url: "insert.php",
    method: "POST",
    dataType: "json",
    data: { search: search, aksi: "laporan" },
    success: function (data) {
      $("#table-pem").html(data.trans);
      $("#table-peng").html(data.peng);
      $("#tanggal-laporan").val("");
    },
  });
}
load_data();
$(".btn").on("click", function () {
  let search = $("#tanggal-laporan").val();
  if (search != "") {
    load_data(search);
  } else {
    load_data();
  }
});
