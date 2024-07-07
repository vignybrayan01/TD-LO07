<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>formulaire</title>
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
          <a class="navbar-brand" href="#">TAKAM Vigny</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item"><a class="nav-link" href="#exercice1">Exercice 1</a></li>
              <li class="nav-item"><a class="nav-link" href="#exercice2">Exercice 2</a></li>
              <li class="nav-item"><a class="nav-link" href="#exercice3">Exercice 3</a></li>
              

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
        <h1>TD04 : Formulaire PHP avec Bootstrap 5</h1>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 1 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a id='exercice1'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 1 : formulaire de login et méthode GET</h5> 

          <div class='mx-lg-3'> 

           <form method="GET" action="lo07_analyse_formulaire1.php"> <?php //lo07_analyse_formulaire1.php ?>
                <div class="mb-3">                             <?php //td04_e1_action_get.php ?>
                  <label  class="form-label">login</label>
                  <input type="text" class="form-control" name="login"  >
               
                  <label  class="form-label">Entrer votre de passe</label>
                  <input type="password" class="form-control" name="motdepasse"  >
                </div>
                
                <button type="submit" class="btn btn-success">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </form>

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
          <h5 class="card-title">Exercice 2 : formulaire de login et méthode POST</h6>
            <div class='mx-lg-3'> 

                <form method="POST" action="lo07_analyse_formulaire1.php"> <?php //lo07_analyse_formulaire1.php ?>
                    <div class="mb-3">                                  <?php //td04_e2_action_post.php ?>
                      <label  class="form-label">login</label>
                      <input type="text" class="form-control" name="login1" >

                      <label  class="form-label">Entrer votre de passe</label>
                      <input type="password" class="form-control" name="motdepasse1" >
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
                 

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
          <h5 class="card-title">Exercice 3 : Sondage UTT</h6>
            <div class='mx-lg-3'> 

                <form method="POST" action="td04_e3_action_post.php"> <?php //lo07_analyse_formulaire1.php ?>
                    <div class="mb-3">                                  <?php //td04_e3_action_post.php ?>
                        <label  class="form-label"><strong>Nom</strong></label>                                        
                      <input type="text" class="form-control" name="nom"  >
                    </div>
                    
                    <div class="mb-3">
                        <label  class="form-label"><strong>Prénom</strong></label>                                    
                      <input type="text" class="form-control" name="prenom">
                    </div>
                    
                    <div class="mb-3"><label  class="form-label"><strong>Sélectionner votre genre</strong> </label></div> 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="genre" value="homme" >
                        <label class="form-check-label" >Homme</label>
                    </div> 
                    <div class="form-check form-check-inline">        
                        <input class="form-check-input" type="radio" name="genre" value="femme" >
                        <label class="form-check-label" >Femme</label>
                    </div><br><br>
                    
                    <div class="mb-3"><label  class="form-label"><strong>Sélectionner votre status</strong> </label><br>
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check" name="statut" autocomplete="off" id="btncheck1" value="etudiant">
                        <label class="btn btn-outline-primary" for="btncheck1">Etudiant</label>

                        <input type="radio" class="btn-check" name="statut"  autocomplete="off" id="btncheck2" value="doctorant">
                        <label class="btn btn-outline-primary" for="btncheck2">Doctorant</label>

                        <input type="radio" class="btn-check" name="statut"  autocomplete="off" id="btncheck3" value="administratif">
                        <label class="btn btn-outline-primary" for="btncheck3">Administratif</label>
                        
                        <input type="radio" class="btn-check" name="statut"  autocomplete="off" id="btncheck4" value="enseignant">
                        <label class="btn btn-outline-primary" for="btncheck4">Enseignant</label>
                    </div></div>

                    <div class="mb-3"><label  class="form-label"><strong>Sélectionner un véhicule </strong></label>
                    <select class="form-select" size="10" aria-label="Size 10 select example" name="vehicule">
                        <optgroup label="Renault">Renault </option>
                            <option value="Twingo">Twingo</option>
                            <option value="clio">Clio</option>
                            <option value="Captur">Captur</option>
                            <option value="Espace">Espace</option>
                        </optgroup>
                        <optgroup label="Tesla">Tesla </option>
                            <option value="Modèle S">Modèle S</option>
                            <option value="Modèle 3">Modèle 3</option>
                            <option value="Modèle X">Modèle X</option>
                            <option value="Modèle Y">Modèle Y</option>
                        </optgroup>
                     </select></div>
                    
                    
                    <div class="mb-3"><label  class="form-label"><strong>Sélectionner vos UT (plusieurs choix)</strong> </label>
                    <select class="form-select" size="6" multiple aria-label="Multiple select example" name="universites[]">
                        <option value="UTBM">UTBM</option>
                        <option value="UTC">UTC</option>
                        <option value="UTT">UTT</option>
                        <option value="UTSEUS">UTSEUS</option>
                        <option value="UTM(Martinique)">UTM(Martinique)</option>
                        <option value="UTG(Guyane)">UTG(Guyane)</option>
                    </select></div>
                    
                    
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="on"  name="letter" >
                        <label class="form-check-label" ><strong>Je souhaite recevoir la news letter</strong></label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="on"  name="money" >
                        <label class="form-check-label" ><strong>Je souhaite recevoir le remboursement du déplacement</strong></label>
                    </div><br>
                   
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
              

            </div>      
        </div>
      </div>

      
      
      


    <!-- ================================================================================================================ -->
    <p/><hr/><p/>
    <small>Page de Takam Talla Vigny rédigée 26/03/2024</small>
    <p/><hr/><p/>
  </body>
</html>