#Bienvenue sur Simple MVC Structure
Simple MVC Structure n'est pas un framework, mais seulement une structure de base qui permet de monter un MVC rapidement en php. Il suffit de forker le <a href="https://github.com/JonathanMartel/simpleMVCStructure">dépot Github</a> et de dupliquer les classes vues et modele afin d'en disposer à votre convenance. Il s'adresse principalement à mes étudiants.


##Structure des dossiers et des fichiers
### Dossiers et fichiers du MVC
Le MVC utilise les fichiers index.php, var.init.php, config.php, gabarit.projet.php, Controler.class.php et ajaxControler.php ainsi que les dossiers /lib, /modeles et /vues.

#### index.php
Ce fichier sert de porte d'entrée du MVC, les requêtes HTTP se font à travers ce fichier. Celui-ci fait les inclusion (required) nécessaires au chargement des fichiers de configuration (config.php), de traitement des variables de requêtes (var.init.php). Il permet aussi l'appel de la classe Controler par l'entremise de l'affichage du gabarit (gabarit.projet.php). 

#### config.php
Fichier de configuration appelé par index.php. Initialement, celui-ci contient la fonction d'autoload (spl_autoload) qui permet l'inclusion dynamique des classes lors des instanciations. Notez que la fonction doit être actualisée en cas de modification de la structure des dossiers.

#### gabarit.projet.php
Gabarit HTML qui instancie le Controler. Ce gabarit devra être modifié pour être conforme à la structure des vues développées. Dans l'exemple initial, le gabarit contient l'entête, le pied de page et les liens vers les fichiers CSS et javascript de base. 
L'utilisation du gabarit est optionnel, dans ce cas, le fichier index.php devra instancier la classe Controler.

#### Controler.class.php
La classe Controler est instanciée par le gabarit HTML (ou index.php, si aucun gabarit). Celle-ci traite la requête HTTP et appel les modèles et les vues appropriées. Celui-ci contient initialement la méthode gerer() qui traite la requête de base (Initialement : $_GET['requete']).

#### ajaxControler.php
Controleur de requête ajax. Ce fichier servira à gérer les requêtes ajax et sera appelé directement par ajax. Ce fichier fait appel à config.php. 

#### /modeles
Dossier qui contiendra les modèles. Dans la version initiale, ce dossier contient une classe Modele de base. Vous n'avez qu'à dupliquer le fichier et remplacer "Modele" (nom du fichier et nom de la classe) par le nom de votre modèle. 

#### /vues
Contiendra les classes de Vues. La classe Vue qui contient une simple fonction statique pour l'affichage de la page d'accueil peut être dupliqué afin de créer l'ensemble des vues.

#### /lib
Ce dossier contiendra les classes personnalisées (accès SQL, traduction, classe de gestion des exceptions) que vous pourriez ajouter au projet (autres que les vues et les modèles). Notez qu'il faut mettre à jour la fonction d'autoload dans le fichier config.php afin de tenir compte de l'ajout de dossier. 

## Licence
Copyright (c) 2013 Jonathan Martel  
Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
http://creativecommons.org/licenses/by-nc/3.0/deed.fr
