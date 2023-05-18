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
        $match = "/@/i";
        if($_SERVER["REQUEST_METHOD"] == "GET")
        {
            $mail = $_GET["mail"];
            $pass = $_GET["pass"];
            if(empty($mail) || empty($pass))
            {
                echo " name or pass is null";
            }
            else
            {
                echo "Your mail is: " .$mail. "and your pass is: " .$pass;
            }
        }
    ?>
</body>
</html>
