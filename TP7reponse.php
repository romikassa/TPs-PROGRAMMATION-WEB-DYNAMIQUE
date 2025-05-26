<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h3>Debug:</h3>";
echo "<pre>Méthode utilisée: ".$_SERVER['REQUEST_METHOD']."</pre>";
echo "<pre>Données reçues:\n";
var_dump($_POST);
echo "</pre>";

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Nettoyage ici
    $titre = isset($_POST['titre']) ? htmlspecialchars($_POST['titre']) : '';
    $nom = isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : '';
    $prenom = isset($_POST['prenom']) ? htmlspecialchars($_POST['prenom']) : '';
    $annee = isset($_POST['annee']) ? htmlspecialchars($_POST['annee']) : '';
    $identifiant = isset($_POST['identifiant']) ? htmlspecialchars($_POST['identifiant']) : '';
    $mdp = isset($_POST['mdp']) ? htmlspecialchars($_POST['mdp']) : '';
    $sexe = isset($_POST['sexe']) ? htmlspecialchars($_POST['sexe']) : '';
    
    echo "<pre>Valeurs nettoyées:\n";
    print_r(get_defined_vars());
    echo "</pre>";
    echo "<!DOCTYPE html><html><head><title>Résultats</title></head><body>";
    echo "<h1>Bonjour $titre $prenom $nom</h1>";
    echo "<h2>Votre identifiant: $identifiant</h2>";
    echo "<h3>Votre mot de passe: $mdp</h3>";
    echo "<pre>Checkbox débutant: ";
    var_dump(isset($_POST['debutant']));
    echo "</pre>";
    $mot = ($sexe == 'F') ? "débutante" : "débutant";
    if(isset($_POST['debutant'])) {
        echo "<p style='color:red;font-weight:bold;'>TEST: Comme vous êtes $mot, c'est une bonne idée d'apprendre PHP!</p>";
    } else {
        echo "<p style='color:blue;'>DEBUG: La case débutant n'était pas cochée</p>";
    }
    if(!empty($annee) && is_numeric($annee)) {
        $url = "https://fr.wikipedia.org/wiki/".intval($annee);
        echo "<h2>Événements en $annee:</h2><iframe src=\"$url\"></iframe>";
    }
    echo '<p><a href="TP7index.html">Retour</a></p></body></html>';
} else {
    echo "<h1>Erreur: Cette page attend des données POST</h1>";
    echo "<p>Utilisez le <a href='TP7index.html'>formulaire</a> pour soumettre des données.</p>";
}
?>