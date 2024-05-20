Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom')->nullable();
            $table->string('téléphone')->nullable();
            $table->string('adresse')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->unique();
            $table->enum('role', ['user','admin'])->default('user');
            $table->timestamps();
        });
php artisan make:crud users "nom:string, prenom:string, email:string:unique, email_verified_at:timestamp, password:string"

-- classy, working bag, .....
Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('categorie')->nullable();
            $table->timestamps();
        });
php artisan make:crud categories "categorie:string:nullable"

-- chapeaux, sacs, ...
Schema::create('modeles', function (Blueprint $table) {
            $table->id();
            $table->string('modele')->nullable();
            $table->timestamps();
        });
php artisan make:crud modeles "modele:string:nullable"



Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_categorie')->nullable();
            $table->unsignedBigInteger('id_modele')->nullable();
            $table->string('nom')->nullable();
            $table->text('paragraphe')->nullable();
            $table->integer('quantite')->nullable(false)->default(0);
            $table->string('hauteur')->nullable();
            $table->string('largeur')->nullable();
            $table->numeric('prix_unitaire', 20,5)->nullable();
            $table->enum('taille', ['PM', 'MM', 'GM'])->nullable();
            $table->enum('type', ['forme', 'modele_existant', 'produit'])->default('produit')->nullable();
            $table->jsonb('image_urls')->nullable();
            $table->timestamps();
            $table->foreign('id_categorie')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('id_modele')->references('id')->on('modeles')->onDelete('cascade');
        });
php artisan make:crud produits "id_categorie:integer:unsigned:nullable,id_modele:integer:unsigned:nullable,nom:string:nullable,paragraphe:text:nullable,quantite:integer:nullable:false,default:0,hauteur:string:nullable,largeur:string:nullable,prix_unitaire:decimal:20,5:nullable,taille:enum:PM,MM,GM:nullable,type:enum:forme,modele_existant,produit:default('produit'),image_urls:jsonb:nullable"



-- couleurs, anses, motifs, points
Schema::create('variants', function (Blueprint $table) {
            $table->id();
            $table->string('variant')->nullable();
            $table->timestamps();
        });
php artisan make:crud variants "variant:string:nullable"


-- rose, cuir de zébu noir, macramé, ...
Schema::create('variant_options', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_variant')->nullable();
            $table->string('variant-option')->nullable();
            $table->numeric('prix_unitaire', 20,5)->nullable();
            $table->jsonb('image_urls')->nullable();
            $table->timestamps();
            $table->foreign('id_variant')->references('id')->on('variants')->onDelete('cascade');
        });
php artisan make:crud variant_options "id_variant:integer:unsigned:nullable,variant_option:string:nullable,prix_unitaire:decimal:20,5:nullable,image_urls:jsonb:nullable"

Schema::create('personnalisations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_produit')->nullable();
            $table->unsignedBigInteger('id_variant_option')->nullable();
            $table->timestamps();
            $table->foreign('id_produit')->references('id')->on('produits')->onDelete('cascade');
            $table->foreign('id_variant_option')->references('id')->on('variant_options')->onDelete('cascade');
        });
php artisan make:crud personnalisations "id_produit:integer:unsigned:nullable,id_variant_option:integer:unsigned:nullable"


Schema::create('ligne_paniers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_personnalisation')->nullable();
            $table->unsignedBigInteger('id_produit')->nullable();
            $table->integer('quantite')->nullable(false)->default(0);
            $table->timestamps();
            $table->foreign('id_personnalisation')->references('id')->on('personnalisations')->onDelete('cascade');
            $table->foreign('id_produit')->references('id')->on('produits')->onDelete('cascade');
        });
php artisan make:crud ligne_paniers "id_personnalisation:integer:unsigned:nullable,id_produit:integer:unsigned:nullable,quantite:integer:unsigned:nullable:false,default:0"


Schema::create('paniers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ligne_panier')->nullable();
            $table->timestamps();
            $table->foreign('id_ligne_panier')->references('id')->on('ligne_paniers')->onDelete('cascade');
        });
php artisan make:crud paniers "id_ligne_panier:integer:unsigned:nullable"



-- conexion user
 Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_panier')->nullable();
            $table->unsignedBigInteger('id_user');
            $table->string('nom')->nullable();
            $table->string('email')->nullable();
            $table->string('adresse_livraison');
            $table->string('reperage_livraison')->nullable();
            $table->string('ville')->nullable();
            $table->string('province')->nullable();
            $table->string('code_postal')->nullable();
            $table->string('telephone')->unique();
            $table->string('reference_transfert')->unique();
            $table->timestamp('date_commande')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();

            $table->foreign('id_panier')->references('id')->on('paniers')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
