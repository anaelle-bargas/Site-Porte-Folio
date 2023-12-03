function rapetisser(i){
    document.querySelectorAll("#centre_droite>div>div>img")[i].style.height="50%";
    console.log("bla")
}

function agrandir(i){
    document.querySelectorAll("#centre_droite>div>div>img")[i].style.height="55%";
}

let dernierDeplacement = 0;

nbClick = 0;


function onglets_sur_le_cote(){
  console.log("clic")
  document.querySelector("#centre_droite").style.right="-16%";
  document.querySelector("#centre_gauche").style.right="-16%";
  document.querySelector("#centre_gauche").style.position="fixed";
  document.querySelector("#centre_droite").style.position="fixed";
  document.querySelector("#centre_droite").style.position="fixed";
  nbClick++;
  if(nbClick==1){
    document.querySelector("#div_formations").classList.add('div_formations');
    document.querySelector("#div_accueil").classList.add('div_accueil');
    document.querySelector("#div_competences").classList.add('div_competences');
    document.querySelector("#div_experience").classList.add('div_experience');
    document.querySelector("#div_contact").classList.add('div_contact');
    document.querySelector("#div_a_propos").classList.add('div_a_propos');
  } 
}