<?php

class Products
{
    // évolution : rajouter test données entrantes pour éviter faille XSS ou SQL
    // Ajouter des retours d'erreur si cela pose un problème

    //Récupérer touts les éléments du paniers
    public function getAll()
    {
      // Créer la connexion a la base et a la table products pour récupérer l'ensemble du panier'
      global $bdd;
      $offers = $bdd->query('SELECT * FROM products')->fetchAll(PDO::FETCH_ASSOC);
      return ($offers);
    }

    //Récupérer plus d'info sur 1 élément
    public function getOne($id_panier)
    {
      // Créer la connexion a la base, table products pour récupérer toutes les infos liée a 1 élément en particulier
      global $bdd;
      $offer = $bdd->query('SELECT * FROM products WHERE panier.id = '.$id_offer.' ')->fetch(PDO::FETCH_ASSOC);
      return ($offer);
    }

}

?>