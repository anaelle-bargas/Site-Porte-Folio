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
  nbClick++;
  if(nbClick==1){
    document.querySelector("#div_formations").classList.add('div_formations');
    document.querySelector("#div_accueil").classList.add('div_accueil');
    document.querySelector("#div_competences").classList.add('div_competences');
    document.querySelector("#div_experiences").classList.add('div_experiences');
    document.querySelector("#div_contact").classList.add('div_contact');
    document.querySelector("#div_a_propos").classList.add('div_a_propos');
  } 
}

// var div_actuelle = "premiere_vue";

// function actuelle_div(id_div){
//   document.querySelector("#div_"+id_div).style.transform="translateX(-30%);"
// }

function check_qui(){
  
  document.getElementById("radio_passionnee").checked=false;
  document.getElementById("paroles").style.animation="deplacement_passionnee_qui 1s 0.0s ease-out forwards";
}

function check_passionnee(){
  document.getElementById("radio_qui").checked=false;
  document.getElementById("paroles").style.animation="deplacement_qui_passionnee 1s 0.0s ease-out forwards";

}

























