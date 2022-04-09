<?php
    session_start();
    $products = [
    [
        'image'     => 'bonsai-kelapa-1.jpg',
        'name'      => 'Bonsai Kelapa',
        'deskripsi' => 'Harga perbibit murni',
        'price'     => '200000',
    ],
    [
        'image'     => 'bonsai_serut.jpg',
        'name'      => 'Bonsai Serut',
        'deskripsi' => 'Harga perbibit murni + pupuk',
        'price'     => '1500000',
    ],
    [
        'image'     => 'bonsai-beringin-(1).jpg',
        'name'      => 'Bonsai Beringin',
        'deskripsi' => 'Harga perbibit murni',
        'price'     => '300000',
    ],
    [
        'image'     => 'bonsai-loa.jpg',
        'name'      => 'Bonsai Loa',
        'deskripsi' => 'Harga perbibit murni + pot kecil',
        'price'     => '300000',
    ],
    [
        'image'     => 'Bonsai Dolar-.jpeg',
        'name'      => 'Bonsai Dolar + pupuk',
        'deskripsi' => '.',
        'price'     => '1500000',
    ],
    [
        'image'     => 'Bonsai Bougenville.jpg',
        'name'      => 'Bonsai Bougenvile',
        'deskripsi' => 'Harga perbibit murni + pot kecil',
        'price'     => '400000',
    ],
    ];
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrinkto-fit=no">
        <link rel="stylesheet" 
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
        crossorigin="anonymous">
        <title>PLANT STORE</title>
    </head>
    <body>
        <h1 class="text-center mt-3">Alplant Store</h1>
        <hr align="center" width="100%" height="1px" color="#000000" size="5">
        <footer style="color:black">
        <div class="container mt-3">
        <div class="row">
            
        <?php
        foreach ($products as $key => $item) {
        ?>
        <div class="col-md-4 mt-3 mb-3">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo $item['image'] ?>" alt="Card 
        image cap">
        <div class="card-body">
        <h5 class="card-title"><?php echo $item['name'] ?></h5>
        <h5 class="card-title"><?php echo $item['deskripsi'] ?></h5>
        <h5 class="card-title"><?php echo 'Rp.'.number_format($item['price'])
        ?></h5>
        <a href="mycart.php?name=<?php echo $item['name'] ?>&price=<?php echo
        $item['price'] ?>" >Add Cart</a>
        </div>
        </div>
        </div>
        <?php } ?>
        </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
        crossorigin="anonymous"></script>
        <script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" 
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" 
        crossorigin="anonymous"></script>
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" 
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
        crossorigin="anonymous"></script>
    </body>
    <hr align="center" width="100%" height="1px" color="#000000" size="5">
    <footer style="color:black">
        <center> Copyright &copy; Muhammad Alfi Dwi Yulianto</center>
    </footer>
</html>