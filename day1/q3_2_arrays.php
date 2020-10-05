<!DOCTYPE html>  
<html>  
<body>  
<?php  

$a = array(  
            array(3, 1),  
            array(9, 5)  
          );  
   
 
$b = array(  
              array(21, 1),  
             array(22, 2) 
              
           );  
   

$rows = count($a);  
$cols = count($a[0]);  
  
$sum = array(array());
  
echo "First array is <br>";
for($i = 0; $i < $rows; $i++){  
    for($j = 0; $j < $cols; $j++){  
       print($a[$i][$j] . " ");  
    }  
    print("<br>");  
}
echo "<br>";
echo "Second array is <br>";
for($i = 0; $i < $rows; $i++){  
    for($j = 0; $j < $cols; $j++){  
       print($b[$i][$j] . " ");  
    }  
    print("<br>");  
} 
echo "<br>";
for($i = 0; $i < $rows; $i++){  
    for($j = 0; $j < $cols; $j++){  
        $sum[$i][$j] = $a[$i][$j] + $b[$i][$j];  
    }  
}  
   
print("Addition of two matrices: <br>");  
for($i = 0; $i < $rows; $i++){  
    for($j = 0; $j < $cols; $j++){  
       print($sum[$i][$j] . " ");  
    }  
    print("<br>");  
}    
?>  
</body>  
</html>