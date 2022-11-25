<?php 

    session_start();

    $arrProducts = array(
        array(
            'name'          => "Fit Blue T-Shirt ",
            'description'   => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",
            'price'         => "550",
            'photo1'        => "Produc1A",
            'photo2'        => "Produc1B",

        ),
        array(
            'name'          => "Fit Black T-Shirt ",
            'description'   => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",
            'price'         => "550",
            'photo1'        => "Produc2A",
            'photo2'        => "Produc2B",

        ),
        array(
            'name'          => "Fit Navy Blue T-Shirt ",
            'description'   => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",
            'price'         => "550",
            'photo1'        => "Produc3A",
            'photo2'        => "Produc3B",

        ),
        array(
            'name'          => "Polo T-Shirt Black ",
            'description'   => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",
            'price'         => "550",
            'photo1'        => "Produc4A",
            'photo2'        => "Produc4B",

        ),
        array(
            'name'          => "Polo Blue ",
            'description'   => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",
            'price'         => "550",
            'photo1'        => "Produc5A",
            'photo2'        => "Produc5B",

        ),
        array(
            'name'          => "Polo White ",
            'description'   => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",
            'price'         => "550",
            'photo1'        => "Produc6A",
            'photo2'        => "Produc6B",

        ),
        array(
            'name'          => "Jacket Dark Blue ",
            'description'   => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",
            'price'         => "550",
            'photo1'        => "Produc7A",
            'photo2'        => "Produc7B",

        ),
        array(
            'name'          => "Polo T-Shirt Hawiian ",
            'description'   => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",
            'price'         => "550",
            'photo1'        => "Produc8A",
            'photo2'        => "Produc8B",

        ),
       
    );

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="CSS/Styles.css">

    <title>Shopping Cart</title>
</head>
<body>

    <form method = "post">

        <div class="container my-5">
            <div class="row">
                <div class="col-sm-12">
                    <h1><i class="fa-solid fa-store"></i> Augis Store
                        <a href="cart.php">
                            <button type="button" class="btn-primary btn-sm float-right">
                                <i class="fa-solid fa-cart-shopping"></i>cart
                                <?php 
                                    if(isset($_SESSION['totalQuantity']))
                                        echo '<span class="badge badge-light">' . $_SESSION['totalQuantity'] . '</span>';
                                    else
                                        echo '<span class="badge badge-light">0</span>';
                                ?> 
                            </button>
                        </a>
                    </h1>
                </div>
            </div>

            <hr>

            <div class="row">
                <?php foreach($arrProducts as $key => $value):?>
                    <div class="col-2 col-md-3">
                        <div class="product-grid2">
                            <div class="card card-container"> 
                                <div class="product-image2">
                                    <a href="details.php?k=<?php echo $key; ?>">
                                        <img class="pic-1" src="img/<?php echo $value['photo1'];?>.jpg">
                                        <img class="pic-2" src="img/<?php echo $value['photo2'];?>.jpg">
                                    <a class="add-to-cart" href="details.php?k=<?php echo $key; ?>"><i class="fa-solid fa-cart-plus"></i>Add to cart</a></a>      
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><?php echo $value['name'];?> <span class="badge badge-dark"> <?php echo $value['price'];?></span></h3>                        
                                </div>
                            </div>  
                        </div>          
                    </div> 
                <?php endforeach; ?>
                <?php $_SESSION['arrProducts'] = $arrProducts;
                ?>
            </div>
        </div>
    </form>

    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>