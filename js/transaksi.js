$(document).ready(function () {
  var max = null;
  loadData("", 1);
  function loadData(search, page) {
    $.ajax({
      url: "transaksi.php",
      method: "POST",
      dataType: "json",
      data: { search: search, page: page },
      success: function (response) {
        console.log(0);
        $("#table").html(response.output);
        $(".pagination").html(response.halaman);
        max = response.max;
      },
    });
  }
  $("#search").keyup(function (e) {
    let txt = $(this).val();
    if (txt != "") {
      loadData(txt);
    } else {
      loadData();
    }
  });
  $(document).on("click", ".next", function () {
    let page = $(this).attr("id");
    let txt = $("#search").val();
    page++;
    if (page <= max) {
      loadData(txt, page);
    }
  });
  $(document).on("click", ".previous", function () {
    let page = $(this).attr("id");
    let txt = $("#search").val();
    page--;
    if (page != 0) {
      loadData(txt, page);
    }
  });
});
