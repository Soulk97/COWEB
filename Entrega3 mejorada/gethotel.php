<!DOCTYPE html>
<html>
  <head>
    <style>
      table {
          width: 100%;
          border-collapse: collapse;
      }

      table, td, th {
          border: 1px solid black;
          padding: 5px;
      }

      th {text-align: left;}
    </style>
  </head>

  <body>
    <?php
    $q = $_GET['q'];

    $con = mysqli_connect('localhost','root','','hoteles');
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_select_db($con,"hoteles");
    $sql="SELECT * FROM hoteles WHERE pais LIKE '$q%'";
    $result = mysqli_query($con,$sql);

    echo "<table>
    <tr>
    <th>Name</th>
    <th>City</th>
    <th>Country</th>
    </tr>";

    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row['nombre'] . "</td>";
        echo "<td>" . $row['ciudad'] . "</td>";
        echo "<td>" . $row['pais'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($con);
    ?>
  </body>
</html>
