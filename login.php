<?php
include_once 'header.php'
?>
<div class="middlepart">
  <div class="wrapper">
    <form action="includes/login.inc.php" method="post">
      <h1>Login</h1>
      <div class="input-box">
        <input type="text" name="uid" placeholder="Username / password" required />
        <i class="bx bx-user"></i>
      </div>
      <div class="input-box">
        <input type="password" name="pwd" placeholder="Password" required />
        <i class="bx bx-lock"></i>
      </div>
      <div class="remember-forgot">
        <label> <input type="checkbox" />Remember me</label>
        <a href="#">Forgot password?</a>
      </div>
      <button name="submit" type="submit" class="btn">Login</button>
      <div class="register-link">
        <p>Don't have an account? <a href="signup.php">Register</a></p>
      </div>
    </form>
    <?php
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "none") {
        echo '<div class="error">Account created</div>';
      }else if ($_GET["error"] == "uidnotfound") {
        echo '<div class="error">Invalid username</div>';
      }else if ($_GET["error"] == "wronglogin") {
        echo '<div class="error">Password Wrong</div>';
      }
    }
    ?>
    
  </div>
</div>

<?php
include_once 'footer.php'
?>