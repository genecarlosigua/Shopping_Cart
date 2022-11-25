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

    if(isset($_POST['btnProcess'])) {
        
        if(isset($_SESSION['cartItems'][$_POST['hdnKey']][$_POST['radSize']]))
            $_SESSION['cartItems'][$_POST['hdnKey']][$_POST['radSize']] += $_POST['txtQuantity']; 
        else
            $_SESSION['cartItems'][$_POST['hdnKey']][$_POST['radSize']] = $_POST['txtQuantity']; 
    
        $_SESSION['totalQuantity'] += $_POST['txtQuantity'];
        header("location: confirm.php");
    } 
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

    <title>Product Details</title>

</head>
<body>
    <form method="post">

        <div class="container my-5">
            <div class="row">
                <div class="col-sm-12">
                    <h1><i class="fa-solid fa-store"></i> Augis Store
                        <a href="Cart.php">
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
                <?php if(isset($_GET['k']) && isset($arrProducts[$_GET['k']])): ?>
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="product-grid2 card">
                            <div class="product-image2">
                                <a href="">
                                    <img class="pic-1" src="img/<?php echo $arrProducts[$_GET['k']]['photo1']; ?>.jpg" alt="">
                                    <img class="pic-2" src="img/<?php echo $arrProducts[$_GET['k']]['photo2']; ?>.jpg">
                                </a>                            
                            </div>                        
                        </div>
                    </div>                
                    <div class="col-md-8 col-sm-6 mb-4">                
                        <h3 class="title">
                            <?php echo $arrProducts[$_GET['k']]['name']; ?>
                            <span class="badge badge-dark">₱ <?php echo $arrProducts[$_GET['k']]['price']; ?></span>
                        </h3>
                            <p><?php echo $arrProducts[$_GET['k']]['description']; ?></p>   

                            <hr>

                            <input type="hidden" name="hdnKey" value="<?php echo $_GET['k']; ?>">

                            <hr>

                            <h3>Select Size: </h3>

                            <input type="radio" name="radSize" id="radsizeXS" value="XS" checked>
                            <label for="radSizeXS">XS</label>
                            <input type="radio" name="radSize" id="radsizeSM" value="SM">
                            <label for="radSizeXS">SM</label>
                            <input type="radio" name="radSize" id="radsizeMD" value="MD">
                            <label for="radSizeXS">MD</label>
                            <input type="radio" name="radSize" id="radsizeLG" value="LG">
                            <label for="radSizeXS">LG</label>
                            <input type="radio" name="radSize" id="radsizeXL" value="XL">
                            <label for="radSizeXS">XL</label>

                            <hr>

                            <h3>Enter Quantity: </h3>

                            <input type="number" class="nmb" name="txtQuantity" placeholder="0" min="1" max="100" value="0" required>
                            <br><br>
  
                            <button type="submit" name="btnProcess" class="btn btn-dark btn-lg" ><i class="far fa-check-circle"></i> Confirm Product Purchase</button>
                            
                            <a href="index.php" class="btn btn-danger btn-lg text-white"><i class="fa-solid fa-bag-shopping"></i> Cancel/Go back</a>
                            
                    </div>
                 <?php endif; ?> 
            </div>
        </div>
    </form>
     
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>