-- Insertion des données statiques 

-- Insertion des catégories dans la table categories
INSERT INTO categories (categorie) VALUES ('Classy');
INSERT INTO categories (categorie) VALUES ('Daily');
INSERT INTO categories (categorie) VALUES ('Working classy');
INSERT INTO categories (categorie) VALUES ('Study');
INSERT INTO categories (categorie) VALUES ('Vacancy');


-- Insertion modeles
INSERT INTO modeles (modele) VALUES ('Sac');
INSERT INTO modeles (modele) VALUES ('Chapeau');


-- Insertion produits
INSERT INTO produits (id_categorie, id_modele, nom, paragraphe, quantite, hauteur, largeur, prix_unitaire, taille, type,'["http://127.0.0.1:8000/assets/images/image3.png"]') 
VALUES (1, 1, 'Produit 1', 'Description du produit 1', 10, '30cm', '20cm', 100.00, 'PM', 'produit', '[]');
INSERT INTO produits (id_categorie, id_modele, nom, paragraphe, quantite, hauteur, largeur, prix_unitaire, taille, type,'["http://127.0.0.1:8000/assets/images/image3.png"]') 
VALUES (2, 2, 'Produit 2', 'Description du produit 2', 20, '40cm', '30cm', 200.00, 'MM', 'modele_existant', '[]');
INSERT INTO produits (id_categorie, id_modele, nom, paragraphe, quantite, hauteur, largeur, prix_unitaire, taille, type,) 
VALUES (3, 3, 'Produit 3', 'Description du produit 3', 30, '50cm', '40cm', 300.00, 'GM', 'forme','["http://127.0.0.1:8000/assets/images/image3.png"]');


-- Insertion variants
INSERT INTO variants (variant) VALUES ('Anses');
INSERT INTO variants (variant) VALUES ('Points');
INSERT INTO variants (variant) VALUES ('Couleurs');
INSERT INTO variants (variant) VALUES ('Motifs');



-- Insertion variant-options
INSERT INTO variant_options (id_variant, variant_option, prix_unitaire, image_urls) 
VALUES (1, 'Red', 10.00, '[]');
INSERT INTO variant_options (id_variant, variant_option, prix_unitaire, image_urls) 
VALUES (1, 'Blue', 10.00, '[]');
INSERT INTO variant_options (id_variant, variant_option, prix_unitaire, image_urls) 
VALUES (2, 'Small', 5.00, '[]');
INSERT INTO variant_options (id_variant, variant_option, prix_unitaire, image_urls) 
VALUES (2, 'Large', 5.00, '[]');
INSERT INTO variant_options (id_variant, variant_option, prix_unitaire, image_urls) 
VALUES (3, 'Cotton', 15.00, '[]');
INSERT INTO variant_options (id_variant, variant_option, prix_unitaire, image_urls) 
VALUES (3, 'Wool', 20.00, '[]');

