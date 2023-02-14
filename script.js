const darkModeSwitch = document.getElementById("dark-mode-switch");
const htmlElement = document.getElementsByTagName("html")[0];

darkModeSwitch.addEventListener("change", () => {
  if (darkModeSwitch.checked) {
    htmlElement.classList.add("dark-mode");
  } else {
    htmlElement.classList.remove("dark-mode");
  }
});
