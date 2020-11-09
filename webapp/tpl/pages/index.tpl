<div>
     

	Il y a {$NbProd} produits dans le panier.<br>
     Liste 1 :<br>
     {foreach from=$liste item=product}
	    {$product.name}<br>
		{$product.description}<br>
	    {$product.price}<br>
	      Voir plus d'info<br>
	      <br>
	{/foreach}

	<br>
	Il y a {$NbProd2} produits dans le panier.<br>
	Liste 2 :<br>
	{foreach from=$liste2 item=product}
	    {$product.name}<br> 
		{$product.description}<br>
	    {$product.price}<br>
	       Voir plus d'info<br>
	       <br>
	{/foreach}


</div>