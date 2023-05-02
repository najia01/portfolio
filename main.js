
// *********************style de la barre de navigation avec toogle menu*********************************


// const hamburger = document.querySelector(".hamburger");
// const navMenu = document.querySelector(".nav-menu");


// const mobileMenu = () => {
//   hamburger.classList.toggle("active")
//   navMenu.classList.toggle("active")
// }

// const closeMenu = () => {
//   hamburger.classList.remove("active")
//   navMenu.classList.remove("active")
// }

// hamburger.addEventListener("click" , mobileMenu)

const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", () => {
  navMenu.classList.toggle("active");
});



// **************************STYLE DU TITRE H1 AVEC SAISIE TEXTE AUTOMATIQUE**********************
// *******************déclaration de la classe concernée ****************

let typed = new Typed(".autochange",{
    // ***Saisie des chaines de caractères que l'on veut saisir chacun entre ""**************
    strings: ["Développeuse Web","Programmeuse","Codeuse"],
    // **************Définition de la vitesse de saisie ************************************
    typeSpeed: 150,
    backSpeed: 150,
    loop:true

});
