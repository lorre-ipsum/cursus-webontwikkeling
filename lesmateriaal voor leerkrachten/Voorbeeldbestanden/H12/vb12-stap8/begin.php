<!doctype html>
<html lang=nl>

<?php include('includes/head.php'); ?>

<body>
	<div class="container">
	
	<?php 
	// include voor het menu
	include('includes/menu.php'); 

	// controle op url-variabele page en include voor de inhoud
	if (!isset($_GET['page'])) {
        include('includes/start.php');
    }
	else {
		$verwijzing = 'includes/'.$_GET['page'].'.php';
		include($verwijzing); 
	}
 
	// include voor de footer
	include('includes/footer.php'); 
	?>

	</div>
</body>

</html>