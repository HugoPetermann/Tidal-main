<?php

class Panier
{
    // évolution : 
    // rajouter test données entrantes pour éviter faille XSS ou SQL ===> On s'en ballec !!!
    // Ajouter des retours d'erreur si cela pose un problème
    // Savoir si utilisateur connecté ou pas => pour savoir 

    // constructeur
    function __construct($connected=false){
        if($connected){
            $this->initPanier(true);
        }else{
            if (session_status() !== PHP_SESSION_ACTIVE){
                session_start();  
            }
            $this->initPanier(false);
        }
	}

    //initialisation
    public function initPanier($connected=false){
       if($connected){
            //sélectionne un nouveau panier ou panier déjà existant du customer
       }else{
            $_SESSION['panier'] = array();
       }
	}


    // contenu du panier
    public function getList($connected=false){
        if($connected){
            // Créer la connexion a la base et a la table Basket pour récupérer l'ensemble du panier'
            global $bdd;
            $offers = $bdd->query('SELECT * FROM basket ')->fetchAll(PDO::FETCH_ASSOC);
            return ($offers);
		}else{
            return !empty($_SESSION['panier']) ? $_SESSION['panier'] : NULL;
		}
	}

    //Récupérer plus d'info sur 1 élément
    public function getOne($connected=false, $id_produit){
        if($connected){
          // Créer la connexion a la base, table Basket pour récupérer toutes les infos liée a 1 élément en particulier
          global $bdd;
          $offer = $bdd->query('SELECT * FROM basket WHERE `id` = '.$id_produit.' ')->fetch(PDO::FETCH_ASSOC);
          return ($offer);
        }else{
            if(!empty($_SESSION['panier'])){
                //le [panier][id] est une array contenant l'ensemble des infos
                return ($_SESSION['panier'][$id_produit]);
            }else{
                return NULL;
            }
        }
    }

    // Ajout d'un produit au panier
    // la variable customer est pour quand connecté mettre l'user.
    // Si pas connecté on s'en fou donc 0
    public function addProduct($connected=false,$id_produit,$qte=1,$customer=0){
        if($qte > 0 ){
            if($connected){
                // Créer la connexion a la base / table Basket + traitement des données + Sauvegarde en BDD
                global $bdd;
                $insert = $bdd->exec('INSERT INTO `basket`(`customer`, `product`, `quantity`) VALUES('.$customer.', '.$id_product.', '.$qte.')');
                return ($insert);
            }else{
                // Créer la connexion a la base / table Basket + traitement des données + Sauvegarde en BDD
                global $bdd;
                $data = $bdd->query('SELECT `name`, `price`, `description` FROM products WHERE `id` = '.$id_produit.' ')->fetch(PDO::FETCH_ASSOC);
                $_SESSION['panier'][$id_produit] = array('id_produit'=>$id_produit
                                                    ,'name'=>$data['name']
                                                    ,'quantity'=>$qte
                                                    ,'price'=>$data['price']
                                                    ,'description'=>$data['description']
                                                    ); 
            }
        }else{
            return "ERREUR : Vous ne pouvez pas ajouter un produit sans quantité..."; 
        }
    }


    // modifie le prix total du produit (selon quantité)
    public function updateTotalPriceProduct($connected=false,$id_produit){
        if ($connected){
            global $bdd;
            $price = $bdd->query('SELECT `price` FROM products WHERE `id`= '.$id_produit.' ' );
            $qty = $bdd->query('SELECT `quantity` FROM basket WHERE `product`= '.$id_produit.' ' );
            return $price * $qty;
        }else{
            if(isset($_SESSION['panier'][$id_produit])){
                return $_SESSION['panier'][$id_produit]['quantity'] * $_SESSION['panier'][$id_produit]['price'];
            }
        } 
    }


