<!doctype html>
<?php
require ('lo07_biblio_formulaire.php');
//require ('td05_tournoi_action.php');
?>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GET et POST</title>
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

      <nav class="navbar navbar-expand-lg bg-primary fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">TAKAM Vigny</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          
          
        </div>
      </nav> 

      <!-- ================================================================================================================ -->
      <!-- ===== Les jumbotrons de BT3 n'existe plus et sont remplacés par de simple div ===== -->       

      <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>Formulaire avec Bootstrap 5</h1>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 1 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a id='exercice1'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 3 : Traitement du formulaire des joueurs</h5>

          <div class='mx-lg-3'> 

                <?php

          form_begin("mt-3", "get", "td05_tournoi_action.php");
          $n=$_GET['nombre_joueurs'];
          
          for($i=1;$i<=$n;$i++){
              $name="nom_".$i;
              $prenom="prenom_".$i;
              $email="email_".$i;  
              
            echo ("<div class='form-group col-6'>");
            echo (" <label for='$name' class=' fw-bold'>$name</label>");
            echo (" <input type='text' class='form-control' name='$name' size='30'  >");
            
            echo (" <label for='$prenom' class=' fw-bold'>$prenom</label>");
            echo (" <input type='text' class='form-control' name='$prenom' size='30'  >");
            
            echo (" <label for='$email' class=' fw-bold'>$email</label>");
            echo (" <input type='email' class='form-control' name='$email' size='30'  >");
            
            echo ("</div><br><br>") ;
          }
         
          
          
          form_input_reset("effacer");
          form_input_submit("envoyer");
          form_end();
               
                
                
                
                ?>
          </div>
        </div>
      </div>
    
      
      


    <!-- ================================================================================================================ -->
    <p/><hr/><p/>
    <small>Page de Takam Talla rédigée le 01/04/2024</small>
    <p/><hr/><p/>
  </body>
</html>