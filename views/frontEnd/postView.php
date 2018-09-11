<?php $title = 'Post numero '.$post['id_topic'] ?>

<?php ob_start(); ?>

  <div class="top"> 
    <div>
      <p>Titre : <br>   <?= $post['subject'] ; ?> !</p>
    </div>
  </div>

<?php 
foreach ($comments as $com) {
  ?>

  <div class="rep">
    <div class="left"> Auteur : <br><?= $com['id_sender'] ?></div>
    <div class="right"> Reponse : <?= $com['content'] ?></div>

  </div>

<?php } ?>
<h2>Poster une réponse : </h2>

<form action="index.php?action=addComment&id=<?= $com['id_top'] ?>" method="post">
    <div>
        <label for="id_sender">Auteur</label><br />
        <input type="text" id="id_sender" name="id_sender" />
    </div>
    <div>
        <label for="content">Commentaire</label><br />
        <textarea id="content" name="content"></textarea>
    </div>
    <div>
        <input type="submit" />
    </div>
</form>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>