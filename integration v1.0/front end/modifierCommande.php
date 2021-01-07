
<?php
	include "../controller/CommandeC.php";
	include_once '../model/Commande.php';

	$commandeC = new CommandeC();
	$error = "";
	
	if (
		isset($_POST["ville"]) && 
        isset($_POST["etat"])
	){
		if (
            !empty($_POST["ville"]) && 
            !empty($_POST["etat"]) 
        ) {
            $user = new Commande(
                $_POST['ville'],
                $_POST['etat'], 
               
			);
			
            $commandeC->modifierCommande($user, $_GET['id']);
            header('refresh:5;url=tables-basic.php');
        }
        else
            $error = "Missing information";
	}

?>
<html>
	<head>
		<title>Modifier Commande</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<button><a href="afficherUtilisateurs.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['id'])){
				$user = $commandeC->recupererCommande($_GET['id']);
				
		?>
		<form action="" method="POST">
            <table align="center">
                <tr>
                    <td rowspan='4' colspan='1'>
						Fiche Personnelle
					</td>
                    <td>
                        <label for="id">Id:
                        </label>
                    </td>
                    <td>
						<input type="text" name="id" id="id"  value = "<?php echo $user['id']; ?>" disabled>
					</td>
				</tr>
				<tr>
					<td>
						<label for="ville">ville:
						</label>
					</td>
					<td>
						<input type="text" name="ville" id="ville" maxlength="20" value = "<?php echo $user['ville']; ?>">
					</td>
				</tr>
                <tr>
                    <td>
                        <label for="etat">etat:
                        </label>
                    </td>
                    <td><input type="text" name="etat" id="etat" maxlength="20" value = "<?php echo $user['etat']; ?>"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="email">Adresse mail:
                        </label>
                    </td>
                    <td>
                        <input type="email" name="email" id="email" pattern=".+@gmail.com|.+@esprit.tn" value = "<?php echo $user['Email']; ?>">
                    </td>
                </tr>
                <tr>
                    <td rowspan='2' colspan='1'>Information de Connexion</td>
                    <td>
                        <label for="login">Login:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="login" id="login" value = "<?php echo $user['Login']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="pass">Mot de passe:
                        </label>
                    </td>
                    <td>
                        <input type="password" name="pass" id="pass" value = "<?php echo $user['Password']; ?>">
                    </td>
                </tr>
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier" name = "modifer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
	</body>
</html>