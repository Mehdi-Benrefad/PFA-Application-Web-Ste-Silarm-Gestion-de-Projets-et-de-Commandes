<!DOCTYPE>

<head>
	<style type="text/css">

		body{
			background-color: grey;
		}

		header { width: 100%;
          height: 30%;                 
          border: 1px solid ;
          background-image: url(header.png);
          margin-top: 0px;
          }    

         .container{
          width: 100%;
          height:80%;                 
          border: 1px solid ;
          background-color: white;
          }	

          footer{
          width: 100%;
          height:20%;                 
          border: 1px solid ;
          background-color: grey;
          margin-bottom:0%;
          padding-bottom: 0%
          }

          h1{
          	color: white;
          	font-size: 60px;
			font-family:Arial, Helvetica, sans-serif;
			margin-top: 1%px
			}
			.boutons{
				float: right;
				margin-top: 0px
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
				margin-left: 20%;
				
			}

			.btn_insc {
				border:none;
				padding:6px 0 6px 0;
				border-radius:2px;
				box-shadow:3px 3px 12px #999;
				background-color:black;
				font:bold 13px Arial;
				color:white;
				padding: 10px;
				margin-left: 20%;
				
			}

			div{
				margin: 15px;
			}

			.description{
				font-size: 20px;
			}

			h2{
				font-size: 30px;
				font-family:Arial, Helvetica, sans-serif;
			}

			.informations{
				font-size: 30px;
			}

			.contact{
				float: left;
				margin-top: 0%;
			}

			.PDG{
				margin-left: 50%;
			}

			.photobody1{
				width: 40%;
				margin-left: 20%;
				margin-top: 0%;
				float: left;
			}

			.photobody2{
				margin-left: 70%;
			}

	</style>

</head>



<body>

	<header >



		<div class="boutons">

			<div>
				<a href="seConnecter.php" > <input type="button" value="Se Connecter" class="btn_conn"> </a>
			</div>

			<div>
				<a href="inscription.php" > <input type="button" value="S'inscrire"  class="btn_insc"> </a>
			</div>
		</div>
			

		<div>
				<h1 style="text-align: center;">Ste SILARM</h1>
		</div>

	</header>


	<section class="container">
		<br>
		<h2>
			Qui somme nous?
		</h2>

		<div>
			<p class="description">
				Nous sommes une societe Marocaine specialisee en traveaux et marches publics(batiments,equipements,construction, fournitures ...), de plus nous fournissons des produits differents(fournitures scolaires,bureautiques,informatiques, produits alimentaires ...).
			</p>
		</div>

		<div>
			<p class="photobody1">
				<img src="photobody1.png"></img>
			</p>

			<p>
				<img src="photobody2.jpg">
			</p>
		</div>
		<a class="informations" href="informations.php">pour plus d informations(taper ici)</a><br>
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
			<a href="pdg.php" ><strong>PDG:</strong></a>
		</div>
		
	</footer>

</body>
