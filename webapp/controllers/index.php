<?php
    //init object panier
    $oPanier = new Panier();

    // Ajouter un produit au panier 
    $oPanier->addProduct(false, 1, 1, 2);
    $oPanier->addProduct(false, 2, 2, 2);
    $oPanier->addProduct(false, 3, 3, 2);

    // nombre de produit contenu dans le panier 
    $nbProducts = $oPanier->getNbProdInPan();
    $smarty->assign('NbProd', $nbProducts);

    // affiche contenu
    $contenu_panier = $oPanier->getList();
	$smarty->assign('liste', $contenu_panier);

	// delete un panier
	$oPanier->removeProduct(false, 2);

	// affiche contenu
    $contenu_panier = $oPanier->getList();
	$smarty->assign('liste2', $contenu_panier);

	$nbProducts = $oPanier->getNbProdInPan();
    $smarty->assign('NbProd2', $nbProducts);
?>