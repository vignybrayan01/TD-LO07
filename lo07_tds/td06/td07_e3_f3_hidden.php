<!doctype html>
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

      <?php require 'nav.html'; ?> 

      <!-- ================================================================================================================ -->
      <!-- ===== Les jumbotrons de BT3 n'existe plus et sont remplacés par de simple div ===== -->       

      <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>Formulaire 3 avec Bootstrap 5</h1>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 1 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a id='exercice1'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 3 - 3 : Traitement des données</h5>

          <div class='mx-lg-3'> 

             <form method="POST" action="lo07_analyse_superglobales2.php"> 
                 
                <input type="hidden" name="nom_organisation" value="<?php echo $_POST['nom_organisation']; ?>">
                <input type="hidden" name="adresse_organisation" value="<?php echo $_POST['adresse_organisation']; ?>">
                <input type="hidden" name="date_ouverture" value="<?php echo $_POST['date_ouverture']; ?>">
                <input type="hidden"  name="nom_respo_organisation" value="<?php echo $_POST['nom_respo_organisation']; ?>" >
                <input type="hidden"  name="nom_respo_traitement"  value="<?php echo $_POST['nom_respo_traitement']; ?>">
                <input type="hidden"  name="nom_délégué_donnée"  value="<?php echo $_POST['nom_délégué_donnée']; ?>">

                <div class="mb-3">                             
                  <label  class="form-label">Nom du traitement</label>
                  <input type="text" class="form-control" name="nom_traitement"  >
               
                  <label  class="form-label">Finalité principale du traitement</label>
                  <input type="text" class="form-control" name="finalite_traitement"  >
                </div>
                
                <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="on"  name="traitement_dcp" >
                        <label class="form-check-label" ><strong>Traitement avec des données personnelles</strong></label>
                </div>
                <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="on"  name="traitement_donnees_sensibles" >
                        <label class="form-check-label" ><strong>Traitement avec des données sensibles</strong></label>
                </div>
                <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="on"  name="transferts_hors_ue" >
                        <label class="form-check-label" ><strong>Transferts de données hors de l’UE</strong></label>
                </div>
                
                <button type="submit" class="btn btn-success">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </form>
              
          </div>
        </div>
      </div>
    
      
      


    <!-- ================================================================================================================ -->
    <p/><hr/><p/>
    <small>Page de Takam Talla Vigny rédigée 05/04/2024</small>
    <p/><hr/><p/>
  </body>
</html>