<?PHP
	include "../controller/CommandeC.php";

	$commandeC=new CommandeC();
	$listeUsers=$commandeC->afficherCommande();

?>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Liste Des Commandes </title>
    </head>
    <body>
		<button><a href="connexion.php">Ajouter Une commande</a></button>
		<hr>
		<table border=1 align = 'center'>
			<tr>
				<th>Id</th>
				<th>Nom</th>
				<th>Prenom</th>
				<th>Telephone</th>
				<th>Fax</th>
				<th>Rue</th>
                <th>Ville</th>
			    <th>Date</th>
                <th>Supprimer</th>
			</tr>

			<?PHP
				foreach($listeUsers as $user){
			?>
				<tr>
					<td><?PHP echo $user['id']; ?></td>
					<td><?PHP echo $user['nom']; ?></td>
					<td><?PHP echo $user['prenom']; ?></td>
					<td><?PHP echo $user['telephone']; ?></td>
					<td><?PHP echo $user['fax']; ?></td>
					<td><?PHP echo $user['rue']; ?></td>
					<td><?PHP echo $user['ville']; ?></td>
					<td><?PHP $date= date('d-m-y h:i:s'); echo $date; ?></td>


					<td>
						<form method="POST" action="supprimerCommande.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $user['id']; ?> name="id">
						</form>
					</td>
				
				</tr>
			<?PHP
				}
			?>
		</table>
	</body>
</html>
