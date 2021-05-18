"use strict";
$(document).ready(function ($) {
  var page_url = "http://localhost/";

  $.getJSON(
    page_url + "loader.php",
    { call_type: "dashboard" },
    function (data, textStatus, xhr) {
      console.log(data);

      $(document).attr("title", data.title);
      $(document)
        .find("meta[name=description]")
        .attr("content", data.description);

      $(document).find("#content").html(data.data);
      window.history.pushState("", "", page_url + data.url);
    }
  );
  $(document).on("click", "#link", function (event) {
    event.preventDefault();

    var call_type = $(this).attr("call_type");

    $.getJSON(
      page_url + "loader.php",
      { call_type: call_type },
      function (data, textStatus, xhr) {
        console.log(data);

        $(document).attr("title", data.title);
        $(document)
          .find("meta[name=description]")
          .attr("content", data.description);

        $(document).find("#content").html(data.data);

        window.history.pushState("", "", page_url + data.url);
      }
    );
  });
});
