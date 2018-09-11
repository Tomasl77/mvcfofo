<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Adopte une culture</title>
	<link rel="stylesheet" href="../../public/index.css">
	
</head>
<body>
	<div class="contaiter full-height">
		<div class="signlog full-height">
			<div class="lol">
				<div class="tcenter" id="tit"><h1>Adopte une culture : </h1></div>
				<div class="tcenter" id="accroche">"La culture, c'est comme la confiture : moins on en a, plus on l'étale." <b>Jean Delacour</b></div>
			</div>
			<div class="row2 triple">
				<div class="full-width inscri tcenter">	
					<div class="ins-form">
						<p>Bienvenue cher visiteur,<br><br><br>Si tu souhaite t’endormir moins bête, inscrits toi et rejoins nos petits Einstein.</p><br><br>
						<!-- Sign In -->
						<p><a href="./pages/inscription.php"><input class="butinscri" id="butinscri" type="submit" value="S'inscrire" /></a></p>
					</div>
				</div>	
				<div class="full-width login tcenter">
					<!-- Log In -->	
					<form class="con-form" method="post" action="">
						<label>Mail :</label><br><br>
						<input class="input" type="email" name="mail" placeholder="Adresse em@il" value="mail" required="required">	<br><br>
						<br>
						<label>Mot de passe :</label><br><br>
						<input class="input" type="password" name="password" placeholder="Mot de passe" value=<?php if (isset($Password)) echo $Password; ?> required="required">

						<div class="btn-con">
							<button type="submit" class="butinscri" id="butinscri2">Se connecter !</button>
						</div>
					</form> 
				</div>
			</div>
			<div class="row2 half">
				<div class="tcenter full-width">
					<span class="pointer" onclick="cgu()">CGU</span> /<span class="pointer" onclick="about()"> A propos</span> / <span class="pointer" onclick="confi()"> Confidentialité </span>
				</div>
			</div>
		</div>
	</div>
	<script src="../../public/index.js"></script>
</body>
</html>