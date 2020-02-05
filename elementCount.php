-->> Count the element occurrence in Array<<-- 

<?php
$arr = [2,5,1,7,9,11,15,2,19,13,12,12,12,12 ];
echo "Array of Elememt :<pre>";print_r($arr);
$max = $arr[0];
$min = $arr[0];
for ($i = 0; $i < count($arr); $i++ ){
    if($max < $arr[$i]){
        $max = $arr[$i];
        //echo $max . " : " . $arr[$i] . "<br>";
    }
    if($min > $arr[$i]){
        $min = $arr[$i];
        //echo $min . " : " . $arr[$i] . "<br>";

    }

}
echo "max : " . $max."<br>";
echo "min : " . $min ."<br>";

for ($i = $min ; $i <= $max ; $i ++ ){
    $count = 0;
    for ($j = 0 ; $j < count($arr); $j++){
        if( $arr[$j] == $i){
            $count = $count +1;
        }
    }
    if($count > 0 ){
        echo "Element ".$i ." count is :  " . $count ."<br>"; 
    }
}
?>
