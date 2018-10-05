<?php $title = 'MERCAN Brandon';
$stylesheets= "stylesheets/article.css";
include "_header.php";
?>

<div class="body-container">
  <article class="prodArticle">
    <h1 style="text-align:center;">Production</h1>
    <p>Au cours de mes deux années de BTS SIO j’ai eu l’occasion d’accomplir certaines tâches que je vous présente sur cette page.</p>
    <p>Il faut savoir que ces travaux sont divisés en trois groupes :

        <h2>I-Les PPE (Projet Personnel Encadré)</h2>
        <?php
        include 'production/PPE1-mission1.php';
        include 'production/covoiturage.php';
        include 'production/fredi.php';
        ?>

        <h2>II-Les projets de stages</h2>
        <?php
          include 'production/leaderOptique.php';
          include 'production/SAKITAW.php';
         ?>
        <h2>III-Les TP & TD</h2>
        <p>Compte tenu du nombre relativement conséquent de TP effectuer au cours de ces deux années je vais m’attarder uniquement sur quelques-uns. </p>
        <?php
          include 'production/BTSSIO.php';
          include 'production/SIOQuizz.php';
          include 'production/Beetic.php';
          //include 'production/glpi.php';
         ?>
    </p>
    <article class="artPerso">
      <a class="sousTitre" onclick="toggledisplay('tab-synthese')"><h2>Tableau de synthese</h2></a>
      <div id="tab-synthese" style="display:none;">
        <a href="images/tabsynthese.pdf"><img src="images/CaptureTabSynthese.PNG" alt="tableau de synthese" width="100%"></a>
      </div>
    </article>
    <?php include 'production/situationPro.php'; ?>

  </article>
</div>

<?php include '_footer.php'; ?>

<script type="text/javascript">
function toggledisplay(elementID)
{
   (function(style) {
       style.display = style.display === 'none' ? '' : 'none';
   })(document.getElementById(elementID).style);
}
</script>
