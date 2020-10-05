<html>  
<body>  
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Enter any number:  
    <input type="number" name="number"><br><br>
    <input type="submit" value="SUBMIT">  
</form>  
</body>  
</html>  
<?php   
   if ($_SERVER["REQUEST_METHOD"] == "POST") 
   {  
        $number = $_POST['number'];   
       
        if(($number % 2) == 0){  
            echo "$number is an Even number";  
        }
	else{  
            echo "$number is a Odd number";  
        }  
    }  
?>









