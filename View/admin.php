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

    <title><?= $app_name; ?> | Admin</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="text-right bg-dark px-2 d-block ">
                <a href="index.php" class="small text-light">Main page</a>
            </div>
        </div>
    </div>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><?= $app_name; ?></h1>
            <p class="lead">Simply the best online shop in the universe.</p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <!-- Button trigger modal -->
            <button type="button" class="float-right btn btn-sm btn-success" data-toggle="modal"
                    data-target="#addProductModal">Add a new product
            </button>
        </div>
    </div>
    <table class="table table-sm table-hover mt-2">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Price (Eur.)</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($products as $product) { ?>
            <tr>
                <td><?= $product['id'] ?></td>
                <td><?= $product['title'] ?></td>
                <td><?= $product['description'] ?></td>
                <td><?= $product['price'] ?></td>
                <td class="text-right"><a class="btn btn-sm btn-danger" href="admin.php?delete=<?= $product['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

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

<!-- Modal -->
<div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add a new product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="admin.php">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title">
                    <label>Description</label>
                    <textarea type="text" class="form-control" name="description"></textarea>
                    <label>Price</label>
                    <input type="text" class="form-control" name="price">
                    <button type="submit" name="submit" class="btn btn-sm btn-primary btn-block mt-2">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>


</body>
</html>