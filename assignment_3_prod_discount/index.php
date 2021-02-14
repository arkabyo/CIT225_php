<?php
    //default value initialization
    if (!isset($product_description)) {$product_description = "";}
    if (!isset($list_price)) {$list_price = "";}
    if (!isset($discount_percent)) {$discount_percent = "";}
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
        <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo nl2br(htmlspecialchars($error_message)); ?></p>
        <?php } ?>
        <form action="display_discount.php" method="post">

            <div id="data">
                <label>Product Description:</label>
                <input type="text" name="product_description"
                value = "<?php echo htmlspecialchars($product_description); ?>"><br>  <!--Saving Value-->

                <label>List Price:</label>
                <input type="text" name="list_price"
                value = "<?php echo htmlspecialchars($list_price); ?>"><br> <!--Saving Value-->

                <label>Discount Percent:</label>
                <input type="text" name="discount_percent"
                value = "<?php echo htmlspecialchars($discount_percent); ?>"><br> <!--Saving Value-->
            </div>

            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate Discount"><br>
            </div>
        </form>
        <hr class="center">
        <pre class = "center">&copy;Avijit Roy Kabyo </pre>

    </main>
</body>
</html>