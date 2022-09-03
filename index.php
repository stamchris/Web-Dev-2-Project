<?php include "templates/header.php" ?>

  <div class="accueil">

      <div class="rech">

          <p> <?php echo _index_rech; ?> </p>

          <form class="search">
              <input type="text" name="search"
              placeholder="<?php echo _index_irech; ?>">
              <input type="submit" value="<?php echo _index_brech; ?>">
          </form>

      </div>
  </div>

  <h1 id="pmiddle"> <?php echo _index_post; ?> </h1>


        <section class="grid-container">
          <?php

            $post = $pdo -> query (" SELECT * FROM posts");

            while ($row = $post->fetch()) {
                echo "<article>";
                echo "<h2>". $row['sujet']."</h2>" ;
                echo "<h3>". _index_creator . $row['f_name']."</h3>";
                echo "<p>".$row['description']."</p>";
                echo "<button id='postid'>Open</button>";
                echo "</article>";
            }

          ?>

      </section>


<script src="assets/js/index.js"></script>

<?php include "templates/footer.php" ?>
</body>
</html>
