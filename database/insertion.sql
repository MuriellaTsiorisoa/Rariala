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

INSERT INTO produits (id_categorie, id_modele, nom, paragraphe, quantite, hauteur, largeur, prix_unitaire, taille, type, image_urls) 
VALUES (1, 1, 'Produit 1', 'Description du produit 1', 10, '30cm', '20cm', 100.00, 'PM', 'produit', '["http://127.0.0.1:8000/assets/imagejpeg/image3.png"]');
INSERT INTO produits (id_categorie, id_modele, nom, paragraphe, quantite, hauteur, largeur, prix_unitaire, taille, type,image_urls) 
VALUES (2, 2, 'Produit 2', 'Description du produit 2', 20, '40cm', '30cm', 200.00, 'MM', 'modele_existant', '["http://127.0.0.1:8000/assets/imagejpeg/image3.png"]');
INSERT INTO produits (id_categorie, id_modele, nom, paragraphe, quantite, hauteur, largeur, prix_unitaire, taille, type, image_urls) 
VALUES (3, 3, 'Produit 3', 'Description du produit 3', 30, '50cm', '40cm', 300.00, 'GM', 'forme','["http://127.0.0.1:8000/assets/imagejpeg/image3.png"]');


-- classy
** Produits disponibles

** modeles existants
-- daily
** Produits disponibles
** modeles existants
-- working classy
** Produits disponibles
** modeles existants
-- study
** Produits disponibles
** modeles existants
--vacancy
** Produits disponibles
** modeles existants

-- formes libres

INSERT INTO produits (id_categorie, id_modele, nom, paragraphe, quantite, hauteur, largeur, prix_unitaire, taille, type,image_urls) 
VALUES (NULL, 1, 'Forme libre 1', NULL,NULL,NULL,NULL,90000,NULL, 'forme', '["http://127.0.0.1:8000/assets/imagejpeg/forme1.jpg"]');

INSERT INTO produits (id_categorie, id_modele, nom, paragraphe, quantite, hauteur, largeur, prix_unitaire, taille, type,image_urls) 
VALUES (NULL, 1, 'Forme libre 2', NULL,NULL,NULL,NULL,100000,NULL, 'forme', '["http://127.0.0.1:8000/assets/imagejpeg/forme2.jpg"]');

INSERT INTO produits (id_categorie, id_modele, nom, paragraphe, quantite, hauteur, largeur, prix_unitaire, taille, type,image_urls) 
VALUES (NULL, 1, 'Forme libre 3', NULL,NULL,NULL,NULL,120000,NULL, 'forme', '["http://127.0.0.1:8000/assets/imagejpeg/forme3.jpg"]');

INSERT INTO produits (id_categorie, id_modele, nom, paragraphe, quantite, hauteur, largeur, prix_unitaire, taille, type,image_urls) 
VALUES (NULL, 1, 'Forme libre 4', NULL,NULL,NULL,NULL,85000,NULL, 'forme', '["http://127.0.0.1:8000/assets/imagejpeg/forme4.jpg"]');

INSERT INTO produits (id_categorie, id_modele, nom, paragraphe, quantite, hauteur, largeur, prix_unitaire, taille, type,image_urls) 
VALUES (NULL, 1, 'Forme libre 5', NULL,NULL,NULL,NULL,90000,NULL, 'forme', '["http://127.0.0.1:8000/assets/imagejpeg/forme5.jpg"]');



-- Insertion variants
INSERT INTO variants (variant) VALUES ('Anses');
INSERT INTO variants (variant) VALUES ('Points');
INSERT INTO variants (variant) VALUES ('Couleurs');
INSERT INTO variants (variant) VALUES ('Motifs');



-- Insertion variant-options


-- anses id = 1
INSERT INTO variant_options (id_variant, variant_option, prix_unitaire, image_urls) 
VALUES (1, 'Corne casque',10000,'["http://127.0.0.1:8000/assets/imagejpeg/anse1.jpg"]');
INSERT INTO variant_options (id_variant, variant_option, prix_unitaire, image_urls) 
VALUES (1, 'Cuir de zébu beige',20000,'["http://127.0.0.1:8000/assets/imagejpeg/anse2.jpg"]');
INSERT INTO variant_options (id_variant, variant_option, prix_unitaire, image_urls) 
VALUES (1, 'Cuir de zébu tressé noir',15000,'["http://127.0.0.1:8000/assets/imagejpeg/anse3.jpg"]');
INSERT INTO variant_options (id_variant, variant_option, prix_unitaire, image_urls) 
VALUES (1, 'Cuir de zébu noir',20000,'["http://127.0.0.1:8000/assets/imagejpeg/anse4.jpg"]');
INSERT INTO variant_options (id_variant, variant_option, prix_unitaire, image_urls) 
VALUES (1, 'Corne semi-cercle',10000, '["http://127.0.0.1:8000/assets/imagejpeg/anse5.jpg"]');
INSERT INTO variant_options (id_variant, variant_option, prix_unitaire, image_urls) 
VALUES (1, 'Corne casque',10000, '["http://127.0.0.1:8000/assets/imagejpeg/anse6.jpg"]');
INSERT INTO variant_options (id_variant, variant_option, prix_unitaire, image_urls) 
VALUES (1, 'Corne ovale',10000, '["http://127.0.0.1:8000/assets/imagejpeg/anse7.jpg"]');
INSERT INTO variant_options (id_variant, variant_option, prix_unitaire, image_urls) 
VALUES (1, 'Chaine', 10000, '["http://127.0.0.1:8000/assets/imagejpeg/anse8.jpg"]');
INSERT INTO variant_options (id_variant, variant_option, prix_unitaire, image_urls) 
VALUES (1, 'Anse bandoulière tressé beige',10000, '["http://127.0.0.1:8000/assets/imagejpeg/anse9.jpg"]');
INSERT INTO variant_options (id_variant, variant_option, prix_unitaire, image_urls) 
VALUES (1, 'Anse bandoulière tressé noir', 10000, '["http://127.0.0.1:8000/assets/imagejpeg/anse10.jpg"]');
INSERT INTO variant_options (id_variant, variant_option, prix_unitaire, image_urls) 
VALUES (1, 'Crochet',5000, '["http://127.0.0.1:8000/assets/imagejpeg/anse11.jpg"]');

