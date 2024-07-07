
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
        <h1>Cursus_main</h1>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 1 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a id='exercice1'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Création cursus</h5>

          <div class='mx-lg-3'> 

                <?php
                
                require_once('Module.class.php');
                require_once('Cursus.class.php');
                
                $m2=new Module("LO07", "Technologie du web", "TM", 140);
                $m3=new Module("IF26", "Application mobiles Android", "TM", 77);
                
                
               echo '<h5 class="card-title">Définition des modules</h5>';
               echo "Module (".$m2->sauveTXT().")";echo '<br>';
               echo "Module (".$m3->sauveTXT().")";
               echo '<br><br>';
               
               echo '<h5 class="card-title">Définition d un cursus</h5>';
               $c1= new Cursus();
               $c1->addModule($m2);
               $c1->addModule($m3);
               echo "addmodule : Module (".$m2->sauveTXT().")";echo '<br>';
               echo "addmodule : Module (".$m3->sauveTXT().")";
               echo '<br><br>';
               
               echo '<h5 class="card-title">Affichage d un cursus</h5>';
               echo "<pre>";
               print_r($c1);
               echo "</pre>";
               
               
                
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