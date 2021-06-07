$(document).ready(function () {
  load_data();
  function load_data(search) {
    $.ajax({
      url: "insert.php",
      method: "POST",
      dataType: "json",
      data: { search: search, aksi: "akun" },
      success: function (data) {
        $("#table").html(data.output);
        const closeDelete = document.querySelectorAll(".delete-close");
        const closeModal = document.querySelectorAll(".close-modal");
        const modalLihat = document.querySelector(".modal-window-lihat");
        const modalInput = document.querySelector(".modal-window-input");
        const modalDelete = document.querySelector(".modal-window-delete");
        const overlay = document.querySelector(".overlay");
        const lihatbtn = document.querySelectorAll(".lihat");
        const deletebtn = document.querySelectorAll(".delete");
        const inputBtn = document.querySelector(".input-data");
        const tutupModalInput = document.querySelectorAll(".close-modal-input");

        function openModalInput() {
          modalInput.classList.remove("hidden");
          overlay.classList.remove("hidden");
        }
        function closeModalInput() {
          modalInput.classList.add("hidden");
          overlay.classList.add("hidden");
        }
        function closeModalWindow() {
          modalLihat.classList.add("hidden");
          overlay.classList.add("hidden");
        }
        function closeModalWindowDelete() {
          modalDelete.classList.add("hidden");
          overlay.classList.add("hidden");
        }
        function openModalLihat() {
          overlay.classList.remove("hidden");
          modalLihat.classList.remove("hidden");
        }
        function openModalDelete() {
          modalDelete.classList.remove("hidden");
          overlay.classList.remove("hidden");
        }
        inputBtn.addEventListener("click", openModalInput);
        for (let i = 0; i < closeDelete.length; i++) {
          closeDelete[i].addEventListener("click", closeModalWindowDelete);
        }
        for (let i = 0; i < closeModal.length; i++) {
          closeModal[i].addEventListener("click", closeModalWindow);
        }
        for (let i = 0; i < lihatbtn.length; i++) {
          lihatbtn[i].addEventListener("click", openModalLihat);
        }
        for (let i = 0; i < deletebtn.length; i++) {
          deletebtn[i].addEventListener("click", openModalDelete);
        }
        for (let i = 0; i < tutupModalInput.length; i++) {
          tutupModalInput[i].addEventListener("click", closeModalInput);
        }
      },
    });
  }
  $("#search").on("keyup", function () {
    let search = $("#search").val();
    if (search != "") {
      load_data(search);
    } else {
      load_data();
    }
  });
  $(document).on("click", "#masukAkun", function (e) {
    e.preventDefault();
    $.ajax({
      url: "insert.php",
      method: "POST",
      data: $("#masuk").serialize(),
      success: function (data) {
        load_data();
        console.log("sukses");
        $("#search").val("");
      },
    });
  });
  $(document).on("click", "button[id='edit']", function () {
    let id = $(this).data("id");
    $("#userId").val(id);
  });
  $(document).on("click", "#editAkun", function (e) {
    e.preventDefault();
    let nama = $("#nama").val();
    let user = $("#user").val();
    let pass = $("#pass").val();
    let type = $("#typeEdit").val();
    let id = $("#userId").val();
    $.ajax({
      url: "insert.php",
      method: "POST",
      data: {
        id: id,
        nama: nama,
        user: user,
        password: pass,
        editAkun: "true",
        type: type,
      },
      success: function (data) {
        load_data();
        $("form")[0].reset();
        tgl = ket = nominal = id = "";
      },
    });
  });
  $(document).on("click", "button[id='delete']", function () {
    let id = $(this).data("id");
    $("#iya").click(function (e) {
      e.preventDefault();
      $.ajax({
        url: "insert.php",
        method: "POST",
        data: {
          id: id,
          hapusAkun: "true",
        },
        success: function () {
          load_data();
        },
      });
    });
  });
});
