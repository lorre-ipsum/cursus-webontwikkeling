<!doctype html>
<html lang=nl>

<?php include('includes/head.php'); ?>

<body>
	<div class="container">
	
	<?php include('includes/menu.php'); ?>

    <?php $verwijzing = 'includes/'.$_GET['page'].'.php';
    include($verwijzing); ?>
 
 <?php include('includes/footer.php'); ?>

	</div>
</body>

</html>