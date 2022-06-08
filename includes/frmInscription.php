<form action="index.php?page=inscription" method="post">
    <div>
        <label for="nom">Nom : </label>
        <input type="text" name="nom" id="nom">
    </div>
    <div>
        <label for="prenom">Prénom : </label>
        <input type="text" name="prenom" id="prenom">
    </div>
    <div>
        <label for="mail">Email : </label>
        <input type="text" name="mail" id="mail">
    </div>
    <div>
        <input type="reset" value="Effacer">
        <input type="submit" value="Envoyer">
    </div>
    <input type="hidden" name="frmInscription">
</form>