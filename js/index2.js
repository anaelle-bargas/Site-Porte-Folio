function rapetisser(i){
    document.querySelectorAll("#centre_droite>div>div>img")[i].style.height="50%";
    console.log("bla")
}

function agrandir(i){
    document.querySelectorAll("#centre_droite>div>div>img")[i].style.height="55%";
}

let dernierDeplacement = 0;




function onglets_sur_le_cote(){
  console.log("clic")
  document.querySelector("#centre_droite").style.right="-16%";
  document.querySelector("#centre_gauche").style.right="-16%";
  document.querySelector("#centre_gauche").style.position="fixed";
  document.querySelector("#centre_droite").style.position="fixed";
  document.querySelector("#centre_droite").style.position="fixed";

}