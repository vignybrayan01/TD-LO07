<?php
    session_start(); 
?>
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
        <h1>Formulaire 1 avec Bootstrap 5</h1>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 1 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a id='exercice1'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 1 : Analyses des SuperGlobales</h5>

          <div class='mx-lg-3'> 

                <?php

               
                $a='<div class = "col-4">
                    <table class = "table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">clé</th>
                            <th scope="col">valeur</th>
                          </tr>
                        </thead>
                        <tbody>';
                $b='</tbody> 
                      </table>
                      </div>'; 
                $i=1;
                $j=1;
               
                  
                
                echo '<br><br> Methode POST';
                  echo $a;
                  foreach ($_POST as $key => $value){
                       
                       
                       if(is_array($value)){
                           
                           echo '<tr>
                            <th scope="row">'.$i.'</th>
                            <td>'.$key.'</td>
                            <td>'. implode(", ", $value).'</td>
                            </tr>';                            
                       }else{
                           echo '<tr>
                            <th scope="row">'.$i.'</th>
                            <td>'.$key.'</td>
                            <td>'.$value.'</td>
                            </tr>';
                       }                      
                   $i=$i+1;
                   } 
                   echo $b;
                   
                   
                   
                   
                   echo '<br><br> Methode GET';
                  echo $a;
                  foreach ($_GET as $key => $value){
                       
                       
                       if(is_array($value)){
                           
                           echo '<tr>
                            <th scope="row">'.$i.'</th>
                            <td>'.$key.'</td>
                            <td>'. implode(", ", $value).'</td>
                            </tr>';                            
                       }else{
                           echo '<tr>
                            <th scope="row">'.$i.'</th>
                            <td>'.$key.'</td>
                            <td>'.$value.'</td>
                            </tr>';
                       }                      
                   $i=$i+1;
                   } 
                   echo $b;
                   
                   
                   
                   
                   echo '<br><br> Variable COOKIE';
                  echo $a;
                  foreach ($_COOKIE as $key => $value){
                       
                       
                       if(is_array($value)){
                           
                           echo '<tr>
                            <th scope="row">'.$i.'</th>
                            <td>'.$key.'</td>
                            <td>'. implode(", ", $value).'</td>
                            </tr>';                            
                       }else{
                           echo '<tr>
                            <th scope="row">'.$i.'</th>
                            <td>'.$key.'</td>
                            <td>'.$value.'</td>
                            </tr>';
                       }                      
                   $i=$i+1;
                   } 
                   echo $b;
                   
                   
                   
                   echo '<br><br> Variable SESSION';
                  echo $a;
                  foreach ($_SESSION as $key => $value){
                       
                       
                       if(is_array($value)){
                           
                           echo '<tr>
                            <th scope="row">'.$j.'</th>
                            <td>'.$key.'</td>
                            <td>'. implode(", ", $value).'</td>
                            </tr>';                            
                       }else{
                           echo '<tr>
                            <th scope="row">'.$j.'</th>
                            <td>'.$key.'</td>
                            <td>'.$value.'</td>
                            </tr>';
                       }                      
                   $j=$j+1;
                   } 
                   echo $b;
                   
                
                
                
                
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