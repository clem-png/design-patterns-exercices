# CHANGEMENT

Petit changement dans le test, il y avait une erreur, yves était unset donc non notifier et dans le assert il devait l'être et un au autre devait ne pas etre notifier, j'ai donc corriger cela ; )


# Observer

## Installation
Il suffit simplement d'installer les dépendances php:
```bash
composer install
```

## Lancer les test
```bash
composer run-script phpunit
```
## Objectif
Vous avez deux entités, des Utilisateur (`User`) et des groupe de musique (`MusicBand`).  
Si un utilisateurs suit un groupe et que ce groupe ajoute une date, l'utilisateur doit etre notifié.  
Utilisez le design pattern Observer pour remplir cette fonction. La commande de tests doit retourner un resultat juste.

**note:** utilisez les interface [SplObserver](https://www.php.net/manual/fr/class.splobserver.php) et [SplSubject](https://www.php.net/manual/fr/class.splsubject.php)

