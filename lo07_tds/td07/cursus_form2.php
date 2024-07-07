<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Objet en PHP</title>
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
        <h1>Cursus_form2</h1>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 1 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a id='exercice1'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Formulaire pour la collecte des données d'un module</h5>

          <div class='mx-lg-3'> 

             <form method="POST" action="cursus_action2.php"> 
                <div class="mb-3">                             
                  <label  class="form-label">Sigle:</label>
                  <input type="text" class="form-control" name="sigle" value='LO07' >
                </div>
                 
                <div class="mb-3">
                  <label  class="form-label">Label:</label>
                  <input type="text" class="form-control" name="label" value='web' >
                </div>
                 
                <div class="mb-3">
                  <label  class="form-label">Catégorie:</label>
                    <select class="form-select" size="4" aria-label="Size 10 select example" name="categorie" value="" >
                        <option value="CS">CS</option>
                        <option value="TM">TM</option>
                        <option value="EC">EC</option>
                        <option value="ME">ME</option>
                        <option value="CT">CT</option>
                    </select>
                </div>
                 
                <div class="mb-3">
                  <label  class="form-label">Effectif:</label>
                  <input type="number" class="form-control" name="effectif" value='87' >
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