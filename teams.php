<?php

$nums = [];

for($i=1; $i <=22; $i++){
    $nums[]= $i;
}

$a = array_rand($nums,5);

$numsa = getArray($nums,$a);
$b = array_rand($numsa,5);

$numsb = getArray($numsa,$b);
$c = array_rand($numsb,5);

$numsc = getArray($numsb,$c);
$d = array_rand($numsc,5);

$numsd = getArray($numsc,$d);
$e = array_rand($numsd,5);

echo 'A: '.json_encode($numsa).'<hr>';
echo 'B: '.json_encode($numsb).'<hr>';
echo 'C: '.json_encode($numsc).'<hr>';
echo 'D: '.json_encode($d).'<hr>';
echo 'E: '.json_encode($e).'<hr>';

function getArray($array, $selected)
{
    // $newNums = [];
    foreach($array as $key=>$row)
    {
        
        if(!array_search($key,$selected)){
            $newNums[] = $row;
        }

        
        
    }

    return $newNums;
}

?>