<?php 
	session_start ();
 ?>
<?php 
	if(isset($_SESSION['login']) and isset($_SESSION['password']))
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

		.traveau_icone{
			float: left;
			font-size: 20px;
			margin-left: 25%;
		}

		.fournitures_icone{
			font-size: 20px;
			margin-left: 55%;
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
			<a href="page_membre.php"> <img src="home.png"></a>		
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


	<section>
		<br>
		<br>
		<p class="traveau_icone">
			<a href="travaux_de_construction.php">
				<img src="travaux.png" alt="Demande de Traveaux"> <br>Demande de Traveaux
			</a>
		</p>

		<p class="fournitures_icone">
			<a href="produits.php">
				<img src="produits.png" alt="Demande de fournitures"> <br>Demande de fournitures
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
			<a href="PDG.php"><strong>PDG:</strong> </a>
		</div>
	</footer>
</body>
<?php 
	}

	else{
		header ('location: Seconnecter.php');
	}
 ?> 