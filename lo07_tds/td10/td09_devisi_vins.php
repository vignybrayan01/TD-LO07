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
        <h1>Interactions PHP et MySQL en PDO</h1>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 1 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a id='exercice1'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Connexion à ma base sur dev-isi</h5>

          <div class='mx-lg-3'> 

             <?php
             $dsn='mysql:dbname=takamvig;host=localhost;charset=utf8';
             $username='takamvig';
             $password='ZTTz9FHS';
             
             
                 
                 $database=new PDO($dsn,$username,$password);
                 $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                 
                 $d1='<ol><li>'.$dsn.'</li>'
                         . '<li>'.$username.'</li>'
                         . '<li>*******</li></ol> <br>';
                 echo $d1;
                 
                 
                 //3
                 $Suppression = "DELETE FROM vin WHERE id = 3001";
                 $database->exec($Suppression);
                 $requete = "insert into vin values (3001, 'Champagne de Troyes', 1976, 11.45)";
                 $re=$database->exec($requete);
                 echo '<h5 class="card-title">Insertion d un tuple : insert into vin values (3001, "Champagne de Troyes", 1976, 11.45) </h5>';
                 echo 'Nombre de tuples ajoutés = '.$re;
                 echo '<br><br>';
                 
                 //4
                 $requete = "select * from vin where annee = 1976";
                 $re=$database->query($requete);
                 echo '<h5 class="card-title">Requête SQL : query= select * from vin where annee = 1976</h5>';
                 $i=1;
                 while ($t=$re->fetch(PDO::FETCH_ASSOC)){
                     echo $i.'. vin('.$t['id'].', '.$t['cru'].', '.$t['annee'].', '.$t['degre'].')';
                     echo '<br>';
                     $i=$i+1;
                 }
                 echo '<br><br>';
                 
                 //5
                 $requete = "select * from vin where annee = 1976";
                 $re=$database->query($requete);
                 echo '<h5 class="card-title">Resultats dans un tableau Bootstrap avec select * from vin where annee = 1976</h5>';
                 $a='<table class = "table table-bordered">
                        <tbody>';
                 $b='</tbody> 
                      </table>';
                 echo $a;
                 while ($t=$re->fetch(PDO::FETCH_ASSOC)){
                     echo '<tr>';
                     echo '<td>'.$t['id'].'</td><td>'.$t['cru'].'</td><td>'.$t['annee'].'</td><td>'.$t['degre'].'</td>';
                     echo '</tr>';
                 }
                 echo $b;echo "<br><br>";
                 
                 //6
                 $requete = "select id, cru from vin where annee = 1976";
                 $re=$database->query($requete);
                 echo '<h5 class="card-title">Recupération des noms des attributs avec select id, cru from vin where annee = 1976</h5>';
                 echo '<table class = "table table-bordered">
                     <thead class="thead-danger">';
                     for ($i = 0; $i < $re->columnCount(); $i++) {
                        $colonne = $re->getColumnMeta($i)['name'];
                        echo "<th>$colonne</th>";
                    }
                  echo '</thead><tbody>';
                 $c='</tbody> 
                      </table>';
                 while ($t=$re->fetch(PDO::FETCH_ASSOC)){
                     echo '<tr>';
                     echo '<td>'.$t['id'].'</td><td>'.$t['cru'].'</td>';
                     echo '</tr>';
                 }
                 echo $c;echo "<br><br>";
                 
                 //7
                 $requete = "select cru, annee from vin where annee = ?";
                 $re=$database->prepare($requete);
                 $annee=1980;
                 $re->execute([$annee]);
                 echo '<h5 class="card-title">Requête paramètre par position avec annee = 1980</h5>';
                 echo '<table class = "table table-bordered">
                     <thead class="thead-danger">';
                     echo '<tr>';
                     echo '<th>cru</th><th>annee</th>';
                     echo '</tr>';
                  echo '</thead><tbody>';
                 $c='</tbody> 
                      </table>';
                 while ($t=$re->fetch(PDO::FETCH_ASSOC)){
                     echo '<tr>';
                     echo '<td>'.$t['cru'].'</td><td>'.$t['annee'].'</td>';
                     echo '</tr>';
                 }
                 echo $c;echo "<br><br>";
                 
                 //8
                 $requete = "select * from vin where annee = :an and degre = :dg";
                 $re=$database->prepare($requete);
                 $annee=1980;
                 $degre=10.00;
                 $re->execute ( [
                            'an' => $annee,
                            'dg' => $degre
                                      ] );

                 //$re->execute([$annee]);
                 echo '<h5 class="card-title">Paramètre nommés</h5>';
                 echo '<table class = "table table-bordered">
                     <thead class="thead-danger">';
                     echo '<tr>';
                     echo '<th>cru</th><th>annee</th>';
                     echo '</tr>';
                  echo '</thead><tbody>';
                 $c='</tbody> 
                      </table>';
                 while ($t=$re->fetch(PDO::FETCH_ASSOC)){
                     echo '<tr>';
                     echo '<td>'.$t['cru'].'</td><td>'.$t['annee'].'</td>';
                     echo '</tr>';
                 }
                 echo $c;echo "<br><br>";
                 
                 
                 //9
                 try{
                  $requete = "select * from vinXYZ";
                 $re=$database->prepare($requete);
                 $re->execute();
                 echo '<h5 class="card-title">Gestion des erreurs</h5>';
                 //echo $re;
                 echo '<br><br>'; 
                 } catch (PDOException $e){
                     echo $e->getMessage();
                 }
                 
                 //10
                 try{
                 echo '<h5 class="card-title">Gestion des transactions</h5>';
                 
                 $database->beginTransaction();
                 $requete = "insert into vin values (2000, 'Champagne de Troyes', 2019, 11.45)";
                 $database->exec($requete);
                 $database->exec($requete);
                 $database->commit();
                 echo 'Les deux transactions ont bien été effectués';
                 
                 } catch (PDOException $e){
                     echo $e->getMessage();
                 }
                 
                 //12
                echo '<h5 class="card-title">Suppression de vin</h5>';
                $requete = "DELETE FROM vin WHERE id > 2500";
                $re=$database->exec($requete);
                echo 'Nombre de vins supprimés: '.$re;
                 
                 
                 
                 
                 
             
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