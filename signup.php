<?php
include_once 'header.php'
?>
<div class="middlepart">
  <div class="wrapper">
    <form action="includes/signup.inc.php" method="post">
      <h1>Register</h1>
      <div class="input-box">
        <input type="text" name="name" placeholder="Name" required />
        <i class='bx bxs-id-card'></i>
      </div>
      <div class="input-box">
        <input type="text" name="email" placeholder="Email" required />
        <i class='bx bx-envelope'></i>
      </div>
      <div class="input-box">
        <input type="text" name="uid" placeholder="Username" required />
        <i class="bx bx-user"></i>
      </div>
      <div class="input-box">
        <input type="password" name="pwd" placeholder="Password" required />
        <i class="bx bx-lock"></i>
      </div>
      <div class="input-box">
        <input type="password" name="pwdrepeat" placeholder="Repeat Password" required />
        <i class="bx bx-lock"></i>
      </div>
      <button name="submit" type="submit" class="btn">Register</button>
      <div class="register-link">
        <p>Already have an account? <a href="login.php">Login</a></p>
      </div>
    </form>

    <?php
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        // echo '<script>alert("fill all inputs")</script>';                             using js alert
        echo '<div class="error">fill all the fields</div>';
      } else if ($_GET["error"] == "invalidUid") {
        echo '<div class="error">invalid user name</div>';
      } else if ($_GET["error"] == "invalidEmail") {
        echo '<div class="error">invalid email</div>';
      } else if ($_GET["error"] == "pwdnotmatch") {
        echo '<div class="error">password don\'t match</div>';
      } else if ($_GET["error"] == "thisOneTaken") {
        echo '<div class="error"> already taken</div>';
      } else if ($_GET["error"] == "stmtfailed") {
        echo '<div class="error"> something went wrong!</div>';
      }
    }
    ?>

  </div>
</div>

<?php
include_once 'footer.php'
?>