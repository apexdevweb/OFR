document.addEventListener("DOMContentLoaded", () => {
  const btn = document.getElementById("enterbtn");
  const topBars = document.querySelectorAll(".top_bar");
  const bottomBars = document.querySelectorAll(".bottom_bar");

  // Timeline plus rapide
  const tl = gsap.timeline({ paused: true });

  tl.to(topBars, {
    opacity: 1,
    y: -5,
    stagger: 0.05, // plus serré
    duration: 0.15, // plus rapide
    ease: "power2.out",
  }).to(
    bottomBars,
    {
      opacity: 1,
      y: 5,
      stagger: 0.05,
      duration: 0.15,
      ease: "power2.out",
    },
    "-=0.1"
  ); // chevauchement plus court

  btn.addEventListener("mouseenter", () => {
    tl.play();
  });

  btn.addEventListener("mouseleave", () => {
    tl.reverse();
  });
});
