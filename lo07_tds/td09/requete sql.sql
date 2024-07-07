/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/SQLTemplate.sql to edit this template
 */
/**
 * Author:  Elève
 * Created: 18 avr. 2024
 */
-- Q01 : Affichez les informations contenues dans la relation vin avec une requête SQL.
select * from vin;

-- Q02 : Affichez le cru et l'année des vins (projection).
select cru, annee from vin;

-- Q03 : Affichez le cru et l'année des vins de 1976 (restriction).
select cru, annee from vin WHERE annee=1976;

-- Q04 : Affichez les vins par ordre des crus.
select cru, annee from vin GROUP BY cru;

-- Q05 : Affichez les vins par ordre des crus en supprimant les crus en double
select DISTINCT cru, annee from vin GROUP BY cru;

-- Q06 : Donner la liste des vins dont le degré est compris entre 11° et 12°. Utilisez between
select * from vin WHERE degre BETWEEN 11 AND 12;

-- Q07 : Affichez les vins dont le cru commence par 'C' de l'année 1980 ordonné par degré.
select * from vin WHERE cru LIKE "C%" AND annee=1980 ORDER BY degre;

-- Q08 : Donner le nombre de crus.
select count(cru) from vin;

-- Q09 : Donner le nombre de crus distinct
select count(DISTINCT cru) from vin;

-- Q10 : Quel est le degré moyen des crus ?
select AVG(degre) from vin;

-- Q11 : Quel est le plus fort degré des vins ?
select MAX(degre) from vin;

-- Q12 : Quels sont les crus (ordonnés par degré et année) de degré supérieur au degré moyen des crus ?
select cru, annee, degre FROM vin GROUP BY cru HAVING degre > AVG(degre) ORDER BY degre DESC, annee;

-- Q13 :  Affichez la liste des producteurs qui n'ont pas de prénom
SELECT * FROM producteur WHERE prenom="";

-- Q14 :   Donnez la liste des régions des producteurs.
SELECT region FROM producteur;

-- Q15 :   Donnez la liste des régions des producteurs sans doublons ordonnée par région
SELECT DISTINCT region FROM producteur;

-- Q16 :    Donner la liste par ordre alphabétique des noms et des prénoms des producteurs de vins n'appartenant pas aux régions suivantes : Corse, Beaujolais, Bourgogne et Rhône
SELECT nom, prenom FROM producteur WHERE region <> "Corse" AND region <> "Beaujolais" AND region <> "Bourgogne" AND region <> "Rhône" ORDER BY nom, prenom;

-- Q17 :    Combien existe-t-il de producteurs par région.
SELECT COUNT(id), region FROM producteur GROUP BY region;

-- Q18 :    Quelle est la quantité de vin produite de degré 12 ?
SELECT SUM(r.quantite),v.degre FROM recolte r, vin v WHERE r.vin_id=v.id AND v.degre=12;

-- Q19 :     Quels sont les noms des producteurs du cru 'Etoile', leurs régions et les quantités totales de vins récoltés ?
SELECT p.nom, p.region, SUM(r.quantite) FROM recolte r, vin v, producteur p WHERE p.id=r.producteur_id AND  r.vin_id=v.id AND v.cru="Etoile" GROUP BY r.producteur_id;

-- Q20 :    Combien y-a-t-il de producteurs par région dans les régions Savoie et Jura ?
SELECT region, COUNT(*) FROM producteur WHERE region="Savoie" AND region="Jura" GROUP BY region;

-- Q21 :    Donner la liste des noms et prénoms des producteurs produisant au moins trois crus. Utilisez le having.
SELECT p.nom, p.region FROM recolte r, producteur p WHERE p.id=r.producteur_id GROUP BY r.producteur_id HAVING COUNT(DISTINCT r.vin_id)>=3;

-- Q22 :    . Modifiez la structure de la relation vin en ajoutant un attribut bio. Utilisez l'instruction alter table et la valeur false pour tous les tuples déjà présents.
ALTER TABLE vin ADD COLUMN bio BOOLEAN NOT NULL DEFAULT FALSE;

-- Q23 :    3. Vérifiez la présence de cette nouvelle colonne à l'aide d'une requête SQL simple
DESCRIBE vin;

-- Q24 :    Tous les vins de 1980 sont bio. Modifiez les données de la table vin en utilisant update
UPDATE vin SET bio=TRUE WHERE annee=1980;

-- Q25 :    Vérifiez à l'aide d'une requête SQL effectuant un group by sur l'attribut bio.
SELECT bio, COUNT(*) FROM vin GROUP BY bio;

-- Q26 :    Insérez un nouveau vin 'Champagne' de 2020 de degré 7 avec un id = 1000.
INSERT INTO vin (id,cru,annee,degre,bio) VALUES(1000,'Champagne',2020,7,FALSE);

-- Q27 :    Vérifiez la présence de ce vin par une requête SQL
SELECT *FROM vin WHERE id=1000;

-- Q28 :    Insérez un nouveau vin 'Rhum' de l’année 2022, de degré 45 avec un id = 1000. Expliquez l'erreur
-- INSERT INTO vin (id,cru,annee,degre,bio) VALUES(1000,'Rhum',2022,45,FALSE);
-- la requête ne va pas fonctionner car l'indentifiant existe déja pour un vin

-- Q29 :     Affichez toutes les paires de producteurs habitant la région Alsace. Les tuples du résultat seront de la forme id1, nom1, id2, nom2, région. La présence d'un tuple avec id1 et id2 interdit la présence d'un tuple avec id2 et id1
SELECT p1.id,p1.nom,p2.id,p2.nom,p1.region FROM producteur p1, producteur p2 WHERE p1.region="Alsace" AND p2.region="Alsace" AND p1.id<p2.id; 

-- Q30 :    Supprimer la table vin avec une instruction drop. Expliquez l'erreur. Proposez une solution pour supprimer l'ensemble des relations.
-- il ny aura pas de suppression car lerreur sera du au contrainte dintegrité que la table possède.
ALTER TABLE recolte DROP FOREIGN KEY vin_id;
DROP TABLE vin 