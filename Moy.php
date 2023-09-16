<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sosauto";
$x=0;
$nbpersonnes=0;
$nb1=0;
$nb2=0;
$nb3=0;
$nb4=0;
$nb5=0;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Note FROM evaluation";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  // output data of each row
  while($row = $result->fetch_assoc()) {
      switch ($row["Note"]) {
            case 1:
                $nb1+=1;
              break;
            case 2:
                $nb2+=1;
                break;
            case 3:
                $nb3+=1;
                    break;
            case 4:
                $nb4+=1;
                        break;
            case 5:
                $nb5+=1;
                            break;
          }
    $x= $x+ $row["Note"];
  }
} else {
  echo "0 results";
}


echo(" 
<head>
	<meta charset='utf-8'/>
	<link rel='stylesheet' type='text/css' href='design.css'>
	<style>
		H2 {text-align: center;
			font-size: 180%;}
		p {text-align: center;}
		article {background-color: white;
			margin: 100px 150px 0px 150px;
			height: 350px;}
		nav {text-align: center;
			}
		#aff {display:flex ;}
		#aff>p { padding:1%;}
	</style>
</head>
<body>
<header>
	<table>
		<tr>
			<td></td>
			<td colspan='2'><a href='accueil.html'><img src='Images/SOS-AUTO.png' width='180px' height='100px'></a></td>
			<td><a href='accueil.html'>Accueil</a></td>
			<td><a href='apropos.html'>A propos</a></td>
			<td><a href='réparation.html'>Réparation</a></td>
			<td><a href='choixdereservation.html'>Entretien</a></td>
			<td><a href='diagnostic.html'>Diagnostic</a></td>
			<td><a href='showroom.html'>Voitures Occasions</a></td>
			<td></td>
		</tr>
	</table>
</header>
<article>
	<br>
	<H2>Voici un Bilan des Notes !</H2>
<div id='aff'>	
<p>Nombre de personnes qui ont voté 1 :".$nb1." Avec un pourcentage de : ".(($nb1/$result->num_rows)*100).
"</p><p>Nombre de personnes qui ont voté 2 :".$nb2." Avec un pourcentage de :".(($nb2/$result->num_rows)*100).
"</p><p>Nombre de personnes qui ont voté 3 :".$nb3." Avec un pourcentage de :".(($nb3/$result->num_rows)*100).
"</p><p>Nombre de personnes qui ont voté 4 :".$nb4." Avec un pourcentage de :".(($nb4/$result->num_rows)*100).
"</p><p>Nombre de personnes qui ont voté 5 :".$nb5." Avec un pourcentage de :".(($nb5/$result->num_rows)*100).
"</p></div><p> La Moyenne des Notes est :  " .$x/$result->num_rows." 
</p>
	<nav>
		<a href='choixdereservation.html'>Découvrez d autres services</a>
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
				<img src='Images/facebook.png'width='40px' height='28px'>
				<img src='Images/instagram.jpg' width='40px' height='28px'>
				<br>
			</d>
		</div>	
		<hr>
			<e>Copyright ISG TUNIS</e>
	</footer>
</body>
			");
$conn->close();
?>