php artisan make:crud commandes "id_panier:integer:unsigned:nullable,id_user:integer:unsigned,nom:string:nullable,email:string:nullable,adresse_livraison:string,reperage_livraison:string:nullable,ville:string:nullable,province:string:nullable,code_postal:string:nullable,telephone:string:unique,reference_transfert:string:unique,date_commande:timestamp:default(DB::raw('CURRENT_TIMESTAMP'))"


        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_produit')->unique();
            $table->integer('quantite_restante')->default(0);
            $table->timestamps();

            $table->foreign('id_produit')->references('id')->on('produits')->onDelete('cascade');
        });
php artisan make:crud stocks "id_produit:integer:unsigned:unique,quantite_restante:integer:default(0)"









///


php artisan make:crud commandes "id_user:integer:unsigned,id_panier:integer:unsigned,adresse_livraison:string,reperage_livraison:string,ville:string,province:string,code_postal:string,telephone:string:unique,reference_transfert:string:unique"
CREATE TABLE commandes (
    id SERIAL PRIMARY KEY,
    id_panier INTEGER,
    id_user INTEGER NOT NULL, 
    nom VARCHAR(255) ,
    email VARCHAR(255) ,
    adresse_livraison VARCHAR(255) NOT NULL,
    reperage_livraison VARCHAR(255),
    ville VARCHAR(255),
    province VARCHAR(255),
    code_postal VARCHAR(255),
    telephone VARCHAR(255) UNIQUE NOT NULL,
    reference_transfert VARCHAR(255) NOT NULL,
    date_commande TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- Nouvelle colonne pour la date de commande
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE stocks (
    id SERIAL PRIMARY KEY,
    id_produit INT REFERENCES produits(id) UNIQUE,
    quantite_restante INT NOT NULL DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
























-- postgres sql commande ave insertions

CREATE TABLE users (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255),
    email VARCHAR(255) UNIQUE NOT NULL,
    email_verified_at TIMESTAMP,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(255) DEFAULT 'user' CHECK (role IN ('user', 'admin')), -- Utilisation de VARCHAR pour ENUM et CHECK
    remember_token VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);



CREATE TABLE categories (
    id SERIAL PRIMARY KEY,
    categorie VARCHAR(255)
);

CREATE TABLE produits (
    id SERIAL PRIMARY KEY,
    id_categorie INT REFERENCES categories(id),
    nom VARCHAR(255),
    description TEXT,
    quantite INT NOT NULL DEFAULT 0,
    prix_unitaire NUMERIC(20, 5),
    type ENUM ('forme', 'modele_existant', 'produit') DEFAULT 'produit',
    type ENUM ('PM', 'MM', 'GM') ,
    image_urls JSONB,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE variants (
    id SERIAL PRIMARY KEY,
    variant VARCHAR(255)
);

CREATE TABLE variant_options (
    id SERIAL PRIMARY KEY,
    id_variant INT REFERENCES variants(id),
    variant_option VARCHAR(255),
    prix_unitaire NUMERIC(20, 5),
    image_urls JSONB,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE personnalisations (
    id SERIAL PRIMARY KEY,
    id_produit INT REFERENCES produits(id),
    id_variant_option INT REFERENCES variant_options(id),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE ligne_paniers (
    id SERIAL PRIMARY KEY,
    id_personnalisation INT REFERENCES personnalisations(id),
    id_produit INT REFERENCES produits(id),
    quantite INT NOT NULL DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE paniers (
    id SERIAL PRIMARY KEY,
    id_ligne_panier INT REFERENCES ligne_paniers(id),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);



-- connexion users

CREATE TABLE commandes (
    id SERIAL PRIMARY KEY,
    id_panier INTEGER,
    id_user INTEGER NOT NULL, 
    nom VARCHAR(255) ,
    email VARCHAR(255) ,
    adresse_livraison VARCHAR(255) NOT NULL,
    reperage_livraison VARCHAR(255),
    ville VARCHAR(255),
    province VARCHAR(255),
    code_postal VARCHAR(255),
    telephone VARCHAR(255) UNIQUE NOT NULL,
    reference_transfert VARCHAR(255) NOT NULL,
    date_commande TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- Nouvelle colonne pour la date de commande
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);



CREATE TABLE stocks (
    id SERIAL PRIMARY KEY,
    id_produit INT REFERENCES produits(id) UNIQUE,
    quantite_restante INT NOT NULL DEFAULT 0,
    quantite_vendue INT NOT NULL DEFAULT 0,
    etat VARCHAR(255) NOT NULL DEFAULT 'disponible', -- Ajout de la colonne "etat"
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);




NB: tables commandes, stock a modifier avant migrations







