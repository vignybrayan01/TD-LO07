
<!-- ----- début viewAll -->
<?php

require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
      ?>
    
      <h1>Propositions d'amélioration du projet MVC</h1>
        
        <div>
            <b>Proposition 1 :</b>
            <p> Regrouper les fichiers par fonctionnalité dans des répertoires différents.   </p>
        </div>
        
        <div>
            <b>Proposition 2 :</b>
            <p> Proposer une organisation standardisée du projet.  </p>
        </div>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewAll -->
  
  
  