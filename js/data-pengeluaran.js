$(document).ready(function () {
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
    modalLihat.classList.remove("hidden");
    overlay.classList.remove("hidden");
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
});
