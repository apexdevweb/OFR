const allAvt = document.querySelectorAll(".avt");
const defaultAvt = document.getElementById("defaultAvt");
const upAvt = document.getElementById("update_avt");
allAvt.forEach((avt) => {
  avt.addEventListener("click", () => {
    defaultAvt.src = avt.src;
    upAvt.value = avt.src;
  });
});
