<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* Style pour votre div principale en scroll x */
    .scroll-x {
      width: 100%;
      overflow-x: auto;
      white-space: nowrap;
    }

    /* Style pour votre div dans la div principale */
    .inner-div {
      position: relative;
    }

    /* Styles pour les deux div qui se chevauchent */
    .div-1, .div-2 {
      position: absolute;
      top: 0;
      left: 0;
      width: 100px; /* Ajustez la largeur selon vos besoins */
      height: 50px; /* Ajustez la hauteur selon vos besoins */
      background-color: rgba(255, 0, 0, 0.7); /* Couleur avec transparence pour voir la superposition */
    }

    /* Style pour que la div vienne avec le scroll */
    .sticky-div {
      position: sticky;
      top: 0;
      z-index: 1;
    }
  </style>
</head>
<body>

  <!-- Div principale en scroll x -->
  <div class="scroll-x">

    <!-- Div dans la div principale -->
    <div class="inner-div">

      <!-- Les deux div qui se chevauchent -->
      <div class="div-1"></div>
      <div class="div-2"></div>

      <!-- La div qui vient avec le scroll -->
      <div class="sticky-div">
        Balbalbla
      </div>

    </div>

    bloublou
    <!-- ... -->

  </div>

  <!-- Autres éléments HTML, scripts, etc. -->

</body>
</html>
