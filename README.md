# generateur-bon-cadeau PHP VANILLA

Le but de cet exercice est de créer un générateur de bon cadeau virtuel en PHP pour une petite boutique locale. Cette solution sera utilisée par le commerçant lors de l'achat d'un bon cadeau par un client, afin de pouvoir générer le bon cadeau sur une page web qu'il pourra ensuite imprimer.

 

Commencez par créer une page index.php présentant un formulaire envoyant les données avec le verbe POST sur l'action /bon-cadeau.php. Le formulaire devra permettre de saisir les informations suivantes:

Le montant du bon cadeau compris en 10 et 10000 euros
Le nom et le prénom du bénéficiaire
Le nom et le prénom de la personne offrant le bon
La date du bon
 

Ensuite créez le fichier bon-cadeau.php. Lors de la réception des informations, vous devrez créer un objet bon cadeau à partir d'une classe bon cadeau. Pour cela, créez un fichier BonCadeau.class.php et créez y une classe BonCadeau qui devra respecter les contraites suivantes:

Contenir toutes les propriétés nécessaires pour stocker les informations d'un bon cadeau provenant du formulaire ainsi qu'un numéro de bon cadeau et une date limite d'utilisation
Dans le constructeur, créer la valeur de la propriété numéro de bon cadeau à partir de la date du bon sous la forme: mois - annee - 2 chiffre aléatoire 
Dans le constructeur, créer la valeur de la propriété date d'expiration en ajoutant un an à la date du bon
Idéalement, les propriétés devront être protected, vous devrez créer des getter et des setter (ou utiliser les méthodes magiques __get et __set)
Contenir une méthode permettant d'afficher le bon cadeau avec toutes ses informations en HTML
