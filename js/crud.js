$(document).ready(function () {
  load_data();
  function load_data() {
    $.ajax({
      url: "crud-server.php",
      method: "POST",
      success: function (data) {
        $("#tabelcrud").html(data);
        $(document).ready(function () {
          $(document).on("click", 'button[id="edit"]', function () {
            let id = $(this).data("id");
            let nama_barang = $("#" + id)
              .children("td[data-target=nama_barang]")
              .text();
            let barcode = $("#" + id)
              .children("td[data-target=barcode]")
              .text();
            let harga_beli = $("#" + id)
              .children("td[data-target=harga_beli]")
              .text();
            let harga_jual = $("#" + id)
              .children("td[data-target=harga_jual]")
              .text();
            let harga_grosir = $("#" + id)
              .children("td[data-target=harga_grosir]")
              .text();
            let expired = $("#" + id)
              .children("td[data-target=expired]")
              .text();
            let jenis_barang = $("#" + id)
              .children("td[data-target=jenis_barang]")
              .text();
            let jumlah_barang = $("#" + id)
              .children("td[data-target=jumlah_barang]")
              .text();
            let deskripsi = $("#" + id)
              .children("td[data-target=deskripsi]")
              .text();
            $("#Nama-barang").val(nama_barang);
            $("#barcode").val(barcode);
            $("#Harga-beli").val(harga_beli);
            $("#harga-jual").val(harga_jual);
            $("#expired").val(expired);
            $("#harga-grosir").val(harga_grosir);
            $("#jenis-barang").val(jenis_barang);
            $("#jumlah-barang").val(jumlah_barang);
            $("#deskripsi-singkat").val(deskripsi);
            $("#userID").val(id);
          });
          $("#edit").click(function (e) {
            let nama_barang = $("#Nama-barang").val();
            let barcode = $("#barcode").val();
            let harga_beli = $("#Harga-beli").val();
            let harga_jual = $("#harga-jual").val();
            let expired = $("#expired").val();
            let harga_grosir = $("#harga-grosir").val();
            let jenis_barang = $("#jenis-barang").val();
            let jumlah_barang = $("#jumlah-barang").val();
            let deskripsi = $("#deskripsi-singkat").val();
            let id = $("#userID").val();

            $.ajax({
              url: "insert.php",
              method: "POST",
              data: {
                nama_barang: nama_barang,
                barcode: barcode,
                harga_beli: harga_beli,
                harga_jual: harga_jual,
                expired: expired,
                harga_grosir: harga_grosir,
                jenis_barang: jenis_barang,
                jumlah_barang: jumlah_barang,
                deskripsi: deskripsi,
                id: id,
                aksi: "edit",
              },
              success: function (response) {
                console.log("data berhasil di edit :))))");
                nama_barang = $("#" + id)
                  .children("td[data-target=nama_barang]")
                  .text(nama_barang);
                barcode = $("#" + id)
                  .children("td[data-target=barcode]")
                  .text(barcode);
                harga_beli = $("#" + id)
                  .children("td[data-target=harga_beli]")
                  .text(harga_beli);
                harga_jual = $("#" + id)
                  .children("td[data-target=harga_jual]")
                  .text(harga_jual);
                harga_grosir = $("#" + id)
                  .children("td[data-target=harga_grosir]")
                  .text(harga_grosir);
                expired = $("#" + id)
                  .children("td[data-target=expired]")
                  .text(expired);
                jenis_barang = $("#" + id)
                  .children("td[data-target=jenis_barang]")
                  .text(jenis_barang);
                jumlah_barang = $("#" + id)
                  .children("td[data-target=jumlah_barang]")
                  .text(jumlah_barang);
                deskripsi = $("#" + id)
                  .children("td[data-target=deskripsi]")
                  .text(deskripsi);
              },
            });
            e.preventDefault();
          });
        });

        $(document).ready(function () {
          $(document).on("click", 'button[id="delete"]', function () {
            let id = $(this).data("id");
            $("#iya").click(function (e) {
              $.ajax({
                url: "insert.php",
                method: "POST",
                data: {
                  id: id,
                  aksi: "hapus",
                },
                success: function (response) {
                  console.log("data berhasil di hapus");
                  $(`#${id}`).remove();
                },
              });
              e.preventDefault();
            });
          });
        });

        for (let i = 0; i < document.querySelectorAll(".delete").length; i++) {
          document
            .querySelectorAll(".delete")
            [i].addEventListener("click", function () {
              console.log("delete di tekan");
              document.querySelector(".modal").classList.remove("hidden");
              document.querySelector(".overlay").classList.remove("hidden");
            });
        }
        for (let i = 0; i < document.querySelectorAll(".edit").length; i++) {
          const editBtn = document.querySelectorAll(".edit");
          editBtn[i].addEventListener("click", function () {
            console.log("edit di tekan");
            document.querySelector(".modal-2").classList.remove("hidden");
            document.querySelector(".overlay-2").classList.remove("hidden");
          });
        }

        function closeModal() {
          document.querySelector(".modal").classList.add("hidden");
          document.querySelector(".overlay").classList.add("hidden");
          console.log("menutup modal");
        }
        function closeModal2() {
          document.querySelector(".modal-2").classList.add("hidden");
          document.querySelector(".overlay-2").classList.add("hidden");
          console.log("menutup modal");
        }

        document.querySelector("#iya").addEventListener("click", closeModal);
        document.querySelector("#tidak").addEventListener("click", closeModal);

        document.querySelector("#edit").addEventListener("click", closeModal2);
        document.querySelector("#batal").addEventListener("click", closeModal2);
      },
    });
  }
});
$(document).ready(function () {
  $.ajax({
    url: "crud-server.php",
    method: "GET",
    success: function () {},
  });
});
