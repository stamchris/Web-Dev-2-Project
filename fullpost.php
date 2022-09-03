<?php
// connect


      try {
              $dsn = "sqlite:". dirname(__FILE__) . '/database.db';
              $pdo = new PDO($dsn);
              $pdo ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
              $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }

database = "SELECT sujet, f_name, description
        FROM posts WHERE id = ?";

    try{
        $stmt = $pdo->prepare($database);
        $stmt->bind_param("s", $_GET['q']);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($sujet, $f_name, $description);
        $stmt->fetch();
        $stmt->close();

        echo "<table>";
        echo "<tr>";
        echo "<th>CustomerID</th>";
        echo "<td>" . $sujet . "</td>";
        echo "<th>CompanyName</th>";
        echo "<td>" . $f_name . "</td>";
        echo "<th>ContactName</th>";
        echo "<td>" . $description . "</td>";
        echo "</tr>";
        echo "</table>";

      }catch (PDOException $e){
          var_dump("Didnd find the id");
      }

?>
