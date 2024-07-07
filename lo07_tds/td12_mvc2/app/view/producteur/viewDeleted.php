
<!-- ----- début viewInserted -->
<?php
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCaveMenu.html';
    include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?>
    <!-- ===================================================== -->
    <?php
    
    if ($results === 0) {
     echo ("<h3>Le producteur a été supprimé avec success </h3>");
    }else{
     echo ("<h3>Problème de suppression du producteur. Il est probable qu'il soit présent dans la table des récoltes </h3>");
    }
    
    include $root . '/app/view/fragment/fragmentCaveFooter.html';
    ?>
    <!-- ----- fin viewInserted -->    

    
    