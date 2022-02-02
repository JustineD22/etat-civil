<form action="index.php?page=formulaire" method="post">

    <br>
    <label for="madame"> Madame </label>
    <input type="radio" id="madame" value="madame" name="sexe">
    <label for="monsieur"> Monsieur </label>
    <input type="radio" id="monsieur" value="monsieur" name="sexe">
    <br/><br/>
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" placeholder="Votre Nom"/>
    <br/><br/>
    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" placeholder="Votre Prénom"/>
    <br/><br/>
    <label for="adresse">Adresse : </label>
    <input type="text" id="adresse" name="adresse" placeholder= "Votre Adresse"/>
    <br/><br/>
    <label for="cp">Code Postal : </label>
    <input type="number" id="cp" name="cp" placeholder="Votre Code Postal">
    <br><br>
    <label for="ville">Votre ville :</label>
    <input type="text" id="ville" name="ville" placeholder="Votre Ville">
    <br/><br/>
    <label for="numero"> Numéro de tel : </label>
    <input type="tel" name="numero" id="numero" placeholder="Votre Numéro de téléphone"/>
    <br/><br/>
    <label for="email">E-mail :</label>
    <input type="text" id="email" name="email" placeholder="Votre E-mail"/>
    <br/><br/>
    <label for="date"> Date de naissance :</label>
    <input type="date" name="date" id="date" placeholder="Votre date de naissance"/>
    <br/><br/>
    <label for=""> Situation matrimonial : </label>
    <input list="matrimonial" id="situation" name="matrimonial" placeholder="Situation Matrimonial"/>
    <datalist id="matrimonial">
        <option value="Célibataire"></option>
        <option value="Marié(e)"></option>
        <option value="Divorcé(e)"></option>
        <option value="Paxé(e)"></option>            
    </datalist>
    <br><br>
    <label for="villenaissance">Votre ville de Naissance :</label>
    <input type="text" id="villenaissance" name="villenaissance" placeholder="Votre Ville de Naissance">
    <br/><br/>
    

    <input type="reset" value="Effacer"/>
    <input type="submit" value="Clique ici pour valider"/>
    <input type="hidden" name="frm"/>
</form>