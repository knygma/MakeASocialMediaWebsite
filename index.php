<?php
include("include/header.php");
include("include/classes/User.php");
//session_destroy();
?>
    <div class="user_details column">
      <a href="<?php echo $userLoggedIn;?>"> <img src="<?php echo $user['profile_pic'];?>" alt=""> </a>

      <div class="user_details_left_right">

      <a href="<?php echo $userLoggedIn;?>">
      <?php
      echo $user['first_name'] . " " . $user['last_name'];
      ?>
      </a>
      <?php
      echo "Posts: " . $user['num_posts'] . "<br>";
      echo "Likes " . $user['num_likes'];
      ?>
      </div>
    </div>

    <div class="main_column column">
      <form class="post_form" action="index.php" method="post">
        <textarea name="post_text" id="post_text" placeholder="Got something to say?"></textarea>
        <input type="submit" name="post" id="post_button" value="Post">
      </form>

      <?php

      $user_obj = new User($con, $userLoggedIn);
      echo $user_obj->getFirstAndLastName();
      ?>
    </div>
    </div>
  </body>
</html>