    // modifie la quantité du produit (si on achète 2 fois le même ou alors si dans panier choix de quantité)
    public function updateQteProduct($connected=false,$id_produit,$qte=0){
        $product = getOne($connected,$id_produit);
        if($connected){
            global $bdd;
            $update = $bdd->exec('UPDATE `basket` SET `quantity`= '.qte.' WHERE `product` = '.id_produit.' ')->fetch(PDO::FETCH_ASSOC);
            $this->updateTotalPriceProduct(true,$id_produit);
            return ($update);
        }else{
            if(isset($_SESSION['panier'][$id_produit])){
                $_SESSION['panier'][$id_produit]['quantity'] = $qte;
                $this->updateTotalPriceProduct($id_produit);
            }else{
                return "ERREUR : produit non présent dans le panier"; 
            }
        }
    }


    // supprimme un produit dans le panier
    public function removeProduct($connected=fale, $id_produit){
        if ($connected){
            // Créer la connexion a la base/table Basket + traitement des données + Sauvegarde en BDD
            global $bdd;
            $insert = $bdd->exec('DELETE FROM basket WHERE panier.id = '.$id_panier.' ');
            return ($insert);
        }else{
            if(isset($_SESSION['panier'][$id_produit])){
                unset($_SESSION['panier'][$id_produit]);
            }
        }
    }


    // supprimme l'ensemble des produits dans le panier
    public function removeAllProducts($connected=false){
        if($connected){
             // Créer la connexion a la base/table Basket + traitement des données + Sauvegarde en BDD
            global $bdd;
            $insert = $bdd->exec('DELETE FROM basket ');
            return ($insert);
        }else{
            for($id_produit=0;$id_produit<getNbProductsInPan();$id_produit++){
                if(isset($_SESSION['panier'][$id_produit])){
                    unset($_SESSION['panier'][$id_produit]);
                }
            }
        }
    }


    // nombre de produits total se trouvant dans le panier somme de QTY
    public function getQTYInPan($connected=false){
        if($connected){
            global $bdd;
            $result = $bdd->exec('SELECT * FROM basket ');
            return ($insert);
        }else{
            $panier = !empty( $_SESSION['panier'] ) ? $_SESSION['panier'] : NULL;
            $nb = 0;
            if(!empty($panier)){
                foreach($panier as $P){ 
                    $nb += $P['quantity'];
                }
            }
            return $nb;
        }
    }

    public function getNbProdInPan($connected=false){
        if($connected){
            global $bdd;
            $result = $bdd->exec('SELECT * FROM basket ');
            return ($insert);
        }else{
            $panier = !empty( $_SESSION['panier'] ) ? $_SESSION['panier'] : NULL;
            $nb = 0;
            if(!empty($panier)){
                foreach($panier as $P){ 
                    $nb += 1;
                }
            }
            return $nb;
        }
    }

    // le total du Panier
    public function getTotalPricePan($connected=false){
        if($connected){
            $total = 0;
            global $bdd;
            $pan = $bdd->query('SELECT * FROM basket');
            
        }else{
            $total = 0;
            $panier = !empty( $_SESSION['panier'] ) ? $_SESSION['panier'] : NULL;
            if(!empty($panier)){
                foreach($panier as $P){ 
                    $total += $P['price'] * $P['quantity'];
                }
            }
            return $total;
        } 
    }


    // retourne ce qu'on désire du panier par l'id
    public function getElemPan($connected=false,$what, $id_produit){
        $result;
        switch($what){
            case 'produit':
                $result = $_SESSION['panier'][$id_produit]['name'];
                break;
            case 'qte':
                $result = $_SESSION['panier'][$id_produit]['quantity'];
                break;
            case 'prix_unitaire':
                $result = $_SESSION['panier'][$id_produit]['price'];
                break;
            case 'description':
                $result = $_SESSION['panier'][$id_produit]['description'];
                break;
            default :
                //gestion d'erreur
                $result = NULL;
                break;
        };
        return $result;
    }

}

?>