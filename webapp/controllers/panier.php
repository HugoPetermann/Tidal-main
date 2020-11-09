
<?php
    //_____________________________________________________
    // Exemple utilisation : Sans session
    //_____________________________________________________

    //init object panier
    $oPanier = new Panier();

    // Ajouter un produit au panier 
    $oPanier->addProduct(1,'produit 1',1,10);

    // nombre de produit contenu dans le panier 
    $nbProducts = $oPanier->getNbProductsInPan();

    // affiche contenu
    $contenu_panier = $oPanier->getList();

    // montant total
    $total = $oPanier->getTotalPriceCart();

    // on modifie la quantité du premier produit
    // exemple mettre un texte modifiable et si modifié alors bam fonction
    $oPanier->updateQteProduct(1,35);

    // supprimel'élément avec l'id = 10
    $oPanier->removeProduct(10);


    //_____________________________________________________
    // Exemple Affichage dynamique : Sans session
    // Affiche le bon nombre de produit contenu dans le panier
    //_____________________________________________________

    // Fonction de récupération et formattage des données
    function getHTMLContent(){
        $ret='<table border="0" width="100%">';
        for($i=0;$i<getNbProductsInPan();$i++){
            $ret.='<tr><td width="70%" align="left"><a href="#">'.getElemPan('produit', $i).'</a></td><td width="20%">'.getElemPan('prix_unitaire', $i).' </td><td>€</td><td><img src="../web/images/delete_from_panier.png" onClick="removeProduct(\''.$i.'\')"></td>';
        }
        $ret.='<tr><td colspan="3"><hr></td></tr>';
        $ret.='<tr><td width="70%" align="left"><b>Articles : </b></td><td width="20%">'.getNbProductsInPan().'</td><td></td>';
        $ret.='<tr><td width="70%" align="left"><b>Total : </b></td><td width="20%">'.getTotalPricePan().'</td><td> €</td><td></td>';
        $ret.='<tr><td colspan="3"><hr></td></tr>';
        $ret.="</table>";
        // message si panier vide
        if(getNbProductsInPan()=="0")
        $ret.='<br><img src="../web/images/triangle.gif"/><a href="#"> Panier vide</a>';
        // On donne la possibilité de vider seulement si le panier n'est pas vide
        if(getNbProductsInPan()!="0")
        $ret.='<br><img src="../web/images/triangle.gif"/><a href="#" onClick="removeAllProducts()"> Vider votre panier</a>';
        if(getNbProductsInPan()!="0")
        $ret.='<br><img src="../web/images/triangle.gif"/><a href="#"> Valider commande</a>';
        return $ret;
    }

    ?>