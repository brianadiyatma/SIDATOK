function load_data() {
  $.ajax({
    url: "insert.php",
    method: "post",
    data: { aksi: "profile" },
    dataType: "json",
    success: function (data) {
      let biodata = data.output;
      $(".foto").html(data.gambar);
      $("#nama").val(biodata.nama);
      $("#username").val(biodata.username);
      $("#role").val(biodata.status);
    },
  });
}
load_data();
$(document).on("submit", "#form-import", function (e) {
  $.ajax({
    type: "POST",
    url: "insert.php",
    data: new FormData(this),
    cache: false,
    contentType: false,
    processData: false,
    success: function (response) {
      load_data();
      console.log("data berhasil di edit :))))");
    },
  });
  e.preventDefault();
});
