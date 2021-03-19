"use strict";
// Melebarkan Sidebar

const showSideBar = function (toggleId, navbarId, bodyId) {
  const toggle = document.getElementById(toggleId);
  const navbar = document.getElementById(navbarId);
  const bodyPadding = document.getElementById(bodyId);

  if (toggle && navbar) {
    toggle.addEventListener("click", function () {
      navbar.classList.toggle("expand");

      bodyPadding.classList.toggle("body-all");
    });
  }
};
showSideBar("nav-toggle", "sidebar", "body-all");

//link yang active
const linkColor = document.querySelectorAll(".nav_link");
function colorLink() {
  linkColor.forEach((l) => l.classList.remove("active"));
  this.classList.add("active");
}
linkColor.forEach((l) => l.addEventListener("click", colorLink));

/* untuk drop down menu */
const linkCollapse = document.getElementsByClassName("sub-menu");
var i;

for (i = 0; i < linkCollapse.length; i++) {
  linkCollapse[i].addEventListener("click", function () {
    const collapseMenu = this.nextElementSibling;
    collapseMenu.classList.toggle("showCollapse");

    const rotate = collapseMenu.previousElementSibling;
    rotate.classList.toggle("rotate");
  });
}

