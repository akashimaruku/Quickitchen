<!DOCTYPE html>
<html>

<body>

    <form method="get">


        <input type="text" name="num1">
        <input type="text" name="num2">
        <input type="submit" name="enter">

        <select name="operation">
            <option>add</option>
            <option>subtract</option>
            <option>multiply</option>
            <option>divide</option>

        </select>
    </form>

    <p>The answer is:</p>
    <?php  

$number1=$_GET['num1'];
$number2=$_GET['num2'];
$operation=$_GET['operation'];
if(isset($_GET['enter']))
{
switch($operation){

case "add":
echo $number1 + $number2;
break;

case "subtract":
echo $number1 - $number2;
break;

case "multiply":
echo $number1 * $number2;
break;

case "divide":
echo $number1 / $number2;
break;

default:
echo "u dont type any number";

}
}
echo "<br>";
$i=1;
while($i<10){
    echo $i. "<br>" ;
$i++;
}

?>

</body>

</html>