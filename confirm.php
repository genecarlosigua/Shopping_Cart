<?php  
    session_start();
    $arr = $_SESSION['arrProducts'];


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

    <title>Confirm</title>
</head>
<body>
    <form method = "post">

        <div class="container my-5">
            <div class="row">
                <div class="col-sm-12">
                    <h1><i class="fa-solid fa-store"></i>Shopping Cart
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

            <h1>Product Successfully Added to the Cart, What do you want to do next?</h1>

            <a href ="cart.php"> <button type="button" name="btnconfirm" class="btn btn-dark btn-lg" ><i class="fa-solid fa-cart-shopping"></i> View Cart</button></a>
            <a href="index.php" class="btn btn-danger btn-lg text-white"><i class="fa-solid fa-bag-shopping"></i> Continue Shopping</a>

        </div>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>