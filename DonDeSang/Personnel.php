<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Personnel.css" />
    <script src="main.js"></script>
</head>
<body>
    <div>
        <label for="titre">Gestion du personnel</label>
    </div>
    <div>
        <form action="ajoutpersonnel.php">
            <label for="ajouterPerso">Ajouter personnel</label><br>       
                Nom :
                <input type:"text"><br>
                Prénom :
                <input type:"text"><br>
                Mail :
                <input type="email"><br>
                Sexe :
                <input type="radio" name="Sexe">Femme
                <input type="radio" name="Sexe">Homme<br>
                Poste :
                    <td>
                        <select>
                            <option>Médecin</option>
                            <option>Infermier</option>
                            <option>Stagiaire</option>
                        </select>
                    </td><br>
                Droits :
                    <td>
                        <select>
                            <option>Personnel</option>
                            <option>Lecture</option>
                        </select>
                    </td><br>
                <input type="submit" name="Ajouter" value="Ajouter">

                
        </form>
        


    </div>
</body>
</html>