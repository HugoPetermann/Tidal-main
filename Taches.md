# Taches à faire par membre de l'équipe


**RAPPEL**  
Dans le projet nous dispossons de ces fenêtres suivante :
 - **Accueil** 
> Contient un message de bienvenue dans le corps de la page avec une petite description du site
 - **Présentation des articles disponibles**  
> Présentation de l'ensemble des articles disponibles à l'achat (Photo + Nom du produit + Prix)
 - **Présentation du produit sélectionné**  
> Présentation du produit avec en plus une description ainsi qu'un bouton permettant d'ajouter le produit au panier
 - **Panier**  
> Page récapitulant le panier ainsi que le prix total
 - **Page de connexion**  
> Page permettant de se connecter
 - **Page d'inscription**  
> Page permettant de se créer un compte utilisateur

## CLASSE A DEVELOPPER

Dans le projet il faudra créer un ensemble de classes en php afin de pouvoir les utiliser dans les controlleurs.

Suite à la réunion du 04/11/2020, voici les classes à créer : 
- **c_Utilisateur**
  > Contient l'ensemble des informations et des fonctionailtés utiles à l'dentification de l'utilisateur (coté client)
- **c_Produit**
  > Contient l'ensemble des informations et des fonctionalités liées à un produit
- **c_Connexion**
  > Contient l'ensemble des fontionailtés nécéssaire à la connexion de l'utilisateur et à son identification (coté Serveur)
- **c_Panier**
  > Contient l'ensemble des informations et des fonctionalités liées au produit  

![Schéma de classe](SchémaDeClasse.png)

## REPARTITION DES TACHES

### DEREK
---
- [ ] Page tpl Accueil
- [ ] Page tpl Liste Produit
- [ ] Header des pages tpl
- [ ] Style de l'ensemble du site web
### HUGO
---
- [ ] Page tpl d'inscription
Méthode de la classe Connexion : 
- [ ] Vérification des infos (Informations correctes)
- [ ] Vérification des infos dans la base de données (Déjà existante ?)
- [ ] Création du compte
### DORIAN
---
- [ ] Page tpl Panier
- [ ] Classe Panier
### BRIAN
---
- [ ] Page tpl Connexion
- [ ] Classe Connexion
- [ ] Classe Article
