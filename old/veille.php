<?php $title = 'MERCAN Brandon / Veille Juridique';
include ('_header.php');
?>
<div class="body-container">
  <H1>Protection, Exploitation des logiciels </H1>

  <img src="images/imgJustice1.gif" style="width:17%;float:left;margin-right:15px;margin-bottom:15px;"/>
  <p style="text-indent: 50px;">Il existe deux principales manières de protéger son logiciel dit propriétaire c’est-à-dire ayant un code source privé soumis à un droit d’auteur, auteur qui contrôle l’usage qui est faite de ce code. Il est alors le seul à avoir le droit de le modifier. </p>

  <p>Le premier, nous l’avons déjà dit, est le droit d’auteur. Depuis la loi du 3 juillet 1985 un logiciel est considéré comme une œuvre de l’esprit (comme un livre ou tout autre œuvre d’art), il bénéficie donc de facto du droit d’auteur valable 70 ans. Qui se divise lui-même en deux parties : </br>
    <ul>
    <li>Le droit d’auteur patrimonial. Régit par l’article L.122-6 du code de la propriété intellectuelle (CPI) il permet au propriétaire de céder des droits de copie par exemple.</li>    <img src="images/imgCopyright.png" style="width:35%;float:right;margin-left:15px;margin-bottom:15px;"/>

    <li>Le droit d’auteur moral qui peut être défini comme un droit d’auteur allégé. </ul>
    </p>

    <p>Le droit d’auteur a toutefois certains défauts. Parmi eux le plus grave est qu’il ne protège pas totalement votre logiciel. En effet ce dernier n’est protégé que de la copie illégale. Les idées et différentes fonctionnalités peuvent être récupérer par autrui.</p>


    <p>Outre le droit d’auteur il existe le dépôt de brevet. Le brevet est une solution intéressante dans le cas où vous souhaiter une protection plus importante de votre logiciel. Toutefois le brevet doit être déposé dans tous les pays concernés par votre invention et n’est valable que 20 ans. Il faut également rechercher ce que vous souhaitez protéger réellement, il se pourrais que la demande de brevet soit rejetée s’il ne rentre pas dans le cadre préétabli. </p>

    <p>Maintenant que nous avons un logiciel protéger il nous reste plus qu’a l’exploité au sen commercial du terme. Pour cela deux voies se présente à nous, la première est la voie du logiciel propriétaire. Nous pouvons utiliser un logiciel propriétaire à condition d’avoir une licence d’utilisation délivré par l’auteur du logiciel. Le code source est inaccessible n’a toute personnes autres que l’éditeur qui est donc le seul à pouvoir le modifier. </p>

    <p>Deuxième voie, le logiciel libre. Dans ce cas le code source est disponible gratuitement pour tout le monde. Chacun peut donc avoir son logiciel personnalisé à la seule condition de partagé cette distribution aux autres développeurs. Le logiciel libre est toutefois un logiciel à caractère commercial. En effet, un acteur peu utilisé un logiciel libre pour un système informatique et se faire rémunérer pour cela. </p>

</div>
<?PHP

$datetime = date("Y-m-d H:i:s");
echo $datetime;
include '_footer.php';

$dsn = 'mysql:dbname=bdveille;host=127.0.0.1';
$user = 'root';
$password = '';
$pdo = new PDO($dsn,$user,$password);


?>
