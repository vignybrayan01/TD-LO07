
<!-- ----- début viewInsert -->
 
<?php 
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
    <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?> 
      
    

    <form role="form" method='get' action='router2.php'>
      <div class="form-group">
        <input type="hidden" name='action' value='recoltetraitement'>        
        <label class='w-25' for="vin">Selectionner un vin : </label><select class="form-control" id='vin' name='vin' style="width: 400px">
                                                                     <?php
                            foreach ($results['vin'] as $val) {
                                // Construction de l'option avec id, cru, et annee
                                $optionText = htmlspecialchars($val['id']) . " : " . htmlspecialchars($val['cru']) . " : " . htmlspecialchars($val['annee']);
                                echo ("<option value='" . htmlspecialchars($val['id']) . "'>$optionText</option>");
                            }
                            ?> </select> <br/>    
                            
        <label class='w-25' for="producteur">Selectionner un producteur : </label><select class="form-control" id='vin' name='producteur' style="width: 400px">
                                                                     <?php
                            foreach ($results['producteur'] as $val) {
                                // Construction de l'option avec id, cru, et annee
                                $optionText = htmlspecialchars($val['id']) . " : " . htmlspecialchars($val['nom']) . " : " . htmlspecialchars($val['prenom']). " : " . htmlspecialchars($val['region']);
                                echo ("<option value='" . htmlspecialchars($val['id']) . "'>$optionText</option>");
                            }
                            ?> </select> <br/>
                            
                            <label class='w-25' for="qte">quantité : </label><br/><input type="number" step='any' name='quantite' value='17'>        <br/>          
      </div>
      <p/>
       <br/> 
      <button class="btn btn-primary" type="submit">Go</button>
    </form>
    <p/>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

<!-- ----- fin viewInsert -->



