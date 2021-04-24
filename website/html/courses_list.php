<?php	

require('templates/data.php');

?>


<!DOCTYPE html>
<html>
<head>
	<title>Liste des filieres</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<header id="mainHeader"> 
	<?php 

		include("templates/header.php");

	 ?>
	<div id="main">
		<h1>Affichage des resultats</h1>
	</div>
	<hr>
	<div class="liste">
		<h3>Cliquez sur une filiere pour voir les resultats</h3>
			<?php 
				echo '<ol type="1">';
				for ($i = 0; $i < count($filieres); $i++) {
					$codeF = $filieres[$i]["CodeFiliere"];
					$IntituleF = $filieres[$i]["IntituleFiliere"];
			?>			
				<li> <a href="students_list.php?codeF=<?=$codeF?>"> <?=$IntituleF?></a> </li>
							
			 <?php } echo '</ol>'; ?>

	
	</div>
	<hr>
</header>
<?php
	include('templates/nav.php');
?>
<hr>

<?php 
	include('templates/footer.php');
 ?>

</body>
</html>