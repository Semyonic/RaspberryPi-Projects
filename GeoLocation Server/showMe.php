<?php
/**
 * *************************************************************************
 *  * Copyright (C) $user$, Inc - All Rights Reserved
 *  *
 *  * <omitted copyright blah>
 *  *
 *  * @file        com.maddyhome.idea.copyright.pattern.FileInfo@1366eca5$
 *  * @author      $user$
 *  * @site        <my website>
 *  * @date        $date$
 *  
 */

try{
    $db = new PDO("dbtype:host=localhost;dbname=db_Name;charset=utf8","username","password");
    /*Other Codes*/
}catch(PDOException  $e ){
    echo "Error: ".$e;
}


// Deprecated
//$conn = mysql_connect("localhost", "db_User", "db_Password") or die(mysql_error());
//mysql_select_db("db_Name") or die(mysql_error());
?>

    <html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <title>Son Görüldüğü Konumlar</title>
        <style type="text/css">
            body { font: normal 10pt Helvetica, Arial; }
            #map { width: 500px; height: 500px; border: 0px; padding: 0px; }
        </style>
        <script src="http://maps.google.com/maps/api/js?key=Your-GoogleMaps-API-Key" type="text/javascript"></script>
        <script type="text/javascript">
            var icon = new google.maps.MarkerImage("http://maps.google.com/mapfiles/ms/micons/blue.png",
                       new google.maps.Size(64, 64), new google.maps.Point(0, 0),
                       new google.maps.Point(16, 32));
            var center = null;
            var map = null;
            var currentPopup;
            var bounds = new google.maps.LatLngBounds();
            function addMarker(lat, lng, info) {
                var pt = new google.maps.LatLng(lat, lng);
                bounds.extend(pt);
                var marker = new google.maps.Marker({
                    position: pt,
                    icon: icon,
                    map: map
                });
                var popup = new google.maps.InfoWindow({
                    content: info,
                    maxWidth: 300
                });
                google.maps.event.addListener(marker, "click", function() {
                    if (currentPopup != null) {
                        currentPopup.close();
                        currentPopup = null;
                    }
                    popup.open(map, marker);
                    currentPopup = popup;
                });
                google.maps.event.addListener(popup, "closeclick", function() {
                    map.panTo(center);
                    currentPopup = null;
                });
            }
		function initMap() {
                map = new google.maps.Map(document.getElementById("map"), {
                    center: new google.maps.LatLng(0, 0),
                    zoom: 10,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    mapTypeControl: true,
                    mapTypeControlOptions: {
                        style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
                    },
                    navigationControl: true,
                    navigationControlOptions: {
                        style: google.maps.NavigationControlStyle.ZOOM_PAN
                    }
                });

<?php

            try{
                $db = new PDO("dbtype:host=localhost;dbname=db_Name;charset=utf8","username","password");
                $db->query("SELECT * FROM Location WHERE id=".$mysecuredata);
            }catch(PDOException  $e ){
                echo "Error: ".$e;
            }

            foreach ($conn->query($sql) as $row) {
                $id = $row['ID'];
                $lat = $row['Enlem'];
                $lon = ['Boylam'];
                $date = $row['Zaman'];
            }
?>
            
/*
 * Deprecated
$query = mysql_query("SELECT * FROM Location")or die(mysql_error());
while($row = mysql_fetch_array($query))
{
  $id = $row['ID'];
  $lat = $row['Enlem'];
  $lon = $row['Boylam'];
  $date = $row['Zaman'];
  echo("addMarker($lat, $lon, '<b>$id</b><br />$date');\n");
}
*/

 center = bounds.getCenter();
     map.fitBounds(bounds);

     }
     </script>
     </head>
<body onload="initMap()" style="margin:0px; border:0px; padding:0px;">
<br>
<br>
<br>
</br>
</br>
</br>
   <center> <div id="map"></div></center>
    </body>
    </html>
