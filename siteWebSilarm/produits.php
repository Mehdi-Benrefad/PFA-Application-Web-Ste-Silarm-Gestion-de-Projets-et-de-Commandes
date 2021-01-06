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



		body{
			background-color: grey;
		}
		
		.icone_deconnexion{
			float: right;
			margin-top: -14%;	
			margin-right: 1%;
		}
				

		#nom{
				border-radius: 100rem;
	            font-family: 'Montserrat', sans-serif;
	            font-size: 1.5rem;
	            outline: none;
	            padding: .5rem 1.5rem;
	            width: 30%;
	            height: 10%
			}

		#quantite{
			border-radius: 100rem;
	        font-family: 'Montserrat', sans-serif;
            font-size: 1.5rem;
            outline: none;
            padding: .5rem 1.5rem;
	        width: 30%;
	        height: 10%;
			}

			#description {
		        font-family: 'Montserrat', sans-serif;
		        font-size: 1rem;
		        outline: none;
		        padding: .5rem 1.5rem;
		        width: 50%;
		        height: 30%
			}

			.commander{
				background-color: black;
				margin-left: 45%;
				color: white;
				width: 10%;
				height: 7%;
			}

			.description_bloc{
				margin-left: 8%
			}

			.data_product_bloc{
				margin-left: 8%;
			}


			label {
			   float: left;
			   display: block;
			   width: 230px;
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
		<form method="POST" action="validation_produit.php">
			
			<h2 style="text-align: center;">
					Demande de Produit
			</h2>


			<div class="data_product_bloc">
				<p>
					<label for="nom" required>
						<strong> Nom Du Produit &nbsp;&nbsp;:</strong>
					</label> 
					<input type="text" spellcheck="false" name="nom" id="nom" autofocus maxlength="30" size="30">
				</p>

				<p>
					<label for="quantite" required>
						<strong>Quantité Du Produit &nbsp;&nbsp;:</strong>
					</label> 
					<input class="quantite" type="number" spellcheck="false" name="quantite" id="quantite" autofocus maxlength="10" size="30">
				</p>
			</div> 


			<p class="description_bloc">
				<label class="label_description" ><strong> Description De La Demande &nbsp;&nbsp;:</strong></label>
				<textarea spellcheck="description" name="description" id="description" autofocus maxlength="500" size="100"></textarea>
			</p> 

			<p>
				<input class="commander" type="submit" name="commander" value="Commander">
			</p>

		</form>
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