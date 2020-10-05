<html>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Enter Your letter
<input type="text" name="ch"><br/>
<input type="submit" value="SUBMIT">
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{	
$char=$_POST['ch'];

switch ($char) {
  case "a":
    echo $char." is a vowel";
    break;
  case "e":
    echo $char." is a vowel";
    break;
  case "i":
    echo $char." is a vowel";
    break;
  case "o":
    echo $char." is a vowel";
    break;
  case "u":
    echo $char." is a vowel";
    break;
  default:
    echo $char. " is a consonent";
}
}
?>	
