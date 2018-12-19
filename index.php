<?php
$lat=$lon=0;
include('data.php');
   if (isset($_GET['bus_location'])) 
   {
      // receive all input values from the form
      $busno = mysqli_real_escape_string($db, $_GET['busno']);
      $query = "SELECT lat, lon FROM bus_location WHERE bus_no='$busno'";
    if ($result=mysqli_query($db, $query))
          {
            // Fetch one and one row
          while ($row=mysqli_fetch_row($result))
            {
             
              echo $row[0]."\n";
               echo $row[1]."\n";
               $lat=$row[1];
               $lon=$row[0];
               $link="https://www.google.com/maps?q=".$row[0].",".$row[1];
               $link='<a href='.$link.'>click</a>';
               echo $link;
               echo " <script>myFunction(".$row[0].",".$row[1]."); </script>";
            }
          }

   }

?>
<html>
      <head>
        <link rel='stylesheet' type='text/css' href='tomtom/map.css'/> 
        <script src='tomtom/tomtom.min.js'></script>
        </head>
   <body>
        <div id="map" style='height:500px;width:500px'></div>
      <form action = "<?php $_PHP_SELF ?>" method = "GET">
         Bus No: <input type = "text" name = "busno" />
         <input type = "submit" name="bus_location"/>
      </form>
      <script type="text/javascript">
        var MAP=tomtom.L.map('map', {
        key: '1Ky0ISFMbG2D2eAPCagrJWQAQEFVN3yo'
    });
        
  
        MAP.setView([<?php echo $lon.",";echo $lat;?>],10);
        tomtom.L.marker([long,lat],{
            draggable : true
        }).addTo(MAP);
      
      </script>
   </body>
</html>


