// Menu Active
function setActive() {
  linkObj = document.getElementById("navbarNav").getElementsByTagName("a");
  for (i = 0; i < linkObj.length; i++) {
      const url = new URL(window.location.href);
      if ((document.location.href.indexOf(linkObj[i].href) >= 0 && linkObj[i].href != url.protocol + "//" + url.hostname + "/") || document.location.href == linkObj[i].href) {
          linkObj[i].classList.add("sub-active");
      }
  }
}
window.onload = setActive;

// StickyAdd
var navbar = document.querySelector("nav");
window.onscroll = function () {
  if (window.pageYOffset > 80) {
      navbar.classList.add("stickyadd");
  } else {
      navbar.classList.remove("stickyadd");
  }
};

// Menu Collepsed
const btn = document.querySelector("button.mobile-menu-button");
const menu = document.querySelector(".mobile-menu");

btn.addEventListener("click", () => {
  menu.classList.toggle("hidden");
});
