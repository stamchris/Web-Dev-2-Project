<?php include "templates/header.php" ?>




  <div class="post">
    <form id="createPost" action="" method = "post">
         <h2> <?php echo _create_post; ?></h2>
         <p id="p1">
           <label for="sujet" class="plabel"><?php echo _sujet; ?></label>
           <input type="text" id="sujet" name="sujet">
         </p>
         <p id="p2">
           <label for="Fname" class="plabel"><?php echo _fname; ?></label>
           <input type="text" id="fname" name="fname" >
         </p>
         <p id="p3">
           <label for="Description" class="plabel"><?php echo _des; ?></label>
           <textarea id="description" name="description" placeholder=<?php echo _post_write; ?> ></textarea>
         </p>
         <p>
           <button type="submit" ><?php echo _post_submit; ?></button>
         </p>
    </form>
  </div>

<script src="assets/js/createPost.js"></script>

</body>
</html>
