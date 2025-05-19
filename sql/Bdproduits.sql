CREATE TABLE IF NOT EXISTS produits (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    prix DECIMAL(10,2) NOT NULL,
    image VARCHAR(255) NOT NULL
);

INSERT INTO produits (nom, description, prix, image) VALUES
("Sérum Précieux Votre Visage", "Un sérum de luxe hautement concentré", 880, "imgp/serum.png"),
("Huile Majestueuse", "Huile nourrissante pour le visage", 735, "imgp/huile.png"),
("Crème Riche Régénérante", "Crème riche pour une régénération intense", 920, "imgp/creme2.png"),
("Lotion Tonique Fraîcheur", "Lotion tonique rafraîchissante", 430, "imgp/gel.png"),
("Baume Nuit Réparateur", "Brume de nuit douce", 815, "imgp/Brume.png"),
("Masque Hydratation Intense", "Masque hydratant intense", 650, "imgp/masque.png"),
("Gel Nettoyant Purifiant", "Gel nettoyant pour le visage", 490, "imgp/gelnettoyant.png");
