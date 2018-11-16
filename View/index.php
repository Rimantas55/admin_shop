<?php
/**
 * Created by PhpStorm.
 * User: Ignas
 * Date: 11/10/2018
 * Time: 3:15 PM
 */
?>

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
	integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">

	<title><?= $app_name; ?></title>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col">
				<div class="text-right bg-dark px-2 d-block ">
					<a href="admin.php" class="small text-light">Admin</a>
				</div>
			</div>
		</div>
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h1 class="display-4"><?= $app_name; ?></h1>
				<p class="lead">Simply the best online shop in the universe.</p>
			</div>
		</div>

		<!--Bootsrtap cards-->
		<div class="div_all_image">
				
			<?php foreach ($products as $product) { ?>
				<div class="card_box">	
					<div class="box_image">
						<img class="card-img-top" alt="<?= $product['title'] ?>" src="product_images/<?= $product['image'] ?>" >
					</div>
					<div class="box_body">
						<?= $product['description'] ?>
					</div>
					<div class="box_footer">
						<?= $product['price'] ?>
					</div>	
				</div>
			</div>
		</div>

	<?php } ?>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
	integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
	crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
	integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
	crossorigin="anonymous"></script>
</body>
</html>