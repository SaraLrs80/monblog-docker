<?php $titre = 'Mon Blog'; ?>
<?php ob_start(); ?>
<?php foreach ($billets as $billet): ?>
  <article class="billet-card">
      <h2 class="billet-titre"><?= htmlspecialchars($billet['titre']) ?></h2>
      <div class="billet-date"><?= $billet['date'] ?></div>
      <p class="billet-contenu"><?= $billet['contenu'] ?></p>
  </article>
<hr />
<?php endforeach; ?>
<?php $contenu = ob_get_clean(); ?>
<?php require 'gabarit.php'; ?>