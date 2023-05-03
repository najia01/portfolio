
// ***************************************************STYLE MENU BURGER AVEC TOOGLE MENU *******************************************************************

const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", () => {
  navMenu.classList.toggle("active");
});


// **********************************************STYLE DU TITRE H1 AVEC SAISIE TEXTE AUTOMATIQUE**************************************************************

// *******************************************Déclaration de la classe concernée ***********************************************************************

let typed = new Typed(".autochange",{
  
    // ***Saisie des chaines de caractères que l'on veut saisir chacun entre ""**************
    strings: ["Développeuse Web","Programmeuse","Codeuse"],

    // **************Définition de la vitesse de saisie ************************************
    typeSpeed: 150,
    backSpeed: 150,
    loop:true

});
