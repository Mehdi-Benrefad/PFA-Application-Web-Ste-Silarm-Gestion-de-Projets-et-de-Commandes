<!DOCTYPE>

<head>
	<style type="text/css">

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
          	height:80%;                 
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

			body{
				background-color: grey;
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
				margin-left: 40%;
				width: 15%;
				font-size: 1rem;
				
			}

			#login{
				border-radius: 100rem;
	            font-family: 'Montserrat', sans-serif;
	            font-size: 2.5rem;
	            outline: none;
	            padding: .5rem 1.5rem;
	            width: 50%;
			}

			#password{
			border-radius: 100rem;
            font-family: 'Montserrat', sans-serif;
            font-size: 2.5rem;
            outline: none;
            padding: .5rem 1.5rem;
            width: 50%;
			}


			label{
				font-size: 2.5rem;
				margin-left: 15%;
			}

			.container{
				margin-top: 4%;
			}

			fieldset{
				border: 3px solid black;
			}

	</style>
	
</head>

<body>
	<header >

		<div>
				<h1 style="text-align: center;">Ste SILARM</h1>
		</div>
			
	</header>

	
	<section>

		<form method="post" class="container" action="login.php">
			<fieldset>

			    <legend> <em>><strong>Connexion</strong></em> </legend>

				<p>
					<label for="login" required><strong> Login &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong></label> <input type="text" spellcheck="false" name="login" id="login" autofocus maxlength="30" size="30">
				</p> 

				<br>
				
				<p>
					<label for="password" required><strong>Password: </strong></label> <input type="password" name="password" id="password" autofocus maxlength="30" size="30">
				</p>

				<br>

				<p>
					<input value="se connecter" class="btn_conn" type="submit" name="Se connecter">
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
			<a href="PDG.php"><strong>PDG:</strong>  </a>
		</div>
	</footer>

</body>