-- points: id=2

INSERT INTO variant_options (id_variant, variant_option, prix_unitaire, image_urls) 
VALUES (2, 'Point de riz',0, '["http://127.0.0.1:8000/assets/imagejpeg/point1.jpg"]');
INSERT INTO variant_options (id_variant, variant_option, prix_unitaire, image_urls) 
VALUES (2, 'Maile serré allez retour',0, '["http://127.0.0.1:8000/assets/imagejpeg/point2.jpg"]');
INSERT INTO variant_options (id_variant, variant_option, prix_unitaire, image_urls) 
VALUES (2, 'Macramé petit beurre',0, '["http://127.0.0.1:8000/assets/imagejpeg/point3.jpg"]');
INSERT INTO variant_options (id_variant, variant_option, prix_unitaire, image_urls) 
VALUES (2, 'Macramé 8',0, '["http://127.0.0.1:8000/assets/imagejpeg/point4.jpg"]');
INSERT INTO variant_options (id_variant, variant_option, prix_unitaire, image_urls) 
VALUES (2, 'Macramé carreau',0, '["http://127.0.0.1:8000/assets/imagejpeg/point5.jpg"]');
INSERT INTO variant_options (id_variant, variant_option, prix_unitaire, image_urls) 
VALUES (2, 'Macramé fleur',0, '["http://127.0.0.1:8000/assets/imagejpeg/point6.jpg"]');
INSERT INTO variant_options (id_variant, variant_option, prix_unitaire, image_urls) 
VALUES (2, 'Bride',0, '["http://127.0.0.1:8000/assets/imagejpeg/point7.jpg"]');

-- couleurs id=3

INSERT INTO variant_options (id_variant, variant_option, prix_unitaire, image_urls) 
VALUES (3, 'Naturel blanc',0, '["http://127.0.0.1:8000/assets/imagejpeg/co1.jpg"]');
INSERT INTO variant_options (id_variant, variant_option, prix_unitaire, image_urls) 
VALUES (3, 'Thé',0, '["http://127.0.0.1:8000/assets/imagejpeg/co2.jpg"]');
INSERT INTO variant_options (id_variant, variant_option, prix_unitaire, image_urls) 
VALUES (3, 'Noir',0, '["http://127.0.0.1:8000/assets/imagejpeg/co3.jpg"]');
INSERT INTO variant_options (id_variant, variant_option, prix_unitaire, image_urls) 
VALUES (3, 'Marron',0, '["http://127.0.0.1:8000/assets/imagejpeg/co4.jpg"]');
INSERT INTO variant_options (id_variant, variant_option, prix_unitaire, image_urls) 
VALUES (3, 'Vert eau bleu ciel',0, '["http://127.0.0.1:8000/assets/imagejpeg/co5.jpg"]');
INSERT INTO variant_options (id_variant, variant_option, prix_unitaire, image_urls) 
VALUES (3, 'Bleu',0, '["http://127.0.0.1:8000/assets/imagejpeg/co6.jpg"]');
INSERT INTO variant_options (id_variant, variant_option, prix_unitaire, image_urls) 
VALUES (3, 'Rose',0, '["http://127.0.0.1:8000/assets/imagejpeg/co7.jpg"]');
INSERT INTO variant_options (id_variant, variant_option, prix_unitaire, image_urls) 
VALUES (3, 'Rouge',0, '["http://127.0.0.1:8000/assets/imagejpeg/co8.jpg"]');
INSERT INTO variant_options (id_variant, variant_option, prix_unitaire, image_urls) 
VALUES (3, 'Bordeau',0, '["http://127.0.0.1:8000/assets/imagejpeg/co9.jpg"]');
INSERT INTO variant_options (id_variant, variant_option, prix_unitaire, image_urls) 
VALUES (3, 'Violet',0, '["http://127.0.0.1:8000/assets/imagejpeg/co10.jpg"]');
INSERT INTO variant_options (id_variant, variant_option, prix_unitaire, image_urls) 
VALUES (3, 'Jaune',0, '["http://127.0.0.1:8000/assets/imagejpeg/co11.jpg"]');
INSERT INTO variant_options (id_variant, variant_option, prix_unitaire, image_urls) 
VALUES (3, 'Gris', 0, '["http://127.0.0.1:8000/assets/imagejpeg/co12.jpg"]');






