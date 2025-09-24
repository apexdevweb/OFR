let timerEl = 60;
const pinCtnr = document.getElementById("secureCtnr");
const timerViewEl = document.querySelector(".timer__view");
const codePin = document.querySelector(".sign__code--pin");

const decompte = setInterval(() => {
  timerEl--;
  timerViewEl.textContent = timerEl;

  if (timerEl <= 0) {
    clearInterval(decompte);
    pinCtnr.style.display = "none";
  }
}, 1000);
