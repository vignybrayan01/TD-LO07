CREATE TABLE vin (
  id INTEGER UNSIGNED NOT NULL,
  cru VARCHAR(45) NOT NULL,
  annee INTEGER UNSIGNED NOT NULL,
  degre FLOAT NOT NULL,
  PRIMARY KEY(id)
)  ENGINE=InnoDB DEFAULT CHARACTER SET=utf8;

CREATE TABLE producteur (
  id INTEGER UNSIGNED NOT NULL,
  nom VARCHAR(45) NOT NULL,
  prenom VARCHAR(45) NOT NULL,
  region VARCHAR(45) NOT NULL,
  PRIMARY KEY(id)
) ENGINE=InnoDB DEFAULT CHARACTER SET=utf8;

CREATE TABLE recolte (
  producteur_id INTEGER UNSIGNED NOT NULL,
  vin_id INTEGER UNSIGNED NOT NULL,
  quantite INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(producteur_id, vin_id),
  FOREIGN KEY(vin_id) REFERENCES vin(id),
  FOREIGN KEY(producteur_id) REFERENCES producteur(id)
) ENGINE=InnoDB DEFAULT CHARACTER SET=utf8;




