<?php
  include_once("../config/constants.php");
  include_once("../template/header.tpl.php");
?>

      <!-- Specific CSS for login page -->
      <link href="<?= CSS_ROOT; ?>/signin.css" rel="stylesheet">

      <form class="form-signin" role="form" action="<?= APPLICATION_ROOT; ?>/login/validation.php" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <button class="btn btn-sm btn-primary btn-block" type="submit">Sign in</button>
      </form>


<?php include_once("../template/footer.tpl.php"); ?>
