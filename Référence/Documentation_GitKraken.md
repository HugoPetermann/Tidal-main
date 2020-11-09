# Documentation pour l'utilisation de GitKraken  

> Ce document n'a pour but que de proposer une méthode d'utilisation de GitKraken simplifier ainsi qu'une méthode de travail permettant un bon déroulement du projet.  
> Il est donc possible de ne pas la suivre et d'utiliser votre propre méthode.  
---

## 1/ Installation de GitKraken

Pour installer GitKraken, vous pouvez vous rendre sur leur [site officiel](https://www.gitkraken.com/download).

## 2/ Configuration de GitKraken avec GitHub

Une fois GitKraken installé, lancez le.  
Une fenêtre vous sera présentée et vous demandra de vous identifiez, cliquez alors sur "**Sign in with GitHub**".
Vous devrez alors vous identifiez sur la page GitHub qui vient d'être ouverte.

Une fois fait, il faudra renseigner vos informations de profil : 
- Votre nom d'utilisateur (c'est ce qui sera vue par vos collaborateurs)
- Votre nom
- Votre email

Une fois fait votre compte GitKraken sera liée avec votre compte GitHub.

## 3/ Importer votre projet distant dans un répertoire local   

La première étape est de créer un répertoire local sur votre machine pour pouvoir modifier votre projet.

Ici notre projet est déjà existant sur un répertoire distant (sur GitHub), on va donc cloner ce projet sur notre machine.

Pour celà, cliquer sur l'icone du petit dossier situé en haut à gauche si la fenêtre ci-dessous ne vous  est pas affiché.
![Fenêtre de sélection](/img/Fenêtre_Clone_Projet.PNG)

Une fois ouverte cliquez sur "**Clone**" -> "**GitHub.com**". Choisissez alors le projet à Cloner et renommer le dossier créer "**Dépot_Local**" comme montré ci-dessous:
![Choix du projet à cloner]/img/(Projet_A_Cloner.PNG) 

Une fois fait, cliquez sur "**Clone the repo!**".
Vous disposez dès lors d'un répertoire local contenant votre projet complet.

## 4/ Proposition de méthode de développement

Voici une proposition en ce qui concerne la façon de procéder dans GitKraken.

Premièrement, mettez à jour votre branche master locale.

Pour cela : 
- double cliquez sur la branche master distante
- faire un clic droit sur votre master locale  
- Cliquez sur **FastForward** 

Ensuite il faudra mettre à jour votre branche personelle locale, pour celà : 
- Double cliquez sur votre branche personelle distante
- Double cliquez sur votre branche master locale
- Faire un clic droit sur votre branche locale puis :
  - Si vous avez des commits en avance flêche vers le haut, cliquez sur **Rebase**
  - Sinon cliquez sur **FastForward** 

**EN CAS DE MODIFICATION EN COURS SANS AVOIR FAIT DE COMMIT**, il vous sera impossible de changer de branche pour cela cliquez alors sur **Stash** pour pouvoire changez de branche. Une fois fini vous pouvez revenir sur votre branche puis faire un **Pop**

Une fois vos modification de finit et vos commit aussi,
faite un clique droit sur votre branche puis cliquez sur **Push**.
Ou bien faite un cliquez déposez d'une branche locale à une branche distante (pour des cas spécifiques).

> **POUR RAPPEL**  
> Ne jamais push directement sur le master, mais d'abord dans sa branche distante puis de sa branche distante au master

Une fois fait supprimmez votre branche locale et double cliquez sur votre branche distante.
