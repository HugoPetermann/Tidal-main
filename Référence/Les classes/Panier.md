# La classe Panier

Dans ce document nous allons lister l'ensemble des procédures contenues dans la classe Panier dans le but de faciliter son utilisation et permettre sa bonne utilisation.
Cette classe possède l'ensemble des procédures qui vont être en lien avec le panier.
Pour chaque procédure principale il existe 2 éléments différents, si le customer est connecté ou non.
En résumé si le customer est connecté nous allons utiliser la table Basket de la base de données pour stocker les informations qui nous intéressent.
En revanche si le customer est pas connecté, nous allons stocker son panier dans la session.
Petit plus, s'il commence non connecté et se connecte cela transforme la panier en locale vers le panier de la base de données.

 - constructeur (connecté) :
	Si non connecté on démarre une session si c'est pas le cas. Si connecté alors rien.
 - GetList (connecté) :
	Retourne l'ensemble du panier (table Basket ou Session(panier))
 - GetOne(connecté, id) :
	Retourne l'ensemble des informations possédants l'id	
 - addProduct (connecté, id, qty) :
	Ajoute dans le panier le produit associé
 - updateTotalPriceProduct (connecté, id) :
	Retourne le résultat de QTY * price. C'est lors de la modification de quantité dans le panier cela chnge le sous-total pour ce produit.
 - updateQteProduct (connecté, id, qty) :
	Met à jour en session ou table Basket la quantité saisie du produit.
 - removeProduct (connecté, id) :
	Supprime le produit possédant l'id dans le panier.
 - removeAllProducts (connecté) :
	Supprime l'ensemble des produits du panier.
 - getQTYInPan (connecté) : 
	Calcul le nombre total (somme QTY) du panier
 - getNbProdInPan (connecté) :
	Nombre de produit distinct contenu dans le panier.
 - getTotalPricePan (connecté) : 
	Fait la somme total du panier <=> Somme(QTY * Unit_Price)
 - getElemPan(connecté, quoi, id) :
	Retourne l'élément 'quoi' pour l'équipement possédant l'id indiqué.
 - LocalToBDD ():
	Déplace le panier local (en session) dans la base de données.