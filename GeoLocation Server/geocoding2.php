<?php

$db_conn = new  PDO('mysql:host=localhost;dbname=db_Name','db_User','db_Password');
$db_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Set default location
$lat_d = 40.709;
$long_d = -74.007;

$qry = $db_conn->prepare('INSERT INTO  Location(`Enlem`,`Boylam`,`Isabet`) VALUES (:Enlem,:Boylam,:Isabet)');

// mimic a result array from MySQL
$result = array(array('latitude'=>$lat_d,'longitude'=>$long_d));
?>
<!doctype html>
<html>
    <head>
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript">
        var map;
        function initialize() {
            // Set static latitude, longitude value
            var latlng = new google.maps.LatLng(<?php echo $lat_d; ?>, <?php echo $long_d; ?>);
            // Set map options
            var myOptions = {
                zoom: 5,
                center: latlng,
                panControl: true,
                zoomControl: true,
                scaleControl: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            // Create map object with options
            map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
        <?php
            // uncomment the 2 lines below to get real data from the db
            $qry->bindParam(':Enlem', $Enlem);
            $qry->bindParam(':Boylam', $Boylam);
            $qry->bindParam(':Isabet', $Isabet);
            $qry->execute();
            $qry->execute("SELECT Enlem,Boylam FROM Location");

            /*Deprecated
            while ($row = mysql_fetch_array($result))
            	 echo "addMarker(new google.maps.LatLng(".$row['Enlem'].", ".$row['Boylam']."), map);";
        ?>
        }
            */

            try {
                $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

                $sql = 'SELECT lastname, firstname, jobtitle FROM employees WHERE lastname LIKE ?';

                $q = $conn->prepare($sql);
                $q->execute(array('%son'));
                $q->setFetchMode(PDO::FETCH_ASSOC);

                while ($r = $q->fetch()) {
                    echo sprintf('%s <br/>', $r['lastname']);
                }
            } catch (PDOException $pe) {
                die("Could not connect to the database $dbname :" . $pe->getMessage());
            }

        function addMarker(latLng, map) {
            var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                draggable: false,
                animation: google.maps.Animation.DROP
            });
            return marker;
        }
        </script>
    </head>
    <body onload="initialize()">
        <div style="float:left; position:relative; width:550px; border:0px #000 solid;">
            <div id="map_canvas" style="width:550px;height:400px;border:solid black 1px;"></div>
        </div>
    </body>
</html>
