<?php
/**
 * Created by PhpStorm.
 * User: AKCGa
 * Date: 04-10-2017
 * Time: 09:09
 */
$navn="Anders";

echo "hello World"."<br>";
for($i=1;$i<=10;$i++){
    echo  $i ."<br>";
}
for($i=1;$i<=10;$i++){
    echo  1*$i." ";
}
echo "<br>";
for($i=1;$i<=10;$i++){
    echo  2*$i." ";
}
echo "<br>";
for($i=1;$i<=10;$i++){
    echo  3*$i." ";
}

echo "<br>";
for($i=1;$i<=10;$i++){
    echo  4*$i." ";
}
echo "<br>";
for($i=1;$i<=10;$i++){
    echo  5*$i." ";
}
echo "<br>";
for($i=1;$i<=10;$i++){
    echo  6*$i." ";
}
echo "<br>";
for($i=1;$i<=10;$i++){
    echo  7*$i." ";
}
echo "<br>";
for($i=1;$i<=10;$i++){
    echo  8*$i." ";
}
echo "<br>";
for($i=1;$i<=10;$i++){
    echo  9*$i." ";
}
echo "<br>";
for($i=1;$i<=10;$i++){
    echo  10*$i." ";
}
echo "<br>";
print_r($_GET);
$name=$_GET['name'];
$pass=$_GET['password'];
echo "<br>".$name." ".$pass;
$users= array
(
    array("anders","1223"),
    array("svend","1234"),
    array("hans","1234")
);
echo "<br>".$users[0][0]." ".$users[0][1];
?>
<form method="get" action="HelloWorld.php">
   Name: <input type="text" id="name" ><br>
   Password: <input type="text" id="password"><br>
    <input type="submit"  >

</form>


