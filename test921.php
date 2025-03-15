<?php
    define ("REST","PAGE_NOT_FOUND");
    $crc=9;

    function search()
    {
        $aoc=13;        
    }
    $s=array("a");
    $k=0;
    $j=0;
    if(sizeof($s))
    {
        $k=1;
    }
    $arraylength=count($s)-1;
    for($i=$arraylength;$i>=0;$i--)
    {
        if($s[$i]==32)
        {
            $j++;
        }
        if($i==0||$s[$i]==32&&$s[$i+1]!=32&&$s[$i+1]!='null')
        {
            echo"$i\n","sizeof($s)\n","%j\n";
            $k=sizeof($s)-$i-$j;
            break;
        }
        echo $k;
    }
?>