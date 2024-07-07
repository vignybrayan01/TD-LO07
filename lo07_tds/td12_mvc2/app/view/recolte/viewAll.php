
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

    <table class = "table table-striped table-bordered">
      <thead>
        <tr>
          <?php
            // Afficher les en-têtes de colonne dynamiquement
            if (!empty($results)) {
                foreach (array_keys($results[0]) as $column) {
                    echo "<th scope=\"col\">" . htmlspecialchars($column) . "</th>";
                }
            }
            ?>
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
  
  
  