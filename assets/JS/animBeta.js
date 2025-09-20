document.addEventListener("DOMContentLoaded", () => {
  const btns = document.querySelectorAll(".nav__item", ".log__title");

  btns.forEach((btn) => {
    const topBars = btn.querySelectorAll(".top_bar");
    const bottomBars = btn.querySelectorAll(".bottom_bar");

    // timeline propre à ce bouton
    const tl = gsap.timeline({ paused: true });

    tl.to(topBars, {
      opacity: 1,
      y: -5,
      stagger: 0.05,
      duration: 0.15,
      ease: "power2.out",
    });
    tl.to(
      bottomBars,
      {
        opacity: 1,
        y: 5,
        stagger: 0.05,
        duration: 0.15,
        ease: "power2.out",
      },
      "-=0.1"
    );

    // événements uniquement pour ce bouton
    btn.addEventListener("mouseenter", () => tl.play());
    btn.addEventListener("mouseleave", () => tl.reverse());
  });
});
