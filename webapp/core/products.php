<?php

class Products
{
    // �volution : rajouter test donn�es entrantes pour �viter faille XSS ou SQL
    // Ajouter des retours d'erreur si cela pose un probl�me

    //R�cup�rer touts les �l�ments du paniers
    public function getAll()
    {
      // Cr�er la connexion a la base et a la table products pour r�cup�rer l'ensemble du panier'
      global $bdd;
      $offers = $bdd->query('SELECT * FROM products')->fetchAll(PDO::FETCH_ASSOC);
      return ($offers);
    }

    //R�cup�rer plus d'info sur 1 �l�ment
    public function getOne($id_panier)
    {
      // Cr�er la connexion a la base, table products pour r�cup�rer toutes les infos li�e a 1 �l�ment en particulier
      global $bdd;
      $offer = $bdd->query('SELECT * FROM products WHERE panier.id = '.$id_offer.' ')->fetch(PDO::FETCH_ASSOC);
      return ($offer);
    }

}

?>