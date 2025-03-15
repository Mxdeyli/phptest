<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $palindromes=124421;
        $a=strrev($palindromes);
        if($a==$palindromes)
        {
            echo "true";
        }
        else
        {
            echo "false";
        }
    ?>
</body>
</html>