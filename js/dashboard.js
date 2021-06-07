"use strict";

$(document).ready(function () {
  var tglpemasukan,
    tglpengeluaran,
    totpemasukan,
    totpengeluaran = [];

  $.ajax({
    url: "insert.php",
    method: "POST",
    data: { aksi: "dashboard" },
    dataType: "json",
    success: function (data) {
      $(".window-dashboard4").html(data.totpen);
      $(".window-dashboard6").html(data.totpeng);
      $(".window-dashboard5").html(data.totlaba);
      $("#table-expired").html(data.expired);
      $("#table-habis").html(data.habis);

      tglpemasukan = data.tglpemasukan;
      tglpengeluaran = data.tglpengeluaran;
      totpemasukan = data.totpemasukan;
      totpengeluaran = data.totpengeluaran;
      var sumpeng = data.sumpeng;
      var sumpem = data.sumpem;
      console.log(tglpengeluaran);
      let diagramBatangPenjualan = new Chart(penjualan, {
        type: "bar",
        data: {
          labels: tglpemasukan,
          datasets: [
            {
              label: "Penjualan",
              data: totpemasukan,
              backgroundColor: ["#000272"],
            },
          ],
        },
        options: {
          plugins: {
            title: {
              display: true,
              text: "Diagram Penjualan",
              color: "white",
            },
          },
        },
      });
      let diagramBatangPengeluaran = new Chart(pengeluaran, {
        type: "bar",
        data: {
          labels: tglpengeluaran,
          datasets: [
            {
              label: "Pengeluaran",
              data: totpengeluaran,
              backgroundColor: ["#341677"],
            },
          ],
        },
        options: {
          plugins: {
            title: {
              display: true,
              text: "Diagram Pengeluaran",
              color: "white",
            },
          },
        },
      });
      let diagramPiePerbandingan = new Chart(perbandingan, {
        type: "doughnut",
        data: {
          labels: ["Pengeluaran", "Pemasukan", "sisa"],
          datasets: [
            {
              label: "Pengeluaran",
              data: [sumpeng, sumpem, sumpem - sumpeng],
              backgroundColor: ["#000272", "#341677", "#5735d3"],
            },
          ],
        },
        options: {
          plugins: {
            title: {
              display: true,
              text: "Diagram Perbandingan Bulanan",
              color: "white",
            },
          },
        },
      });
    },
  });
  let penjualan = document.getElementById("penjualan-harian").getContext("2d");
  let perbandingan = document.getElementById("perbandingan").getContext("2d");
  let pengeluaran = document
    .getElementById("pengeluaran-harian")
    .getContext("2d");

  //setingan diagram
  console.log(tglpemasukan);
});
// $(document).ready(function () {
//   let penjualan = document.getElementById("penjualan-harian").getContext("2d");
//   let perbandingan = document.getElementById("perbandingan").getContext("2d");
//   let pengeluaran = document
//     .getElementById("pengeluaran-harian")
//     .getContext("2d");

//   //setingan diagram
//   let diagramBatangPenjualan = new Chart(penjualan, {
//     type: "bar",
//     data: {
//       labels: [
//         "11-May-2022",
//         "12-May-2022",
//         "13-May-2022",
//         "14-May-2022",
//         "15-May-2022",
//         "16-May-2022",
//       ],
//       datasets: [
//         {
//           label: "Penjualan",
//           data: [1500000, 1000000, 2000000, 3000000, 1000000, 800000],
//           backgroundColor: ["#ff6464"],
//         },
//       ],
//     },
//     options: {
//       plugins: {
//         title: {
//           display: true,
//           text: "Diagram Penjualan",
//           color: "white",
//         },
//       },
//     },
//   });
//   let diagramBatangPengeluaran = new Chart(pengeluaran, {
//     type: "bar",
//     data: {
//       labels: [
//         "11-May-2022",
//         "12-May-2022",
//         "13-May-2022",
//         "14-May-2022",
//         "15-May-2022",
//         "16-May-2022",
//       ],
//       datasets: [
//         {
//           label: "Pengeluaran",
//           data: [100000, 50000, 20000, 60000, 20000, 90000],
//           backgroundColor: ["#8b4367"],
//         },
//       ],
//     },
//     options: {
//       plugins: {
//         title: {
//           display: true,
//           text: "Diagram Pengeluaran",
//           color: "white",
//         },
//       },
//     },
//   });
//   let diagramPiePerbandingan = new Chart(perbandingan, {
//     type: "doughnut",
//     data: {
//       labels: ["Pengeluaran", "Pemasukan", "sisa"],
//       datasets: [
//         {
//           label: "Pengeluaran",
//           data: [1000000, 500000, 500000],
//           backgroundColor: ["#ff6464", "#8b4367", "#5735d3"],
//         },
//       ],
//     },
//     options: {
//       plugins: {
//         title: {
//           display: true,
//           text: "Diagram Perbandingan Bulanan",
//           color: "white",
//         },
//       },
//     },
//   });
// });
