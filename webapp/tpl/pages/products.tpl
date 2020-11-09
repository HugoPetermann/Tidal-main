{foreach from=$allproducts item=product}
     
       
       {$product.name}
       
{$product.description}

    {$product.price}

       Voir plus d'info
     

{/foreach}