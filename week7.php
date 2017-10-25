<?php

$hostname = "sql2.njit.edu"     ; 			
$username = "ak985" ;
$project  = "ak985" ;
$password = "dlC1nF3s" ;

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=$project", $username, $password);
    // set the PDO error mode to exception
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully<br>";

$s = "select*from accounts where id < 6";
($table = $dbh->query($s));
$n = $table->rowCount();
echo "The number of records retrieved are $n<br>";

echo "<table border='1'>";
echo "<tr>";
echo "<th>id</th>";
echo "<th>email</th>";
echo "<th>fname</th>";
echo "<th>lname</th>";
echo "<th>phone</th>";
echo "<th>birthday</th>";
echo "<th>gender</th>";
echo "<th>password</th>";
echo "</tr>";

while($r = $table->fetch(PDO::FETCH_ASSOC)){

$a=$r['id'];
$b=$r['email'];
$c=$r['fname'];
$d=$r['lname'];
$e=$r['phone'];
$f=$r['birthday'];
$g=$r['gender'];
$h=$r['password'];

echo "<tr>";
echo "<th>.$a.</th>";
echo "<th>.$b.</th>";
echo "<th>.$c.</th>";
echo "<th>.$d.</th>";
echo "<th>.$e.</th>";
echo "<th>.$f.</th>";
echo "<th>.$g.</th>";
echo "<th>.$h.</th>";
echo "</tr>";
}

echo "</table>";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
$dbh = null;    
?>
