<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>
    <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
    echo "<br>";
    echo $_SERVER['SCRIPT_FILENAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    
    
    ?>
</body>
</html>