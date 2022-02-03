<?php
if (isset($_POST['frm'])) {
    $sexe = $_POST['sexe'] ?? '';
    $nom = htmlentities(trim($_POST['nom'])) ?? '';
    $prenom = htmlentities(trim($_POST['prenom'])) ?? '';
    $adresse = htmlentities(trim($_POST['adresse'])) ?? '';
    $cp = htmlentities(trim($_POST['cp'])) ?? '';
    $ville = htmlentities(trim($_POST['ville'])) ?? '';
    $numero = htmlentities(trim($_POST['numero'])) ?? '';
    $email = htmlentities(trim($_POST['email'])) ?? '';
    $date = htmlentities(trim($_POST['datenaissance'])) ?? '';
    $matrimonale = htmlentities(trim($_POST['matrimonale'])) ?? '';
    $villenaissance = htmlentities(trim($_POST['villenaissance'])) ?? '';

    $erreur = array();


    if (strlen($sexe) === 0)
        array_push($erreur, "Veuillez saisir votre genre");

    if (strlen($nom) === 0)
        array_push($erreur, "Veuillez saisir votre nom");

    elseif (!ctype_alpha($nom))
        array_push($erreur, "Veuillez saisir des caractères alphabétiques");

    if (strlen($prenom) === 0)
        array_push($erreur, "Veuillez saisir votre prénom");

    elseif (!ctype_alpha($prenom))
        array_push($erreur, "Veuillez saisir des caractères alphabétiques");
    
    if (strlen($adresse) === 0)
        array_push($erreur, "Veuillez saisir votre adresse");

    if (strlen($cp) === 0)
        array_push($erreur, "Veuillez saisir votre code postal");

    if (strlen($ville) === 0)
        array_push($erreur, "Veuillez saisir votre code ville");

    if (strlen($numero) === 0)
        array_push($erreur, "Veuillez saisir votre code numéro de téléphone");

    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        array_push($erreur, "Veuillez saisir un e-mail valide");

    
    if (strlen($datenaissance) === 0)
        array_push($erreur, "Veuillez saisir votre date de naissance");

    if ($matrimonale === '')
        array_push($erreur, "Veuillez sélectionner votre situation matrimonale");

        
    if (strlen($villenaissance) === 0)
        array_push($erreur, "Veuillez saisir votre ville de naissance");

    if (count($erreur) === 0) {
        $serverName = "localhost";
        $userName = "root";
        $database = "etat civil";
        $userPassword = "";

        try{
            $conn = new PDO("mysql:host=$serverName;dbname=$database", $userName, $userPassword);
            echo "Connexion OK"; 
            
            $conn->beginTransaction();
            $mdp = password_hash($mdp, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (id_user, sexe , nom, prenom, adresse, cp, ville, numero, email, datenaissance, matrimonale, villenaissance)
            VALUES (NULL, '$sexe', '$nom', '$prenom', '$adresse', '$cp', '$ville', '$numero', '$email', '$datenaissance', $matrimonale ,'$villenaissance')";
            $conn->exec($sql);
            $conn->commit();
            echo "<p>Inserstion effectués </p>";

        }

        catch(PDOException $e){
            $conn->rollBack();
            die("Erreur :  " . $e->getMessage());
        }

    } else {
        $messageErreur = "<ul>";
        $i = 0;
        do {
            $messageErreur .= "<li>";
            $messageErreur .= $erreur[$i];
            $messageErreur .= "</li>";
            $i++;
        } while ($i < count($erreur));

        $messageErreur .= "</ul>";

        echo $messageErreur;




    }
} else {
    echo "Merci de renseigner le formulaire";
    $sexe = $nom = $prenom = $adresse = $cp = $ville = $numero = $email = $matrimonale = $datenaissance = $villenaissance = '';
}


include './include/frmFormulaire.php';