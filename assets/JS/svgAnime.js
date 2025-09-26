// Sélectionner tous les paths du SVG
const paths = document.querySelectorAll("#mySVG path");

paths.forEach((path) => {
  const length = path.getTotalLength(); // longueur totale du trait

  // Initialiser le trait comme "caché"
  path.style.strokeDasharray = length;
  path.style.strokeDashoffset = length;

  // Animation GSAP pour dessiner le trait
  gsap.to(path, {
    strokeDashoffset: 0, // on ramène à 0 = trait visible
    duration: 3, // durée de l’animation
    ease: "power1.inOut", // courbe d’animation
  });
});
