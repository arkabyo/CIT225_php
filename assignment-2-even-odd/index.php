<?php
    if (isset($_POST["number"])){
        $number = filter_input(INPUT_POST, "number", FILTER_VALIDATE_INT);
        if ($number == "")
        {
            $result = "Input must be a number and can not be a ZERO";
        }
        else if ( ($number % 2) == 0)
        {
            $result = "The number <span style='color: black'>$number</span> is an <span style='color: green;'>EVEN</span> Number.";
        }
        else 
        {
            $result = "The number <span style='color: black'>$number</span> is an <span style='color: green;'>ODD</span>  Number";
        }
    }
    else {
        $number = "";
        $result = "";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Even - Odd | Avijit Roy</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <main>
        <h1>Even Odd Finder</h1>
        <form action="" method="post">

            <div id="main">
                <label>Enter Number:</label>
                <input type="number" name="number" value = "<?php echo $numbre; ?>">
            </div>

            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Submit"><br>
            </div>
            <p class="box">
                <?php echo $result; ?>
            </p>
        </form>
        <br>
        <hr class="center">
        <pre class="center">&copy;Avijit Roy Kabyo</pre>
    </main>
</body>
</html>