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
