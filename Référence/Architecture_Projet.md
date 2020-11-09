# ARCHITECTURE DU PROJET
  ## 1/ ENSEMBLES DES ELEMENTS DU PROJET
**Liste des pages à disposition de l'utilisateur:** 
- 1 page d'accueil  
- 1 page de description de produit
- 1 page d'inscription
- 1 page de connexion
- 1 page pour la gestion du panier d'achat  
>Ces pages seront codées au format **tpl** (format spécifique à SMARTY) pour ce qui concerne leur contenu  

**Liste des éléments à dispositions:**
- 1 base php
- 1 architecture de base   

**Liste des outils à dispositions:**
- PhpMyAdmin
- SMARTY  

**Choix du langage:**  
- php
- tpl
- css 3
  
## 2/ Principe de fonctionnement  
  ## A/ Composition d'une page utilisateur  
  
Les fichiers composant une page sont:
    - 1 fichier en **.tpl**
    > Fichier contenant la structure de la page et les templates nécéssaire à la page
    c'est cette page qu'on appelera dans la view   
    - 1 fichier en **.php**
    > Fichier en .php qui incluera toutes les autres pages et servira à effectuer les différentes actions
    suivant les choix de l'utilisateur (page router)  
    > Fichier appelé à chaque chargement de la page
    - 1 fichier **controller(en .php)**
    > Fichier contenant l'ensemble des fonctions nécéssaire à la récupération/saisie de données dans la base de données
    pouvant être utilisées dans la page router
    - 1 fichier **CSS 3**
    > Fichier pour le style de la page  

  ## Principe de fonctionnement  
  ### 1ère esquisse
    
  **A l'ouverture d'une page**  
    -> Chargement de la page router  
    -> Initialisation de la connexion à la base de données  
    -> Récupération des paramètres depuis l'URL  
    -> Traitement des paramètres  
    -> Complétion de la page tpl avec les données adéquates  
    -> Affichage dans la view de la page web crée dynamiquement (page tpl)  
    
