<?php 
	
		$bdd = new PDO('mysql:host=localhost;dbname=silarm;charset=utf8', 'root', '');
		

		$reponse_cli=$bdd->prepare("INSERT INTO client (nom,prenom,email,login,password,telephone) values (:nom,:prenom,:email,:login,:password,:telephone)");
		$reponse_cli->execute(array(
			'nom'=>$_POST['nom'],
			'prenom'=>$_POST['prenom'],	
			'email'=>$_POST['email'],
			'login'=>$_POST['login'],
			'password'=>$_POST['password'],
			'telephone'=>$_POST['telephone']));

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
			width: 45%;
			height:30%;
			margin-left: 25%;
			margin-top: 10%;

		}

		.validation_message{
			font-size: 30px;
			font-family:Arial, Helvetica, sans-serif;
		}

		.btn_conn {
				border:none;
				padding:6px 0 6px 0;
				border-radius:2px;
				box-shadow:3px 3px 12px #999;
				background-color:black;
				font:bold 13px Arial;
				color:white;
				padding: 10px;
				margin-left: 45%;
				
			}

	</style>
</head>

<body>
	<header >

		<div class="iconehome">
			<a href="ppagePrincipale.php"> <img src="home.png"></a>		
		</div>
	
		<div>
				<h1 style="text-align: center;">Ste SILARM</h1>
		</div>
		

	</header>

	
	<section>
		<div class="validation">
			<p class="validation_icone">
				<img src="validation_icone.png">
			</p> 

			<p class="validation_message">
				Vous Etes Inscris Avec Succes !!
			</p>

			<p class="validation_icone">
				<img src="validation_icone.png">
			</p> 

		</div>

		<br>

		<div>
				<a href="seConnecter.php" target="_blank"> <input type="button" value="Se Connecter" class="btn_conn"> </a>
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