"use strict";

$(document).ready(function () {
  //Laman Pertama
  $("#content").load("dashboard.php ");

  //isi halaman
  $("a").click(function () {
    let page = $(this).attr("href");
    $("#content").load(page + ".php");
    return false;
  });
});
