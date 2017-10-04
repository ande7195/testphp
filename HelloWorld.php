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
$name = $_GET['name'];
$kodeord = $_GET['password'];
echo "<p>";
if ($name) echo "<br>Være hilset " . $name;
if ($kodeord) {
    echo "<br>Dit kodeord er  " . $kodeord;
    echo "<br>forbudt at sætte passwords ind i GET";
}


?>
<form method="post" action="HelloWorld.php" ><input type="text" id="Navn" name="name" value="Skriv dit navn...">
    <button>Klik mig</button>
</form>

<?php
print_r($_POST);
$name2 = $_POST['name'];
if ($name2) {
    echo "<br>Har modtaget name <b>" . $name2 . "</b> via POST metoden.";
}
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


