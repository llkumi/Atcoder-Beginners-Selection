<?php
fscan(STDIN,"%s",$s);
$arry = str_splite($s);
$count =0;
foreach($arry as $num){
    if($num === '1'){
        $count++;
    }
}
echo $count;
?>