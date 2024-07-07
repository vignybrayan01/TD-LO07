<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TODO</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap53.min.css" type="text/css"/>

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

      <nav class="navbar navbar-expand-lg bg-primary fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">LO07</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="#">TD03</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item"><a class="nav-link" href="#exercice1">Exercice 1</a></li>
              <li class="nav-item"><a class="nav-link" href="#exercice2">Exercice 2</a></li>
              <li class="nav-item"><a class="nav-link" href="#exercice3">Exercice 3</a></li>
              <li class="nav-item"><a class="nav-link" href="#exercice4">Exercice 4</a></li>
              <li class="nav-item"><a class="nav-link" href="#exercice5">Exercice 5</a></li>

              <!-- ===== Documentation ===== -->

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Documentation</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Ajouter vos sites personnels de documentation (>3)</a></li>
                  <li><a class="dropdown-item" href="https://openclassrooms.com/fr/courses/7542506-creez-des-sites-web-responsives-avec-bootstrap-5" target="_blank">openclassrooms</a></li>
                  <li><a class="dropdown-item" href="https://www.templatemonster.com/fr/bootstrap-5-website-templates/" target="_blank">templatemonster</a></li>
                  <li><a class="dropdown-item" href="https://www.w3schools.com/php/default.asp" target="_blank">w3schools</a></li>
                  <li><a class="dropdown-item" href="https://www.udemy.com/course/bootstrap-5-creer-et-lancer-des-sites-web-reactifs-debutants/?couponCode=KEEPLEARNING" target="_blank">udemy</a></li>
                </ul>
              </li>

            </ul>
          </div>
        </div>
      </nav> 

      <!-- ================================================================================================================ -->
      <!-- ===== Les jumbotrons de BT3 n'existe plus et sont remplacés par de simple div ===== -->       

      <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>Introduction à PHP</h1>
        <p>PHP est un langage de scripts généraliste et Open Source spécialement conçu pour le développement d'applications web.</p>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 1 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a id='exercice1'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 1 : réparation et validation</h5>

          <div class='mx-lg-3'> 

           <?php
                echo "Bonjour à tous";
            ?>

          </div>
        </div>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 2 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a id='exercice2'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 2 : variables PHP</h6>
            <div class='mx-lg-3'> 

              <?php
                    
                    $nom = "Dupont";
                    $prenom = "Jean";
                    $age = 30;
                    $ingenieur = 1; 
              ?>      
                
         <ul class="list-group">
            <li class="list-group-item list-group-item-action" ><?php  echo "Nom = $nom"; ?></li>
            <li class="list-group-item list-group-item-action"><?php  echo "Prénom = $prenom"; ?></li>
            <li class="list-group-item list-group-item-action"><?php  echo "Âge = $age "; ?></li>
            <li class="list-group-item list-group-item-action"><?php  echo "ingénieur = $ingenieur"; ?></li>
         </ul> 
                 

            </div>
        </div>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 3 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a id='exercice3'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 3 : tableaux PHP</h6>
            <div class='mx-lg-3'> 

              <?php
              
              $tabCapitales=array("Paris","Berlin","Rome","Madrid","Londres","Bruxelles","Amsterdan","Lisbonne","Vienne","Helsinki");
              $tabCapitales[]="Varsovie";
              unset($tabCapitales[4]);
              
              
                //print_r
              echo '<span style="color: red;">print_r</span><br><br>';
              echo "<pre>";
                print_r($tabCapitales);
              echo "</pre><hr>";
              
                //foreach
               echo '<span style="color: red;">foreach</span>'; 
               echo '<ul class="list-group">';
                foreach($tabCapitales as $capitale){ 
                echo '<li class="list-group-item list-group-item-action">'.$capitale.'</li>';
                }
               echo "</ul><hr>"; 
              
               // implode()
               echo '<span style="color: red;">implode()</span>';
               echo'<div class="alert alert-warning" role="alert">';
               echo implode("; ", $tabCapitales) ;
               echo'</div><hr>';
               
               //Accès aux données
               echo '<span style="color: red;">Accès aux données</span>';
               echo '<ul class="list-group">';
               echo '<li class="list-group-item list-group-item-action">'."Nombre d éléments = ".count($tabCapitales);
               sort($tabCapitales);
               echo '<li class="list-group-item list-group-item-action role="alert" >'."Tableau trié = ".implode("; ", $tabCapitales);
               echo "</ul>";
         
        ?>

            </div>      
        </div>
      </div>

       <!-- ================================================================================================================ -->
      <!-- ===== Exercice 4 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a id='exercice4'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 4 : tableaux PHP</h6>
            <div class='mx-lg-3'> 

                
                <?php
              $hashCapitales = array(
                    "Bulgarie" => "Sofia",
                    "Chypre" => "Nicosie",
                    "Estonie" => "Tallinn",
                    "Lettonie" => "Riga",
                    "Lituanie" => "Vilnius",
                    "Roumanie" => "Bucarest"
                );
              
              // Estonie?
               echo '<hr><span style="color: red;">Estonie?</span>';
               echo'<div class="alert alert-warning" role="alert">';
               echo $hashCapitales["Estonie"] ;
               echo'</div><hr>';
               
               $hashCapitales["Estonie"] = "Narva";
               // Bilan de l'ajout
               echo '<span style="color: red;">Bilan de l\'ajout</span>';
               echo'<div class="alert alert-warning" role="alert">';
               echo $hashCapitales["Estonie"] ;
               echo'</div><hr>';
              
               //print_r
              echo '<span style="color: red;">print_r</span><br><br>';
              echo "<pre>";
                print_r($hashCapitales);
              echo "</pre><hr>";
              
              //foreach
               echo '<span style="color: red;">foreach</span>'; 
               echo '<ul class="list-group">';
                foreach($hashCapitales as $pays => $capitale){ 
                echo '<li class="list-group-item list-group-item-action">'.$pays." ==> ".$capitale.'</li>';
                }
               echo "</ul><hr>";
              
               //Accès aux données
               echo '<span style="color: red;">Accès aux données</span>';
               echo '<ul class="list-group">';
               echo '<li class="list-group-item list-group-item-action">'."Listes des clés = ";
               echo "<pre>";
                print_r(array_keys($hashCapitales));
               echo "</pre>";
               echo '</li>';
               
               
               echo '<li class="list-group-item list-group-item-action role="alert" >'."Listes des valeurs = ";
               echo "<pre>";
                $values = array_values($hashCapitales);
                print_r($values);
               echo "</pre>";
               echo '</li>';
               echo "</ul>";
               

              ?>
            </div>      
        </div>
      </div>
      
       <!-- ================================================================================================================ -->
      <!-- ===== Exercice 5 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a id='exercice5'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 5 : tableaux PHP</h6>
            <div class='mx-lg-3'> 

              <?php
              
              //fonction
              function badge($label,$compteur){
                  $a = '<button type="button" class="btn btn-secondary">';
                  $b =$label.'<span class="badge text-bg-success">'.$compteur.'</span>';
                  $c ='</button> ';
                  return $a."".$b."".$c;
              }
              
              //Test de la fonction
              echo '<hr><span style="color: red;">Test de la fonction avec (web,6)</span><br>';
              echo badge("web", 6);
              echo '<br>';  
              
              //Accès aux données
              echo '<hr><span style="color: red;">Accès aux données</span><br>';
              foreach($tabCapitales as $capitale){ 
                echo badge($capitale, strlen($capitale));
                }
              ?>

            </div>      
        </div>
      </div>
      
    </div>


    <!-- ================================================================================================================ -->
    <p/><hr/><p/>
    <small>Page de Takam Talla Vigny rédigée 19/03/2024</small>
    <p/><hr/><p/>
  </body>
</html>