<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
		<div class="container">
        <a id="ahref" href="/">Accueil</a> > Catégorie : <?= $req['name']; ?>
            <div class="row">   

			<div class="table-responsive" style="margin-top: 0px">
                <table class="table table-striped">
                    <tr>
                        <th id="tabcat">Sujet</th>
                        <th id="tabmess">Auteur</th>
                        
                    </tr>
                <?php
                    foreach($req2 as $r2){ 
                    ?>  
                        <tr>
                            <td>
                                
                                <a id="ahref" href="afficher_topic.php?id_topic=<?php echo $r2['id_topic']; ?>&contenu=<?php echo $r2['contenu']; ?>&sujet=<?php echo $r2['sujet']; ?>"><?= $r2['sujet'] ?><?= $r2['id_topic'] ?></a>
                                 
                            </td>
                                <td>
                                    Par : <?= $r2['id_user'] ?> <br> le <?= $r2['date_creation'] ?>
                                </td>
                           
                        </tr>   
                    <?php
                    
                    }
                ?>
                </table> 
            </div>
</body>
</html>