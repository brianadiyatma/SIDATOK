$(document).ready(function () {
  //Laman Pertama
  $("#content").load("dashboard.php ");

  //handle menu clicks
  $("#link").click(function () {
    let page = $(this).attr('href');
    alert(page)
  });
});
