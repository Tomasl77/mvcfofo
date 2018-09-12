<?php $title = 'Bienvenue sur Adopte une Culture' ?>

<?php ob_start(); ?>

<div class="en-teteacceuil">
	<h1 class="">Accueil</h1>	
	<p>Bonjour <?php 
	if(!isset($_SESSION['id'])){
		echo "vous n'êtes pas connecté !";
	}else{
		echo $_SESSION['pseudo'];
	}
	?>
	<br>
	Nous sommes le <?php $jour = date("d-m-Y");
	echo $jour; ?> 
</p>
</div>

<div class="envase">
	<div class="container">
		<div class="row">
			<div class="table-responsive" style="margin-top: -42px">
				<table class="table table-striped tablacceuil">
					<tr>
						<th id="tabcat">Catégorie</th>
					</tr>
					<?php
					foreach($topics as $top){ 
						?>  
						<tr>
							<td>
								<a href="<?= 'views/frontEnd/page.php?name='.$top['page'] ?>" id="ahref"><?= $top['name'] ?></a>
							</td>
						</tr>   
						<?php
					}
					?>
				</table>                    
			</div>
		</div>
	</div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>