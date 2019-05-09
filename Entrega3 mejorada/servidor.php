<?php

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

?>
<li> Username: <?= $username ?>,
    Email: <?= $email ?>
</li>
<?php

$servername = "localhost";
$dbname = "hoteles";

try {

  $conn = new PDO("mysql:host=$servername;dbname=$dbname", "root", "");

  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "CREATE TABLE Hotels (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(30),
  location VARCHAR(30),
  rating INT(1) UNSIGNED,
  price_range VARCHAR(50),
  reg_date TIMESTAMP
  )";

  $conn->beginTransaction();

  $sql = "INSERT INTO hoteles (nombre, ciudad, pais)
          VALUES ('Akureyri Hotel', 'Akureyri' ,'Iceland')";
  $sql = "INSERT INTO hoteles (nombre, ciudad, pais)
          VALUES ('Dukes Hotel', 'Dubai', 'United Arab Emirates')";
  $sql = "INSERT INTO hoteles (nombre, ciudad, pais)
          VALUES ('Pannonia Tower', 'Parndorf', 'Austria')";

  $conn->commit();



  $conn = mysqli_connect("localhost", "root", "", "world");

  $rows = $conn->query("SELECT name FROM countries WHERE name LIKE 'Hotel%' ORDER BY name");

  foreach($rows as $row){
    ?>
    <li> Code: <?= $row["code"] ?>,
        Name: <?= $row["name"] ?>,
        Population: <?= $row["population"] ?>
    </li>
    <?php
  }


} catch(PDOException $e){
  $conn->rollback();
  echo $sql . "<br>" . $e->getMessage();
}
  $conn->close();

?>
