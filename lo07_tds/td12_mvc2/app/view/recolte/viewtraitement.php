
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

      <?php
      if ($a == 0) {
     echo ("<h3>La recolte a été mis à jour </h3>");
    }else{
     echo ("<h3>La recolte a été ajouté </h3>");
    }
      ?>
      
    <table class = "table table-striped table-bordered">
      <thead>
        <tr>
          
          <th scope = "col">vin_id</th>
          <th scope = "col">prod_id</th>
          <th scope = "col">quantité</th>
        </tr>
      </thead>
      <tbody>
          <?php
        // Afficher les lignes de résultat dynamiquement
        foreach ($results as $element) {
            echo "<tr>";
            foreach ($element as $value) {
                echo "<td>" . htmlspecialchars($value) . "</td>";
            }
            echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewAll -->
  
  
  