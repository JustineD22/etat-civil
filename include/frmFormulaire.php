<form action="index.php?page=formulaire" method="post">

    <br>
    <label for="madame"> Madame </label>
    <input type="radio" id="madame" value="madame" name="sexe">
    <?php if($sexe === 'madame') echo "checked"; ?>
    <label for="monsieur"> Monsieur </label>
    <input type="radio" id="monsieur" value="monsieur" name="sexe">
    <?php if($sexe === 'monsieur') echo "checked"; ?>
    <br/><br/>
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" placeholder="Votre Nom"<?php echo $nom;?>/>
    <br/><br/>
    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" placeholder="Votre Prénom"<?php echo $prenom;?>/>
    <br/><br/>
    <label for="adresse">Adresse : </label>
    <input type="text" id="adresse" name="adresse" placeholder= "Votre Adresse"<?php echo $adresse;?>/>
    <br/><br/>
    <label for="cp">Code Postal : </label>
    <input type="number" id="cp" name="cp" placeholder="Votre Code Postal"<?php echo $cp;?>/>
    <br><br>
    <label for="ville">Votre ville :</label>
    <input type="text" id="ville" name="ville" placeholder="Votre Ville"<?php echo $ville;?>>
    <br/><br/>
    <label for="numero"> Numéro de tel : </label>
    <input type="tel" name="numero" id="numero" placeholder="Votre Numéro de téléphone"<?php echo $numero;?>/>
    <br/><br/>
    <label for="email">E-mail :</label>
    <input type="text" id="email" name="email" placeholder="Votre E-mail"<?php echo $email;?>/>
    <br/><br/>
    <label for="datenaissance"> Date de naissance :</label>
    <input type="date" name="datenaissance" id="datenaissance" placeholder="Votre date de naissance"<?php echo $date;?>/>
    <br/><br/>
    <label for=""> Situation matrimonale : </label>
    <input list="matrimonale" id="situation" name="matrimonale" placeholder="Situation Matrimonial"/>
    <datalist id="matrimonale">
        <option value="Célibataire"<?php if($matrimoniale === "Célibataire") echo "selected"; ?>></option>
        <option value="Marié(e)"<?php if($matrimoniale === "Marié(e)") echo "selected"; ?>></option>
        <option value="Divorcé(e)"<?php if($matrimoniale === "Divorcé(e)") echo "selected"; ?>></option>
        <option value="Paxé(e)"<?php if($matrimoniale === "Paxé(e)") echo "selected"; ?>></option>
        <option value="Veuf/Veuve"<?php if($matrimoniale === "Veuf/Veuve") echo "selected"; ?>></option>          
    </datalist>
    <br><br>
    <label for="villenaissance">Votre ville de Naissance :</label>
    <input type="text" id="villenaissance" name="villenaissance" placeholder="Votre Ville de Naissance"<?php echo $villenaissance;?>/>
    <br/><br/>
    

    <input type="reset" value="Effacer"/>
    <input type="submit" value="Clique ici pour valider"/>
    <input type="hidden" name="frm"/>
</form>