<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Planning.css" />
    <script src="main.js"></script>
</head>
<body>
    <form id="Planning" action="ajouthoraire.php" >
        <tr>
            <td><label>Afficher un planning</label> </td><br>
                <td>
                    <select>
                        <option>Par personnel</option>
                        <option>Nom1</option>
                        <option>Nom2</option>
                        <option>Nom3</option>
                    </select>
                </td><br>
                <a href="afficherplanning.php">Afficher <br><br></a>
            
            
        </tr>
    
    
    
        <tr>
            <td><label>Ajouter un horaire</label> </td><br>
            Jour :
            <input type="date"><br>
            Salle :
                <td>
                    <select>
                        <option>Salle A</option>
                        <option>Salle B</option>
                        <option>Salle C</option>
                    </select>
                </td><br>
            Type :
                <td>
                    <select>
                        <option>Sang</option>
                        <option>Plasma</option>
                        <option>Plaquettes</option>
                    </select>
                </td><br>
            Capacité (/h) :
            <input type="text"><br>
            Heure:
            de : <input type="time"><br>
            à : <input type="time"><br>
            Personnel :<br>
            <input type="checkbox">Nom1<br>
            <input type="checkbox">Nom2<br>
            <input type="checkbox">Nom3<br>
            <input type="submit" name="Ajouter" value="Ajouter">
        </tr>


    </form>
</body>
</html>