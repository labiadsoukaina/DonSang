<?php


$bdd = new PDO('mysql:host=127.0.0.1;dbname =dondesang', 'root', '');
if(isset($_POST['Valider'])) {
   $nom= htmlspecialchars($_POST['Nom']);
   $prenom = htmlspecialchars($_POST['Prenom']);
   $cin = htmlspecialchars($_POST['CIN']);
	$email = htmlspecialchars($_POST['Email']);
	$verifemail = htmlspecialchars($_POST['verifemailmail']);
   $mdp = sha1($_POST['Mdp']);
   $verifmdp = sha1($_POST['verifmdp']);
   if(!empty($_POST['Nom']) AND !empty($_POST['Prenom']) AND !empty($_POST['CIN']) AND !empty($_POST['Email']) AND !empty($_POST['Mdp']) AND !empty($_POST['verifmdp']) AND !empty($_POST['verifemail'])) {
      $nomlength = strlen($nom);
      if($nomlength <= 255) {
         if($email == $verifemail) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
               $reqmail = $bdd->prepare("SELECT * FROM donneur WHERE email = ?");
               $reqmail->execute(array($email));
               $mailexist = $reqmail->rowCount();
               if($emailexist == 0) {
                  if($mdp == $verifmdp) {
                     $insertmbr = $bdd->prepare("INSERT INTO donneur (Nom, Prenom, CIN, Email, Mdp) VALUES(?, ?, ?, ?, ?)");
                     $insertmbr->execute(array($nom, $prenom, $cin, $email, $mdp, ));
                     $erreur = "Votre compte a bien été créé ! <a href=\"Connexion.php\">Me connecter</a>";
                  } else {
                     $erreur = "Vos mots de passes ne correspondent pas !";
                  }
               } else {
                  $erreur = "Adresse mail déjà utilisée !";
               }
            } else {
               $erreur = "Votre adresse mail n'est pas valide !";
            }
         } else {
            $erreur = "Vos adresses mail ne correspondent pas !";
         }
      } else {
         $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}



   /*session_start();
    
    $db = mysqli_connect("localhost", "root", "dondesang");
    
    if (isset($_POST['Valider'])) {
        session_start();
        
        $nom = mysql_real_escape_string($_POST['Nom']);
        $prenom = mysql_real_escape_string($_POST['Prenom']);
        $cin = mysql_real_escape_string($_POST['CIN']);
        $email = mysql_real_escape_string($_POST['Email']);
        $password = mysql_real_escape_string($_POST['password']);
        $verifpassword = mysql_real_escape_string($_POST['verifpassword']);
          
          if ($password==$verifpassword) {
            $password = md5($password);
            $sql = "INSERT INTO donneur(Nom, Prenom, CIN, Email, Mdp) VALUES ('$nom', '$prenom', '$cin', '$email', '$password')";
            mysqli_query($db, $sql);
            $_SESSION['message'] = "Bienvenue";
            $_SESSION['Nom']=$nom;
            header("location: home.php");
            
            
            
          }
        
        
        
    }*/

?>


<!DOCTYPE html>
	<html>
		<head>
			<title> Inscription </title>
			
		</head>

<body>
    <div class="inscription">
         <form method="post" action="Inscription.php">
		<h1 align="center">S'inscrire</h1>
		

		<table class="table" align="center">
		

		<tr>
			<td>
				<label for="Nom">Nom :</label>
			</td>
			<td>
				<input type="text" name="Nom" maxlength="50" size="30" placeholder="Entrer votre nom">
			</td>
		</tr>
        
        <tr>
			<td>
				<label for="Prenom">Prenom: </label>
			</td>
			<td>
				<input type="text" name="Prenom" maxlength="50" size="30" placeholder="Entrer votre prénom">
			</td>
		</tr>
        
        
        <tr>
        <td>
		<label for="CIN">CIN:</label>
			</td>
			<td>
				<input type="text" name="CIN" maxlength="50" size="30" placeholder="Entrez votre CIN">
			</td>
		</tr>


        

     <tr>
        <td>
		<label for="Email">Email:</label>
			</td>
			<td>
				<input type="text" name="Email" maxlength="50" size="30" placeholder="Exemple@gmail.com">
			</td>
		</tr>
	  
	  
	  
	   <tr>
        <td>
		<label for="verifmail">vérification de l'Email:</label>
			</td>
			<td>
				<input type="text" name="verifmail" maxlength="50" size="30" placeholder="Exemple@gmail.com">
			</td>
		</tr>



		
		<tr>
			<td>
				<label for=password>Mot de passe:</label>
			</td>
			<td>
				<input type="text" name="password" maxlength="50" size="30" placeholder="******">
			</td>
		</tr>	
		<tr>
            <tr>
			<td>
				<label for=VérifPassword>Vérification du mot de passe:</label>
			</td>
			<td>
				<input type="text" name="verifpassword" maxlength="50" size="30" placeholder="******">
			</td>
		</tr>	
		<tr>
			<td>
				<input type="submit" name="Valider" value="Valider" class="valider">
			
			</td>
		</tr>

					
		</table>

	
	</form>
    </div>
</body>
</html>