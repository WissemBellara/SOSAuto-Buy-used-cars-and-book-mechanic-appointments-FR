
<?php
session_start();
include 'dbConfig.php';
$dbCon = new dbConnect();

$tableName = 'reservation';
        $toyData = array(
            'Date' => $_POST['date'],
            'Temps' => $_POST['heure'], 
            'Nom' => $_POST['nom'],
            'Prenom' => $_POST['prenom'],
            'Email' => $_POST['mail'],
            'Tel' => $_POST['numero'],
            'Message' => $_POST['msg']
        );
        
        $insert = $dbCon->insert($tableName,$toyData);
		if($insert)
		{echo('
            <head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="design.css">
	<style>
		H2 {text-align: center;
			font-size: 180%;}
		p {text-align: center;}
		article {background-color: white;
			margin: 100px 150px 0px 150px;
			height: 350px;}
		nav {text-align: center;
			margin-top: 180px;}
	</style>
</head>
<body>
<header>
	<table>
		<tr>
			<td></td>
			<td colspan="2"><a href="accueil.html"><img src="Images/SOS-AUTO.png" width="180px" height="100px"></a></td>
			<td><a href="accueil.html">Accueil</a></td>
			<td><a href="apropos.html">A propos</a></td>
			<td><a href="réparation.html">Réparation</a></td>
			<td><a href="choixdereservation.html">Entretien</a></td>
			<td><a href="diagnostic.html">Diagnostic</a></td>
			<td><a href="showroom.html">Voitures Occasions</a></td>
			<td></td>
		</tr>
	</table>
</header>
<article>
	<br>
	<H2>Voilà ! Votre séance est réservée !</H2>
	<p>Un e-mail de confirmation est en cours d envoi.</p>
	<nav>
		<a href="choixdereservation.html">Découvrez d autres services</a>
	</nav>
</article>
<footer>
		<div>
			<c>Nos services</c><br>
			<br>
			<d>
				La réparation mécanique et carrosserie<br>
				Le changement et l’entretien pneumatique<br>
				La réparation et remplacement de pares brises<br>
				La vente des voitures d’occasions
			</d>
		</div>
		<div>
			<c>Nos horaires</c><br>
			<br>
			<d>Lun-Ven: 7am-19pm</d>
		</div>
		<div>
			<c>Contact</c><br>
			<br>
			<d>
				18 bis rue du El Qods, rades<br>
				Tel: 12 345 678<br>
				Email: sos.automobile@gmail.com<br>
				<img src="Images/facebook.png" width="40px" height="28px">
				<img src="Images/instagram.jpg" width="40px" height="28px">
				<br>
			</d>
		</div>	
		<hr>
			<e>Copyright ISG TUNIS</e>
	</footer>
</body>  ');}
		else
		{echo("ERREUR");}
        
?>