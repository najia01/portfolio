
// *********************style de la barre de navigation avec toogle menu*********************************

// function toggleMenu() {
//     var menuBar = document.getElementById('menuBar');
//     menuBar.classList.toggle('active');
// }
// function toggleMenu() {
//     const menuBar = document.querySelector('#menuBar');
//     const burger = document.querySelector('.burger');
  
//     menuBar.classList.toggle('active');
//     burger.classList.toggle('active');
//   }
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");
// const navLink = document.querySelectorAll(".nav-link");

const mobileMenu = () => {
  hamburger.classList.toggle("active")
  navMenu.classList.toggle("active")
}

const closeMenu = () => {
  hamburger.classList.remove("active")
  navMenu.classList.remove("active")
}

hamburger.addEventListener("click" , mobileMenu)
navLink.forEach((l) => l.addEventListener("click",closeMenu))


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
