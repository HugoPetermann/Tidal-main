<?php

//On appelle la fonction getAll()
$allproducts = Products::getAll();
//On transmets les variables � Smarty
$smarty->assign('allproducts', $allproducts);

?>