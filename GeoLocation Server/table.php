<html><head><title>Mevcut Kayıt Tablosu</title></head><body>
<?php
$db_host = 'localhost';
$db_user = 'db_User';
$db_pwd = 'db_Password';
$database = 'db_Name';
$table = 'db_Table';

$db_conn = new  PDO('mysql:host=localhost;dbname=db_Name','db_User','db_Password');
$db_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// deprecated
if (!mysql_connect($db_host, $db_user, $db_pwd))
    die("Can't connect to database");

if (!mysql_select_db($database))
    die("Can't select database");

// sending query
$result = mysql_query("SELECT * FROM {$table}");
if (!$result) {
    die("Query to show fields from table failed");
}

$fields_num = mysql_num_fields($result);

echo "<center><h1>Konum Tablosu</h1></center>";
echo "<center><table style='width:100%>' border='2'><tr></center>";

// printing table headers
for($i=0; $i<$fields_num; $i++)
{
    $field = mysql_fetch_field($result);
    echo "<td>{$field->name}</td>";
}
echo "</tr>\n";
// printing table rows
while($row = mysql_fetch_row($result))
{
    echo "<tr>";

    // $row is array... foreach( .. ) puts every element
    // of $row to $cell variable
    foreach($row as $cell)
        echo "<td>$cell</td>";

    echo "</tr>\n";
}
mysql_free_result($result);
?>
</body></html>