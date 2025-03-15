<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nums=array(3,2,4,7);
    $target=6;
        $find = [];
        $arraylength=count($nums);
        for($i=0;$i<$arraylength;$i++)
        {
            $k=$nums[$i];
            if($a=array_keys($find,($target-$k)))
            {
                echo "[$a[0],$i]";
            }
            $find[$i]=$k;
        }
    ?>
</body>
</html>