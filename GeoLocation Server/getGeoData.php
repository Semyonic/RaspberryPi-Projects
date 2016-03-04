<?php
header('Content-type: text/plain; charset=utf-8');
$db_conn = new  PDO('mysql:host=localhost;dbname=db_Name','db_User','db_Password');
$db_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$message = "";
$Enlem = ($_POST['Enlem']);
$Boylam = ($_POST['Boylam']);
$Isabet = ($_POST['Isabet']);

$qry = $db_conn->prepare('INSERT INTO  Location(`Enlem`,`Boylam`,`Isabet`) VALUES (:Enlem,:Boylam,:Isabet)');
$qry->bindParam(':Enlem', $Enlem);
$qry->bindParam(':Boylam', $Boylam);
$qry->bindParam(':Isabet', $Isabet);
$qry->execute();

if ($qry) { $message = "success"; }
else { $message = "failed"; }

echo utf8_encode($message);
?>
