$(document).ready(function () {
  $("#form-import").submit(function (e) {
    console.log("oke");
    $.ajax({
      type: "POST",
      url: "insert.php",
      data: $("#form-import").serialize(),
      success: function () {
        $(".form").val("");
      },
    });
    e.preventDefault();
  });
});
