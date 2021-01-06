<?php 
session_start();
 ?>

<?php
$bdd = new PDO('mysql:host=localhost;dbname=silarm;charset=utf8', 'root', '');
	
	$reponse=$bdd->query('select * from admin');
	$donnee=$reponse->fetch();
	$login_valide = $donnee['login'];
	$pwd_valide = $donnee['password'];

	if(isset($_SESSION['login']) and isset($_SESSION['password']) and $_SESSION['login']==$login_valide and $_SESSION['password']==$pwd_valide)
	{
?>
	

<!DOCTYPE>
<head>
	<style type="text/css">
		header { width: 100%;
          height: 30%;                 
          border: 1px solid ;
          background-image: url(header.png);
          margin-top: 0px;
          }

          footer{
          width: 100%;
          height:20%;                 
          border: 1px solid ;
          background-color: grey;
          margin-bottom: 0px;
          }

		section{
			background-color: white;
			width: 100%;
          	height:80%;                 
          	border: 1px solid ;
          	display: flex;
          	justify-content: space-between;
          	padding-top: 10%;

			} 


		h1{
          	color: white;
          	font-size: 60px;
			font-family:Arial, Helvetica, sans-serif;
			margin-top: 0.5%;

          }


		.PDG{
				margin-left: 50%;
			}

		.contact{
				float: left;
				margin-top: -1%;
			}  

		h2{
			font-size: 40px;
		}

		.iconehome{
			margin-top: 1%;
		}


		.icone_deconnexion{
			float: right;
			margin-top: -14%;	
			margin-right: 1%;
		}


		body{
			background-color: grey;
		}
		
	</style>

</head>


<body>
	<header >

		<div class="iconehome">
			<a href="page_admin.php"> <img src="home.png"></a>		
		</div>
	
		<div>
				<h1 style="text-align: center;">Ste SILARM</h1>
		</div>
		
		<div class="icone_deconnexion">
			<a href="deconnection.php" style="color: black">
				<img src="deconnexion.png"> 
				<br> 
				<strong>deconnexion</strong> 
			</a>		
		</div>
	
	</header>

		<h3 style="text-align: center;">
			DEMANDES DE FOURNITURES:
		</h3>
	<section>
		<p class="traveau_icone">
			<a href="liste_produits_finalise.php" style="font-size: 25px;">
				<img src="finalise.png" alt="Demande de Traveaux"> <br>Demandes Finalisées
			</a>
		</p>
		
		<p class="traveau_icone">
			<a href="liste_produits_valide.php" style="font-size: 25px;">
				<img src="accepter.png" alt="Demande de Traveaux"> <br>Demandes validees
			</a>
		</p>

		<p class="fournitures_icone">
			<a href="liste_produits_refuse.php" style="font-size: 25px;">
				<img src="refuser.png" alt="Demande de fournitures"> <br>Demandes refusees
			</a>
		</p>

		<p class="fournitures_icone">
			<a href="liste_produits_en_attente.php" style="font-size: 25px;">
				<img src="enattente.png" alt="Demande de fournitures"> <br>Demandes en attente
			</a>
		</p>
	</section>


	<footer>
		<div class="contact">
			<ul>
				<li><strong>e-mail:</strong> exemple@exemple.com</li><br>
				<li><strong>tel:</strong> 0600000000</li><br>
				<li><strong>fax:</strong> 0500000000</li><br>
			</ul>
		</div>

		<div class="PDG">
			<br>
			<a href="PDG.php"><strong>PDG:</strong></a>
		</div>
	</footer>
</body>
<?php 
	}

	else{
		header ('location: Seconnecter.php');
	}
 ?> 