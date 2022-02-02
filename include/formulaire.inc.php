<?php
if (isset($_POST['frm'])) {
    
    $nom = htmlentities(trim($_POST['nom'])) ?? '';
    $prenom = htmlentities(trim($_POST['prenom'])) ?? '';
    $email = htmlentities(trim($_POST['email'])) ?? '';

    $erreur = array();



    if (strlen($nom) === 0)
        array_push($erreur, "Veuillez saisir votre nom");

    elseif (!ctype_alpha($nom))
        array_push($erreur, "Veuillez saisir des caractères alphabétiques");

    if (strlen($prenom) === 0)
        array_push($erreur, "Veuillez saisir votre prénom");

    elseif (!ctype_alpha($prenom))
        array_push($erreur, "Veuillez saisir des caractères alphabétiques");

    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        array_push($erreur, "Veuillez saisir un e-mail valide");

    if (strlen($mdp) === 0)
        array_push($erreur, "Veuillez saisir un mot de passe");

    if (strlen($mdp2) === 0)
        array_push($erreur, "Veuillez saisir la vérification de votre mot de passe");

    if ($mdp !== $mdp2)
        array_push($erreur, "Vos mots de passe ne correspondent pas");

    if (count($erreur) === 0) {
        $serverName = "localhost";
        $userName = "root";
        $database = "exercice";
        $userPassword = "";

        try{
            $conn = new PDO("mysql:host=$serverName;dbname=$database", $userName, $userPassword);
            echo "Connexion OK"; 
            
            $conn->beginTransaction();
            $mdp = password_hash($mdp, PASSWORD_DEFAULT);
            $sql = "INSERT INTO utilisateurs(id_utilisateur, nom, prenom, mail, mdp)
            VALUES (NULL, '$nom', '$prenom', '$email', '$mdp') ";
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

        echo password_hash($mdp,  PASSWORD_DEFAULT);



    }
} else {
    echo "Merci de renseigner le formulaire";
    $nom = $prenom = $email = '';
}


include './include/frmFormulaire.php';