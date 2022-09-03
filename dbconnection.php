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


    // Creation de la table
    try {
        var_dump("creation");
        $sql = " CREATE TABLE IF NOT EXISTS posts (
                  id INTEGER AUTO_INCREMENT PRIMARY KEY,
                  sujet VARCHAR(30) NOT NULL,
                  f_name VARCHAR(20) NOT NULL,
                  description TEXT NOT NULL)" ;

      $pdo->query($sql);
      var_dump("Table created successfully.");

    } catch (PDOException $e) {
        var_dump( "ERROR: Could not able to execute $sql " . $e->getMessage());


}


// insert

      $sujet = ($_POST['sujet']);
      $f_name = htmlspecialchars($_POST['fname']);
      $description = htmlspecialchars($_POST['description']);
      // Insertion des elements
       try{
          $stmt = $pdo->prepare("INSERT INTO posts (sujet, f_name, description) VALUES (:sujet, :f_name, :description);");
          $stmt ->bindValue(':sujet',$sujet);

          $stmt ->bindValue(':f_name',$f_name);

          $stmt ->bindValue(':description',$description);

          $stmt->execute();

          var_dump("Records inserted successfully.");

     } catch(PDOException $e){
          var_dump("ERROR: Could not able to execute : " . $e->getMessage());
}


?>
