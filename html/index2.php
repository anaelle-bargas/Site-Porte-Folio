<?php
$datas = yaml_parse_file("./../yaml/index2.yaml");


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>SitePorteFolio</title>        
        <link rel="stylesheet" href="../css/index2.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Cinzel&family=Cormorant+Garamond:wght@300&family=Dancing+Script&family=Great+Vibes&family=Lobster+Two&family=Noto+Serif:wght@100&family=Old+Standard+TT&family=Unna&family=Bodoni+Moda:opsz@6..96&display=swap" rel="stylesheet">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>



    <body>

        <div id = "premiere_vue">

            <div id = "gauche">
                <video id="background-video" autoplay loop muted>
                    <source src="./../images/165202 (1080p).mp4" type="video/mp4">
                </video>
            </div>
            
            <div id = "centre">
                
                <div id = "centre_gauche"></div>
                <DIV id = "presentation">
                    <div id = "photo"></div>
                    <p id = "nom">Anaëlle Bargas</p>
                    <p id ="ligne">________</p>
                    <p id = "metier">Développeuse</p>
                    <div id = "reseaux_presentation">
                        <a href="https://www.linkedin.com/in/ana%C3%ABlle-bargas-980911255"><div id = "linkedIn"></div></a>
                    </div>
                </DIV>
                <div id = "centre_droite">
                    <div  id = "div_accueil">
                        <a onclick = "onglets_sur_le_cote()" href="#accueil">
                            <div >
                                <img src="./../images/page-daccueil.png" id = "bla" alt="">
                            </div>
                            <p>Accueil</p>
                        </a>
                    </div>
                    <div id = "div_formations">
                        <a onclick = "onglets_sur_le_cote()" href="#formations">
                            <div >
                                <img src="./../images/education.png" id = "bla" alt="">
                            </div>
                            <p>Parcours de formation</p>
                        </a>
                    </div>
                    <div id = "div_competences">
                        <a onclick = "onglets_sur_le_cote()" href="#competences">
                            <div >
                                <img src="./../images/competence.png" id = "bla" alt="">
                            </div>
                            <p>Compétences</p>
                        </a>
                    </div>
                    
                    <div id = "div_experiences">
                        <a onclick = "onglets_sur_le_cote()" href="#experiences">
                            <div >
                                <img src="./../images/mallette.png" id = "bla" alt="">
                            </div>
                            <p>Expériences</p>
                        </a>
                    </div>
                    
                    <div id = "div_contact">                    
                        <a onclick = "onglets_sur_le_cote()" href="#contact">
                            <div >
                                <img src="./../images/e-mail.png" id = "bla" alt="">
                            </div>
                            <p>Contact</p>
                        </a>
                    </div>
                    
                    <div id = "div_a_propos">                    
                        <a onclick = "onglets_sur_le_cote()" href="#a_propos">
                            <div >
                                <img src="./../images/e-mail.png" id = "bla" alt="">
                            </div>
                            <p>A propos</p>
                        </a>
                    </div>
                </div>
                
            </div>
            <div id = "droite">
                <div id = "reseaux"></div>
              
            </div>
        </div>

        
        <div id = "accueil" onscroll="bla()" onload="handleFragmentLoad('fragment2')" onvisible = "actuelle_div('this.id')">
                    
            <div id = "paroles">
                <div id = "qui">
                    <p id = "title">Bienvenue</p>
                    <p>Je suis Anaëlle Bargas, développeuse back-end, basée à Caen, en France. </p>
    
                </div>
    
                <div id = "passionnee" style="display:flex;">
                    <p>Vous cherchez quelqu'un qui vous accompagnera dans votre projet informatique?</p>
                    <p>Ne cherchez plus, vous l'avez trouvé!</p>
                </div>
            </div>

            <div class="button_radio">
                <input type="radio" name="qui" id="radio_qui" onclick="check_qui()" checked>
                <input type="radio" name="passionnee" id="radio_passionnee" onclick="check_passionnee()" >
            </div>

        </div>



        <div id = "formations" onvisible = "actuelle_div(this.id)">

            <div id= "div_for_scroll">
                
                <div id = "toutes_les_formations">
                
                    <div onmouseover="affiche_details(0)" onmouseout="retire_details(0)">
                        <div id="visible">
                            <div>
                                <p id="onglet_formations" style="font-size:7vmin"><?=$datas[0]["nom_formation"]?></p>
                            </div>
                        </div>

                        <div id="invisible">
                            <div>
                                <p id="onglet_formations">Etablissement</p>
                                <p><?=$datas[0]["etablissement"]?></p>
                            </div>
                            <div>
                                <p id="onglet_formations">Date</p>
                                <p><?=$datas[0]["date_debut"]?> - <?=$datas[0]["date_fin"]?></p>
                            </div>
                            <div>
                                <p id="onglet_formations">Lieu</p>
                                <p><?=$datas[0]["lieu"]?></p>
                            </div>
                            <div>
                                <p id="onglet_formations">Contenu</p>
                                <p><?=$datas[0]["contenu_formation"]?></p>
                            </div>

                        </div>
                    </div>

                    <div onmouseover="affiche_details(1)" onmouseout="retire_details(1)">
                        <div id="visible">
                            <div>
                                <p id="onglet_formations" style="font-size:7vmin"><?=$datas[1]["nom_formation"]?></p>
                            </div>
                        </div>

                        <div id="invisible">
                            <div>
                                <p id="onglet_formations">Etablissement</p>
                                <p><?=$datas[1]["etablissement"]?></p>
                            </div>
                            <div>
                                <p id="onglet_formations">Date</p>
                                <p><?=$datas[1]["date_debut"]?> - <?=$datas[1]["date_fin"]?></p>
                            </div>
                            <div>
                                <p id="onglet_formations">Lieu</p>
                                <p><?=$datas[1]["lieu"]?></p>
                            </div>
                            <div>
                                <p id="onglet_formations">Contenu</p>
                                <p><?=$datas[1]["contenu_formation"]?></p>
                            </div>

                        </div>
                    </div>


                    <div onmouseover="affiche_details(2)" onmouseout="retire_details(2)">
                        <div id="visible">
                            <div>
                                <p id="onglet_formations" style="font-size:7vmin"><?=$datas[2]["nom_formation"]?></p>
                            </div>
                        </div>

                        <div id="invisible">
                            <div>
                                <p id="onglet_formations">Etablissement</p>
                                <p><?=$datas[2]["etablissement"]?></p>
                            </div>
                            <div>
                                <p id="onglet_formations">Date</p>
                                <p><?=$datas[2]["date_debut"]?> - <?=$datas[2]["date_fin"]?></p>
                            </div>
                            <div>
                                <p id="onglet_formations">Lieu</p>
                                <p><?=$datas[2]["lieu"]?></p>
                            </div>
                            <div>
                                <p id="onglet_formations">Contenu</p>
                                <p><?=$datas[2]["contenu_formation"]?></p>
                            </div>

                        </div>
                    </div>


                    <div onmouseover="affiche_details(3)" onmouseout="retire_details(3)">
                        <div id="visible">
                            <div>
                                <p id="onglet_formations" style="font-size:7vmin"><?=$datas[3]["nom_formation"]?></p>
                            </div>
                        </div>

                        <div id="invisible">
                            <div>
                                <p id="onglet_formations">Etablissement</p>
                                <p><?=$datas[3]["etablissement"]?></p>
                            </div>
                            <div>
                                <p id="onglet_formations">Date</p>
                                <p><?=$datas[3]["date_debut"]?> - <?=$datas[3]["date_fin"]?></p>
                            </div>
                            <div>
                                <p id="onglet_formations">Lieu</p>
                                <p><?=$datas[3]["lieu"]?></p>
                            </div>
                            <div>
                                <p id="onglet_formations">Contenu</p>
                                <p><?=$datas[3]["contenu_formation"]?></p>
                            </div>

                        </div>
                    </div>
                    
               </div>

                    
            </div>

        </div>


        <div id = "competences" onvisible = "actuelle_div(this.id)">
            <div id= "div_for_scroll">
                
                <div id = "toutes_les_competences">
                
                    <div onmouseover="affiche_details(4)" onmouseout="retire_details(4)">
                        <div id="visible">
                            <div>
                                <p id="onglet_formations" style="font-size:7vmin;">HTML, CSS</p>
                                <p style="font-size:2vmin;margin-top:0px;margin-left:1.5%;">Développement</p>
                            </div>
                        </div>

                        <div id="invisible" >
                            <div class="progressBar"></div>

                        </div>
                    </div>

                    <div onmouseover="affiche_details(5)" onmouseout="retire_details(5)">
                        <div id="visible">
                            <div>
                                <p id="onglet_formations" style="font-size:7vmin">PHP</p>
                                <p style="font-size:2vmin;margin-top:0px;margin-left:1.5%;">Développement</p>
                            </div>
                        </div>

                        <div id="invisible">
                            <div>
                                <p id="onglet_formations">Etablissement</p>
                                <p><?=$datas[5]["etablissement"]?></p>
                            </div>
                            <div>
                                <p id="onglet_formations">Date</p>
                                <p><?=$datas[5]["date_debut"]?> - <?=$datas[5]["date_fin"]?></p>
                            </div>
                            <div>
                                <p id="onglet_formations">Lieu</p>
                                <p><?=$datas[5]["lieu"]?></p>
                            </div>
                            <div>
                                <p id="onglet_formations">Contenu</p>
                                <p><?=$datas[5]["contenu_formation"]?></p>
                            </div>

                        </div>
                    </div>


                    <div onmouseover="affiche_details(6)" onmouseout="retire_details(6)">
                        <div id="visible">
                            <div>
                                <p id="onglet_formations" style="font-size:7vmin">JS</p>
                                <p style="font-size:2vmin;margin-top:0px;margin-left:1.5%;">Développement</p>
                            </div>
                        </div>

                        <div id="invisible">
                            <div>
                                <p id="onglet_formations">Etablissement</p>
                                <p><?=$datas[6]["etablissement"]?></p>
                            </div>
                            <div>
                                <p id="onglet_formations">Date</p>
                                <p><?=$datas[6]["date_debut"]?> - <?=$datas[6]["date_fin"]?></p>
                            </div>
                            <div>
                                <p id="onglet_formations">Lieu</p>
                                <p><?=$datas[6]["lieu"]?></p>
                            </div>
                            <div>
                                <p id="onglet_formations">Contenu</p>
                                <p><?=$datas[6]["contenu_formation"]?></p>
                            </div>

                        </div>
                    </div>


                    <div onmouseover="affiche_details(7)" onmouseout="retire_details(7)">
                        <div id="visible">
                            <div>
                                <p id="onglet_formations" class="title_scroll">SQL</p>
                                <p style="font-size:2vmin;margin-top:0px;margin-left:1.5%;">Développement</p>
                            </div>
                        </div>

                        <div id="invisible">
                            <div>
                                <p id="onglet_formations">Etablissement</p>
                                <p><?=$datas[7]["etablissement"]?></p>
                            </div>
                            <div>
                                <p id="onglet_formations">Date</p>
                                <p><?=$datas[7]["date_debut"]?> - <?=$datas[7]["date_fin"]?></p>
                            </div>
                            <div>
                                <p id="onglet_formations">Lieu</p>
                                <p><?=$datas[7]["lieu"]?></p>
                            </div>
                            <div>
                                <p id="onglet_formations">Contenu</p>
                                <p><?=$datas[7]["contenu_formation"]?></p>
                            </div>

                        </div>
                    </div>

                    <div onmouseover="affiche_details(8)" onmouseout="retire_details(8)">
                        <div id="visible">
                            <div>
                                <p id="onglet_formations" class="title_scroll">BABYLONE JS 3D</p>
                                <p style="font-size:2vmin;margin-top:0px;margin-left:1.5%;">Développement</p>
                            </div>
                        </div>

                        <div id="invisible">
                            <div>
                                <p id="onglet_formations">Etablissement</p>
                                <p><?=$datas[8]["etablissement"]?></p>
                            </div>
                            <div>
                                <p id="onglet_formations">Date</p>
                                <p><?=$datas[8]["date_debut"]?> - <?=$datas[8]["date_fin"]?></p>
                            </div>
                            <div>
                                <p id="onglet_formations">Lieu</p>
                                <p><?=$datas[8]["lieu"]?></p>
                            </div>
                            <div>
                                <p id="onglet_formations">Contenu</p>
                                <p><?=$datas[8]["contenu_formation"]?></p>
                            </div>

                        </div>
                    </div>

                    <div onmouseover="affiche_details(9)" onmouseout="retire_details(9)">
                        <div id="visible">
                            <div>
                                <p id="onglet_formations" class="title_scroll">PYTHON</p>
                                <p style="font-size:2vmin;margin-top:0px;margin-left:1.5%;">Développement</p>
                            </div>
                        </div>

                        <div id="invisible">
                            <div>
                                <p id="onglet_formations">Etablissement</p>
                                <p><?=$datas[9]["etablissement"]?></p>
                            </div>
                            <div>
                                <p id="onglet_formations">Date</p>
                                <p><?=$datas[9]["date_debut"]?> - <?=$datas[9]["date_fin"]?></p>
                            </div>
                            <div>
                                <p id="onglet_formations">Lieu</p>
                                <p><?=$datas[9]["lieu"]?></p>
                            </div>
                            <div>
                                <p id="onglet_formations">Contenu</p>
                                <p><?=$datas[9]["contenu_formation"]?></p>
                            </div>

                        </div>
                    </div>
                    
               </div>

                    
            </div>

        </div>
        <div id = "experiences" onvisible = "actuelle_div(this.id)"><p>Bla</p></div>
        <div id = "contact" onvisible = "actuelle_div(this.id)"><p>Bla</p></div>
        <div id = "a_propos" onvisible = "actuelle_div(this.id)"><p>Bla</p></div>

        <script src="./../js/index2.js"></script>
    </body>
</html>
