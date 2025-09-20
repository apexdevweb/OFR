const logForm = document.querySelector(".login__form");
const logBtn = document.querySelector(".log__title");

logBtn.addEventListener("click", () => {
  logForm.classList.toggle("view_content");
});
