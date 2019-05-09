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

    $con = mysqli_connect('localhost','root','','world');
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_select_db($con,"world");
    echo $q;
    $sql="SELECT * FROM Hotels WHERE name LIKE '$q%''";
    $result = mysqli_query($con,$sql);

    echo "<table>
    <tr>
    <th>Name</th>
    <th>Location</th>
    <th>Rating</th>
    <th>Price_range</th>
    </tr>";
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['location'] . "</td>";
        echo "<td>" . $row['rating'] . "</td>";
        echo "<td>" . $row['price_range'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($con);
    ?>
  </body>
</html>
