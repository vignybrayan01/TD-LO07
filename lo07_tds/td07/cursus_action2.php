<?php
require_once 'Module.class.php';
    session_start();       
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Objet en php</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap53.min.css" type="text/css"/>
    <link href="my_css.css" rel="stylesheet" type="text/css"/>
    
  </head>
  <body>
    <div class="container">
      <h1>TD</h1>
      <script 
          src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
      </script>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 1 : Squelette de la page avec modification du navbar -->
      <!-- ================================================================================================================ -->

      <?php require 'nav.html'; ?> 

      <!-- ================================================================================================================ -->
      <!-- ===== Les jumbotrons de BT3 n'existe plus et sont remplacés par de simple div ===== -->       

      <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>Formulaire 1 avec Bootstrap 5</h1>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 1 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a id='exercice1'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Votre Formulaire est correct</h5>

          <div class='mx-lg-3'> 

                <?php
                
                require_once('Module.class.php');
                require_once('Cursus2.class.php');
                
                $m1=new Module($_POST['sigle'], $_POST['label'], $_POST['categorie'], $_POST['effectif']);
                
                $c1= new Cursus2();
                $c1->addModule($m1); 
                
                /*$m2=new Module("CC06", "web", "", 140);
                $m3=new Module("toto", "web", "ME", 77);
                $c1->addModule($m2);
                $c1->addModule($m3);*/
                
                $a=$m1->tableau();
                
                
               foreach($a as $pays => $capitale){ 
                echo "<pre>".$pays." => ".$capitale."</pre>";
               }
               echo '<br>'; 
               
               echo "Création d un cursus et ajout d un module";echo '<br>';
               echo "Cursus2 constructeur";echo '<br>';
               echo "Cursus2 constructeur : recuperation des informations de la variable de session";
               echo '<br><br>';
               
               foreach ($_SESSION['SESSION_cursus'] as $module) {
                    echo $module->getLabel()." :=: Module (".$module->sauveTXT().")<br>";
                }
               echo '<br><br>';
               
               //echo $m1->getLabel()." :=: Module (".$m1->sauveTXT().")";echo '<br>';
               //echo $m2->getLabel()." :=: Module (".$m2->sauveTXT().")";echo '<br>';
               //echo $m3->getLabel()." :=: Module (".$m3->sauveTXT().")";
               
               echo '<h6 class="card-title">Visualisation des modules</h6>';
               foreach ($_SESSION['SESSION_cursus'] as $module) {
                    echo $module->getLabel()." :=: Module (".$module->sauveTXT().")<br>";
                }
               echo '<br><br>';
               //echo $m1->getLabel()." :=: Module (".$m1->sauveTXT().")";echo '<br>';
               //echo $m2->getLabel()." :=: Module (".$m2->sauveTXT().")";echo '<br>';
               //echo $m3->getLabel()." :=: Module (".$m3->sauveTXT().")";
               
               echo 'Affichage de la superGlobale SESSION';
               echo "<pre>";
               print_r($c1->affiche());
               echo "</pre>";
               //$c1->vider();
                
                ?>
          </div>
        </div>
      </div>
    
      
      


    <!-- ================================================================================================================ -->
    <p/><hr/><p/>
    <small>Page de Takam Talla Vigny rédigée 05/04/2024</small>
    <p/><hr/><p/>
  </body>
</html>