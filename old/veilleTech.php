<?php
//require 'class/_article.php';
  $title = 'MERCAN Brandon / Veille Technologique : Le très haut débit';
  $stylesheets = "stylesheets/article.css";
include '_header.php';?>
<script type="text/javascript">
  function test(){
    var elmt = document.getElementById("content");
    if (elmt.style.display == "none") {
      elml.style.display = "visible";
    } else {
      elmt.style.display = "none";
    }



  }

  function toggledisplay(elementID) {
  (function(style) {
    style.display = style.display === 'none' ? '' : 'none';
  })(document.getElementById(elementID).style);
}
</script>


<div class="body-container">
  <h1 style="text-align:center;">Le très haut débit</h1>
  <article class="artPerso"><?php include 'veilleTech/_presentation.php'; ?></article>
  <article class="artPerso" style="padding-bottom:15px;" ><?php include 'veilleTech/_MWC2017.php'; ?></article>
  <article class="artPerso" style="padding-bottom:15px;" ><?php include 'veilleTech/_pre5G.php'; ?></article>
  <?php include 'veilleTech/_resume.php'; ?>
</div>
<?php include '_footer.php';

$datetime = date("Y-m-d H:i:s");
//echo $datetime;

$dsn = 'mysql:dbname=bdveille;host=127.0.0.1';
$user = 'root';
$password = '';
//$pdo = new PDO($dsn,$user,$password);

 ?>
