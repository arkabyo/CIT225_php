<?php
    // get the data from the form
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    
    // joining first name and last name
    $full_name = $first_name . " " . $last_name;            
?>
<!DOCTYPE html>
<html>
<head>
    <title>Greetings-Assignment 1 | Avijit Roy</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <main class="greet">
        <?php 
           echo "<h1>Nice to meet you, $full_name</h1>";
        ?>
        <hr>
        <pre>&copy;Avijit Roy Kabyo</pre>
    </main>

</body>
</html>