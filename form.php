<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input name="fname" type="text" required>
        <input type="submit">
    </form>
    <?php
        $match = "/non/i";
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $name = $_POST["fname"];
            if(empty($name))
            {
                echo " name is null";
            }
            else
            {
                echo trim($name);
                echo "<br>We have find matches string non at first of".$name," result is: ".preg_match($match, $name);
            }
        }
    ?>
</body>
</html>