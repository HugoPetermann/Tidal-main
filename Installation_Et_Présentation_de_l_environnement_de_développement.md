> **Ce document est voué à être modifié ou bien remplacé par un futur document plus complet.  
En effet celui-ci n'est là qu'à but d'information pour l'équipe**

# BUT DU DOCUMENT
-----

  Dans ce document il est possible de trouver l'ensemble des informations nécéssaires à la bonne comprhéension de chaque partie du projet.
  En effet ce document se décompose de la manière suivante : 
  
  - Méthode d'installation de la solution (sous XAMP)
  - Présentation de l'arbre des dossiers et des fichiers
  - Liens Utiles
  
# INSTALLATION DES OUTILS NECESSAIRES  
---
## 1/INSTALLATION DE XAMP

Pour ce qui concerne l'installation de XAMP, suivre le tutoriel suivant 
[Tutoriel installation XAMP](https://www.ionos.fr/digitalguide/serveur/outils/tutoriel-xampp-creer-un-serveur-de-test-local/).
Afin d'avoir la même version, prendre la 3.2.4

## 2/INSTALLATION DE LA BASE DE DONNEES SQL
 Une fois XAMP ouvert, cliquez sur **start** à coté de **MySQL** pour démarrer le serveur  
 Ensuite cliquez sur **Admin** pour ouvrir la page d'administration de la base de données  
 Créez une nouvelle base de données prénomée webapp en **utf8mb4_general_ci**

### MODIFICATIONS A APPORTER
#### FICHIER SQL

Une fois fait, il faudra modifier quelques lignes du fichier permettant 
de remplir la base de données sur MySQL (fichier situé dans le dossier webapp disponible sur le [projet original](https://github.com/HugoPetermann/Tidal-main/tree/master/webapp),
accesible ensuite au chemin suivant webapp>db>webapp.sql)

Dans ce fichier, il faudra changer les interclassements.  
Pour celà recherchez tous les **utf8mb4_0900_ai_ci** du fichier SQL et remplacez les par **utf8mb4_general_ci**  
Une fois fait, vous pouvez copier/coller le fichier dans l'onglet **Requête** de la base de données et **éxécuter** la requête

#### BASE DE DONNEES SQL

Comme vous avez pu le voir lors de l'ouverture de la page d'administration, il n'y a pas de demande de saisie d'un identifiant et d'un mot de passe.  
Il faut donc créer sur notre nouvelle base de données le compte permettant la connexion de notre site à la base de données  
Pour celà allez sur votre base de données **webapp**, puis dans l'onglet **Privilèges**  
Une fois fait, cliquez sur **Ajoutez un compte utilisateur**  
Et remplissez les champs suivant :  
> Nomd'utilisateur: **debian-sys-maint**  
> Mot de passe : **aR7RIRZbiUZw3dYk**  
Cochez la case **Donner tous les privilèges sur la base de données webapp**  
Cochez la case **Privilèges globaux**  

## 3/INSTALLATION DE GITKRAKEN

Pour l'installation de GitKraken suivre ce  [lien](https://www.gitkraken.com/download)  
Le but de ce logiciel est de fournir une interface plus simple à comprendre en ce qui concerne les branches et les commandes propres à Git.  
Il sera expliqué comment l'utiliser dans un autre document.  

## 4/RECUPERATION DU DOSSIER DE DEVELOPPEMENT

Dans le dossier Git que vous clonerez, sera déposer un fichier Zip appélé **SiteTidal.zip** contenant un dossier et son arborescance ainsi que les différents fichiers du projet. 
Il faudra le décompresser et mettre le dossier dans **C:\xampp\htdocs** sur xamp.  
  
  
# PRESENTATION DE L'ARBORESCENCE DU DOSSIER CONTENANT LE PROJET
---
Afin de faciliter le développement du projet, une arborescence "type" des dossiers et des fichiers a été choisie. 
  Ainsi le dossier de projet est constitué des dossiers suivant :
- Config
- Controllers
- Core
- Logs
- templates_c
- tpl
- web  
et d'un fichier de base **index.php** situé à la racine.  
> L'ensemble de ces dossiers et de certains de leurs contenues proviennent directement du dossier **SMARTY** proposé en exemple dans le tutoriel [Créez votre site avec SMARTY en MVC](http://fredods.com/creer-votre-site-avec-smarty-en-mvc-partie-1/)et en est la base.

## 1/REPERTOIRE RACINE

Dans ce répertoire, ce trouve un seul fichier qui ne devrait pas avoir à être modifié. En effet il s'agit du fichier php de **routage**, fichier dont il incombe de récupérer les bons controlleurs et d'afficher la bonne View suivant les informations passées dans l'url.

## 2/DOSSIER CONFIG

Dans ce dossier se trouve deux fichiers **php** nécéssaires au bon fonctionnement du site.  
Le premier fichier est **config_init.php**; ce fichier a pour vocation de charger l'ensemble des éléments nécessaires au lancement du site, comme par exemple la récupération des classes utilisées dans le projet, de la connexion à la base de données, etc ...  
Le second fichier est **defines.inc.php**; ce fichier lui contient l'ensemble des variables globales pouvant être utilisées dans le projet comme par exemple le chemin vers la racine des documents.  
> **ATTENTION** :  
> Bien mettre seulement des variables Globales dans **defines.inc.php**  
> Préférer faire plusieurs petites variables globales qu'une seul, surtout pour ce qui concerne les variables représentant un chemin vers un dossier ou un fichier.  

## 3/DOSSIER CONTROLLERS

Dans ce dossier se trouve l'ensemble des fichiers **controlleurs** de chaques pages **php**. Il s'agit de fichier en **php** permettant de faire appel à des fonctions externes et qui vont charger dans des variables **SMARTY** des données.

> **ATTENTION** :  
> Ce n'est pas dans les fichiers controllers que se font les gros traitements, ces fichiers ne font qu'appeler des méthodes et des fonctions et récupérer des données. On peut y faire des tests de conditions mais pas plus.

## 4/DOSSIER CORE

Dans ce dossier sera placé l'ensemble des classes et de leurs méthodes pouvant être utilisées dans le projet, le tout au format **php**.

## 5/DOSSIER LOG

Dans ce dossier pourra être situé les logs du site.

## 6/DOSSIER TEMPLATES_C

Dossier propre au tutoriel à ne surtout pas modifier.

## 7/DOSSIER TPL

Dans ce dossier ce trouve un fichier **tpl** pour l'entête et un pour le bas de page ainsi qu'un dossier **pages** qui lui contiendra l'ensemble de nos views (une view = une page internet).On viendra donc mettre dans ce sous-dossier les pages au format **tpl** que l'on veut afficher sur notre site.
> **ATTENTION** :  
> Ne mettre que des fichiers tpl contenant de l'HTML et/ou du JavaScript  
> **En  cas de création d'une nouvelle vue, il faut impérativement que le controlleur associé est le même nom que la vue car le chargement des fichiers se fait dans *index.php*.**  

## 8/DOSSIER WEB

Dans ce dossier on retouve plusieurs sous-dossier qui permettront de stocker les fichiers **css**, **javaScript**, les **images** utiles au projet et les différents **outils** tels que SMARTY.

# LIENS UTILES
---
[Tutoriel installation XAMP](https://www.ionos.fr/digitalguide/serveur/outils/tutoriel-xampp-creer-un-serveur-de-test-local/)  
[projet original](https://github.com/HugoPetermann/Tidal-main/tree/master/webapp)  
[GitKraken](https://www.gitkraken.com/download)  
[Créez votre site avec SMARTY en MVC](http://fredods.com/creer-votre-site-avec-smarty-en-mvc-partie-1/)  
[Manuel PHP](https://www.php.net/manual/fr/intro-whatis.php)  
[W3Schools](https://www.w3schools.com/)




