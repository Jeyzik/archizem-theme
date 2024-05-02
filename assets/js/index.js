document.querySelector(".burger-icon").addEventListener("click", function () {
  let menu = document.querySelector(".burder-menu-full");
  menu.classList.add("open");
});

document.querySelector(".close-menu").addEventListener("click", function () {
  let menu = document.querySelector(".burder-menu-full");
  menu.classList.remove("open");
});

console.log(menu);
