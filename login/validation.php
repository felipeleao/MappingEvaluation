<?
  /*
  *  Security system implemented based on
  *  http://blog.thiagobelem.net/criando-um-sistema-de-login-com-php-e-mysql/
  *
  */

  // icludes the file with the security system
  include_once("../config/constants.php");
  include_once("../login/security.php");

  // checks if a form has been posted
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Saves two variables with the data send by the form
    // OBS: does a isset() check to see if the data has actually sent
    $usuario = (isset($_POST['username'])) ? $_POST['username'] : '';
    $senha = (isset($_POST['password'])) ? $_POST['password'] : '';


    // validate the sent data with a function from security.php
    if (validateUser($usuario, $senha) == true) {
      //Everything ok, redirects to evaluation page
      header("Location: ".APPLICATION_ROOT."/evaluate");

    } else {
      // User and/or password does not check, send back to login page
      expelVisitor();
    }

  }
?>
