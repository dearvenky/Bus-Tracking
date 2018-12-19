<?php
include('data.php');
   if (isset($_GET['bus_location'])) 
   {
      // receive all input values from the form
      $busno = mysqli_real_escape_string($db, $_GET['busno']);
      $lon = mysqli_real_escape_string($db, $_GET['lat']);
      $lat = mysqli_real_escape_string($db, $_GET['lon']);
     $query = "INSERT INTO `bus_location`(`bus_no`, `lat`, `lon`) VALUES ('$busno','$lon','$lat')";
     if(mysqli_query($db, $query))
     echo"Done!!!!!!!";
     else
      echo "fail";
      }
?>
<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "GET">
         Bus No: <input type = "text" name = "busno" />
         Latitude <input type = "text" name = "lat" />
        Longitude: <input type = "text" name = "lon" />
         <input type = "submit" name="bus_location"/>
      </form>
      
   </body>
</html>