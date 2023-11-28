function rapetisser(i){
    document.querySelectorAll("#centre_droite>div>div>img")[i].style.height="50%";
    console.log("bla")
}

function agrandir(i){
    document.querySelectorAll("#centre_droite>div>div>img")[i].style.height="55%";
}

let dernierDeplacement = 0;

window.addEventListener("scroll", function() {
  const deplacementActuel = window.scrollY;

  if (deplacementActuel > dernierDeplacement) {
    // Défilement vers le bas
    console.log("Défilement vers le bas");
  } else if (deplacementActuel < dernierDeplacement) {
    // Défilement vers le haut
    // document.querySelector("::-webkit-scrollbar-thumb").style.background="linear-gradient(#213049, transparent);"
    console.log("Défilement vers le haut");
  }

  dernierDeplacement = deplacementActuel;
});


function onglets_sur_le_cote(){
    console.log("bla")
    document.querySelector("#centre_droite>div>a").style.right="0.5%";
}