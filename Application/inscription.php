<!Doctype>
<head>
	
</head>
	<style type="text/css">
		fieldset{
				border: 3px solid black;
			}

		body{
			background-color: grey;
		}

		.container{
				margin-top: -2%;
			}

		footer{
			width: 100%;
          	height:20%;                 
          	border: 1px solid ;
          	background-color: grey;
		}

		header{
			background-image: url("header.png");
			width: 100%;
          	height: 30%;                 
          	border: 1px solid ;
		 	margin-top: 0px;
		}

		section{
			background-color: white;
			width: 100%;
          	height:100%;                 
          	border: 1px solid ;
		}

		h1{
          	color: white;
          	font-size: 60px;
			font-family:Arial, Helvetica, sans-serif;
			margin-top: 1%;
          }

          .contact{
				float: left;
				margin-top: 0%;
			}

			.PDG{
				margin-left: 50%;
			}


			#nom{

				border-radius: 100rem;
	            font-family: 'Montserrat', sans-serif;
	            font-size: 2.5rem;
	            outline: none;
	            padding: .5rem 1.5rem;
	            width: 30%;
			
			}
			#prenom{

				border-radius: 100rem;
	            font-family: 'Montserrat', sans-serif;
	            font-size: 2.5rem;
	            outline: none;
	            padding: .5rem 1.5rem;
	            width: 30%;
			
			}

			#email{

				border-radius: 100rem;
	            font-family: 'Montserrat', sans-serif;
	            font-size: 2.5rem;
	            outline: none;
	            padding: .5rem 1.5rem;
	            width: 30%;
			
			}

			#login{

				border-radius: 100rem;
	            font-family: 'Montserrat', sans-serif;
	            font-size: 2.5rem;
	            outline: none;
	            padding: .5rem 1.5rem;
	            width: 30%;
			}

	        #password{

				border-radius: 100rem;
	            font-family: 'Montserrat', sans-serif;
	            font-size: 2.5rem;
	            outline: none;
	            padding: .5rem 1.5rem;
	            width: 30%;
	        }

	        #telephone{
			border-radius: 100rem;
            font-family: 'Montserrat', sans-serif;
            font-size: 2.5rem;
            outline: none;
            padding: .5rem 1.5rem;
            width: 30%;
			}

			.s_inscrire {
				border:none;
				padding:6px 0 6px 0;
				border-radius:2px;
				box-shadow:3px 3px 12px #999;
				background-color:black;
				font:bold 13px Arial;
				color:white;
				padding: 10px;
				margin-left: 35%;
				width: 15%;
				font-size: 1rem;
				
			}
			p{
				margin-left: 15%;
				margin-top: 4%;
			}

	</style>


	
<body>

	<header >
	
		<br>
		<br>

		<div>
				<h1 style="text-align: center;">Ste SILARM</h1>
		</div>
			
	</header>

	
	<section>
<br>
	<form method="POST" action="validation_inscription.php">
			<fieldset>

			    <legend> <em>><strong>Inscription</strong></em> </legend>

				<p>
						<label for="nom" required><strong>Nom &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong></label>   <input type="text" spellcheck="false" name="nom" id="nom" autofocus maxlength="20" size="30">

							<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

						<label for="prenom" required><strong>Prenom&nbsp;&nbsp;&nbsp;&nbsp;:</strong></label> <input type="text" spellcheck="false" name="prenom" id="prenom" autofocus maxlength="20" size="30">
				</p> 


				<p>
						<label for="email" required><strong>E-mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong></label> <input type="email" spellcheck="false" name="email" id="email" autofocus maxlength="30" size="30">
				
							<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

						<label for="login" required><strong>Login&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong></label> <input type="text" spellcheck="false" name="login" id="login" autofocus maxlength="30" size="30">
				</p> 


				<p>
						<label for="password" required><strong>Password&nbsp;:</strong></label> <input type="password" spellcheck="false" name="password" id="password" autofocus maxlength="30" size="30">

							<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

				
						<label for="telephone" required><strong>Telephone&nbsp;:</strong></label> <input type="telephone" spellcheck="false" name="telephone" id="telephone" autofocus maxlength="30" size="30">
				</p>

				<p>
					<input value="S'inscrire" class="s_inscrire" type="submit" name="s_inscrire">
				</p>
			
			</fieldset>

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
			<a href="PDG.php"><strong>PDG:</strong></a>
		</div>
	</footer>

</body>