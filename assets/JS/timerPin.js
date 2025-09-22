let timerEl = 60;
const timerViewEl = document.querySelector(".timer__view");
const codePin = document.querySelector(".sign__code--pin");

const decompte = setInterval(() => {
  timerEl--;
  timerViewEl.textContent = timer;

  if (timerEl <= 0) {
    clearInterval(decompte);
    codePin.style.display = "none";
  }
}, 1000);
