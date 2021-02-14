<?php
    // get the data from the form
    $product_description = filter_input(INPUT_POST, 'product_description');
    $list_price = filter_input(INPUT_POST, 'list_price', FILTER_VALIDATE_FLOAT);
    $discount_percent = filter_input(INPUT_POST, 'discount_percent', FILTER_VALIDATE_FLOAT);
    

    //error message assign
    $error_message = "";

    //Description Error
    if (empty ($product_description)) {
        $error_message .= "Enter Product Description" . PHP_EOL; 
    }
    //VALIDATE list Price
    if ($list_price === FALSE){
        $error_message .= "List Price must be a valid number." . PHP_EOL;
    } else if ($list_price <= 0) {
        $error_message .= 'List Price must be greater than zero.' . PHP_EOL;
    }

    //VALIDATE Discount Percant3
    if ( $discount_percent === FALSE ) {
        $error_message .= 'Discount Percent must be a valid number.' . PHP_EOL; 
    } else if ( $discount_percent <= 0 || $discount_percent >100) {
        $error_message .= 'Discount Percaent must be greater than zero and and less than 100.' . PHP_EOL; 
    }

    // calculate the discount and discounted price
    $discount = $list_price * $discount_percent * .01;
    $discount_price = $list_price - $discount;

    // apply currency formatting to the dollar and percent amounts
    $list_price_f = "$".number_format($list_price, 2);
    $discount_percent_f = $discount_percent."%";
    $discount_f = "$".number_format($discount, 2);
    $discount_price_f = "$".number_format($discount_price, 2);
    
    //Form Include after error.
    if ($error_message != '') 
    {
        include('index.php');
        exit(); 
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <main>
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo htmlspecialchars($product_description); ?></span>
        <br>

        <label>List Price:</label>
        <span><?php echo htmlspecialchars($list_price_f); ?></span>
        <br>

        <label>Standard Discount:</label>
        <span><?php echo htmlspecialchars($discount_percent_f); ?></span>
        <br>

        <label>Discount Amount:</label>
        <span><?php echo $discount_f; ?></span>
        <br>

        <label>Discount Price:</label>
        <span><?php echo $discount_price_f; ?></span>
        <br>
        <hr class="center">
        <pre class = "center">&copy;Avijit Roy Kabyo </pre>
    </main>
</body>
</html>