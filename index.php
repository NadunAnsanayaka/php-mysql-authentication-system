  <?php
  include_once 'header.php'
  ?>


  <div class="middlepart_index">

    <h1 class="welcome">Hello
      <?php
      if (isset($_SESSION["username"])) {
        echo $_SESSION["username"] . ' !';
      }

      ?>
    </h1>
    <h3>Welcome to my Website</h3>
  </div>

  <?php
  include_once 'footer.php'
  ?>