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

    $_SESSION['totalAmount'] = 0;

    if(isset($_POST['btnUpdate'])) {
        
     
        $cartKeys = $_POST['hdnKey'];
        $cartSize = $_POST['hdnSize'];
        $cartQuantities = $_POST['txtQuantity'];

       
        if(isset($cartKeys) && isset($cartSize) && isset($cartQuantities)) {
            

            $_SESSION['totalQuantity'] = 0;

            foreach($cartKeys as $index => $key) {
               
                $_SESSION['cartItems'][$key][$cartSize[$index]] = $cartQuantities[$index];

                
                $_SESSION['totalQuantity'] += $cartQuantities[$index];
            }
        }
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

    <title>cart</title>
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
        </div>

        <div class="container mb-4">
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped">
                        <thead>
                                <tr>
                                <th scope="col-1"> </th>
                                <th scope="col-3">Product</th>
                                <th scope="col-1">Size</th>
                                <th scope="col-">Quantity</th>
                                <th scope="col-2">Price</th>
                                <th scope="col-2">Total</th>
                                <th scope="col-1"> </th>
                                <th> </th>
                                </tr>
                        </thead>

                        <tbody>

                            <?php if(isset($_SESSION['cartItems'])): ?>
                                <?php foreach($_SESSION['cartItems'] as $key => $value): ?>
                                    <?php foreach($value as $size => $quantity): ?>
   
                                        <?php $_SESSION['totalAmount'] += $arrProducts[$key]['price'] * $quantity; ?>                                        
                                            <tr>                                        
                                                <td><img class="pic-2" src=" img/<?php echo $arrProducts[$key]['photo1'];  ?>.jpg" class="img img-thumbnail" style="height: 50px;"></td>
                                                <td><?php echo $arrProducts[$key]['name']; ?></td>
                                                <td><?php echo $size; ?></td>

                                                <td>  
                                                    <input type="hidden" name="hdnKey[]" value="<?php echo $key; ?>">
                                                    <input type="hidden" name="hdnSize[]" value="<?php echo $size; ?>">
                                                    <input type="number" name="txtQuantity[]" value="<?php echo $quantity; ?>" class="form-control text-center" min="1" max="100" required style="width: 150px;">
                                                </td>

                                                <td>₱ <?php echo number_format($arrProducts[$key]['price'], 2); ?></td>
                                                <td>₱ <?php echo number_format($arrProducts[$key]['price'] * $quantity, 2); ?></td>
                                                <td><a href="Remove.php?<?php echo 'k=' . $key . '&s=' . $size . '&q=' . $quantity; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                                            </tr>

                                    <?php endforeach; ?>
                                <?php endforeach; ?>

                                    <tr>
                                        <td colspan="2"> </td>
                                        <td><b>Total</b></td>
                                        <td><?php echo $_SESSION['totalQuantity']; ?></td>
                                        <td>----</td>
                                        <td><b>₱ <?php echo number_format($_SESSION['totalAmount'], 2); ?><b></td>
                                        <td>----</td>
                                    </tr>

                            <?php else: ?>
                                <tr>
                                    <td colspan="7">Cart is still Empty</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>                
                </div>            
            </div>

            <?php if(isset($_SESSION['cartItems'])): ?>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <a href="index.php" class="btn btn-danger btn-lg btn-block"><i class="fa fa-shopping-bag"></i> Continue Shopping</a>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <button type="submit" name="btnUpdate" class="btn btn-success btn-lg btn-block"><i class="fa fa-edit"></i> Update</button>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a href="clear.php" class="btn btn-primary btn-lg btn-block"><i class="fas fa-sign-out-alt"></i> Check Out</a>
                            </div>
                        </div>
                    </div>
            <?php else:?>
                <div class="col-sm-12 col-md-4">
                    <a href="index.php" class="btn btn-danger btn-lg btn-block"><i class="fa fa-shopping-bag"></i> Continue Shopping</a>
                </div>
            <?php endif; ?>    
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>