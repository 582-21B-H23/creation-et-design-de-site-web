# TP3 : Échafaudage

Ce dépôt contient un échafaudage pour le TP3. Tous vos fichiers devraient être dans le dossier `src`.

Le dossier `components` contient les différents composants de votre site Web. Vous pouvez les importer grâce à l’expression PHP `<?php include 'path/to/component'; ?>`.

Les ressources de votre site Web devraient se trouver dans le dossier `assets`, séparées selon leur type (feuille de styles, fonte, image, etc.).

## Environnement de travail

Pour travailler sur votre site Web, il suffit d’invoquer le script `serve-website.sh` ou d’écrire dans votre terminal :

```sh
php -S localhost:8000 -t src
```

### Installer PHP

Si vous utilisez Windows, il se peut que vous deviez installer PHP. Pour ce faire, nous utiliserons un gestionnaire de paquets (en anglais, _package manager_). Il existe plusieurs gestionnaire de paquets sur Windows — Winget, Chocolatey, Scoop. Pour ce TP, nous utiliserons [Scoop](https://scoop.sh).

Pour installer Scoop, il faut d’abord autoriser votre terminal à exécuter un script extérieur. Ouvrez votre terminal Powershell et exécutez la commande suivante :

```sh
Set-ExecutionPolicy RemoteSigned -Scope CurrentUser
```

Une fois l’autorisation confirmée, vous pouvez installer Scoop à l’aide de la commande suivante :

```sh
irm get.scoop.sh | iex
```

Vous pouvez maintenant installer PHP à l’aide de la commande :

```sh
scoop install php
```

PHP devrait maintenant être disponible dans votre terminal. Si vous utilisez un terminal intégré (comme celui de VS Code), il se peut que vous deviez redémarrer votre programme.

## Générer le site Web

À venir…
