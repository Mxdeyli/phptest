<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        My first php page
    </h1>
    <?php
    function mytest()
    {
        $s=3;
        $k=4;
        $z=$k+$s;
        echo ($z."\n");
        echo "Hello World!\n";
        static $x=0;
        echo $x;
        $x++;
        echo PHP_EOL;
    }

    mytest();
    mytest();
    mytest();
    ?>
</body>
</html>