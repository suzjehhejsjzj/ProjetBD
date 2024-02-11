<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations de l'assuré</title>
</head>
<body>
    <h2>Informations sur l'assuré</h2>
    <form method="post" action="client_data.php" >
        <p>
            <label for="nom">Nom : </label>
            <input type="text" name="nom" id="nom">
        </p>
        <p>
            <label for="prenoms">Prenoms : </label>
            <input type="text" name="prenoms" id="prenoms">
        </p>
        <p>
            <label for="adresse">Adresse : </label>
            <input type="text" name="adresse" id="adresse">
        </p>
        <p>
            <label for="type">Type : </label>
            <select name="type" id="type">
                <option value="personnelle">Personnelle</option>
                <option value="publique">Publique</option>
            </select>
        </p>
        <p>
            <label for="contact">Contact : </label>
            <input type="tel" name="contact" id="contact">
        </p>
        <p>
            <label for="emeil">Email : </label>
            <input type="email" name="email" id="email" placeholder="nom@x.y" required>
        </p>
        <p>
            <label for="password">Mot de passe : </label>
            <input type="password" name="password" id="password" required>
        </p>
        <p>
            <input type="reset" value="Effacer">
            <input type="submit" value="Soumettre">
        </p>
    </form>
</body>
</html>