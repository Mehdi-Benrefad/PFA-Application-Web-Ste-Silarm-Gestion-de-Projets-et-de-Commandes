<?php 
session_start();
 ?>

<?php

	
	$bdd = new PDO('mysql:host=localhost;dbname=silarm;charset=utf8', 'root', '');
	
	$reponse=$bdd->query('select * from admin');
	$donnee=$reponse->fetch();
	$login_valide = $donnee['login'];
	$pwd_valide = $donnee['password'];


	if(isset($_SESSION['login']) and isset($_SESSION['password'])  and $_SESSION['login']==$login_valide and $_SESSION['password']==$pwd_valide)
	{

		$bdd = new PDO('mysql:host=localhost;dbname=silarm;charset=utf8', 'root', '');
		$reponse=$bdd->prepare('UPDATE fournitures SET etat = "FINALISE" WHERE id_fournitures = :id');
		$reponse->execute(array('id'=>$_GET['id_projet']));

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

          body{
			background-color: grey;
			}
          footer{
          width: 100%;
          height:20%;                 
          border: 1px solid ;
          background-color: grey;
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
		.iconehome{
			margin-top: 1%;
		}

		.icone_deconnexion{
			float: right;
			margin-top: -14%;	
			margin-right: 1%;
		}
		

		.PDG{
				margin-left: 50%;
			}

		.contact{
				float: left;
				margin-top: 0%;
			}  

		h2{
			font-size: 40px;
		}

		.iconehome{
			margin-top: 1%;
		}

		.validation
		{
		
			border: 2px solid green;
			background-color: #52FF33;
			display: flex;
			flex-wrap: wrap;
			width: 60%;
			height:30%;
			margin-left: 20%;
			margin-top: 10%;

		}

		.validation_message{
			font-size: 30px;
			font-family:Arial, Helvetica, sans-serif;
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

	
	<section>
		<div class="validation">
			<p class="validation_icone">
				<img src="validation_icone.png">
			</p> 

			<p class="validation_message">
				DEMANDE FINALISEE
			</p>

			<p class="validation_icone">
				<img src="validation_icone.png">
			</p> 

		</div>
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