"use strict";
$(document).ready(function () {
  var data_barang;
  var i = 0;
  let pembantucounter = -1;
  var objekbarang = [];
  const tabelKasir = document.querySelector(".tabel-kasir");
  var hargatotal = 0;
  //fungsi tambah baris
  function tambahbaris(data) {
    let baris = `<tr id='.$row["id"].'>
                <td id=${i}>${objekbarang[data].nama_barang}</td>
                <td id = ${i}>${objekbarang[data].barcode}</>
                <td id = ${i}>${objekbarang[data].pelanggan}</td>
                <td id = ${i}>${objekbarang[data].harga}</td>
                <td id = ${i}>${objekbarang[data].jumlah}</td>
                <td id = ${i}>${
      objekbarang[data].harga * objekbarang[data].jumlah
    }</td>
                <td id = ${i}>${objekbarang[data].stok}</td>
                <td id = ${i}>${objekbarang[data].stok}</td>
                <td style="width: 220px;">
                <button type="submit" class="btn delete${i}" id="delete"> Delete</button>
                </td>
                </tr>`;
    tabelKasir.innerHTML += baris;
  }
  function penambah(i) {
    hargatotal += objekbarang[i].harga * objekbarang[i].jumlah;
    document.querySelector("#harga-total").innerHTML = hargatotal;
  }
  //fungsi untuk fetch data
  function loadData(search) {
    $.ajax({
      url: "transaksi-kasir-server.php",
      type: "POST",
      dataType: "json",
      data: { search: search },
      success: function (data) {
        data_barang = data.res;
        console.log(data_barang);
        console.log(++i);
        $("#nama-barang").val(data_barang.nama_barang);
        $("#harga-umum").val(data_barang.harga_beli);
        $("#harga-grosir").val(data_barang.harga_grosir);
        $("#stok").val(data_barang.jumlah_barang);
        $("#deskripsi").val(data_barang.deskripsi);
        data_barang = "";
      },
    });
  }
  //fungsi ketika mendeteksi menulis akan minta data ke fungsi loadata()
  $(document).on("change", "#barcode", function (e) {
    let barcode = $(this).val();
    loadData(barcode);
    e.preventDefault();
  });
  //menambahkan data ke objek dan tabel
  $(document).on("click", "#tambah-btn", function (e) {
    e.preventDefault();
    if ($("#nama-barang").val().length === 0) {
      alert("Tolong isi dulu formnya");
    } else {
      if ($("#pelanggan").val() === "grosir") {
        objekbarang.push({
          nama_barang: $("#nama-barang").val(),
          harga: $("#harga-grosir").val(),
          stok: $("#stok").val(),
          deskripsi: $("#deskripsi").val(),
          jumlah: $("#jumlah").val(),
          pelanggan: $("#pelanggan").val(),
          barcode: $("#barcode").val(),
        });
        pembantucounter++;
        tambahbaris(pembantucounter);
        penambah(pembantucounter);
      } else {
        objekbarang.push({
          nama_barang: $("#nama-barang").val(),
          harga: $("#harga-umum").val(),
          stok: $("#stok").val(),
          deskripsi: $("#deskripsi").val(),
          jumlah: $("#jumlah").val(),
          pelanggan: $("#pelanggan").val(),
          barcode: $("#barcode").val(),
        });
        pembantucounter++;
        tambahbaris(pembantucounter);
        penambah(pembantucounter);
      }
    }
    $("#nama-barang").val("");
    $("#harga-umum").val("");
    $("#harga-grosir").val("");
    $("#stok").val("");
    $("#deskripsi").val("");
    $("#barcode").val("");
    console.log(objekbarang);
  });
  //membatalkan form
  $(document).on("click", "#batal-btn", function () {
    $("#nama-barang").val("");
    $("#harga-umum").val("");
    $("#harga-grosir").val("");
    $("#stok").val("");
    $("#deskripsi").val("");
    $("#barcode").val("");
    data_barang = "";
  });
  $(document).on("click", ".checkout", function () {
    $.ajax({
      url: "transaksi-kasir-server.php",
      type: "POST",
      cache: false,
      dataType: "json",
      data: { datapembelian: objekbarang,
              hargatotal: hargatotal
            },
      success: function () {
        console.log("berhasil terkirim");
      },
    });
  });
});
