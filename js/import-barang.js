///AJAX LAMAN IMPORT MANUAL
$(document).ready(function () {
  $("#tambah-item").click(function () {
    var data = $("#form-import").serialize();
    $.ajax({
      type: "POST",
      url: "sidebar.php",
      data: data,
      cache: false,
    });
  });
});
