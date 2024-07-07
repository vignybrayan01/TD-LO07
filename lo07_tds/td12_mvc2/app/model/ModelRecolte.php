
<!-- ----- debut ModelVin -->

<?php
require_once 'Model.php';

class ModelRecolte {
 private $producteur_id, $vin_id, $quantite;

 // pas possible d'avoir 2 constructeurs
 public function __construct($producteur_id = NULL, $vin_id = NULL, $quantite = NULL) {
  // valeurs nulles si pas de passage de parametres
  if (!is_null($producteur_id && $this->vin_id)) {
   $this->producteur_id = $producteur_id;
   $this->vin_id = $vin_id;
   $this->quantite = $quantite;
  }
 }

 function setProducteur_id($producteur_id) {
  $this->producteur_id = $producteur_id;
 }

 function setVin_id($vin_id) {
  $this->vin_id = $vin_id;
 }

 function setQuantite($quantite) {
  $this->quantite = $quantite;
 }


 function getProducteur_id() {
  return $this->producteur_id;
 }

 function getVin_id() {
  return $this->vin_id;
 }

 function getQuantite() {
  return $this->quantite;
 }
 
// retourne une liste des id
 public static function getAllId() {
  try {
   $database = Model::getInstance();
   $query = "select id from vin";
   $statement = $database->prepare($query);
   $statement->execute();
   $results = $statement->fetchAll(PDO::FETCH_COLUMN, 0);
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
 
 public static function getAllinfos() {
  try {
    $database = Model::getInstance();
    $query1 = "SELECT id, cru, annee FROM vin";
    $statement1 = $database->prepare($query1);
    $statement1->execute();
    $results1 = $statement1->fetchAll(PDO::FETCH_ASSOC);

    // Deuxième requête
    $query2 = "SELECT id, nom, prenom, region FROM producteur";
    $statement2 = $database->prepare($query2);
    $statement2->execute();
    $results2 = $statement2->fetchAll(PDO::FETCH_ASSOC);

    $results = [
        'vin' => $results1,
        'producteur' => $results2
    ];
    return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }

 public static function getMany($query) {
  try {
   $database = Model::getInstance();
   $statement = $database->prepare($query);
   $statement->execute();
   $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelRecolte");
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
 


 public static function getAll() {
  try {
   $database = Model::getInstance();
   //$query = "select region, cru, annee, degre, nom, prenom, quantite from vin,
   //         producteur, recolte where recolte.vin_id = vin.id and recolte.producteur_id =
   //         producteur.id order by region";
   $query = "select vin.id as id_vin, producteur.id as id_producteur, region, cru, nom, prenom, quantite from vin,
            producteur, recolte where recolte.vin_id = vin.id and recolte.producteur_id =
            producteur.id order by vin.id, producteur_id";
   $statement = $database->prepare($query);
   $statement->execute();
   $results = $statement->fetchAll(PDO::FETCH_ASSOC);
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }

 public static function getOne($vin_id, $producteur_id) {
  try {
   $database = Model::getInstance();
   
   $checkQuery = "SELECT vin_id,producteur_id,quantite FROM recolte WHERE vin_id = :vin_id AND producteur_id = :producteur_id";
   $statement = $database->prepare($checkQuery);
   $statement->execute([
            ':vin_id' => $vin_id,
            ':producteur_id' => $producteur_id
        ]);
   
   
   $results = $statement->fetchAll(PDO::FETCH_ASSOC);
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }

 public static function traitement($vin_id, $producteur_id, $quantite) {
     
  try {
   
   $database = Model::getInstance();

   $checkQuery = "SELECT COUNT(*) FROM recolte WHERE vin_id = :vin_id AND producteur_id = :producteur_id";
   $checkStatement = $database->prepare($checkQuery);
   $checkStatement->execute([
            ':vin_id' => $vin_id,
            ':producteur_id' => $producteur_id
        ]);

    $count = $checkStatement->fetchColumn();

        if ($count > 0) {
            //  faire une mise à jour
            $updateQuery = "UPDATE recolte SET quantite = :quantite WHERE vin_id = :vin_id AND producteur_id = :producteur_id";
            $updateStatement = $database->prepare($updateQuery);
            $updateStatement->execute([
                ':quantite' => $quantite,
                ':vin_id' => $vin_id,
                ':producteur_id' => $producteur_id
            ]);
            return 0;
            //echo "Mise à jour réussie!";
        } else {
            // faire une insertion
            $insertQuery = "INSERT INTO recolte (vin_id, producteur_id, quantite) VALUES (:vin_id, :producteur_id, :quantite)";
            $insertStatement = $database->prepare($insertQuery);
            $insertStatement->execute([
                ':vin_id' => $vin_id,
                ':producteur_id' => $producteur_id,
                ':quantite' => $quantite
            ]);
            return 1;
            //echo "Insertion réussie!";
        }
   
    
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return -1;
  }
 }
 
 

 public static function update() {
  echo ("ModelVin : update() TODO ....");
  return null;
 }

 

}
?>
<!-- ----- fin ModelVin -->
